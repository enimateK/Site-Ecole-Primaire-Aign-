<?php
	include_once('modele/mod_tap.php');
		$result = get_Rtap($_POST['recherche']);	
		// affichage de la vue associée	
	include_once('vue/vue_rechercheTap.php');
?>