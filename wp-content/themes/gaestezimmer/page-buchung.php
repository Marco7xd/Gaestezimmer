<?php /* Template Name: page-buchung */ 
  get_header(); ?>
<section id="page-header" class="section background hd-180" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>BUCHUNG</h3>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section  makepaddingno" style="padding-top:25px;padding-bottom: 45px !important; background:#fdf7e7;">
        <div   class="container">

            <div class="row">
               <div class="col-md-3 form-rad2">
                <h4>Kontaktieren Sie uns:</h4>
                    <strong>Chalee und Stephan Häbell</strong><br>
                    Rurstr. 14 • 41564 Kaarst<br><br>
                    Tel.: 02131–40214-0<br>
                    Fax: 02131–40214-25<br>
                    info@gaestezimmerkaarst.de<br>
                    <hr style="border-top: 1px solid #fdf7e7;" class="hidden-sm hidden-xs">
                    <img src="<?php bloginfo('template_directory'); ?>/images/kontakt-left.jpg" class="img-responsive kontakt-img hidden-sm hidden-xs">
                    <hr>
                    <a href="downloads/info.pdf" target="_blank" class="btn btn-primary btn-normal">Info-PDF zum Ausdrucken</a>
               </div>

               <div class="col-md-8 col-md-offset-1">
                 <form id="contactform" class="row form-rad" action="contact.php" name="contactform" method="post">
                            <div class="col-xs-12">
                                <input name="firma" id="firma" class="form-control" placeholder="Firma" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="vorname" id="vorname" class="form-control" placeholder="Vorname" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="name" id="name" class="form-control" placeholder="Name" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="email" id="email" class="form-control" placeholder="E-Mail" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="phone" id="phone" class="form-control" placeholder="Telefon" type="text"> 
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input name="strasse" id="strasse" class="form-control" placeholder="Straße/Nr.:" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="postleitzahl" id="postleitzahl" class="form-control" placeholder="Postleitzahl" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="ort" id="ort" class="form-control" placeholder="Ort" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="zimmer" id="zimmer" class="form-control" placeholder="Wieviel Zimmer benötigen Sie?" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <input name="personen" id="personen" class="form-control" placeholder="Wieviel Personen sind Sie?" type="text"> 
                            </div>
                             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Buchungszeitraum von:</label>
                                <input name="booking" id="booking" class="form-control" placeholder="von:" type="text"> 
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>bis:</label>
                                <input name="booking" id="booking" class="form-control" placeholder="bis:" type="text"> 
                            </div>
 
                             
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="comments" id="comments" rows="3" placeholder="Wie sind Sie auf uns aufmerksam geworden?"></textarea>
                                <textarea class="form-control" name="comments" id="comments" rows="3" placeholder="Was Sie uns noch mitteilen möchten:"></textarea>
 
                                    <button type="submit" value="SEND" id="submit" class="btn btn-dark" style="width:100%;"><i class="fa fa-paper-plane-o"></i> ANFRAGE SENDEN</button>
                            
                            </div>
                        </form> 

               </div>
            </div><!-- end row -->
        </div><!-- end container -->

    </section><!-- end section -->

   <article id="contact" class="map-section makenopaddingtop">
        <div id="map"></div>
    </article><!-- end section -->
  <?php get_footer(); ?>