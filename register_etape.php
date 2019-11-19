
 <?php 
  include("include/entete.php");

  $_SESSION['max_order'] = 1;
  $requete = $bd->query('SELECT MAX(ordre) AS max_order FROM etapes');
  while ($donnees = $requete->fetch()) { $_SESSION['max_order'] =  $donnees['max_order']+1; 

 }

   ?>




  <!-- ================ contact section start ================= -->
  <section class="section-margin--large" style=" margin-top: 0px;">

    <div class="container">
      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); margin: 30px;">
          <h2 class="contact-title text-centre">  Enregistrez l'étape <span style="color: red;"><?php echo( $_SESSION['max_order'] ); ?></span> de deroulements du colloque.</h2>
        </div>

        <div class="col-lg-8">
          <form class="form-contact contact_form" action="process_etape.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">


              <div class="col-10">
                <div class="form-group">
                  <label for="date_etape"> La date de l'étape</label>
                  <input class="form-control" name="date_etape" id="date_etape" type="date" placeholder="Entrez le nom de l'hebergement" required>
                </div>
              </div>

            <input class="form-control" name="ordre" id="ordre" type="date" placeholder="Entrez le nom de l\'hebergement" required hidden value=<?php echo($_SESSION['max_order']);?> > 
          
              
              <div class="col-12">
                <div class="form-group">
                    <label for="etape"> </label>
                    <textarea class="form-control w-100" name="etape" id="etape" cols="30" rows="9" placeholder="Entrez votre message"></textarea>
                </div>
              </div>
             

            </div>
            <div class="form-group mt-3">
              <button  type="submit" class="button button-contactForm">ENVOYER</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4" style="background-color: rgba(122,122,122,0.2); padding-top: 10px; ">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home" style="color: blue;"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet" style="color: blue;"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email" style="color: blue;"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          
        </div>
        <div class="col-md-8 col-lg-9">
          
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->


   <script src="js/hebergement.js"></script>
  <?php include("include/pied.php"); ?>
