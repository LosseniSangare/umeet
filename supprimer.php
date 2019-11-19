<?php 
session_start();
include("connexion/data/connexion.php");

if (isset($_GET['thematique'])&&isset($_SESSION['user']) ){ 
	 
	$requete = $bd->prepare('DELETE FROM thematiques WHERE id=:Id ');
	$requete->execute(array('Id' =>  $_GET['thematique'] )); 

	header('Location:thematiques.php?title=THEMATIQUES&protected=99');
	exit(); 

	
 
 } elseif (isset($_GET['etape'])&&isset($_SESSION['user']) ){ 
	 
	$requete = $bd->prepare('DELETE FROM etapes WHERE id=:Id ');
	$requete->execute(array('Id' =>  $_GET['etape'] )); 

	header('Location:dates_importantes.php?title=Dates importantes&protected=99');
	exit(); 

 }elseif (isset($_GET['logement'])&&isset($_SESSION['user']) ){ 
	 
	$requete = $bd->prepare('DELETE FROM hebergement WHERE id=:Id ');
	$requete->execute(array('Id' =>  $_GET['logement'] )); 

	header('Location:hebergement.php?title=HEBERGEMENT&protected=99');
	exit(); 

 }elseif (isset($_GET['info'])&&isset($_SESSION['user']) ){ 
	 
	$requete = $bd->prepare('DELETE FROM infos WHERE id=:Id ');
	$requete->execute(array('Id' =>  $_GET['info'] )); 

	header('Location:info.php?protected=99');
	exit(); 

 }else{ header('Location:index.php');}


 ?>


