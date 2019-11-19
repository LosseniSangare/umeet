<?php 
session_start();
include("connexion/data/connexion.php");

if (isset($_POST['titre']) && isset($_POST['contenu'])&&(!isset($_POST['id']))){
 
	 $titre =  addslashes(htmlspecialchars($_POST['titre']));
	 $contenu =  addslashes(htmlspecialchars($_POST['contenu']));
	 $ordre = intval( $_SESSION['order']); 

	$requete = $bd->prepare('INSERT INTO thematiques(titre,contenu, ordre)VALUES(:titre, :contenu, :ordre) ');
	$requete->execute(array(
		'titre' =>  $titre,
		'contenu' =>  $contenu,
		'ordre' =>  $ordre
	  )); 

	header('Location:thematiques.php?title=THEMATIQUES&protected=99');
	exit(); 

	
 
 }elseif (isset($_POST['titre']) && isset($_POST['contenu'])&& isset($_POST['ordre'])&& isset($_POST['id'])){
 
	 $titre =  addslashes(htmlspecialchars($_POST['titre']));
	 $contenu =  addslashes(htmlspecialchars($_POST['contenu']));
	 $ordre = intval( $_POST['ordre']); 

	$requete = $bd->prepare('UPDATE thematiques SET titre=:titre,contenu=:contenu, ordre=:ordre WHERE id = :id ');
	$requete->execute(array(
		'id' =>  $_POST['id'],
		'titre' =>  $titre,
		'contenu' =>  $contenu,
		'ordre' =>  $ordre
	  )); 

	header('Location:thematiques.php?title=THEMATIQUES&protected=99');
	exit(); 

	
 
 }  
 else{ header('Location:index.php');}


 ?>


