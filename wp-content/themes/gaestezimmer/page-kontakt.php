<?php /* Template Name: page-kontakt */ 
  get_header(); ?>

<section id="page-header" class="section background hd-180" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>KONTAKT</h3>
                    <h6 style="color:#fff;">Bitte füllen Sie das untenstehende Formular aus und wir werden Ihnen in Kürze anworten.</h6>

                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section  makepaddingno" style="padding-top:25px;padding-bottom: 145px !important; background:#FFF;">
        <div   class="container">

            <div class="row">
               <div class="col-md-3 form-rad2">
                <h4>Kontaktieren Sie uns:</h4>
                    <strong>Chalee und Stephan Häbell</strong><br>
                    Rurstr. 14 • 41564 Kaarst<br><br>
                    Tel.: 02131–40214-0<br>
                    Fax: 02131–40214-25<br>
                    info@gaestezimmerkaarst.de<br> 
                    <hr>
        
                <a href="downloads/info.pdf" target="_blank" class="btn btn-primary btn-normal">Info-PDF zum Ausdrucken</a>
           
               </div> 

             
               <div class="col-md-8 col-md-offset-1">

                 <form id="contactform" class="row form-rad" action="contact.php" name="contactform" method="post">
                           
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
                             
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <input name="betreff" id="betreff" class="form-control" placeholder="Betreff" type="text"> 
                            </div>
                            
                            
 
                             
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="comments" id="comments" rows="3" placeholder="Ihre Nachricht"></textarea>
  
                                    <button type="submit" value="SEND" id="submit" class="btn btn-dark" style="width:100%;"><i class="fa fa-paper-plane-o"></i> SENDEN</button>
                            
                            </div>

                        </form> 


               </div>
            </div><!-- end row -->
        </div><!-- end container -->

    </section><!-- end section -->

  <?php get_footer(); ?>
