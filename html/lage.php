<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="de"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="de"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="de"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="de"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta name="author" content="Gästezimmer Kaarst" />
    <meta name="keywords" content="Zimmer, Messezimmer, Gästezimmer, Monteurzimmer, Pension, Privatzimmer, Kaarst, Düsseldorf, Übernachtung, günstig, Komfort, modern, Sat-TV, W-Lan, Küche, Duschbad, WC, Einzelzimmer, Doppelzimmer, Parkplatz, Auto, Bahn, Kühlschrank, Hotel, Hotel Kaarst, Hotel Neuss, Hotel Düsseldorf, Messezimmer" />
    <meta name="description" content="Herzlich Willkommen! Wir bieten Ihnen moderne und komfortable Übernachtungsmöglichkeiten in Kaarst. Verkehrstechnisch günstig gelegen, mit kurzen Wegen nach Düsseldorf und allen umliegenden Städten. Ob mit dem Auto, oder mit der Bahn, Sie sind im nu am Ziel. Eine Gemeinschaftsküche und viele weitere Annehmlichkeiten erwarten sie hier. Schauen Sie sich unser Angebot an." />
    

    <title>Gästezimmer Kaarst – Willkommen</title>

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="G&auml;stezimmer Kaarst">
    <meta name="application-name" content="G&auml;stezimmer Kaarst">
    <meta name="theme-color" content="#ffffff">

    <!-- The core CSS's -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl-carousel.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="rs-plugin/css/settings.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/flag-icon.min.css" rel="stylesheet">
 
    <!-- Base CSS -->
    <link href="style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

<?php include("import/loader.php"); ?>

<div id="wrapper"> 
    <?php include("import/navi.php"); ?>
  <section id="page-header" class="section background hd-180" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>LAGE</h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

      <article id="contact" class="map-section makenopaddingtop">
        <div id="map"></div>
    </article><!-- end section -->

    <section class="section  makepaddingno" style="padding-top:25px;padding-bottom: 125px !important; background:#FFF;">
        <div   class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
               
                        <p>
                            Durch die zentrale Lage ist Kaarst der ideale Standort in der Region Niederrhein. Mit der Regiobahn (3min zu Fuß) ist man im Nu in Neuss (5min) Düsseldorf (20min). Auch mit dem Auto ist man ganz nah dran: Neuss (5min), Mönchengladbach (10min), Krefeld (12min), Messe und Flughafen Düsseldorf 18km (20min), Altstadt Düsseldorf 13km (15min).
                            Ausreichende Parkmöglichkeiten für Ihr Auto sind vor dem Haus vorhanden.<br>
                            Ein Supermarkt und ein Schnellimbiss befinden sich ebenfalls in unmittelbarer Fußnähe.
                        </p>
                </div>

               </div>
            </div><!-- end row -->
        </div><!-- end container -->

    </section><!-- end section -->

  

 <?php include("import/footer.php"); ?>
  
</div><!-- end wrapper -->
        
    <!-- Template core JavaScript's
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/parallax.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/masonry.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/bootstrap-select.min.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjZHgjro75cRLOkMfkhMriPZGu5Hxc1SQ"></script>
     
    <script type="text/javascript">
    (function($) {
    "use strict";
    /* ==============================================
    MAP -->
    =============================================== */
        var locations = [
            ['<div class="infobox"><h3 class="title">GÄSTEZIMMER KAARST</h3><p>Rurstr. 14 • 41564 Kaarst</p></div></div></div>',51.21921, 6.626393, 2]
            ];
        
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 16,
                scrollwheel: false,
                navigationControl: true,
                mapTypeControl: false,
                scaleControl: false,
                draggable: true,
                styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -100},
                    {gamma: 1.2} ] } ],
                center: new google.maps.LatLng(51.21921, 6.626393),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        
            var infowindow = new google.maps.InfoWindow();
        
            var marker, i;
        
            for (i = 0; i < locations.length; i++) {  
          
                marker = new google.maps.Marker({ 
                position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
                map: map ,
                icon: 'images/marker.png'
                });
        
        
              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                }
            })(marker, i));
        }
    })(jQuery);
    </script>


  

</body>
</html>