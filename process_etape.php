<?php 
session_start();
include("connexion/data/connexion.php");

if (isset($_POST['date_etape']) && isset($_POST['ordre'])&& isset($_POST['etape'])&&(!isset($_POST['id']))){

	 $date = $_POST['date_etape']; 
	 $ordre = intval( $_SESSION['order']); 
	 $etape =  addslashes(htmlspecialchars($_POST['etape']));

	$requete = $bd->prepare('INSERT INTO etapes(etape_date,contenu, ordre)VALUES(:dateEtape, :contenu, :ordre) ');
	$requete->execute(array(
		'dateEtape' =>  $date,
		'contenu' =>  $etape,
		'ordre' =>  $ordre
	  )); 

	header('Location:dates_importantes.php?title=Dates importantes&protected=99');
	exit(); 

	
 
 }elseif (isset($_POST['date_etape']) && isset($_POST['ordre'])&& isset($_POST['etape'])&& isset($_POST['id'])){

	 $date = $_POST['date_etape']; 
	 $ordre = intval( $_SESSION['order']); 
	 $etape =  addslashes(htmlspecialchars($_POST['etape']));

	$requete = $bd->prepare('UPDATE etapes SET etape_date=:date1,contenu=:contenu, ordre=:ordre WHERE id = :id ');
	$requete->execute(array(
		'id' =>  $_POST['id'],
		'date1' =>  $date,
		'contenu' =>  $etape,
		'ordre' =>  $ordre
	  )); 
	header('Location:dates_importantes.php?title=Dates importantes&protected=99');
	exit(); 

	
 
 } 
 else{ header('Location:index.php');}


 ?>


