

<?php
		$db= 'umeet';
		$utilisateur = 'root';
		$mdp = '';

		try
		{
			$bd = new PDO('mysql:host=localhost; dbname='.$db.'; charset=utf8',$utilisateur,$mdp, array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION)) ;
		}
			catch ( Exception $e)
		{
			die('Erreur:'.$e->getMessage());
		}

 ?>
