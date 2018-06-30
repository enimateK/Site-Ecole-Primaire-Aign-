<?php
	include_once 'modele/mod_modif.php';
	
	$Id=$_POST['id'];
	$Titre=$_POST['titre'];
	$Contenu=$_POST['contenu'];
	
	
	setNewsParentsEleves($Id, $Titre, $Contenu);
	
	header("location:index.php?section=adminParentsEleves");