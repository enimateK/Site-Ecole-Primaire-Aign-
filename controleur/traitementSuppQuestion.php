<?php
	include_once 'modele/mod_conseilecole.php';
	
	$idQuestion=$_POST['idQuestion'];
	suppQuestion($idQuestion);
	header("location:index.php?section=adminquestionconseilecole");