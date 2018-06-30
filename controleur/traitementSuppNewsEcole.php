<?php
	include_once 'modele/mod_newsEcole.php';
	
	$Id=$_POST['id'];
	suppNewsEcole($Id);
	header("location:index.php?section=adminNewsEcole");