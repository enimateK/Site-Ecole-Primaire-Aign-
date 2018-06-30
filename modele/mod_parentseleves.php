<?php

function getNewsParentsEleves()
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM actuparent ORDER BY date DESC ");
	$req->execute();
    $lesNews = $req->fetchAll();
        
    return $lesNews;
}

function suppNews($idNews)
{
    global $bdd;
           
    $req = $bdd->prepare("DELETE FROM actuparent WHERE id=($idNews) ");
	$req->execute();
}

function setNewsParentsEleves($titre,$contenu,$image,$date)
{
	$date = date('Y-m-d H:i:s');
	global $bdd;
	$req = $bdd -> prepare("INSERT INTO actuparent (titre,contenu,image,date) VALUES (\"$titre\",\"$contenu\",\"$image\",'$date')");
	$req -> execute();
}