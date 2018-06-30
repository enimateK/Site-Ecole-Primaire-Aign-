<?php
	include_once 'modele/mod_accueilPeriscolaire.php';
	
	$Id=$_POST['id'];
	suppNewsPeriscolaire($Id);
	header("location:index.php?section=adminAccueilPeriscolaire");