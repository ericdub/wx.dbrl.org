<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/favicon.ico">

    <title>DBRL Weather</title>
    
   
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

     

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link href="css/dbrl.css" rel="stylesheet">
    <link href="lightbox/css/lightbox.css" rel="stylesheet" />

    <script src="lightbox/js/lightbox.min.js" defer async="async"></script>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="initLightbox()">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://www.abc17news.com/weather.php" target="_blank">KMIZ Stormtrack</a></li>
            <li><a href="http://www.krcg.com/weather/" target="_blank">KRCG Weather Lab</a></li>
            <li><a href="http://www.komu.com/weather/" target="_blank">KOMU Doppler 8 First Alert</a></li>
            <li><a href="http://aes.missouri.edu/sanborn/weather/sanreal.stm" target="_blank">MU Sanborn Field</a></li>
            <li><a href="http://intranet.dbrl.org">Intranet</a></li>
          </ul>  
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>DBRL Weather</h1>
        <div class="col-md-4">
        <a href="http://www.abc17news.com/dynamic-images/transient/image/cjc/19269616?maxw=640" data-lightbox="wx" class="radar"  ><img src="http://www.abc17news.com/dynamic-images/transient/image/cjc/19269616?maxw=640" alt="Seven-day forecast graphic"  width="319" height="182" id="imagelightbox" /></a>
        </div>
        <div class="col-md-4">
        <a href="http://www.abc17news.com/dynamic-images/transient/image/cjc/18979106?maxw=640" data-lightbox="wx" class="radar"  ><img src="http://www.abc17news.com/dynamic-images/transient/image/cjc/18979106?maxw=640" alt="Current weather conditions graphic"  width="319" height="182" id="imagelightbox" /></a>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4">
        <a href="http://www.abc17news.com/dynamic-images/transient/image/cjc/18990000?maxw=640" data-lightbox="wx"  class="radar"  ><img src="http://www.abc17news.com/dynamic-images/transient/image/cjc/18990000?maxw=640" alt="Daily almanac graphic"  width="319" height="182" id="imagelightbox" /></a>
        </div>
        <div class="col-md-4">
        <a href="http://www.abc17news.com/dynamic-images/transient/image/cjc/18979194?maxw=640" data-lightbox="wx" class="radar"  ><img src="http://www.abc17news.com/dynamic-images/transient/image/cjc/18979194?maxw=640" alt="weather radar iamge"  width="319" height="182" id="imagelightbox"  /></a>
        </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-5">
          <?php include('sanborn.php');  ?>
        </div>
        <div class="col-md-3">
          <h2>Radar &amp; Loops</h2>
          <ul>
   
          <li><a href="http://www.krcg.com/weather/radar.aspx" target="_blank">KRCG Radar Loop</a></li>
          <li><a href="http://www.wunderground.com/radar/radblast.asp?ID=LSX&region=b3&lat=38.92913818&lon=-92.36959076&label=Columbia%2c%20MO" target="_blank">STL NEXRAD</a></li>
          <li><a href="http://forecast.io/#/f/38.9510,-92.3399" target="_blank">forecast.io</a></li>
          <li><a href="http://www.intellicast.com/National/Radar/Summary.aspx?location=USMO0453" target="_blank">Intellicast Radar Summary</a></li>
          <li><a href="http://www.intellicast.com/National/Radar/Current.aspx?location=USMO0453&animate=true" target="_blank">Intellicast Current Loop</a></li>
          <li><a href="http://www.intellicast.com/National/Radar/OneKm.aspx?location=USMO0453&amp;animate=true" target="_blank">Intellicast Regional Loop</a></li>
          <li><a href="http://radar.srh.noaa.gov/" target="_blank">NWS National Mosaic</a></li>
          <li><a href="http://origin-radar.weather.gov/radar.php?rid=sgf&amp;product=N0R&amp;loop=yes" target="_blank">NWS SW MO Radar Loop</a></li>
          <li><a href="http://origin-radar.weather.gov/Conus/index_loop.php" target="_blank">NWS National Radar Loop</a></li>

          <li><a href="http://www.intellicast.com/National/Radar/Metro.aspx?animate=true&location=USMO0460" target="_blank">Kansas City Metro Loop</a></li>
          <li><a href="http://www.intellicast.com/National/Radar/Metro.aspx?animate=true&location=USMO0787" target="_blank">St. Louis Metro Loop</a></li>
          <li><a href="http://weatherspark.com/#!graphs;a=USA/MO_65203/Columbia" target="_blank" class="new">WeatherSpark</a></li>
          <li><a href="http://hint.fm/wind/ "target="_blank" class="new">Wind Map</a></li>
          <li><a href="http://www.wunderground.com/wundermap/" target="_blank">WU WonderMap</a></li>
        </ul>
        </div>
        <div class="col-md-3">
          <h2>Forecasts</h2>
   
           <ul>
      
              <li><a href="http://www.intellicast.com/Local/Weather.aspx?location=USMO0193" target="_blank">Intellicast</a></li>
              <li><a href="http://www.crh.noaa.gov/ifps/MapClick.php?CityName=Columbia&amp;state=MO&amp;site=LSX" target="_blank">National Weather Service</a></li>
              <li><a href="http://www.crh.noaa.gov/product.php?site=NWS&amp;issuedby=LSX&amp;product=AFD&amp;format=CI&amp;version=1&amp;glossary=1" target="_blank">NWS Forecast Discussion</a></li>
              <li><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=65203" target="_blank">Weather Underground</a></li>
           </ul>
          <h2>Hurricanes</h2>
        <ul>
          <li><a href="http://www.stormpulse.com/" target="_blank">Storm Pulse</a></li>
          <li><a href="http://stormadvisory.org/map/atlantic" target="_blank">StormAdvisory</a></li>
          <li><a href="http://www.nhc.noaa.gov/" target="_blank">NWS Hurricane Center</a></li>
          <li><a href="http://www.msnbc.msn.com/id/26295161/" target="_blank">MSNBC Hurricane Tracker</a></li>
          
          <li><a href="http://hurricane.accuweather.com/hurricane/tracks.asp" target="_blank">AccuWeather</a></li>
          <li><a href="http://tropicwx.com/" target="_blank">Jay's Hurricane Images</a></li>
        </ul>

       </div>
       
      </div>

      <hr>

      <footer>
        <p>&copy; <?php echo date ('Y');?> Daniel Boone Regional Library, Graphics &copy; <a href="http://www.abc17.com/">KMIZ</a> </p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
