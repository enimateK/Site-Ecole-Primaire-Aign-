<?php

function setQuestionsconseilecole($question)
{
	$date = date('Y-m-d H:i:s');
	global $bdd;
	$req = $bdd -> prepare("INSERT INTO conseilecole (question, date, etat) VALUES (\"$question\", \"$date\", 'nonTraite')");
	$req -> execute();
}

function getQuestionsconseilecole()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM conseilecole ORDER BY date DESC ");
	$req->execute();
    $lesQuestions = $req->fetchAll();
        
    return $lesQuestions;
}

function validQuestion($idQuestion)
{
    global $bdd;
           
    $req = $bdd->prepare("UPDATE conseilecole SET etat = 'ok' WHERE idQuestion=($idQuestion) ");
	$req->execute();
}

function suppQuestion($idQuestion)
{
    global $bdd;
           
    $req = $bdd->prepare("DELETE FROM conseilecole WHERE idQuestion=($idQuestion) ");
	$req->execute();
}

function getNewsconseilecole()
{
	global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM newsconseilecole ORDER BY date DESC");
	$req->execute();
    $lesNews = $req->fetchAll();
        
    return $lesNews;
}

function suppNews($idNews)
{
    global $bdd;
           
    $req = $bdd->prepare("DELETE FROM newsconseilecole WHERE id=($idNews) ");
	$req->execute();
}

function setNewsConseilEcole($titre,$contenu,$image,$date)
{
	$date = date('Y-m-d H:i:s');
	global $bdd;
	$req = $bdd -> prepare("INSERT INTO newsconseilecole (contenu,titre,image,date) VALUES (\"$contenu\",\"$titre\",\"$image\",\"$date\")");
	$req -> execute();
}