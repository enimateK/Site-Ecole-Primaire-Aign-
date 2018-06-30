<?php

function setInfosPratiques($Adresse, $CodePostal, $Ville, $Horaires, $Mail, $Tel)
{
	global $bdd;
	
	$req = $bdd -> prepare("UPDATE infopratique SET adresse=\"$Adresse\", codePostal=\"$CodePostal\", Ville=\"$Ville\", mail=\"$Mail\", tel=\"$Tel\", horaires=\"$Horaires\"  WHERE idInfo =1");
	$req -> execute();
}

function setNewsConseilEcole($Id, $Titre, $Contenu)
{
	global $bdd;
	
	$req = $bdd -> prepare("UPDATE newsconseilecole SET contenu=\"$Contenu\", titre=\"$Titre\" WHERE id ='$Id'");
	$req -> execute();
}

function setNewsParentsEleves($Id, $Titre, $Contenu)
{
	global $bdd;
	
	$req = $bdd -> prepare("UPDATE actuparent SET contenu=\"$Contenu\", titre=\"$Titre\" WHERE id ='$Id'");
	$req -> execute();
}

function modifNewsEcole($Id, $Titre, $Contenu)
{
	global $bdd;
	
	$req = $bdd -> prepare("UPDATE actuecole SET contenu=\"$Contenu\", titre=\"$Titre\" WHERE id ='$Id'");
	$req -> execute();
}

function modifAccueilPeriscolaire($Id, $Titre, $Contenu)
{
	global $bdd;
	
	$req = $bdd -> prepare("UPDATE accueilperi SET contenu=\"$Contenu\", titre=\"$Titre\" WHERE id ='$Id'");
	$req -> execute();
}