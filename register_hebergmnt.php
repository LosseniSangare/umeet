
 <?php 
  include("include/entete.php"); ?>

  <!-- ================ contact section start ================= -->
  <section class="section-margin--large" style=" margin-top: 0px;">

    <div class="container">
      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); margin: 30px;">
          <h2 class="contact-title text-centre"  >Enregistrez les lieux d'hebergement.</h2>
        </div>

       
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="hebergement_process.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">


              <div class="col-10">
                <div class="form-group">
                  <input class="form-control" name="logement" id="logment" type="text" placeholder="Entrez le nom de l'hebergement" required>
                </div>
              </div>


              <div class="col-sm-5">
                <div class="form-group">
                  <input class="form-control" name="simple" id="simple" type="text" placeholder="Cout pour occupation simple" required>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-group">
                  <input class="form-control" name="double" id="double" type="text" placeholder="Cout pour occupation double" required>
                </div>
              </div>


              <div class="col-sm-5">
                <div class="form-group">
                  <input class="form-control" name="distance" id="distance" type="text" placeholder="Temps voyage en minute" required>
                </div>
              </div>

              <div class="col-sm-5">
                <select name="quote" id="quote" class="form-control " placeholder="" required>
                    <option value=""> Quote (nombtre d'étoiles) </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
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
