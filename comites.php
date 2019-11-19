
 <?php
include("include/entete.php");
include("connexion/data/connexion.php");
$req=$bd->prepare('SELECT * FROM comites');
$req->execute();


    // Verifie l'existence d'un administration
  $user =  (isset($_SESSION['user'])&&isset($_GET['protected'])&&$_GET['protected']==99) 

 

 ?>
  <!--================Header Menu Area =================-->



  <div  class="container" style="min-height: 500px;">

     <div class="row">
      <div class="col-lg-12 contenu-centre"> <h1 style="color:#440088;">
        
        LES COMITES D'ORGANISATION</h1>
      
     

        <?php
        if(isset ($_SESSION['modifie']) || isset($_SESSION['sup'])){
             if (isset($_SESSION['modifie'])) {echo $_SESSION['modifie'];  $_SESSION['modifie']="";} 
             if (isset($_SESSION['sup'])) {echo $_SESSION['sup'];  $_SESSION['sup']="";} 
             
             
            }
              ?>
     </div>

    </div>




<?php
   while ($res=$req->fetch()) {
     $donnee[]=$res;
   }
   $i=1;
   foreach ($donnee as $key => $value) {
 ?>
      <div class="row" >
        <div class="col-lg-2"></div>
        <div class="col-lg-8" style="text-align: center;">
           <h3 style="color:#FF007F;">
              <?php
                  echo $i.   ' ) '.$donnee[$key]['intitule'];
                  $i++;
                ?>
          </h3>
          </div>

        <div class="col-lg-2"></div>
      </div>



      <div class="row">
        <div class="col-lg-2"></div>

        <table class="table table-bordered col-lg-8"  >
            <tbody >

                      <?php
                      $req1=$bd->prepare('SELECT * FROM membres WHERE comite=:comite');
                      $req1->bindValue(':comite',$donnee[$key]['id'],PDO::PARAM_INT);
                      $req1->execute();
                      while ($membre=$req1->fetch()){
                        ?>
                        <tr>
                            <td class="col-lg-10">
                               <?php echo $membre['nom'].' '.$membre['prenom']; ?>
                             </td>
                             <?php if($user){  ?>
                             <td class="col-lg-2">
                               <center>
                                  <a href="edit_membre.php?protected=99&amp;idMod=<?=$membre['id'];?>"> <i class="far fa-edit" style="font-size:120%;"></i></a>
                                  <a href="register_traitement.php?protected=99&amp;idSup=<?=$membre['id']; ?>"> <i class="far fa-trash-alt" style="font-size:12  0%; color:#ff2222;"></i></a>
                                </center>
                          </td>
                        <?php } ?>
                        </tr>
                        <?php

                      };
                      ?>
            </tbody>
      </table>

          <div class="col-lg-2"></div>
     </div>
     <?php
     }
        ?>


          <!-- <div class="col-lg-2"></div> -->
     </div>




  <?php include("include/pied.php"); ?>
