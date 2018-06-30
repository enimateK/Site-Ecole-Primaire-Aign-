<?php

function setNewsPeriscolaire($titre,$contenu,$image,$date)
{
	$date = date('Y-m-d H:i:s');
	global $bdd;
	$req = $bdd -> prepare("INSERT INTO accueilperi (titre,contenu,image,date) VALUES (\"$titre\",\"$contenu\",\"$image\",'$date')");
	$req -> execute();
}

function getNewsPeriscolaire()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM accueilperi ORDER BY date DESC");
	$req->execute();
    $lesNews = $req->fetchAll();
        
    return $lesNews;

}

function suppNewsPeriscolaire($idNews)
{
    global $bdd;
           
    $req = $bdd->prepare("DELETE FROM accueilperi WHERE id=($idNews) ");
	$req->execute();
}