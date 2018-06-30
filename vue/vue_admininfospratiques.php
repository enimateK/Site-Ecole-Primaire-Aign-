 <?php 
	include "vue_adminentete.php";
 ?>
 <html>
 <div id="corps">
 <h1>Modification des infos</h1>
 <?php
		$wAdresse=$infos['adresse'];
		$wCodePostal=$infos['codePostal'];
		$wVille=$infos['Ville'];
		$wHoraires=$infos['horaires'];
		$wMail=$infos['mail'];
		$wTel=$infos['tel'];
echo "

<form action='index.php?section=traitementmodifinfospratiques' method=post>
	<div class='col-md-5 col-sm-12 col-xs-12'>
		<label for='adresse'> Adresse : </label><input type=text name='adresse' value='$wAdresse' style='width:100%;'>
		<label for='cp'> Code Postal : </label><input type=text name='cp' value=$wCodePostal  style='width:100%;'>
		<label for='ville'> Ville : </label><input type=text name='ville' value='$wVille'  style='width:100%;'>
		<label for='horaires'> Horaires : </label><input type=text name='horaires' value='$wHoraires'  style='width:100%;'>
		<label for='mail'> Mail : </label><input type=text name='mail' value='$wMail'  style='width:100%;'>
		<label for='tel'> Téléphone : </label><input type=text name='tel' value='$wTel' style='width:100%;'>

		<div class='col-md-5 col-sm-12 col-xs-12' style='height:30px'></div>

		<button class='btn btn-default' style='width:100%'>MODIFIER</button>
	</div>
</form>
" ?>

 </div>
 </html> 