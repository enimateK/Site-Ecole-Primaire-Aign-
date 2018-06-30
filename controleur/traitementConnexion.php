<?php
	include_once ('modele/mod_AdminConnexion.php');
	
	$pseudo=$_POST['pseudo'];
	$pass=$_POST['pass'];
	
	if (idOk($pseudo, $pass))
	{
		$_SESSION['validiteConnexion']=True;
	}
	else
	{
		$_SESSION['validiteConnexion']=false;
	}
	
header('location:index.php?section=connexion');