<?php
	include_once 'modele/mod_tap.php';
	
	$NomTap=$_POST['NomTap'];
	$DescriptifTap=$_POST['DescriptifTap'];
	$NombreEnfant=$_POST['NombreEnfant'];
	
	setTap($NomTap, $DescriptifTap, $NombreEnfant);
	header("location:index.php?section=adminTap&numPage=1");