
 <?php  include("include/entete.php");

  $requete = $bd->query('SELECT * FROM hebergement ORDER BY quote DESC, logement ASC');

  $_SESSION['logement'] = [];
  while ($donnees = $requete->fetch()) {
    $logement = new Logement($donnees['id'], stripslashes($donnees['logement']),$donnees['distance'],$donnees['oc_simple'],$donnees['oc_double'],$donnees['quote'],$donnees['site']);
    $_SESSION['logement'][] = $logement;
  }

    $requete->closeCursor();



  ?>
 
  <div  class="container" style="min-height: 500px;">

    <div class="row">
      <div class="col-lg-12 contenu-centre"> <h1> HOTELS SUGGERES</h1> </div> 
    </div>


      <p>Les hôtels suggérés offrent un tarif préférentiel pour les participants du Colloque.
         Ne pas oublier de mentionner le nom du colloque lors de votre réservation,
          afin de bénificier du tarif préférentiel.
      
    
        Les participants sont responsables de réserver leur propre hébergement. Notez que l'hébergement est à vos frais.
     
      
          Pour toute question ou transaction relative à la réservation des chambres, veuillez vous adresser directement aux personnels de l’hôtel.
      </p>


<?php if (isset($_SESSION['user'])&&isset($_GET['protected'])&&($_GET['protected']==99) ) {?>

      
<?php if (isset($_GET['modifier'])) { 

      $nom = ''; $simple = 0; $double = 0; $quote = 0; $distance = 0; 
      foreach ($_SESSION['logement'] as $key => $logement) {
          if ($logement->getId()==$_GET['modifier']) { $id=$logement->getId();$nom=$logement->getLogement();$simple=$logement->getSimple();$double=$logement->getDouble();$quote=$logement->getQuote(); $distance=$logement->getDistance(); }
      }

  ?>

  <div class="container">
      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); margin: 30px;">
          <h2 class="contact-title text-centre"  >Modification de l'hebergement.</h2>
        </div> 
        <div class="col-lg-12">
          <form class="form-contact contact_form" action="hebergement_process.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="logment"> Entrez le nom de l'hebergement </label>
                  <input class="form-control"  value="<?php echo($nom); ?>"  name="logement" id="logment" type="text" placeholder="Entrez le nom de l'hebergement" required>
                </div>
              </div>

               <div class="col-sm-3">
                <label for="quote">Quote (nombtre d'étoiles) </label>
                <select name="quote" id="quote" class="form-control " placeholder="" required>
                    <option value=""> Quote (nombtre d'étoiles) </option>
                
                <?php for ($i=1; $i <6 ; $i++) { 
                    if ($quote==$i) { echo('<option selected value='.$i.'> '.$i.'</option>');}
                     else{ echo('<option value='.$i.'> '.$i.'</option>'); }     
                } ?>    
                </select>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label for="site">Entrez le lien du site web de l'hotel. </label>
                  <input class="form-control" name="site" id="site" type="text" placeholder="Entrez le lien du site web de l'hotel.">
                </div>
              </div>
              
            </div>

            <div class="row">


              <div class="col-sm-3">
                <div class="form-group">
                  <label for="simple"> Cout pour occupation simple</label>
                  <input class="form-control" value="<?php echo($simple); ?>" name="simple" id="simple" type="text" placeholder="Cout pour occupation simple" required>
                </div>
              </div> 

              <div class="col-sm-3">
                <div class="form-group">
                  <label for="double"> Cout pour occupation double</label>
                  <input class="form-control" value="<?php echo($double); ?>" name="double" id="double" type="text" placeholder="Cout pour occupation double" required>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="distance"> Temps voyage en minute</label>
                  <input class="form-control" value="<?php echo($distance); ?>" name="distance" id="distance" type="text" placeholder="Temps voyage en minute" required>
                </div>
              </div>


              <input type="number" value="<?php echo($id); ?>" name="id" hidden >           

             <div class="form-group mt-3">
                <div class="row">
                <div class="col-sm-3"> </div> 
                  <div class="col-sm-9">
                   <button  type="submit" class="button button-contactForm"> Modifier </button>
                 </div>
               </div>
              </div>
              </div>         
          </form>
        </div>
      </div>
    </div>
     


    <?php } else{  ?>
      <div class="container">
      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); margin: 30px;">
          <h2 class="contact-title text-centre"  >Enregistrez un lieu d'hebergement.</h2>
        </div> 
        <div class="col-lg-12">
          <form class="form-contact contact_form" action="hebergement_process.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="logement" id="logment" type="text" placeholder="Entrez le nom de l'hebergement" required>
                </div>
              </div>

               <div class="col-sm-3">
                <select name="quote" id="quote" class="form-control " placeholder="" required>
                    <option value=""> Quote (nombtre d'étoiles) </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <input class="form-control" name="site" id="site" type="text" placeholder="Entrez le lien du site web de l'hotel.">
                </div>
              </div>
              
            </div>

            <div class="row">

               <div class="col-sm-3">
                <div class="form-group">
                  <input class="form-control" name="simple" id="simple" type="text" placeholder="Cout pour occupation simple" required>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <input class="form-control" name="double" id="double" type="text" placeholder="Cout pour occupation double" required>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <input class="form-control" name="distance" id="distance" type="text" placeholder="Temps voyage en minute" required>
                </div>
              </div>            

             <div class="form-group mt-3">
                <div class="row">
                <div class="col-sm-3"> </div> 
                  <div class="col-sm-9">
                   <button  type="submit" class="button button-contactForm"> Ajouter</button>
                 </div>
               </div>
              </div>
              </div>         
          </form>
        </div>
      </div>
    </div>
     
 <?php } ?>


 <div class="row"> 
     <table class="table table-bordered table-striped table-condensed row ">
      <tbody class="col-sm-12"> 

        <tr style="text-align: center; background-color: rgb(136,0,21); color: white;" class="row" >
          <td class="col-sm-5"> Logements</td>
          <td class="col-sm-3">Occupation Simple</td>
          <td class="col-sm-3" >Occupation Double</td>
          <td class="col-sm-1">Actions </td>
       </tr>

        <?php  foreach ($_SESSION['logement'] as $key => $logmnt) {?>
        <tr class="row"  >
            <td class="col-sm-5">
                <a href="<?php echo($logmnt->getSite())?>" style="font-weight: bold;font-size: 1.2em;" target="_blank"> <?php echo( ucfirst( strtolower($logmnt->getLogement()) ) ); ?> </a><br>
                   <?php  
                  $i= $logmnt->getQuote();
                  while ($i>0) {  echo('<i class="far fa-star "data-icon="star" style="color:rgb(255,21,165);"> </i>'); $i--; }  
                   ?>    
                <br><b style="font-size: 0.7em;"> <?php echo($logmnt->getDistance()); ?> min en voiture </b>
            </td>
            <td class="col-sm-3" style="text-align: center; font-weight: bold;"> <?php echo($logmnt->getSimple()); ?> fcfa</td>
            <td class="col-sm-3" style="text-align: center; font-weight: bold;" > <?php echo($logmnt->getDouble());?> fcfa</td> 
            <td class="col-sm-1" style="text-align: center; font-weight: bold;" > 
                 <a href="hebergement.php?modifier=<?php echo($logmnt->getId());?>&amp;title=HEBERGEMENT&amp;protected=99">
                    <i class="fas fa-edit "></i>   
                 </a>
                     
                 <a   href="supprimer.php?logement=<?php echo($logmnt->getId()); ?>"> 
                    <i class="fas fa-trash-alt"> </i>  
                </a>
            </td> 
        </tr> 
        <?php } ?>
      </tbody>
    </table>

 </div>
      
<?php    }else { ?> 

      <table class="table table-bordered table-striped table-condensed ">
      <thead style="text-align: center; background-color: rgb(136,0,21); color: white;" >
        <th> Logements</th>
          <th>Occupation Simple</th>
          <th>Occupation Double</th>
      </thead>
      <tbody>

        <?php  foreach ($_SESSION['logement'] as $key => $logmnt) {?>
        <tr>
            <td>
                <a href="<?php echo($logmnt->getSite())?>" style="font-weight: bold;font-size: 1.2em;" target="_blank" > <?php echo( ucfirst( strtolower($logmnt->getLogement()) ) ); ?> </a><br>
                   <?php  
                  $i= $logmnt->getQuote();
                  while ($i>0) {  echo('  <i class="far fa-star "data-icon="star" style="color:rgb(255,21,165);"> </i>'); $i--; }  
                   ?> 
                   
                <br><b style="font-size: 0.7em;"> <?php echo($logmnt->getDistance()); ?> min en voiture </b>
            </td>
            <td style="text-align: center; font-weight: bold;"> <?php echo($logmnt->getSimple()); ?> fcfa</td>
            <td style="text-align: center; font-weight: bold;" > <?php echo($logmnt->getDouble());?> fcfa</td> 
        </tr> 
        <?php } ?>
      </tbody>
    </table>

<?php    }  ?>



  </div>

  <?php include("include/pied.php"); ?>
