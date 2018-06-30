<?php
// affichage de la vue associée
	include_once('modele/mod_tap.php');
	
	$idTap=$_POST['idTap'];	
	$tap = get_tapspe($idTap);
	
	include_once('vue/vue_AdminModiftap.php');
	
?>