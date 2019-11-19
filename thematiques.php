
 <?php  include("include/entete.php"); 

  

 $requete = $bd->query('SELECT * FROM thematiques ORDER BY ordre ASC');

  $_SESSION['thematique'] = [];
  while ($donnees = $requete->fetch()) {
     $_SESSION['thematique'][] = new Thematique($donnees['id'], stripslashes(htmlspecialchars($donnees['titre'])),stripslashes( htmlspecialchars($donnees['contenu'])), $donnees['ordre']);
    
  }

    $requete->closeCursor();



  $_SESSION['order'] = 1;  
  $requete2 = $bd->query('SELECT MAX(ordre) AS max_order FROM thematiques');
  while ($donnees2 = $requete2->fetch()) { $_SESSION['order'] =  $donnees2['max_order']+1; 
   
  }

  $requete->closeCursor();


?>



     <div  class="container" style="min-height: 500px;">
        <div class="row">
          <div class="col-lg-12 contenu-centre"> <h1> LES THEMATIQUES   </div> 
        </div>


<?php if (isset($_SESSION['user'])&&isset($_GET['protected'])&&($_GET['protected']==99) ) {?>

      
<?php if (isset($_GET['modifier'])) { 

$titr = ''; $message = ''; $ordr = 0; 
foreach ($_SESSION['thematique'] as $key => $thematiq) {
  if ($thematiq->getId()==$_GET['modifier']  ) { $id=$thematiq->getId(); $titr = $thematiq->getTitre(); $message = $thematiq->getContenu(); $ordr = $thematiq->getOrdre(); }
}

  ?>

      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); ">
          <h2 class="contact-title text-centre"> Modification de la thématique <span style="color: red;"><?php echo( $ordr ); ?></span>.</h2>
        </div>

        <div class="col-lg-12"   >
          <form class="form-contact contact_form" action="process_thematique.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">

              <div class="col-5">
                <div class="form-group">
                    <label for="etape"> Numero </label>
                    <input type="text" style="border: 1px solid green;" class="form-control w-100" name="ordre" id="ordre"  placeholder="Entrez le thématique." required value="<?php echo($ordr); ?>" >
                </div>
              </div>
            
            <div class="col-5">
                <div class="form-group">
                    <label for="titre"> La thématique </label>
                    <textarea style="border: 1px solid green;" class="form-control w-100" name="titre" id="titre"  placeholder="Entrez le thématique." required>  <?php echo($titr); ?></textarea>
                </div>
              </div>

           </div>

            <div class="row">

              <div class="col-5">
                <div class="form-group">
                    <label for="etape"> Description de la thématique </label>
                    <textarea style="border: 1px solid green;"  class="form-control w-100" name="contenu" id="contenu" required  placeholder="Ajoutez une description du thématique ou un commentaire sur le thématique."  cols="30" rows="5" >  <?php echo($message); ?> </textarea>
                </div>
              </div> 

                <div class=" col-2 form-group mt-3">
                    <div class="row"> 
                        <div class="col-lg-6"> <input type="number" name="id"  hidden value=<?php echo($id);?> ></div>
                        <div class="col-lg-6"><p> <br></p><button  type="submit" class="button button-contactForm">Modifier </button></div>
                     </div>
                </div>
            </div>         
          </form>
        </div> 
      </div>

    <?php } else{ ?>

      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); ">
          <h2 class="contact-title text-centre">  Enregistrez la thématique <span style="color: red;"><?php echo( $_SESSION['order'] ); ?></span> du colloque.</h2>
        </div>

        <div class="col-lg-12"   >
          <form class="form-contact contact_form" action="process_thematique.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">

              <div class="col-5">
                <div class="form-group">
                    <label for="etape"> La thématique </label>
                    <textarea style="border: 1px solid green;" class="form-control w-100" name="titre" id="titre"  placeholder="Entrez le thématique." required></textarea>
                </div>
              </div>


              <div class="col-5">
                <div class="form-group">
                    <label for="etape"> Description du thématique </label>
                    <textarea style="border: 1px solid green;"  class="form-control w-100" name="contenu" id="contenu" required  placeholder="Ajoutez une description du thématique ou un commentaire sur le thématique."  cols="30" rows="5" ></textarea>
                </div>

              </div>             
                <div class=" col-2 form-group mt-3">
                    <p> <br> <br></p>
                     <button  type="submit" class="button button-contactForm">Ajouter</button>
                </div>
            </div>         
          </form>
        </div> 
      </div>

     <?php }?>


 

    <table class="table table-bordered   row" >

        <tbody class="col-lg-12"  >

  <?php  foreach ($_SESSION['thematique'] as $key => $thematique) { ?>
            <tr class="row" style=" background-color:  white; border-bottom: 1px solid rgba(122,122,122,0.1);">
                <td class="col-lg-1" style="text-align:center; border: none; background-color: rgba(122,122,122,0.3); "> 
                  <span style="font-size: 2em; display: inline-block; border: 1px solid black; text-align: center; border-radius: 20px; padding-left: 5px; padding-right: 5px; "> <?php echo($thematique->getOrdre()); ?> </span> 
                </td>
                <td class="col-lg-10" style="border: none;" >
                  <div class="row" style=" padding-left: 8px;" > <h2> <?php echo($thematique->getTitre()); ?>.</h2> </div>
                  <?php echo($thematique->getContenu()); ?>
                </td>

                 <td class="col-lg-1" style="border: none;  padding-right: 8px;" >
                    <a href="thematiques.php?modifier=<?php echo($thematique->getId());?>&amp;title=THEMATIQUES&amp;protected=99">  <i class="fas fa-edit"></i> </a>  <a href="supprimer.php?thematique=<?php echo($thematique->getId()); ?>">  <i class="fas fa-trash-alt"></i>  </a>
                </td>
            </tr>

    <?php } ?> 
           
        </tbody>
    </table>


<?php    }else { ?>
    
  
    <table class="table table-bordered   row" >

        <tbody class="col-lg-12"  >

  <?php  foreach ($_SESSION['thematique'] as $key => $thematique) { ?>
            <tr class="row" style=" background-color:  white; border-bottom: 1px solid rgba(122,122,122,0.1);">
                <td class="col-lg-1" style="text-align:center; border: none; background-color: rgba(122,122,122,0.3); "> 
                  <span style="font-size: 2em; display: inline-block; border: 1px solid black; text-align: center; border-radius: 20px; padding-left: 5px; padding-right: 5px; "> <?php echo($thematique->getOrdre()); ?> </span> 
                </td>
                <td class="col-lg-11" style="border: none;" >
                  <div class="row" style=" padding-left: 8px;" > <h2> <?php echo($thematique->getTitre()); ?>.</h2> </div>
                  <?php echo($thematique->getContenu()); ?>
                </td>

                 
            </tr>

    <?php } ?> 
           
        </tbody>
    </table>



<?php    }  ?>



  </div>



  <?php include("include/pied.php"); ?>
