<?php 
	include "vue_adminentete.php";
?>
<html>

<h1> ADMINISTRATION NEWS ACCUEIL PERISCOLAIRE </h1>

<div class='col-md-12 col-sm-12 col-xs-12' style='height:20px;'></div>
<div class='col-md-2 col-sm-12 col-xs-12'></div>
<div class='col-md-8 col-sm-12 col-xs-12'>
<a href="index.php?section=adminAjoutAccueilPeriscolaire" class='btn btn-default buttonCenter' title="ajout">Ajouter une News</a>
</div>
<div class='col-md-2 col-sm-12 col-xs-12'></div>
<div class='col-md-12 col-sm-12 col-xs-12' style='height:30px;'></div>
<?php
//affichage des News 
	foreach($lesNews as $uneNews)
	{        
		$wId=$uneNews['id'];
		$wTitre=$uneNews['titre'];
		$wContenu=$uneNews['contenu'];
		$wImage=$uneNews['image'];
		$wDate=$uneNews['date'];


		if($wImage=='vue/images/'){
			echo"
				<form action='index.php?section=traitementModifAccueilPeriscolaire' method=post>
				<div class='col-md-12 col-sm-12 col-xs-12'>
					<input type='hidden' name='id' value='$wId'>
					<div class='col-md-2 col-sm-12 col-xs-12'></div>
					<div class='col-md-8 col-sm-12 col-xs-12 news'>
					<div class='col-md-12 col-sm-12 col-xs-12'><label for='titre'> Titre : </label><input type=text name='titre' style='width:100%' value=\"".$wTitre."\" /></div>
					<div class='col-md-12 col-sm-12 col-xs-12'>
			<label for='contenu'> Contenu : </label><br/><textarea type=text name='contenu' style='width:100%; height:250px;'>$wContenu</textarea>
		</div>
		<div class='col-md-12 col-sm-12 col-xs-12' style='height:20px;'></div>
	</div>
	<div class='col-md-2 col-sm-12 col-xs-12'><button class='btn btn-default' style='width:100%'>MODIFIER</button></form>
	<form action='index.php?section=traitementSuppAccueilPeriscolaire' method=post>
			<input type=hidden name=id value='$wId'> <button class='btn btn-default' style='width:100%'>SUPPRIMER</button></form>
	</div></div>
</div>
<div class='col-md-12 col-sm-12 col-xs-12' style='height:50px;'></div>
			";
		}else{
			echo"
		<form action='index.php?section=traitementModifAccueilPeriscolaire' method=post>
		<div class='col-md-12 col-sm-12 col-xs-12'>
		<input type='hidden' name='id' value='$wId'>
	<div class='col-md-2 col-sm-12 col-xs-12'><label for='image'> Image de l'article : </label><img src='$wImage' class='img-modif-news'></div>
	<div class='col-md-8 col-sm-12 col-xs-12 news'>
		<div class='col-md-12 col-sm-12 col-xs-12'><label for='titre'> Titre : </label><input type=text name='titre' style='width:100%' value=\"".$wTitre."\" /></div>
		<div class='col-md-12 col-sm-12 col-xs-12'>
			<label for='contenu'> Contenu : </label><br/><textarea type=text name='contenu' style='width:100%; height:250px;'>$wContenu</textarea>
		</div>
		<div class='col-md-12 col-sm-12 col-xs-12' style='height:20px;'></div>
	</div>
	<div class='col-md-2 col-sm-12 col-xs-12'><button class='btn btn-default' style='width:100%'>MODIFIER</button></form>
	<form action='index.php?section=traitementSuppAccueilPeriscolaire' method=post>
			<input type=hidden name=id value='$wId'> <button class='btn btn-default' style='width:100%'>SUPPRIMER</button></form>
	</div></div>
</div>
<div class='col-md-12 col-sm-12 col-xs-12' style='height:50px;'></div>

		";
		}
		
	}
?>