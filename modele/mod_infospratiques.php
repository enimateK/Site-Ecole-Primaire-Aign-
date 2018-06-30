<?php

function get_infospratiques()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM infopratique");
	$req->execute();
    $infos = $req->fetch();
        
    return $infos;
}
