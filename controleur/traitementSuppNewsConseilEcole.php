<?php
	include_once 'modele/mod_conseilecole.php';
	
	$Id=$_POST['id'];
	suppNews($Id);
	header("location:index.php?section=adminNewsConseilEcole");