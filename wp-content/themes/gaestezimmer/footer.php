
    <footer class="footer"> 
        <div class="container">
            <div class="row">
                <div class="container">
                        <div class="text-center">
                           <a href="<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/translogo.png" alt="" class="log-footer"></a>

                        </div> 
                </div>


                <div class="col-lg-8 col-sm-8 col-xs-12">
                    <div class="widget">
                         
                        <div class="text-widget ffirst">
                            <strong>Gästezimmer Kaarst</strong>
                            <p> Unser Haus verfügt über voll ausgestattete Einzel- und Doppelzimmer mit eigenem Duschbad in verschiedenen Größen (17-21m²). Die Zimmer sind modern und geschmackvoll möbliert und ermöglichen ein unabhängiges, komfortables Wohnen mit Wireless Lan und Sat-TV. So können Sie bequem Ihren Geschäften nachgehen oder einfach nur Urlaub machen.

Durch die zentrale Lage ist Kaarst der ideale Standort in der Region!
                         </p>

                        </div><!-- end text-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-sm-4 col-xs-12">
                    <div class="widget"> 
                        <div class="text-widget">
                            <ul>         
                                <li><strong>Chalee & Stephan Häbell</strong></li>
                                <li>Rurstr. 14 • 41564 Kaarst</li>
                                <li>info@gaestezimmerkaarst.de</li>
                                <li> Tel.: 02131/40214-0</li>
                            </ul>
                        </div><!-- end text-widget -->
                    </div><!-- end widget -->
                </div><!-- end col -->
 
            </div><!-- end row -->
        </div><!-- end container -->

       <!-- <div class="container">
            <div class="row"> 
                <div class="text-center"> 
                    <div class="icon-bottom a"><i class="fa fa-hotel"></i><br>Zimmer ab 25€</div>
                    <div class="icon-bottom a"><i class="fa fa-tv"></i><br>Sat–TV</div>
                    <div class="icon-bottom a"><i class="fa fa-wifi"></i><br>WLAN</div> 
                </div>
            </div>
        </div>-->

    </footer><!-- end footer -->


    <div class="copyright">
         
        <div class="container text-center">
            <div class="social">
                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
            </div><!-- end social -->
            <div class="copymessage">
                <p>© 2017 Gaestezimmer<strong>kaarst</strong>.de | <a href="impressum.php" title="Impressum"> Impressum</a></p>
            </div><!-- end copymessage -->
        </div><!-- end container -->
    </div><!-- end copyright -->
  
</div><!-- end wrapper -->
        
    <!-- Template core JavaScript's
    ================================================== -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script> 
    <script src="<?php bloginfo('template_directory'); ?>/js/parallax.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/wow.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/isotope.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/masonry.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="<?php bloginfo('template_directory'); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-select.min.js"></script>
    <?php if(is_page_template('page-zimmer.php')):?>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightcase.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('a[data-rel^=lightcase]').lightcase();
            });
        </script>
    <?php endif; ?>
    <?php if(is_page_template('page-lage.php')):?>
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
                icon: "<?php bloginfo('template_directory'); ?>/images/marker.png"
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
<?php endif;?>
  

</body>
</html>