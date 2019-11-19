<?php 
session_start();
include("connexion/data/connexion.php");

if (isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['subject'])&& isset($_POST['message']) ){

	 $nom = addslashes( htmlspecialchars($_POST['name']));
	 $email =addslashes( htmlspecialchars($_POST['email']));
	 $objet = addslashes( htmlspecialchars($_POST['subject']));
	 $message = addslashes( htmlspecialchars($_POST['message']));

	$requete = $bd->prepare('INSERT INTO messages(nom, email, objet, contenu)VALUES(:nom, :email, :objet,:message) ');
	$requete->execute(array(
		'nom' =>  $nom,
		'email' =>  $email,
		'objet' =>  $objet,
		'message' =>  $message	
	  )); 

	header('Location:index.php');
	exit();
 } 
 else{ header('Location:index.php');}



 ?>