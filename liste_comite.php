<?php
if(!(isset($_GET['protected'])&&$_GET['protected']==99)){
  header('Location:index.php');
  exit();
}
      include("include/entete.php");
       include("connexion/data/connexion.php");
       $req=$bd->prepare('SELECT * FROM comites');
       $req->execute();
?>

<div  class="container" style="min-height: 500px;">

   <div class="row">
    <div class="col-lg-12 contenu-centre">
       <h1 style="color:#440088;">LISTE DES COMITES</h1>

       <?php

        if(isset($_GET['idModC'])){
          $req1=$bd->prepare('SELECT * FROM comites WHERE id=:id');
          $req1->bindValue(':id',$_GET['idModC'],PDO::PARAM_INT);
          $req1->execute();
          $res1=$req1->fetch();
           ?>
           <center>
          <div class="col-lg-12">
            <form class="form-contact contact_form" action="register_traitement.php?idModifC=<?=$_GET['idModC']; ?>" method="post" id="contactForm" novalidate="novalidate">
              <div class="col-sm-8">
                <div class="form-group row">

                  <div class="col-sm-8">
                      <label for="intitule_com" style="color:#ff4444; font-size:150%;"> Modifiez le comité dans le champ ci-dessous </label>
                      <input class="form-control" name="intitule_com" id="intitule_com" type="text"
                      value="<?=$res1['intitule']; ?>" style="border: 2px solid #ffddff;"required>
                  </div>

                  <div class="col-sm-3">
                    <p> <br> </p>
                    <input type="submit" class="button button-contactForm btn-sm " name="modifC" value="Valider">
                  </div>
                </div>

              </div>
          </form>
        </div>
      </center>
          <?php
       }?> <?php
       if(isset($_GET['modifCok'])||isset($_SESSION['modifie_com']) || $_SESSION['supCom']=1){
            if (isset($_SESSION['modifie_com'])) { echo $_SESSION['modifie_com']; $_SESSION['modifie_com']=""; }
            if (isset($_SESSION['supCom'])) {echo $_SESSION['sup_com']; $_SESSION['sup_com']="";  $_SESSION['supCom']=0;}
 
           }
             ?>

             <div class="row">
               <div class="col-lg-2"></div>
               <div class="col-lg-8" style="text-align: center;">

                  </div>
                  <div class="col-lg-2"></div>
                </div>

                <div class="row">
                  <div class="col-lg-2"></div>

                  <table class="table table-bordered col-lg-8"  >

                      <tbody >

                          <?php
                            $req=$bd->query("SELECT * FROM comites");
                             $i=1;
                            while($res=$req->fetch()){
                              ?>
                              <tr><b>
                                 <td class="">
                                   <?=$i ?>
                                 </td>
                              <td class="col-lg-9">
                                 <?php
                                 echo $res['intitule'];
                                 $i=$i+1;
                                 ?>
                               </td>
                                 <?php if(isset($_SESSION['user'])){  ?>
                                 <td class="col-lg-1">
                                   <center>
                                      <a href="liste_comite.php?protected=99&amp;idModC=<?=$res['id']; ?>"> <i class="far fa-edit" style="font-size:120%;"></i></a>
                                      <a href="register_traitement.php?idSupC=<?=$res['id']; ?>"> <i class="far fa-trash-alt" style="font-size:12  0%; color:#ff2222;"></i></a>
                                    </center>
                                  </td></b>
                            <?php }; ?>
                            </tr>

                              <?php
                            }
                            ?>
                          </tbody>
                    </table>

                        <div class="col-lg-2"></div>
                   </div>
   </div>

  </div>
</div>


       <script src="js/hebergement.js"></script>
      <?php include("include/pied.php");?>
