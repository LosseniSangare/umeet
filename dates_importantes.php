
 <?php  include("include/entete.php");

  $requete = $bd->query('SELECT * FROM etapes ORDER BY etape_date ASC');

  $_SESSION['etape'] = [];
  while ($donnees = $requete->fetch()) {
     $_SESSION['etape'][] = new Etape($donnees['id'], date_format(date_create( $donnees['etape_date']),"d-m-Y") , stripslashes($donnees['contenu']),$donnees['ordre']);
    
  }

    $requete->closeCursor();



    $_SESSION['order'] = 1;  
  $requete2 = $bd->query('SELECT MAX(ordre) AS max_order FROM etapes');
  while ($donnees2 = $requete2->fetch()) { $_SESSION['order'] =  $donnees2['max_order']+1; }
  $requete->closeCursor();




  ?>


   <div  class="container" style="min-height: 500px;">
    <div class="row">
      <div class="col-lg-12 contenu-centre"> <h1> DATES IMPORTANTES</h1> </div> 
    </div>




<?php if (isset($_SESSION['user'])&&isset($_GET['protected'])&&($_GET['protected']==99) ) {?>

      
<?php if (isset($_GET['modifier'])) { 

      $titr = ''; $message = ''; $ordr = 0; 
      foreach ($_SESSION['etape'] as $key => $etape) {
          if ($etape->getId()==$_GET['modifier']) { $id=$etape->getId(); $date = $etape->getDate(); $message = $etape->getContenu(); $ordr = $etape->getOrdre(); }
      }

  ?>

       <div class="container">
      <div class="row">
        <div class="col-12"  style="border-bottom:  1px solid rgba(122,122,122,0.2); margin: 30px;">
          <h2 class="contact-title text-centre">  Modifiaction d'une étape de deroulements du colloque.</h2>
        </div>

        <div class="col-lg-12">
          <form class="form-contact contact_form" action="process_etape.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">


              <div class="col-4">
                <div class="form-group">
                  <label for="date_etape"> La date de l'étape</label>
                  <input class="form-control" name="date_etape" id="date_etape" type="date" placeholder="Entrez le nom de l'hebergement" required value="<?php echo(date_format(date_create($date),"Y-m-d"))?>" >
                </div>
              </div>

            <input class="form-control" name="ordre" id="ordre" type="date" placeholder="Entrez le nom de l'hebergement" required hidden value=<?php echo($_SESSION['max_order']);?> >

             <input class="form-control" name="id" id="ordre" type="number" required hidden value=<?php echo($id);?> > 
          
              
              <div class="col-6">
                <div class="form-group">
                    <label for="etape"> Entrez l'évenement prevu à cette.</label>
                    <textarea class="form-control w-100" name="etape" id="etape" cols="30" rows="4" placeholder="Entrez l'évenement prevu à cette.">  
                     <?php echo($message); ?> </textarea>
                </div>
              </div>
             <div class="form-group mt-3">
              <br> 
              <button  type="submit" class="button button-contactForm">Modifier</button>
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
          <h2 class="contact-title text-centre">  Ajouter des étapes de deroulements du colloque.</h2>
        </div>

        <div class="col-lg-12">
          <form class="form-contact contact_form" action="process_etape.php" method="post" id="contactForm" novalidate="novalidate"> 
            <div class="row">


              <div class="col-4">
                <div class="form-group">
                  <label for="date_etape"> La date de l'étape</label>
                  <input class="form-control" name="date_etape" id="date_etape" type="date" placeholder="Entrez le nom de l'hebergement" required>
                </div>
              </div>

            <input class="form-control" name="ordre" id="ordre" type="date" placeholder="Entrez le nom de l'hebergement" required hidden value=<?php echo($_SESSION['order']);?> > 
          
              
              <div class="col-6">
                <div class="form-group">
                    <label for="etape"> </label>
                    <textarea class="form-control w-100" name="etape" id="etape" cols="30" rows="4" placeholder="Entrez votre message"></textarea>
                </div>
              </div>
             <div class="form-group mt-3">
              <br> 
              <button  type="submit" class="button button-contactForm">Ajouter</button>
            </div>

            </div>
            
          </form>
        </div>

      </div>
    </div>


 <?php } ?>
      
      <table class="table table-bordered table-striped table-condensed row">
        <thead class="col-lg-12">
          <tr class="row" style="text-align: center; background-color: rgb(136,0,21); color: white;">
            <th class="col-lg-2">DATES (jj/mm/aaaa)</th>
            <th class="col-lg-9">ETAPES</th>
            <td class="col-lg-1" >  </div>
          </tr>
        </thead>
        <tbody class="col-lg-12">

          <?php foreach ($_SESSION['etape'] as $key => $etape) { ?>

            <tr class="row"  ">
                <td class="col-lg-2" > <?php echo( $etape->getDate()); ?> </td>
                <td class="col-lg-9" > <?php echo( $etape->getContenu()); ?> </td>
                <td class="col-lg-1" > 
                     <a href="dates_importantes.php?modifier=<?php echo($etape->getId());?>&amp;title=Dates importantes&amp;protected=99">
                    <i class="fas fa-edit"></i>    </a>
                     <a   href="supprimer.php?etape=<?php echo($etape->getId()); ?>"  > <i class="fas fa-trash-alt"> </i>  </a>
                </td>
            </tr>


            <?php   }   ?>



        </tbody>
    </table> 


<?php    }else { ?> 

      <table class="table table-bordered table-striped table-condensed row">
        <thead class="col-lg-12">
          <tr class="row" style="text-align: center; background-color: rgb(136,0,21); color: white;">
            <th class="col-lg-2">DATES (jj/mm/aaaa)</th>
            <th class="col-lg-10">ETAPES</th>
          </tr>
        </thead>
        <tbody class="col-lg-12">

          <?php foreach ($_SESSION['etape'] as $key => $etape) { ?>

            <tr class="row"  ">
                <td class="col-lg-2" > <?php echo( $etape->getDate()); ?> </td>
                <td class="col-lg-10" > <?php echo( $etape->getContenu()); ?> </td>
            </tr>


            <?php   }   ?>



        </tbody>
    </table>


<?php    }  ?>


  </div>
  <?php include("include/pied.php"); ?>
