
<?php
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











