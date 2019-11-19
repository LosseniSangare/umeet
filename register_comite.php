
 <?php
 if(!(isset($_GET['protected'])&&$_GET['protected']==99)){
   header('Location:index.php');
   exit();
 }
       include("include/entete.php");
        include("connexion/data/connexion.php");


          $req1=$bd->prepare("SELECT * FROM comites");
          $req1->execute();

  ?>


  <!-- ================ contact section start ================= -->


  <section class="section-margin--large" style=" margin-top: 0px;">

    <div class="container">
      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); margin: 30px;">
          <h2 class="contact-title text-centre"  >Enregistrez Membres</h2>
        </div>


        <div class="col-lg-8">
          <form class="form-contact contact_form" action="register_traitement.php" method="post" id="contactForm" novalidate="novalidate">

          <?php
          if(isset($_GET['comite'])){
            $req2=$bd->prepare("SELECT * FROM comites WHERE id=:id");
            $req2->bindValue(':id',$_GET['comite'],PDO::PARAM_INT);
            $req2->execute();
            while($res2=$req2->fetch()){
            $nomComite=$res2['intitule'];
          }


            ?>
            <div class="media-body">
              <p style="color : #00dd00;">
                <?php
                     echo $_SESSION['msg1'];
                     $_SESSION['msg1']="";
                ?>
              </p>

            </div>
          <?php } ?>
            <div class="row">


              <div class="col-sm-10">
                <div class="form-group">
                <select name="comite" id="comite" class="form-control " placeholder="" required>
                    <?php if(isset($_GET['comite'])){  ?>
                    <option value="<?=$_GET['comite']; ?>"><?= $nomComite;?></option>
                  <?php }else{
                    ?>

                    <?php
                  } ?>
                  <?php
                  while ($res=$req1->fetch()) {
                      ?>  <option value="<?=$res['id'] ;?>"> <?= $res['intitule']; ?> </option><?php
                  }
                   ?>


                </select>
              </div>
            </div>

              <div class="col-sm-5">
                <div class="form-group">
                  <input class="form-control" name="nom" id="nom" type="text" placeholder="nom du membre" required>
                </div>
              </div>


              <div class="col-sm-5">
                <div class="form-group">
                  <input class="form-control" name="prenom" id="prenom" type="text" placeholder="prenoms du membre" required>
                </div>
              </div>



            </div>
            <div class="form-group mt-3">
              <button  type="submit" name="ajouter" class="button button-contactForm">AJOUTER</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4" style="background-color: rgba(122,122,122,0.2); padding-top: 10px; ">

          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home" style="color: blue;"></i></span>
            <div class="media-body">
              <h3> Enregistré Nouveau comité </h3><br>
              <?php
                ?><div class="media-body"><?php
                    echo $_SESSION['msg2'];
                    $_SESSION['msg2']="";
                  ?></div>
                  <?php
                   if(isset($_GET['intitule'])){

                      ?>

                 <?php }elseif(isset($_GET['succes'])){  ?>
                   <div class="media-body">
                     <p style="color : #00dd00;"><?php echo 'COMITE ENREGISTRER AVEC SUCCES !!! '; ?></p>
                   </div>
                 <?php } ?>
            </div>

          </div>
          <div class="media contact-info">
            <form class="form-contact contact_form" action="register_traitement.php" method="post" id="contactForm" novalidate="novalidate">

              <div class="col-sm-12">
                  <div class="row">

                    <div class="col-sm-12">
                      <div class="form-group">
                        <input class="form-control" name="intitule" id="simple" type="text"
                        style="background-color:#ffffff"; placeholder="intitulé du comité" required>
                      </div>
                    </div>

                    <div class="col-sm-12 form-group mt-3">
                    <button type="submit" name="save" class="btn btn-primary button button-contactForm">Enregistré</button>
                    </div>

                  </div>

                </div>
              </form>
          </div>
          <!-- <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email" style="color: blue;"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div> -->
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
  <?php include("include/pied.php");


  ?>
