<?php get_header();?>
<div class="parallax-slider">
        <div class="tp-banner-container">
            <div id="banner2" class="tp-banner">
                <ul>
                    <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-thumb="<?php bloginfo('template_directory'); ?>/upload/slider_03.jpg" data-saveperformance="off"  data-title="Gästezimmer Kaarst">
                        <img src="<?php bloginfo('template_directory'); ?>/images/dummy.png"  alt="greenbg" data-lazyload="<?php bloginfo('template_directory'); ?>/upload/slider_03.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                       
                        <div class="tp-caption slider-title tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" style="background:rgba(241, 184, 19, 0.73); padding-left:5px; padding-right:5px;" 
                            data-x="center" 
                            data-y="450"
                            data-speed="1000" 
                            data-start="800" 
                            data-easing="Power3.easeInOut" 
                            data-elementdelay="0.1" 
                            data-endelementdelay="0.1" 
                            data-endspeed="300" 
                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap; ">Herzlich willkommen!
                        </div>
                        <div class="tp-caption slider-title1 tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                            data-x="center" 
                            data-y="510"
                            data-speed="1000" 
                            data-start="1000" 
                            data-easing="Power3.easeInOut" 
                            data-elementdelay="0.1" 
                            data-endelementdelay="0.1" 
                            data-endspeed="300" 
                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap; background:rgba(241, 184, 19, 0.73); padding-left:5px; padding-right:5px;" >Wir wünschen Ihnen einen angenehmen Aufenthalt in unserem Haus!
                        </div>
                        <div class="tp-caption slider-btn tp-fade skewfromright randomrotateout tp-resizeme rs-parallaxlevel-2" 
                            data-x="center" 
                            data-y="580"
                            data-speed="1000" 
                            data-start="1000" 
                            data-easing="Power3.easeInOut" 
                            data-elementdelay="0.1" 
                            data-endelementdelay="0.1" 
                            data-endspeed="300" 
                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                            <a href="kontakt.php" class="btn btn-primary btn-normal border-radius">KONTAKT</a> 
                        </div>

                       
                    </li>
                </ul>   
            </div>
        </div>  
    </div>


    <section class="section  makepaddingno" style="padding-top:25px;padding-bottom: 45px !important;">
        <div   class="container">

            <div class="row">
                <div class="col-md-6 text-left" style="padding-bottom: 25px !important;">
                    <h3>Gästezimmer Kaarst</h3>
                    Unser Haus verfügt über voll ausgestattete Einzel- und Doppelzimmer mit eigenem Duschbad in verschiedenen Größen (17-21m²). Die Zimmer sind modern und geschmackvoll möbliert und ermöglichen ein unabhängiges,<br> komfortables Wohnen mit Wireless Lan und Sat-TV. So können Sie bequem Ihren Geschäften nachgehen oder einfach nur Urlaub machen.<br><br>
Durch die zentrale Lage ist Kaarst der ideale Standort in der Region!

                </div>
                <div class="col-md-6 text-left" style="padding-bottom: 25px !important;">
                                        <h3>Verkehrstechnisch günstig gelegen:</h3>
                  
Die guten Verkehrsanbindungen erlauben Ihnen alle Ziele schnell zu erreichen.<br><br>

Mit der <strong>Regiobahn</strong> ist man im Nu in Neuss (5min), Düsseldorf (20min). Die Haltestelle ist in nur 3 Minuten zu Fuß erreichbar. Mehr Infos zur Regiobahn finden Sie <a href="http://www.regio-bahn.de/" target="_blank">hier</a>...<br><br>

Auch mit dem <strong>Auto</strong> ist man ganz nah dran: Neuss (5min), Mönchengladbach (10min), Krefeld (12min), Düsseldorf (15min).

                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 col-sm-4 col-xs-12 welcome-box">
                    <a href="<?php echo get_page_link(get_page_by_title('lage'));?>"><div class="icon-container"><i class="fa fa-map-marker"></i></div></a>
                    <h6>LAGE</h6>
                </div><!-- end box -->
                <div class="col-md-4 col-sm-4 col-xs-12 welcome-box color2">
                    <a href="<?php echo get_page_link(get_page_by_title('zimmer'));?>"><div class="icon-container"><i class="fa fa-hotel"></i></div></a>
                    <h6>ZIMMER</h6>
                </div><!-- end box -->
                <div class="col-md-4 col-sm-4 col-xs-12 welcome-box color3">
                    <a href="<?php echo get_page_link(get_page_by_title('buchung'));?>"><div class="icon-container"><i class="fa fa-envelope"></i></div></a>
                    <h6>BUCHUNG</h6>
                </div><!-- end box -->
<div class="col-md-8 col-md-offset-2 text-center" style="padding-bottom: 25px !important;">
 

                </div>
            </div><!-- end row -->
        </div><!-- end container -->
         
    </section><!-- end section -->
<?php get_footer();?>