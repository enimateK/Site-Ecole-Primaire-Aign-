<?php
	include_once 'modele/mod_tap.php';
	
	$idTap=$_POST['idTap'];
	$NomTap=$_POST['NomTap'];
	$Descr=$_POST['DescriptifTap'];
	$NombreEnfant=$_POST['NombreEnfant'];
	
	modifTap($idTap,$NomTap,$Descr,$NombreEnfant);
	header("location:index.php?section=adminTap&numPage=1");