<?
require_once __DIR__.'../../vendor/autoload.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JonathanRayGarcia.com | Front End Web Developer</title>
    <meta name="description" content="Jonathan Ray Garcia Front End Web Developer. I focus on Javascript, css, and html"/>
    <meta name="keywords" content"javascript, css, html, Jonathan Garcia, Jonathan Ray Garcia"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
    <link rel="canonical" href="http://www.jonathanraygarcia.com">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
  </head>
  <body>
    <header>
      <section id="logo">
        <h1><a href="/">Jonathan Ray Garcia</a></h1>
      </section>
      <section class="menu">
        <ul>
          <li>Blog</li>
        </ul>
      </section>
    </header>


    <section id="introduction" class="body-section">
      <div class="section-container">
        <?
        $obj_store = new GDS\Store('Book');
        foreach($obj_store->fetchAll() as $obj_book) {
            echo "Title: {$obj_book->title}, ISBN: {$obj_book->isbn} <br />", PHP_EOL;
        }
        ?>
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
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-91067989-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
