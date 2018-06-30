<?php
//affichage des News 
	foreach($lesNews as $uneNews)
	{              
		$wTitre=$uneNews['titre'];
		$wContenu=$uneNews['contenu'];
		$wImage=$uneNews['image'];
		$wDate=$uneNews['date'];
		
		$wDate = substr($wDate, 0, -9);

		if(isset($wContenu)){
		$contenu = nl2br($wContenu); // met des <br /> a chaque retour chariot
		}


		if($wImage=='vue/images/'){
echo"
		<div class='col-md-12 col-sm-12 col-xs-12'>
	<div class='col-md-2 col-sm-12 col-xs-12'></div>
	<div class='col-md-8 col-sm-12 col-xs-12 news'>
		<div class='col-md-12 col-sm-12 col-xs-12'><h2>$wTitre</h2>Publi&eacute le : $wDate</div>
		<div class='col-md-12 col-sm-12 col-xs-12' style='height:15px'></div>
		<div class='text-xs-left txtNews'>
			$contenu
		</div>
	</div>
	<div class='col-md-2 col-sm-12 col-xs-12'></div>
</div>

<div class='col-md-12 col-sm-12 col-xs-12' style='height:30px;'></div>";
		}else{
			echo"
		<div class='col-md-12 col-sm-12 col-xs-12'>
	<div class='col-md-2 col-sm-12 col-xs-12'></div>
	<div class='col-md-8 col-sm-12 col-xs-12 news'>
		<div class='col-md-12 col-sm-12 col-xs-12'><h2>$wTitre</h2>Publi&eacute le : $wDate</div>
		<div class='col-md-6 col-sm-6 col-xs-12 margin-img' style='text-align: center; background-color:white;'><img src='$wImage' class='img-news'></div>
		<div class='text-xs-left txtNews'>
			$contenu
		</div>
	</div>
	<div class='col-md-2 col-sm-12 col-xs-12'></div>
</div>

<div class='col-md-12 col-sm-12 col-xs-12' style='height:30px;'></div>
		";
		}

		
	}
?>