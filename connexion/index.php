
    <?php 
    include("data/connexion.php");
    include("data/mesClass.php"); 
    session_start();
    if (!isset($_SESSION['user'])) { header("Location:../index.php"); }
    
    include("include/entete.php"); 
   
    ?>

            <!-- Mobile Menu start -->

             <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">  
                                        <?php include("include/menu.php"); ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
           </div>

           
            <!-- Mobile Menu end -->

            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


<div class="container-fluid" >

    <div class="row main" style="min-height: 700px;" >
        <p style="font-size: 2em;">  Bienvenu à  <span style="font-weight: bold;"> <?php echo(''.$_SESSION['user']->getPrenoms().''); ?></span></p>
 
        <div class="col-lg-12" >  
            <div class="row"  >
                <div class="col-lg-1"> </div>
                <div  class="col-lg-10" style="background-color: rgb(136,0,21); font-size:1.5em; color: white; text-align: center;" > Ajouter, suprimer ou  modifier les entités ci-dessous </div>
                <div class="col-lg-1"> </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="row" >
                <div class="col-lg-1"  > </div>
                <div class=" col-lg-10" >
                    <div class="row" style="margin-top: 20px; font-weight: bold; "> 
                        <div class="col-lg-4" > 
                            <a href="../thematiques.php?title=THEMATIQUES&amp;protected=99"> Les thématiques </a> 
                        </div>
                        <div class="col-lg-4" > 
                            <a href="../dates_importantes.php?title=Dates importantes&amp;protected=99"> Dates importantes (étape) </a> 
                        </div>
                        <div class="col-lg-4" > 
                             <a href="../hebergement.php?title=HEBERGEMENT&amp;protected=99"> Hebergement </a> 
                        </div>
                    </div>

                    <div class="row" style="margin-top: 20px; font-weight: bold; "> 
                        <div class="col-lg-4" > 
                            <a href="../info.php?protected=99"> Informations </a> 
                        </div>
                        <div class="col-lg-4" > 
                            <a href="../comites.php?title=COMITES&amp;protected=99">Membres des comités </a> 
                        </div>
                        <div class="col-lg-4" > 
                             <a href="../liste_comite.php?title=COMITES&amp;protected=99"> Les comités  </a> 
                        </div>
                    </div>




                </div>  
            <div class="col-lg-1"> </div>
       
            </div> 
        </div>

    </div>


    <div class="row" style="background-color: rgba(122,122,122,0.8);" >
      <div class="col-lg-12">
         <div  style="text-align: center;">

           <p style="color: white;"> <br> Webmaster <span style="color: black;"> ||</span> +225 78320993 : keassagbehe@gmail.com   <span style="color: black;"> ||</span> loss.sangare24@gmail.com-</p>
         </div>
      </div>
    </div>

</div>
<div class="" >
            <div class="container">
               
            </div>
        </div>
      <?php include("include/pied.php"); ?>