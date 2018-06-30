<?php
	function get_tap($debut, $nombre)
	{
	    global $bdd;	           
	    $req = $bdd->prepare("SELECT * FROM tap where idTap = IdTap ");
	                $req->execute();
	    $tap = $req->fetchAll();	        
	    return $tap;
	}
	
	function get_tot_tap()
	{
	                global $bdd;
	                $req = $bdd->prepare("SELECT count(*) from tap");
	                $req->execute();
	                $nbtap = $req->fetchColumn();	                
	                return $nbtap;
	}
	
	function setTap($NomTap, $DescriptifTap, $NombreEnfant)
{
	global $bdd;
	$req = $bdd -> prepare("INSERT INTO tap SET NomTap=\"$NomTap\", DescriptifTap=\"$DescriptifTap\", NombreEnfant=\"$NombreEnfant\"");
	$req -> execute();
}

function get_tapspe($idTap)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM tap where idTap = '$idTap' ");
	$req->execute();
    $tap = $req->fetch();
        
    return $tap;
}


function modifTap($idTap,$NomTap,$Descr,$NombreEnfant)
{
    global $bdd;
    //var_dump($idTap);
	// var_dump($NomTap);
	//  var_dump($Descr);
	//   var_dump($NombreEnfant); exit;
    $req = $bdd->prepare("UPDATE tap SET NomTap = \"$NomTap\" , DescriptifTap = \"$Descr\" , NombreEnfant = \"$NombreEnfant\" WHERE idTap='$idTap' ");
	$req->execute();
	
}

//UPDATE table_name
//SET column1=value, column2=value2,...
//WHERE some_column=some_value 

function suppTap($idTap)
{
    global $bdd;
           
    $req = $bdd->prepare("DELETE FROM tap WHERE idTap=($idTap) ");
	$req->execute();
}

function get_Rtap($recherche)
	{
		// requete préparée pour eviter le piratage (injection sql)
		//UPPER/ strtoupper = converti tt en maj pour recherche
		// like '%x%' = recherche tout ce qui contient x 		
		try
		{
		    $bdd = new PDO('mysql:host=localhost;dbname=bddrogerbazille;', 'root', '');
		}
		catch(Exception $e)
		{
		    die('Erreur : '.$e->getMessage());
		}
	 	$query = $bdd->prepare("SELECT * FROM tap where UPPER(nomTap) like :blabla ");
	 	$query->execute(array(
	 					':blabla' => '%'.strtoupper($recherche).'%'
	 				));
		
		$untap = $query->fetchAll(PDO::FETCH_ASSOC);
		return $untap;
	}
?>