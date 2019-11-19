<?php 
session_start();
include("connexion/data/connexion.php");

if (isset($_POST['titre']) && isset($_POST['contenu'])&&(!isset($_POST['id']))){
 
	 $titre =  addslashes(htmlspecialchars($_POST['titre']));
	 $contenu =  addslashes(htmlspecialchars($_POST['contenu']));
	 $dates = "" ;

	$requete = $bd->prepare('INSERT INTO infos(titre,contenu, dates)VALUES(:titre, :contenu, :dates) ');
	$requete->execute(array(
		'titre' =>  $titre,
		'contenu' =>  $contenu,
		'dates' =>  $dates
	  )); 

	header('Location:info.php?protected=99');
	exit(); 

	
 
 }elseif (isset($_POST['titre']) && isset($_POST['contenu'])&& isset($_POST['id'])){
 
	 $titre =  addslashes(htmlspecialchars($_POST['titre']));
	 $contenu =  addslashes(htmlspecialchars($_POST['contenu']));
	 $dates = new DateTime(); 

	$requete = $bd->prepare('UPDATE info SET titre=:titre,contenu=:contenu, dates=:dates WHERE id = :id ');
	$requete->execute(array(
		'id' =>  $_POST['id'],
		'titre' =>  $titre,
		'contenu' =>  $contenu,
		'dates' =>  DateTime() 
	  )); 

	header('Location:info.php?protected=99');
	exit(); 

	
 
 }  
 else{ header('Location:index.php');}


 ?>


