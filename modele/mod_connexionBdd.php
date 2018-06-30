<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=bddrogerbazille', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

