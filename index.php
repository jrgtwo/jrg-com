<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JonathanRayGarcia.com | Front End Web Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <link rel="stylesheet" type="text/css" href="/css/main.css">
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
        <h1>HI, I'm Jonathan Garcia</h1>
        <h2>I'm focused on making the web world better.  With javascript, html, and css, what isn't possible. After almost 10 years of experience in the field, I'm getting a firm grasp on possiblities and just like a kid would say, never say impossible.</h2>
        <!--p>Web is my passion, HTML/CSS/Javascript are my tools. Using frameworks is fun, but architecting beautiful and original layouts is the best. </p>
        <p>The best part of my craft is taking an amazing design and make it come alive.  To let others see what I see just looking at a static layout is all the gratification I need.</p-->
      </div>
    </section>

    <section id="about" class="body-section">
      <div class="section-container">
        <h2>What Am I Good At Anyways?!</h2>
        <p>It's not easy to tell yourself you don't know everything about your craft.  But the moment you do, it opens you up to all you have yet to learn.</p>
        <p>In practice, knowledge is nice but experience is king. Until you deal with something day in and day out, you don't know the additional thought process that goes into each new product or feature.  The obviousness and requirement of responsiveness slips past the less experienced.  After almost 10 years of web focus, I'm always trying to break away from what is standard, but what is standard is what has made me who I am.</p>
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
            <div href="#" data-type="disney" class="main-image"><img src="images/logos/disney.jpg"/></div>
            <div class="portfolio-info">
              <h3>Disney Consumer Products &amp; Interactive Media</h3>
              <p><i>Current Role:</i> Lead Developer in charge of technology decisions, code style, and dev tool creation for Disney Life.</p>
            </div>
          </div>
          <div class="portfolio-item">
            <div href="#" data-type="nfl" class="main-image"><img src="images/logos/nfl.jpg"/></div>
            <div class="portfolio-info">
              <h3>National Football League</h3>
              <p>Senior Front End Engineer, dealt with an ever evolving array of products and features.  Taking and updating an outdated Backend and Frontend framework to make high quality and visually stunning pieces.</p>
            </div>
          </div>
          <div class="portfolio-item">
            <div href="#" data-type="mgm" class="main-image"><img src="images/logos/mgm.jpg"/></div>
            <div class="portfolio-info">
              <h3>Metro-Goldwyn-Mayer</h3>
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
          <li><a href="#about">about</a></li>
          <li><a href="#portfolio">portfolio</a></li>
          <li><a href="#contact">contact</a></li>
        </ul>
      </section>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
      JGUI.scrollNav('.menu a, #logo a');
      // JGUI.lightBox('.main-image', {
      //   "disney": ["images/disney/disney-life-home.jpg", "images/disney/disney-life-livetv.jpg"],
      //   "nfl": ["images/nfl/nfl-home.jpg", "images/nfl/nfl-video.jpg", "images/nfl/nfl-rtsb.jpg", "images/nfl/nfl-scores.jpg", "images/nfl/nfl-mobile-home.jpg", "images/nfl/nfl-mobile-teams.jpg", "images/nfl/nfl-mobile-players.jpg"],
      //   "mgm": ["images/mgm/stargate-home.jpg", "images/mgm/stargate-show.jpg", "images/mgm/stargate-characters.jpg", "images/mgm/stargate-lightbox.jpg"]
      // });
    </script>
  </body>
</html>
