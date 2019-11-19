<?php 

if (isset($_GET["title"])) {
 $title= htmlspecialchars($_GET["title"]);
}
else{ $title = "Conference";}

 ?>


<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>  <?php echo($title);?>   </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->

   <link rel="stylesheet" href="../vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="../vendors/linericon/style.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../vendors/flat-icon/font/flaticon.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/forme.css">


    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body style="background-color: rgba(122,122,122,0.2);">
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


<!--================ Header Menu Area start =================-->
  <header class="header_area"  >
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light" id="main_menu_nav">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end main-nav">
              <li class="nav-item <?php if($title=="Accueil"){echo("active");} ?> "><a class="nav-link" href="http://localhost/umeet/?title=Accueil">Accueil</a></li> 
              <li class="nav-item  <?php if($title=="A propos"){echo("active");} ?> "><a class="nav-link" href="../propos.php? title=A propos">A propos</a></li> 
              <li class="nav-item <?php if($title=="Conférenciers"){echo("active");} ?>  "><a class="nav-link" href="../Conferenciers.php?title=Conférenciers">Conferenciers</a>
              <li class="nav-item <?php if($title=="Contacts"){echo("active");} ?>  "><a class="nav-link" href="../contact.php?title=Contacts">Contacts</a></li>
            </ul>
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="active" style="font-weight: bold; color: white;"><a href="../connexion/login.php">Connexion</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>



	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login"> 
        <p style="text-align: center; color: red; "> 
          <?php if (isset($_GET['connect']) && $_GET['connect']=='failed' ) {
            echo("La connexion a échoué. Des informations entrées sont incorrectes. ");
          } ?>
        </p>
        <p style="text-align: center; color: green; "> 
          <?php if (isset($_GET['inscrit']) && $_GET['inscrit']=='oui' ) {
            echo("Votre inscription a été effectuée avec succès. Veuillez entrez vos coordonnées pour vous connecter. ");
          } ?>
        </p>

				<h3> CONNECTEZ-VOUS COMME ADMINISTRATION</h3>
				<p> </p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="login_process.php" method="post" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Identifiant</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Entrez votre identifiant unique</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password"> Mot de passe</label>
                                <input type="password" title="Please enter your password" placeholder="******" required value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Mot de passe fort</span>
                            </div>
                           
                            <button class="btn btn-success btn-block loginbtn">Connecter</button>
                            
                            <p>  Ou  <a href="register.php" style="background-color: rgba(122,122,122,0.5);margin-right: 5px; margin-left: 5px; border: none;">Inscrivez-vous ici</a>

                            </p>
                            
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>   </p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>






    <script src="../vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="../vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="../vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="../vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="../js/jquery.ajaxchimp.min.js"></script>
  <script src="../js/mail-script.js"></script>
  <script src="../js/countdown.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>   
  <script src="../js/main.js"></script>


  <script src="../js/jquery.form.js"></script>
  <script src="../js/jquery.validate.min.js"></script>
  <script src="../js/contact.js"></script>



</body>

</html>