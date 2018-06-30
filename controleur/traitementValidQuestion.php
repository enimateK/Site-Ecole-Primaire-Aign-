<?php
	include_once 'modele/mod_conseilecole.php';
	
	$idQuestion=$_POST['idQuestion'];
	validQuestion($idQuestion);
	header("location:index.php?section=adminquestionconseilecole");