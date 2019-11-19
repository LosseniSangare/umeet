
 <?php  include("include/entete.php"); 

  

 $requete = $bd->query('SELECT * FROM infos ORDER BY dates DESC');

  $_SESSION['info'] = [];
  while ($donnees = $requete->fetch()) {
     $_SESSION['info'][] = new Info($donnees['id'], stripslashes(htmlspecialchars($donnees['titre'])),stripslashes( htmlspecialchars($donnees['contenu'])), $donnees['dates']);  
  }
    $requete->closeCursor();

?>



     <div  class="container" style="min-height: 500px;">
        <div class="row">
          <div class="col-lg-12 contenu-centre"> <h1> Informations  </div> 
        </div>





<?php if (isset($_SESSION['user'])&&isset($_GET['protected'])&&($_GET['protected']==99) ) {?>

      
<?php if (isset($_GET['modifier'])) { 

$titr = ''; $message = ''; $dates = ''; 
foreach ($_SESSION['info'] as $key => $thematiq) {
  if ($thematiq->getId()==$_GET['modifier']  ) { $id=$thematiq->getId(); $titr = $thematiq->getTitre(); $message = $thematiq->getContenu(); $ordr = $thematiq->getDates(); }
}

  ?>



      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); ">
          <h2 class="contact-title text-centre"> Modification d'une informations <span style="color: red;"><?php echo( $ordr ); ?></span>.</h2>
        </div>

        <div class="col-lg-12"   >
          <form class="form-contact contact_form" action="process_info.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">
            
            <div class="col-4">
                <div class="form-group">
                    <label for="titre"> Le titre de l'information </label>
                    <textarea style="border: 1px solid green;" class="form-control w-100" name="titre" id="titre"  placeholder="Entrez le titre de l'info." required>  <?php echo($titr); ?></textarea>
                </div>
            </div>

              <div class="col-5">
                <div class="form-group">
                    <label for="etape"> Modification du developpement de l'information </label>
                    <textarea style="border: 1px solid green;"  class="form-control w-100" name="contenu" id="contenu" required  placeholder="Modifier du developpement de l'information"  cols="30" rows="5" >  <?php echo($message); ?> </textarea>
                </div>
              </div> 

                <div class=" col-2 form-group mt-3">
                    <div class="row"> 
                        <div class="col-lg-1"> <input type="number" name="id"  hidden value=<?php echo($id);?> ></div>
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
          <h2 class="contact-title text-centre">  Enregistrez une information </h2>
        </div>

        <div class="col-lg-12"   >
          <form class="form-contact contact_form" action="process_info.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">

              <div class="col-5">
                <div class="form-group">
                    <label for="etape"> Le titre </label>
                    <textarea style="border: 1px solid green;" class="form-control w-100" name="titre" id="titre"  placeholder="Entrez le titre de l'information." required></textarea>
                </div>
              </div>


              <div class="col-5">
                <div class="form-group">
                    <label for="etape"> Developpez l'information </label>
                    <textarea style="border: 1px solid green;"  class="form-control w-100" name="contenu" id="contenu" required  placeholder="Ajoutez un developpement de l'information."  cols="30" rows="5" ></textarea>
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

  <?php  foreach ($_SESSION['info'] as $key => $info) { ?>
            <tr class="row" style=" background-color:  white; border-bottom: 1px solid rgba(122,122,122,0.1);">
                <td class="col-lg-2" style="text-align:center; border: none; background-color: rgba(122,122,122,0.3); "> 
                  <span style="font-size: 1em; display: inline-block; border: 1px solid black; text-align: center; border-radius: 20px; padding-left: 5px; padding-right: 5px; "> <?php echo($info->getDates()); ?> </span> 
                </td>
                <td class="col-lg-9" style="border: none;" >
                  <div class="row" style=" padding-left: 8px;" > <h2> <?php echo($info->getTitre()); ?>.</h2> </div>
                  <?php echo($info->getContenu()); ?>
                </td>

                 <td class="col-lg-1" style="border: none;  padding-right: 8px;" >
                    <a href="info.php?modifier=<?php echo($info->getId());?>&amp;protected=99">  <i class="fas fa-edit"></i> </a>  <a href="supprimer.php?info=<?php echo($info->getId()); ?>">  <i class="fas fa-trash-alt"></i>  </a>
                </td>
            </tr>

    <?php } ?> 
           
        </tbody>
    </table>


<?php    }else  ?>



  </div>



  <?php include("include/pied.php"); ?>
