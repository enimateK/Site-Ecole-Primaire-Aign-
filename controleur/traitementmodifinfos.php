<?php
	include_once 'modele/mod_modif.php';
	
	$Adresse=$_POST['adresse'];
	$CodePostal=$_POST['cp'];
	$Ville=$_POST['ville'];
	$Horaires=$_POST['horaires'];
	$Mail=$_POST['mail'];
	$Tel=$_POST['tel'];
	
	
	
	setInfosPratiques($Adresse, $CodePostal, $Ville, $Horaires, $Mail, $Tel);
	
	header("location:index.php?section=admininfospratiques");