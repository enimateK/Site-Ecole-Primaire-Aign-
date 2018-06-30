<?php
	session_start();
	include_once('modele/mod_connexionBdd.php');
	
	if((!isset($_SESSION['validiteConnexion'])) or ($_SESSION['validiteConnexion']==false)) //si l'utiliateur n'est pas connecté
	{
		$okConnexion = false;
	}
	else //sinon on récupere ses infos
	{
		$okConnexion = true;   
	}
	
	
	if (!isset($_GET['section']) OR $_GET['section'] == 'index' OR $_GET['section'] == 'accueil')
	{
		include_once('controleur/accueil.php');
	}

	else
	{
		if ($_GET['section'] == 'infospratiques')
		{  
				include_once('controleur/infospratiques.php');
		}
		if ($_GET['section'] == 'periscolaire')
		{  
				include_once('controleur/peri.php');
		}
		
		if ($_GET['section'] == 'cantine')
		{  
				include_once('controleur/cantine.php');
		}
		
		if ($_GET['section'] == 'accueilperiscolaire')
		{  
				include_once('controleur/accueilperiscolaire.php');
		}
		
		if ($_GET['section'] == 'TAP')
		{  
				include_once('controleur/tap.php');
		}
		
		if ($_GET['section'] == 'questionsconseilecole')
		{  
				include_once('controleur/questionsconseilecole.php');
		}

		if ($_GET['section'] == 'adminTap')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminTap.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		
		if ($_GET['section'] == 'rechercheTap')
		{
			include_once('controleur/rechercheTAP.php');
		}

		if ($_GET['section'] == 'adminRechercheTap')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminRechercheTap.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		
		if ($_GET['section'] == 'questionConseilEnvoie')
		{
			include_once('controleur/questionConseilEnvoie.php');
		}
		if ($_GET['section'] == 'adminquestionconseilecole')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminquestionconseilecole.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'ecole')
		{
			include_once('controleur/newsEcole.php');
		}
		if ($_GET['section'] == 'traitementsetquestion')
		{  
				include_once('controleur/traitementsetquestion.php');
		}
		if ($_GET['section'] == 'traitementValidQuestion')
		{  
				include_once('controleur/traitementValidQuestion.php');
		}
		if ($_GET['section'] == 'traitementSuppQuestion')
		{  
				include_once('controleur/traitementSuppQuestion.php');
		}
		if ($_GET['section'] == 'admininfospratiques')
		{
			if ($okConnexion)
			{
				include_once('controleur/admininfospratiques.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementmodifinfospratiques')
		{  
				include_once('controleur/traitementmodifinfos.php');
		}
		if ($_GET['section'] == 'newsconseilecole')
		{  
				include_once('controleur/newsconseilecole.php');
		}
		if ($_GET['section'] == 'adminNewsConseilEcole')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminNewsConseilEcole.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementsetNewsEcole')
		{  
				include_once('controleur/traitementsetNewsEcole.php');
		}
		if ($_GET['section'] == 'adminNewsEcole')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminNewsEcole.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementNewsEcole')
		{  
				include_once('controleur/traitementNewsEcole.php');
		}
		if ($_GET['section'] == 'traitementmodifnewsconseilecole')
		{  
				include_once('controleur/traitementmodifnewsconseilecole.php');
		}
		if ($_GET['section'] == 'traitementSuppNewsConseilEcole')
		{  
				include_once('controleur/traitementSuppNewsConseilEcole.php');
		}
		if ($_GET['section'] == 'adminAjoutNewsConseilEcole')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminAjoutNewsConseilEcole.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementSetNewsConseilEcole')
		{  
				include_once('controleur/traitementSetNewsConseilEcole.php');
		}
		if ($_GET['section'] == 'ajouterTap')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminAjoutTap.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		
		if ($_GET['section'] == 'traitementAjoutTap')
		{  
				include_once('controleur/traitementAjoutTap.php');
		}
		
		if ($_GET['section'] == 'modifTap')
		{
			if ($okConnexion)
			{
				include_once('controleur/modifTap.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		
		if ($_GET['section'] == 'traitementModifTap')
		{  
				include_once('controleur/traitementModifTap.php');
		}

		if ($_GET['section'] == 'traitementSuppTap')
		{  
				include_once('controleur/traitementSuppTap.php');
		}
		if ($_GET['section'] == 'parentseleves')
		{  
				include_once('controleur/parentseleves.php');
		}
		if ($_GET['section'] == 'adminParentsEleves')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminParentsEleves.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementmodifnewsparentseleves')
		{  
				include_once('controleur/traitementmodifnewsparentseleves.php');
		}
		if ($_GET['section'] == 'traitementSuppNewsParentsEleves')
		{  
				include_once('controleur/traitementSuppNewsParentsEleves.php');
		}
		if ($_GET['section'] == 'adminAjoutNewsParentsEleves')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminAjoutNewsParentsEleves.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementSetNewsParentsEleves')
		{  
				include_once('controleur/traitementSetNewsParentsEleves.php');
		}
		if ($_GET['section'] == 'adminAccueilPeriscolaire')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminAccueilPeriscolaire.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'adminAjoutAccueilPeriscolaire')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminAjoutAccueilPeriscolaire.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementAccueilPeriscolaire')
		{  
				include_once('controleur/traitementAccueilPeriscolaire.php');
		}
		if ($_GET['section'] == 'traitementModifAccueilPeriscolaire')
		{  
				include_once('controleur/traitementModifAccueilPeriscolaire.php');
		}
		if ($_GET['section'] == 'traitementSuppAccueilPeriscolaire')
		{  
				include_once('controleur/traitementSuppAccueilPeriscolaire.php');
		}
		if ($_GET['section'] == 'traitementsetNewsEcole')
		{  
				include_once('controleur/traitementsetNewsEcole.php');
		}
		if ($_GET['section'] == 'adminNewsEcole')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminNewsecole.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'adminAjoutNewsEcole')
		{
			if ($okConnexion)
			{
				include_once('controleur/adminAjoutNewsEcole.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementNewsEcole')
		{  
				include_once('controleur/traitementNewsEcole.php');
		}
		if ($_GET['section'] == 'traitementModifNewsEcole')
		{  
				include_once('controleur/traitementModifNewsEcole.php');
		}
		if ($_GET['section'] == 'traitementSuppNewsEcole')
		{  
				include_once('controleur/traitementSuppNewsEcole.php');
		}
		if ($_GET['section'] == 'connexion')
		{  
				include_once('controleur/connexion.php');
		}
		if ($_GET['section'] == 'traitementConnexion')
		{  
				include_once('controleur/traitementConnexion.php');
		}
		if ($_GET['section'] == 'seDeconnecter')
		{  
				include_once('controleur/seDeconnecter.php');
		}
		if ($_GET['section'] == 'AdminModifMenu')
		{
			if ($okConnexion)
			{
				include_once('controleur/AdminModifMenu.php');
			}
			else
			{
				header('location:index.php?section=connexion');
			}
		}
		if ($_GET['section'] == 'traitementModifMenu')
		{  
				include_once('controleur/traitementModifMenu.php');
		}

		
	}