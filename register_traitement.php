<?php
session_start();
include("connexion/data/connexion.php");
      if(isset($_POST['ajouter'])){
        $comite=htmlspecialchars($_POST['comite']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $req = $bd->prepare("INSERT INTO membres SET nom=:nom,prenom=:prenom,comite=:comite");
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':comite',$comite);
        $req->execute();
        $_SESSION['msg1']='<p style="color : #00dd00;">'.$nom.' '.$prenom.' ENREGISTRER AVEC SUCCES !!! </p>';
        header('Location: register_comite.php?protected=99&comite='.$comite);

      }if(isset($_POST['modifier']) && isset($_GET['idMod'])){
        $comite=htmlspecialchars($_POST['comite']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $req = $bd->prepare("UPDATE  membres SET nom=:nom,prenom=:prenom,comite=:comite WHERE id=:id");
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':comite',$comite);
        $req->bindValue(':id',$_GET['idMod']);
        $req->execute();
        $_SESSION['modifie']='<h4 style="color:#00aa00;">'.$nom.' '.$prenom.'enregistré avec succès ! </h4>';
        header('Location: comites.php?protected=99&amp;modif');

      }elseif (isset($_POST['modifC'])) {
        $intitule=htmlspecialchars($_POST['intitule_com']);
        $req=$bd->prepare("UPDATE comites SET intitule=:intitule WHERE id=:id");
        $req->bindValue(":intitule",$intitule);
        $req->bindValue(":id",$_GET['idModifC']);
        $req->execute();
        $_SESSION['modifie_com']='<h4 style="color:#00aa00;">'.$intitule.' enregistré avec succès ! </h4>';
        header('Location: liste_comite.php?protected=99;modifCok=1');

      }elseif (isset($_GET['idSupC'])) {
        $req=$bd->prepare('DELETE FROM comites WHERE id=:id');
        $req->bindValue(':id',$_GET['idSupC']);
        $req->execute();
        $_SESSION['sup_com']='<h4 style="color:#00aa00;">SUPPRESSION EFFECTUEE AVEC SUCCES ! </h4>';
        $_SESSION['supCom']=1;
         header('Location: liste_comite.php?protected=99;supCom=1');

    }elseif(isset($_POST['save'])){
      if(!empty($_POST['intitule'])){
        $intitule=$_POST['intitule'];
        $req = $bd->prepare("INSERT INTO comites SET intitule=:intitule");
        $req->bindValue(':intitule',$intitule);
        $req->execute();
        $_SESSION['msg2']='<p style="color : #00dd00;">COMITE ENREGISTRE AVEC SUCCES !!! </p>';
        header('Location: register_comite.php?protected=99;succes=1');

    }elseif (empty($_POST['intitule'])){
      $_SESSION['msg2']=' <p style="color : #ff2222;">SAISISSEZ LE COMITE </p>';
      header('Location: register_comite.php?protected=99&amp;intitule=1 ');
                }
    }elseif (isset($_GET['idSup'])) {
      $id=$_GET['idSup'];
      $req=$bd->exec("DELETE FROM membres WHERE id=$id");
      $_SESSION['sup']='<h4 style="color:#00aa00;"> SUPPRESSION EFFECTUEE AVEC SUCCES ! </h4>';
      header('Location: comites.php?protected=99');
    }else{
       header('Location:index.php');
    }

 ?>

