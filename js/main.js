/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 *
 * Open source under the BSD License.
 *
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list
 * of conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 *
 * Neither the name of the author nor the names of contributors may be used to endorse
 * or promote products derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 *
*/

// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];

jQuery.extend( jQuery.easing,
{
	def: 'easeOutQuad',
	swing: function (x, t, b, c, d) {
		//alert(jQuery.easing.default);
		return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
	},
	easeInQuad: function (x, t, b, c, d) {
		return c*(t/=d)*t + b;
	},
	easeOutQuad: function (x, t, b, c, d) {
		return -c *(t/=d)*(t-2) + b;
	},
	easeInOutQuad: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t + b;
		return -c/2 * ((--t)*(t-2) - 1) + b;
	},
	easeInCubic: function (x, t, b, c, d) {
		return c*(t/=d)*t*t + b;
	},
	easeOutCubic: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t + 1) + b;
	},
	easeInOutCubic: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t + b;
		return c/2*((t-=2)*t*t + 2) + b;
	},
	easeInQuart: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t + b;
	},
	easeOutQuart: function (x, t, b, c, d) {
		return -c * ((t=t/d-1)*t*t*t - 1) + b;
	},
	easeInOutQuart: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
		return -c/2 * ((t-=2)*t*t*t - 2) + b;
	},
	easeInQuint: function (x, t, b, c, d) {
		return c*(t/=d)*t*t*t*t + b;
	},
	easeOutQuint: function (x, t, b, c, d) {
		return c*((t=t/d-1)*t*t*t*t + 1) + b;
	},
	easeInOutQuint: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
		return c/2*((t-=2)*t*t*t*t + 2) + b;
	},
	easeInSine: function (x, t, b, c, d) {
		return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
	},
	easeOutSine: function (x, t, b, c, d) {
		return c * Math.sin(t/d * (Math.PI/2)) + b;
	},
	easeInOutSine: function (x, t, b, c, d) {
		return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
	},
	easeInExpo: function (x, t, b, c, d) {
		return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
	},
	easeOutExpo: function (x, t, b, c, d) {
		return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
	},
	easeInOutExpo: function (x, t, b, c, d) {
		if (t==0) return b;
		if (t==d) return b+c;
		if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
		return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
	},
	easeInCirc: function (x, t, b, c, d) {
		return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
	},
	easeOutCirc: function (x, t, b, c, d) {
		return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
	},
	easeInOutCirc: function (x, t, b, c, d) {
		if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
		return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
	},
	easeInElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
	},
	easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
	},
	easeInOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
		return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
	},
	easeInBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*(t/=d)*t*((s+1)*t - s) + b;
	},
	easeOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
	},
	easeInOutBack: function (x, t, b, c, d, s) {
		if (s == undefined) s = 1.70158;
		if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
		return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
	},
	easeInBounce: function (x, t, b, c, d) {
		return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
	},
	easeOutBounce: function (x, t, b, c, d) {
		if ((t/=d) < (1/2.75)) {
			return c*(7.5625*t*t) + b;
		} else if (t < (2/2.75)) {
			return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
		} else if (t < (2.5/2.75)) {
			return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
		} else {
			return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
		}
	},
	easeInOutBounce: function (x, t, b, c, d) {
		if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
		return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
	}
});


(function (root, $) {
  var JGUI = function () {};

  function scrollNav (elem) {
    this.links = $(elem);

    this.getScrollDistance = function (item) {
      return item.offset().top;
    };

    this.scroll = function (distance) {
      $("html, body").animate({scrollTop: distance}, 600, "easeOutQuint");
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
      $("body").append(this.overlay);
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
