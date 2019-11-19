<?php 


include("connexion/data/user.php");
session_start();
include("connexion/data/connexion.php");

if (isset($_POST['password']) && isset($_POST['username'])) {
	
	$password = md5( htmlspecialchars($_POST['password']));
	  
	$username = addslashes(htmlspecialchars($_POST['username']));
	$requete = $bd->prepare('SELECT * FROM users WHERE email=:username AND password=:user_password');
	$requete->execute(array(
		'username' =>  $username,
		'user_password' =>  $password 
	  )); 
	$i=0;
	while ($donnees = $requete->fetch()) {
		$i++;
		$_SESSION['user'] = new User($donnees['id'],$donnees['nom'],$donnees['prenoms'],$donnees['email'],$donnees['tel'],$donnees['password'],$donnees['habilitation']);
	}
	if ($i>0) {

		header('Location:connexion/'); 
	}
	else{header('Location:login.php?connect=failed');}
	$i=0;
}
else{header('Location:../index.php'); }

 exit();
 ?>