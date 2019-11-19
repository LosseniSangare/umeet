
 <?php  include("include/entete.php"); ?>

 
  <section class="hero-banner" id="hero-banner" style="height: 50px;" >
    <div class="container text-center" id="banner-message">
      <span class="hero-banner-icon"> <i class="flaticon-sing"> </i></span>
      <p>20 - 24, Decembre 2020, Bouaké</p>
      <h1>COLLOQUE UAO 2020 </h1>
    </div>
  </section>
  


  <section class="section-margin mb-5 pb-5" style=" margin: 0px; border-bottom: 2px solid rgba(122,122,122,0.1);">
    <div class="container-fluid">
      <div class="section-intro text-center"  >
        <h2 class="primary-text">COLLOQUE UAO</h2>
        <img src="img/home/section-style.png" alt="" >
      </div>

    <div class="row">


      <?php

        $requete = $bd->query('SELECT * FROM infos ORDER BY dates DESC'); 

        $_SESSION['info'] = [];
        while ($donnees = $requete->fetch()) {
          $_SESSION['info'][] = new Info($donnees['id'], stripslashes(htmlspecialchars($donnees['titre'])),stripslashes( htmlspecialchars($donnees['contenu'])), $donnees['dates']);  
        }
          $requete->closeCursor();

       ?>

       <div class="col-lg-1"> </div>
     
      <div class="col-lg-7" style="padding: 0; margin-right: 0;" >

         <?php  foreach ($_SESSION['info'] as $key => $info) {?>

         <div class="row  " style="margin-top: 10px;">

              <div class="col-lg-1 infodate" style="background-color: rgb(23,29,89);">
                  
              </div>

              <div class="col-lg-10 info" style=" background-color: rgba(122,122,122,0.1);" >
                  <div class="schedule-content">
                    <p class="schedule-date"> <?php echo($info->getDates()) ?>  </p>
                    <a  href="#">
                      <h3> <?php echo($info->getTitre()) ?> </h3>
                    </a>
                    <p><?php echo($info->getContenu()) ?></p>
                  </div>
              </div>
         </div>

         <?php } ?>

      </div>


      <div class="col-lg-3" style="margin-right: 10px; min-height: 200px; border: 2px solid rgba(122,122,122,0.1); ">
        <div class="row"> 
           <div class="col-lg-12"   >
            
            <div class="row" >
                <div class="col-lg-12" style="background-color:rgba(122,122,122,0.3) ; text-align: center;  font-size: 2em;">  PATENAIRES </div> 
            </div>
          </div>
        </div> 
      </div>

 </div>



   </div>
  </section>
  <!--================ Schedule section End =================-->



  <!--================ Blog section Start =================-->
  <section class="" style="padding: 0px;">
    <div class="container">
     
      <div class="owl-theme owl-carousel blogCarousel pb-xl-1" >
        
  <?php for ($i=1; $i <8 ; $i++) {?> 
        <div class="card-blog"style="padding-top: 0;">
          <img class="card-img" src="<?php echo('img/blog/blog'.$i.'.jpg') ?>" alt="">
          <div class="blog-body">
            <a href="#">
              <h3>Owls should be used to help abused children open <br class="d-none d-xl-block">
                  up in therapy sessions, says charity boss</h3>
            </a>
            <ul class="blog-info">
              <li><a href="#"><i class=""></i> </a></li>
              <li><a href="#"><i class=""></i> </a></li>
            </ul>
          </div>
        </div>

   <?php } ?>

      </div>
    </div>
  </section>
  <!--================ Blog section End =================-->

  <?php include("include/pied.php"); ?>

