<?php
	include_once 'modele/mod_modif.php';
	
	$id=$_POST['id'];
	$titre=$_POST['titre'];
	$contenu=$_POST['contenu'];
	

	modifAccueilPeriscolaire($id, $titre, $contenu);
	
	header("location:index.php?section=adminAccueilPeriscolaire");