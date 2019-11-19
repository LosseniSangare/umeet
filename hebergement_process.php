<?php 
session_start();
include("connexion/data/connexion.php");

if (isset($_POST['logement']) && isset($_POST['simple'])&& isset($_POST['double'])&& isset($_POST['distance'])&& isset($_POST['quote'])&& isset($_POST['id']) ){

	if ( is_numeric($_POST['simple']) &&is_numeric($_POST['double']) &&is_numeric($_POST['distance'])) {
	 $simple = $_POST['simple']; 
	 $double = $_POST['double']; 
	 $quote =  $_POST['quote'];
	  $distance =  $_POST['distance'];
	  $logement =  addslashes(htmlspecialchars($_POST['logement']));
	  if (isset($_POST['site'])) { $site = addslashes(htmlspecialchars($_POST['site'])); }else{$site ="#";}



	$requete = $bd->prepare('UPDATE  hebergement SET logement=:logement, oc_simple=:simple, oc_double =:double, distance = :distance, quote =:quote, site =:Site WHERE id=:Id ');
	$requete->execute(array(
		'logement' =>  $logement,
		'simple' =>  $simple,
		'double' =>  $double,
		'distance' =>  $distance,
		'quote' =>  $quote,
		'Site' =>  $site,
		'Id' =>  $_POST['id']
	  )); 

	header('Location:hebergement.php?title=HEBERGEMENT&protected=99');
	exit(); 
   } 

 }elseif (isset($_POST['logement']) && isset($_POST['simple'])&& isset($_POST['double'])&& isset($_POST['distance'])&& isset($_POST['quote']) ){

	if ( is_numeric($_POST['simple']) &&is_numeric($_POST['double']) &&is_numeric($_POST['distance'])) {
	 $simple = $_POST['simple']; 
	 $double = $_POST['double']; 
	 $quote =  $_POST['quote'];
	  $distance =  $_POST['distance'];
	  $logement =  addslashes(htmlspecialchars($_POST['logement']));
	    if (isset($_POST['site'])) { $site = addslashes(htmlspecialchars($_POST['site'])); }else{$site ="#";}



	$requete = $bd->prepare('INSERT INTO hebergement(logement, oc_simple, oc_double, distance, quote, site)VALUES(:logement, :simple, :double, :distance, :quote, :Site)');
	$requete->execute(array(
		'logement' =>  $logement,
		'simple' =>  $simple,
		'double' =>  $double,
		'distance' =>  $distance,
		'Site' =>  $site,
		'quote' =>  $quote
	  )); 

	header('Location:hebergement.php?title=HEBERGEMENT&protected=99');
	exit(); 
   } 
   
 }  
 else{ header('Location:index.php');}



 ?>