<?php 
	include "vue/vue_adminentete.php";
 ?>



	<div class='col-md-2 col-sm-12 col-xs-12'>
		
	</div>
	

	<form action='index.php?section=traitementAjoutTap' method=post>
		<div class='col-md-8 col-sm-12 col-xs-12 news'>

			<div class='col-md-12 col-sm-12 col-xs-12'>		
				<p><label for='NomTap'> Nom du T.A.P. : </label>
				<input type=text name='NomTap' style="width:100%;" ></p>
				
				<label for='DescriptifTap'> Descriptif : </label><br>
				<textarea style="width:100%; height:200px;"name='DescriptifTap'></textarea><br>
			
				<label for='NombreEnfant'> Nombre d'enfants : </label><br>
				<input type=text name='NombreEnfant'>
			</div>
		
			<div class='col-md-12 col-sm-12 col-xs-12' style='height:30px;'></div>
			
		</div>
	
	<div class='col-md-2 col-sm-12 col-xs-12'>
		<button class='btn btn-default' style='width:100%'>AJOUTER</button></form>
	</div>