
 <?php
include("include/entete.php");
include("connexion/data/connexion.php");
 ?>

<div class="container" style="min-height: 500px; background-color: rgba(122,122,122,0.1);"">  


<?php if (isset($_GET['login'])&&$_GET['login']==1) { ?>

  
  <div class="row" style=""> 

    <div class="col-lg-4"> </div>
 
  <div class="error-pagewrap col-lg-4">
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
                            
                            <p>  Ou  <a href="login.php" style="background-color: rgba(122,122,122,0.5);margin-right: 5px; margin-left: 5px; border: none;">Inscrivez-vous ici</a>

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

     <div class="col-lg-4"> </div>
 
 
  </div>




<?php }else{ ?>

  <div class="row" style="margin-top: 15px;">
    <div class="col-lg-2"> </div>
    <div class=" col-lg-8"> 

        <h2 style="text-align: center; "> Inscription </h2>
        <P  style="text-align: center; "> Pour vous inscrire étant qu'administrateur vous devez avoir un code d'autorisation</P>
      

    </div>
    <div class="col-lg-2"> </div>

   </div>
  <div class="row" style="margin-bottom: 15px;" >
  <div class="col-lg-3"> </div>

  <div class="error-pagewrap col-lg-6">
    <div class="error-page-int">
      <div class="text-center custom-login">
        <p style="text-align: center; color: red; "> 
          <?php if (isset($_GET['passwordok']) && $_GET['passwordok']=='false' ) {
            echo("Vous n'etes pas parvenus à repeter votre mot de passe correctement.");
          } ?>
        </p>

        <p style="text-align: center; color: red; "> 
          <?php if (isset($_GET['emailok']) && $_GET['emailok']=='false' ) {
            echo("Vous n'etes pas parvenus à repeter votre email correctement.");
          } ?>
        </p>

        <p style="text-align: center; color: red; "> 
          <?php if (isset($_GET['emailexist']) && $_GET['emailexist']=='yes' ) {
            echo("L'adresse email que vous avez saise existe dejà.");
          } ?>
        </p>

        <p style="text-align: center; color: red; "> 
          <?php if (isset($_GET['code']) && $_GET['code']=='false' ) {
            echo("Le code d'autorisation d'inscription que vous avez saisi est faux. ");
          } ?>
        </p>

        <p>   </p>
      </div>
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                        <form action="register_process.php" method="post" id="loginForm">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Code d'autorisation</label>
                                    <input type="text" class="form-control" required name="code">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Téléphone </label>
                                    <input type="text" class="form-control" required name="tel">
                                </div>


                                 <div class="form-group col-lg-6">
                                    <label>Nom </label>
                                    <input type="text" class="form-control" required name="nom">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Prenoms</label>
                                    <input type="text" class="form-control" required name="prenoms">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Email </label>
                                    <input type="email" class="form-control" required name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repéter  l'email </label>
                                    <input type="email" class="form-control" required name="email_repete">
                                </div>
                                
                                <div class="form-group col-lg-6">
                                    <label>Mot de passe </label>
                                    <input type="password" class="form-control" required name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repéter le mot de passe</label>
                                    <input type="password" class="form-control" required name="password_repete">
                                </div>
                                
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success loginbtn">Envoyer</button>
                                <a href="../index.php" class="btn btn-default" style="padding-right: 5px; padding-left: 5px;" >Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
      </div>
    </div>   
    </div>
  <div class="col-lg-3"> </div>
 </div>




<?php } ?>



</div>
  <?php include("include/pied.php"); ?>
