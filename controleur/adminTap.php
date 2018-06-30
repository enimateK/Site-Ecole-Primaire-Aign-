<?php

//récupèration de l'ensemble des oeuvres dans la base
	include_once('modele/mod_tap.php');
		$numeropage=$_GET['numPage'];
	
		$debut =($numeropage-1)*9;
		$lesTap = get_tap($debut,9);
		
		$derPage = get_tot_tap()/9;
		if(get_tot_tap()%9 !=0)
		{
			$derPage=$derPage +1;
		}
		
// affichage de la vue associée
	include_once('vue/vue_adminTap.php');
	
?>