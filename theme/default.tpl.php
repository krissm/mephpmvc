<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?=$title?></title>
  <meta name="description" content="<?=$meta_description?>">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/mystyle.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.5.0.min.js"></script>
  <style>
    <?=$style?>
  </style>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <header id="above">
    <?=getHTMLForKmomNavlinks($navkmom, "nav-kmom")?>
  </header>

  <header id="header">
    <div id="banner">
      <a href="index.php">
        <img class="site-logo" src="img/mvclogo.jpg" alt="logo" width="120" height="120" />
      </a>
      <p class="site-title">PHPmvc</p>
      <p class="site-slogan">A PHP-based and MVC-inspired story</p>
    </div>
    <?=getHTMLForNavigation($navbar, "navbar")?>
  </header>
  
  <div id="main" role="main">
    <?=$main?>
  </div>

  <footer id="footer">
    <p>&copy; Kristoffer Magnusson</p>
    
    <p>Tools: 
    <a href="http://validator.w3.org/check/referer">html5</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>
    <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
    <a href="http://validator.w3.org/checklink?uri=<?=$currentUrl?>">links</a>
    <a href="http://validator.w3.org/i18n-checker/check?uri=<?=$currentUrl?>">i18n</a>
    <!-- <a href="link?">http-header</a> -->
    <a href="http://csslint.net/">css-lint</a>
    <a href="http://jslint.com/">js-lint</a>
    <a href="http://jsperf.com/">js-perf</a>
    <a href="http://www.workwithcolor.com/hsl-color-schemer-01.htm">colors</a>
    <a href="http://dbwebb.se/style">style</a>
    </p>
    
    <p>Docs:
    <a href="http://www.w3.org/2009/cheatsheet">cheatsheet</a>
    <a href="http://dev.w3.org/html5/spec/spec.html">html5</a>
    <a href="http://www.w3.org/TR/CSS2">css2</a>
    <a href="http://www.w3.org/Style/CSS/current-work#CSS3">css3</a>
    <a href="http://php.net/manual/en/index.php">php</a>
    <a href="http://www.sqlite.org/lang.html">sqlite</a>
    <a href="http://www.blueprintcss.org/">blueprint</a>
    </p>
  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-22093351-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html> 