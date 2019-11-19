<!--  WEBMASTERS: -->
<!--  Gbehe Keassa Bonaventure, étudiant à l'université Nangui Abrogoua d'Abidjan -->
<!--  Sangaré Amadou Losseni, étudiant à l'université Nangui Abrogoua d'Abidjan -->
<!--  Responsable du projet: Gbehe Keassa Bonaventure -->
<!--  Fin du projet: 09/09/2019 -->
<?php 
include("connexion/data/mesClass.php");
include("connexion/data/connexion.php");
session_start();
if (isset($_GET["title"])) {
 $title= htmlspecialchars($_GET["title"]);
}
else{ $title = "Conference";}
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>  <?php echo($title);?>   </title>
	<link rel="icon" href="img/favicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/forme.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area"  >
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light" id="main_menu_nav">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="connexion/img/logo/logo.jpg" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
             <li class="nav-item <?php if($title=="Accueil"){echo("active");} ?> " style="margin: 5px; "  >
                  <a class="nav-link" href="http://localhost/umeet/?title=Accueil">Accueil</a>
              </li> 

              <li class="nav-item  <?php if($title=="Dates importantes"){echo("active");} ?> " style=" margin: 5px;">
                  <a class="nav-link" href="dates_importantes.php? title=Dates importantes">Dates importantes</a>
              </li>

              <li class="nav-item   <?php if($title=="APPEL A COMMUNICATION"){echo("active");} ?> " id="nav-elmt" style=" margin: 5px;">
                  <a class="nav-link" href="communications.php? title=APPEL A COMMUNICATION">Communications</a>
              </li>
              
              <li class="nav-item   <?php if($title=="THEMATIQUES"){echo("active");} ?> " id="nav-elmt" style=" margin: 5px;">
                  <a class="nav-link" href="thematiques.php? title=THEMATIQUES">Thématiques</a>
              </li>

              <li class="nav-item  <?php if($title=="COMITES"){echo("active");} ?> " style=" margin: 5px;">
                  <a class="nav-link" href="comites.php?title=COMITES">Comités</a>
              </li>

              <li class="nav-item   <?php if($title=="HEBERGEMENT"){echo("active");} ?> " id="nav-elmt" style=" margin: 5px;">
                  <a class="nav-link" href="hebergement.php? title=HEBERGEMENT">Hebergement</a>
              </li>


              <li class="nav-item <?php if($title=="PARTENAIRES"){echo("active");} ?>  " style=" margin: 5px;">
                <a class="nav-link" href="partenaires.php?title=PARTENAIRES">Partenaires</a>
              </li>

              <li class="nav-item <?php if($title=="Contacts"){echo("active");} ?>" style=" margin: 5px;" >
                <a class="nav-link" href="contact.php?title=Contacts">Contacts</a>
              </li>

              <li class="nav-item submenu dropdown" style=" margin: 5px;">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Participer</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="#blog.html">s'inscrire </a></li>
                  <li class="nav-item"><a class="nav-link" href="#blog-details.html">Paiement</a></li>
                  <li class="nav-item"><a class="nav-link" href="dates_importantes.php? title=Dates importantes">Dates</a></li>
                </ul>
              </li>

            </ul>

            <ul class="nav-right text-center text-lg-right py-4 py-lg-0">



              <?php 
              if (isset($_SESSION['user'])&&$_SESSION['user']!=null) {echo('<li><a href="connexion/" style="font-weight: bold; color: white;">  Administration </a></li>');}
              else{ echo('<li><a href="login.php?login=1" style="font-weight: bold; color: white;">  Connexion</a></li>'); }


               ?>
           
            



            </ul>




          </div> 
        </div>
      </nav>
    </div>
  </header>


   