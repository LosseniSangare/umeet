<?php 
include("data/user.php"); 
session_start();

if (isset($_SESSION['user'])&&$_SESSION['user']!=null) { 
	session_destroy();  
	header("location:login.php");
	exit();
}
else{
	header("location:../index.php");
	exit(); }







 

 ?>