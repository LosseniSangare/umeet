<?php 
include("connexion/data/connexion.php");


if (isset($_POST['password']) && isset($_POST['email'])&& isset($_POST['email_repete'])&& isset($_POST['password_repete'])&& isset($_POST['code'])&& isset($_POST['nom'])&& isset($_POST['prenoms']) && isset($_POST['tel'])) {

	if ($_POST['password']==$_POST['password_repete']) { $password = md5(htmlspecialchars($_POST['password']));}
	else{ header('Location:login.php?passwordok=false'); exit(); }
	if ($_POST['email']==$_POST['email_repete']) { $email = addslashes( htmlspecialchars($_POST['email']));}
	else{ header('Location:login.php?emailok=false'); exit(); }
    $nom = addslashes( htmlspecialchars($_POST['nom']));
    $prenoms = addslashes( htmlspecialchars($_POST['prenoms']));
    $tel = addslashes( htmlspecialchars($_POST['tel']));

	$requete = $bd->prepare('SELECT * FROM autorisations WHERE destinataire_email=:email AND code=:code');
	$requete->execute(array(
		'email' =>  $email,
		'code' =>  addslashes($_POST['code'])	
	  )); 
	$i=0;
	while ($donnees = $requete->fetch()) {$i++;}
	$requete->closeCursor();

	if ($i==1) { 
		$requete = $bd->prepare('SELECT * FROM users WHERE email=:email ');
		$requete->execute(array('email' =>  $email ));
		while ($donnees = $requete->fetch()) {$i++;}
		$requete->closeCursor();

		if ($i>1){header('Location:login.php?emailexist=yes'); } 
		else{ $code = 	addslashes($_POST['code']); 

		$requete = $bd->prepare('INSERT INTO users (nom,prenoms,email,password,tel,habilitation) VALUES(:nom,:prenoms,:email,:password,:tel,:habilitation)');
		$requete->execute(array(
			'nom' =>  $nom,
			'prenoms' =>  $prenoms,
			'email' =>  $email,
			'password' =>  $password,
			'tel' =>  $tel,
			'habilitation' => 'standard'
	  	)); 
			$requete->closeCursor();
			header('Location:login.php?inscrit=oui&login=1');
		}
	}
	else{header('Location:login.php?code=false');}
	


	$i=0;
	
}
else{header('Location:index.php'); }

 exit();
 ?>
