(function (root, $) {
  var JGUI = function () {};

  function scrollNav (elem) {
    this.links = $(elem);

    this.getScrollDistance = function (item) {
      return item.offset().top;
    };

    this.scroll = function (distance) {
      $("html, body").animate({scrollTop: distance});
    };

    this.navigate = function (event) {
      event.preventDefault();
      var elem = $(event.currentTarget);
      var scrollToID = elem.attr("href");
      var scrollToItem = $(scrollToID);
      var scrollToDistance = this.getScrollDistance(scrollToItem);
      this.scroll(scrollToDistance);
    };

    this.links.on("click", this.navigate.bind(this));
  }


  function lightBox (elem, images) {
    this.target = $(elem);
    this.overlayAvailable = false;
    this.images = images;
    this.overlay = $([
      "<div id='lightbox'>",
        "<div id='lightbox-content'></div>",
        "<a href='#' id='lightbox-next'>&raquo;</a>",
        "<a href='#' id='lightbox-back'>&laquo;</a>",
        "<div id='lightbox-loader'><img src='images/loader.gif'></div>",
      "</div>"
    ].join(""));
    this.overlayContent = this.overlay.find("#lightbox-content");
    this.nextBtn = this.overlay.find("#lightbox-next");
    this.backBtn = this.overlay.find("#lightbox-back");
    this.backBtn.hide();
    this.imageOn = null;
    this.overlay.css("display", "none");

    this.closeOverlay = function () {
      this.overlay.fadeOut(250, this.removeContent.bind(this));
    };

    this.checkArrows = function () {
      if (this.imageOn === 0) {
        this.backBtn.hide();
        this.nextBtn.show();
      } else if (this.imageOn >= this.currentImageList.length - 1) {
        this.nextBtn.hide();
        this.backBtn.show();
      } else {
        this.backBtn.show();
        this.nextBtn.show();
      }
    };

    this.nextClicked = function (event) {
      event.preventDefault();
      if (this.imageOn + 1 < this.currentImageList.length) {
        this.imageOn += 1;
        this.startImageLoad();
      }
      this.checkArrows();
    };

    this.backClicked = function (event) {
      event.preventDefault();
      if (this.imageOn > 0) {
        this.imageOn -=1;
        this.startImageLoad();
      }
      this.checkArrows();
    };

    this.overlayClick = function (event) {
      event.preventDefault();
      if (event.target !== event.currentTarget) {
        return;
      }
      this.closeOverlay();
    };

    this.bindEvents = function () {
      this.overlay.on("click", this.overlayClick.bind(this));
      this.nextBtn.on("click", this.nextClicked.bind(this));
      this.backBtn.on("click", this.backClicked.bind(this));
    };

    this.removeContent = function () {
      this.overlayContent.empty();
    };

    this.openOverlay = function () {
      if (this.overlayAvailable) {
        this.overlay.fadeIn();
        return;
      }
      $('body').append(this.overlay);
      this.overlayAvailable = true;
      this.bindEvents();
      this.openOverlay();
    };

    this.imageLoaded = function (newImg, response, status, xhr) {
      newImg.trigger("image-loaded");
    };

    this.getDimensions = function (img) {
      var width = img[0].naturalWidth;
      var height = img[0].naturalHeight;
      var ratio = width / height;
      var windowWidth = this.overlay.width();
      var windowHeight = this.overlay.height();
      var windowRatio = windowWidth / windowHeight;

      if (windowRatio > ratio) {
        height = windowHeight * 0.8;
        width = height * ratio;
      } else {
        width = windowWidth * 0.8;
        height = width / ratio;
      }

      return {width: width, height: height};
    };

    this.addImageToLightBox = function (newImg, currentImage) {
      var dimensions;
      this.overlayContent.empty().append(newImg);

      dimensions = this.getDimensions(newImg);

      if (dimensions.width > dimensions.height) {
        this.overlayContent.animate({"left": "50%", "opacity": "1", "width": dimensions.width + "px", "height": dimensions.height});
      } else {
        this.overlayContent.animate({"left": "50%", "opacity": "1", "height": dimensions.height + "px", "width": dimensions.width});
      }

    };

    this.startImageLoad = function () {
      this.overlayContent.animate({"left": "-1000px", "opacity": "0"}, 200, function () {
        this.overlayContent.css("left", "6000px");
        this.overlayContent.empty();
        this.loadImage();
      }.bind(this));
    };

    this.loadImage = function (imageIndex, imageList) {
        imageIndex = imageIndex || this.imageOn;
        imageList = imageList || this.currentImageList;
        var currentImage = "http://jonathanraygarcia.com/" + this.currentImageList[imageIndex];

        var newImg = $("<img/>");
        newImg.attr("src", currentImage);
        newImg.on("image-loaded", this.addImageToLightBox.bind(this, newImg, currentImage));
        newImg.load(currentImage, this.imageLoaded.bind(this, newImg));
    };

    this.openLightBox = function (event) {
      event.preventDefault();

      var elem = $(event.currentTarget);
      var type = elem.attr("data-type");
      var imageList = this.images[type];
      this.currentImageList = imageList;
      this.imageOn = 0;
      this.checkArrows();
      this.startImageLoad();
      this.openOverlay();
    };

    this.target.on("click", this.openLightBox.bind(this));
  }

  JGUI.prototype.scrollNav = scrollNav;
  JGUI.prototype.lightBox = lightBox;
  root.JGUI = new JGUI();
}(window, jQuery));
