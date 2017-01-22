<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JonathanRayGarcia.com | Front End Web Developer</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <style>
      @import url('https://fonts.googleapis.com/css?family=Pacifico|Roboto+Condensed:300,400,700');
      html{
        font-size: 62.5%;
      }

      *{
        font-style: normal;
        padding: 0;
        margin: 0;
        text-decoration:none;
        border: none;
        box-sizing: border-box;
        list-style-type: none;
        font-family: 'Roboto Condensed', sans-serif;
        color: rgb(69, 69, 69);
        font-size: 1.4rem;
      }

      em{
        color:
      }

      body{
        background: white;
      }

      h1 { font-size: 2.4rem; } /* =24px */
      p  { font-size: 2rem; } /* =14px */
      li { font-size: 1.4rem; } /* =14px? */

      h2{
        font-size: 3.2rem;
      }
      h3{
        font-size: 2.4rem;
        padding-bottom: 1rem;
      }

      header{
        background: white;
        width: 100%;
        height: 8rem;
        box-shadow: 0 0 2px rgba(0,0,0,0.2);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10;
      }

      header a{
        font-weight: normal;
        font-size: 2.4rem;
        font-family: 'Pacifico', cursive;
      }
      header #logo{
        clear: both;
        padding: 0 0 0 10rem;
        float: left;
      }

      header h1{
        float: left;
        line-height: 8rem;
        text-transform: capitalize;;
      }
      header #logo a{
        color: rgba(251,50,56, 1);
      }

      header .menu{
        line-height: 8rem;
        float: right;
        padding-right: 10rem;
      }
      .menu ul{
        width: 100%;
        text-align: center;
      }
      .menu li{
        display: inline-block;
        padding: 0 2rem;
      }
      .menu li a{
        text-transform: uppercase;
        text-decoration: none;
        font-size: 1.6rem;
        font-family: sans-serif;
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
      }

      section.body-section{
        width: 100%;
        min-height: 100vh;
      }
      section.body-section:nth-child(even){
        background: rgba(232, 232, 232, 0.3);
        box-shadow: inset 0 0 140px -30px rgba(0,0,0,0.2);
      }
      section.body-section:after{
        clear: both;
        content: '';
        display: block;
      }
      section .section-container:after{
        clear: both;
        content: '';
        display: block;
      }

      section .section-container {
        width: 100%;
        max-width: 102.4rem;
        padding: 10rem;
        margin: auto;
      }
      section.body-section p{
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: 100;
        line-height: 1.6;
        padding-bottom: 2rem;
      }
      section.body-section h2{
        padding-bottom: 4rem;
        line-height: 1.6;
      }
      #introduction h1{
        font-size: 4.6rem;
        margin-bottom: 2rem;
      }

      #introduction .section-container{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }
      section.body-section{
        border-bottom: calc(2vh - 1px) solid rgba(251,50,56, 1);
        box-shadow: 0 0 1px 0 rgba(0,0,0,0.2);
      }
      #about li.title{
        font-size: 2rem;
        font-weight: normal;
        padding-bottom: 1rem;
        color: #fb3238;
      }
      #about li{
        font-size: 2rem;
        padding: 0.5rem;
        border-bottom: 1px solid rgba(251,50,56, 0.3);
      }

      #about ul{
        width: 33%;
        float: left;
        font-weight: lighter;
        padding-right: 10%;
      }
      footer{
        padding: 5rem 0;
        background:rgba(251,50,56, 1);
      }
      footer .menu a{
        color: white;
        font-weight: 100;
      }

      .portfolio-item:after{
        display: block;
        clear: both;
        content: "";
      }

      .portfolio-item {
        margin-bottom: 4rem;
        padding-bottom: 4rem;
        border-bottom: 2px inset rgba(251,50,56, 0.5);
      }
      .portfolio-item:last-child{
        border: none;
      }
      .portfolio-item i{
        font-style: italic;
        font-weight: bold;
      }
      #portfolio .main-image{
        display: inline-block;
        width: 26rem;
        float: left;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px -4px rgba(0,0,0,0.3);
        overflow:hidden;
        transition: all 0.2s ease-in-out;
      }
      #portfolio .main-image:hover{
        transform: scale(1.1);
        border-radius: 1.5rem;
        box-shadow: 0 0 10px -4px rgba(251,50,56, 0.5);
        transition: all 0.2s ease-in-out;
      }
      #portfolio .main-image img{
        width: 100%;
        display: block;
      }
      #portfolio .portfolio-info{
        display: inline-block;
        width: 50rem;
        float: right;
      }

      #contact a{
        font-size: 2.6rem;
        color: rgba(251,50,56, 1);
      }
      @media only screen and (max-width: 768px) {
        html{
          font-size: 50%;
        }
        header {
          height: 10rem;
        }
        header #logo{
          float: none;
          padding: 0;
        }
        header h1{
          width: 100%;
          text-align: center;
          line-height: 5rem;
        }
        header .menu{
          line-height: 5rem;
          float: none;
          padding: 0;
        }
        section .section-container{
          padding: 12.5rem 2.5rem 2.5rem 2.5rem;
        }

        #introduction .section-container{
          position: relative;
          left: auto;
          top: auto;
          transform: translate(0%, 0%);
        }

        #about ul{
          width: 100%;
          margin-bottom: 2rem;
        }

        #portfolio .main-image{
          display: block;
          width: 100%;
        }
        #portfolio .main-image img{
          width: 100%;
          max-width: 100%;
        }

        #portfolio .main-image, #portfolio .portfolio-info{
          float: none;
        }
      }

      #lightbox{
        width: 100%;
        height: calc(100% - 8rem);
        display: block;
        position: fixed;
        background: rgba(0,0,0,0.3);
        top: 8rem;
        left: 0;
        box-shadow: inset 0 0 100px 0px rgba(0,0,0, 0.8);
      }

      </style>
  </head>
  <body>
    <header>
      <section id="logo">
        <h1><a href="#introduction">Jonathan Ray Garcia</a></h1>
      </section>
      <section class="menu">
        <ul>
          <li><a href="#about">about</a></li>
          <li><a href="#portfolio">portfolio</a></li>
          <li><a href="#contact">contact</a></li>
        </ul>
      </section>
    </header>


    <section id="introduction" class="body-section">
      <div class="section-container">
        <h1>HI, I'm Jonathan</h1>
        <h2>I'm focused on making the web world better.  With javascript, html, and css, what isn't possible. After almost 10 years of experience in the field, I'm getting a firm grasp on possiblities and just like a kid would say, never say impossible.</h2>
        <p>Web is my passion, HTML/CSS/Javascript are my tools. Using frameworks is fun, but architecting beautiful and original layouts is the best. </p>
        <p>The best part of my craft is taking an amazing design and make it come alive.  To let others see what I see just looking at a static layout is all the gratification I need.</p>
      </div>
    </section>

    <section id="about" class="body-section">
      <div class="section-container">
        <h2>What Am I Good At Anyways?!</h2>
        <p>HTML/CSS use to be my bread and butter. Then carousels were where I dominated.  Nowadays, I'm am all about challenge. If I see something I've never done I need to figure it out.  Curiosity and passion are what have created who I am today</p>
        <p>It's not easy to tell yourself you don't know everything about your craft.  But the moment you do, it opens you up to all you have yet to learn.</p>
        <p>In practice knowledge is nice but experience is king. Until you deal with it day in and day out, you don't know the additional thought process that goes into each new product or feature.  The obviousness and requirement of responsiveness all the time sometimes slips past the less experienced.  After almost 10 years of web focus, I'm always trying to break away from what is standard, but what is standard is what has made me who I am.</p>
        <h3>What I Know And Use</h3>
        <ul>
          <li class="title">Scripting</li>
          <li>Javascript</li>
          <li>jQuery</li>
          <li>Backbone</li>
          <li>Underscore/LoDash</li>
          <li>Gulp/Grunt</li>
          <li>Node</li>
          <li>php/java/python</li>
        </ul>
        <ul>
          <li class="title">Layout</li>
          <li>HTML5</li>
          <li>CSS3</li>
          <li>Sass</li>
          <li>Less</li>
          <li>Responsive Design</li>
          <li>Mobile UI</li>
        </ul>
        <ul>
          <li class="title">Programs I Use</li>
          <li>Atom</li>
          <li>Sketch</li>
          <li>Git</li>
          <li>Photoshop</li>
          <li>iTerm2</li>
          <li>Atlassian Suite</li>
          <li>OSX</li>
        </ul>
      </div>
    </section>

    <section id="portfolio" class="body-section">
      <div class="section-container">
        <h2>Some Things I've Worked On</h2>
        <div id="portfolio-container">
          <div class="portfolio-item">
            <a href="#" data-type="disney" class="main-image"><img src="images/logos/disney.jpg"/></a>
            <div class="portfolio-info">
              <h3>Disney Consumer Products &amp; Interactive Media</h3>
              <p><i>Current Role:</i> Lead Developer in charge of technology decisions, code style, and dev tool creation.</p>
            </div>
          </div>
          <div class="portfolio-item">
            <a href="#" data-company="nfl" class="main-image"><img src="images/logos/nfl.jpg"/></a>
            <div class="portfolio-info">
              <h3>National Football League</h3>
              <p>Senior Front End Engineer, dealt with an ever evolving array of products and features.  Taking an updating from an outdated framework to make hight quality and visually stunning pieces.</p>
            </div>
          </div>
          <div class="portfolio-item">
            <a href="#" data-company="mgm" class="main-image"><img src="images/logos/mgm.jpg"/></a>
            <div class="portfolio-info">
              <h3>MetroGoldwyn-Mayer</h3>
              <p>Sole Front End Developer in charge of redesigns of both MGM.com and Stargate.MGM.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="body-section">
      <div class="section-container">
        <h2>Get A Hold Of Me</h2>
        <p>If you like what you've seen so far, please reach out and get in touch.</p>
        <p> LinkedIn is the most convenient way to get in touch with me.</p>
        <a href="https://www.linkedin.com/in/jonathan-ray-garcia" target="_blank">I'm On LinkedIn</a>
      </div>
    </section>
    <footer>
      <section class="menu">
        <ul>
          <li><a href="#">about</a></li>
          <li><a href="#">portfolio</a></li>
          <li><a href="#">contact</a></li>
        </ul>
      </section>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script>
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
          var scrollToID = elem.attr("href")
          var scrollToItem = $(scrollToID);
          var scrollToDistance = this.getScrollDistance(scrollToItem);
          this.scroll(scrollToDistance);
        }

        this.links.on("click", this.navigate.bind(this));
      }


      function lightBox (elem, images) {
        this.target = $(elem);
        this.overlayAvailable = false;
        this.images = images;
        this.overlay = $([
          '<div id="lightbox">',
            '<div id="lightbox-content"></div>',
          '</div>'
        ].join());
        this.overlayContent = this.overlay.find("#lightbox-content");

        this.overlay.css("display", "none");

        this.closeOverlay = function () {
          this.overlay.fadeOut(250, this.removeContent.bind(this));
        }

        this.bindEvents = function () {
          this.overlay.on("click", this.closeOverlay.bind(this));
        }

        this.removeContent = function () {
          this.overlayContent.empty();;
        }

        this.openOverlay = function () {
          if (this.overlayAvailable) {
            this.overlay.fadeIn();
            return;
          }
          $('body').append(this.overlay);
          this.overlayAvailable = true;
          this.openOverlay();
        }

        this.imageLoaded = function () {
          debugger
        }

        this.loadImage = function (imageIndex, imageList) {
          debugger
          var currentImage = imageList[imageIndex];

          var newImg = $("<img/>");
          newImg.load(currentImage, this.imageLoaded.bind(this));
          //newImg.attr("src", currentImage);
        }

        this.openLightBox = function (event) {
          event.preventDefault();

          var elem = $(event.currentTarget);
          var type = elem.attr("data-type");
          var imageList = this.images[type];
          this.imageOn = 0;
          this.openOverlay();
          this.bindEvents();
          this.loadImage(this.imageOn, imageList);
        }

        this.target.on("click", this.openLightBox.bind(this));
      }

      JGUI.prototype.scrollNav = scrollNav;
      JGUI.prototype.lightBox = lightBox;
      root.JGUI = new JGUI();
    }(window, jQuery))

      JGUI.scrollNav('.menu a, #logo a');
      JGUI.lightBox('.main-image', {
        "disney": ["images/disney/disney-life-home.jpg", "images/disney/disney-life-livetv"],
        "nfl": ["images/nfl/nfl-home.jpg", "images/nfl/nfl-video.jpg", "images/nfl/nfl-rtsb.jpg", "images/nfl/nfl-scores.jpg", "images/nfl/nfl-home-mobile.jpg", "images/nfl/nfl-mobile-teams.jpg", "images/nfl/nfl-mobile-players.jpg"],
        "mgm": ["images/mgm/stargate-home.jpg", "images/mgm/stargate-show.jpg", "images/mgm/stargate-characters.jpg", "images/mgm/stargate-lightbox.jpg"]
      });
    </script>
  </body>
</html>
