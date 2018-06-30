<?php
	function idOk ($pseudo, $pass)
	{
		global $bdd;
           
		$req = $bdd->prepare("SELECT * FROM utilisateur");
		$req->execute();
		$lesIds = $req->fetch();
		
		$bool = false;
		
		if (($pseudo == $lesIds['pseudo']) AND ($pass == $lesIds['password']))
		{
			$bool = true;
		}
		
		return $bool;
	}