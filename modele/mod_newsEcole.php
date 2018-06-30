<?php

function setNewsEcole($titre,$contenu,$image,$date)
{
	$date = date('Y-m-d H:i:s');
	global $bdd;
	$req = $bdd -> prepare("INSERT INTO actuecole (titre,contenu,image,date) VALUES (\"$titre\",\"$contenu\",\"$image\",\"$date\")");
	$req -> execute();
}

function getNewsEcole()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM actuecole ORDER BY date DESC");
	$req->execute();
    $lesNews = $req->fetchAll();
        
    return $lesNews;

}

function suppNewsEcole($idNews)
{
    global $bdd;
           
    $req = $bdd->prepare("DELETE FROM actuecole WHERE id=($idNews) ");
	$req->execute();
}