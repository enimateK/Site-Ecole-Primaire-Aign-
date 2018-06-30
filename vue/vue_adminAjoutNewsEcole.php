<?php 
	include "vue/vue_adminentete.php";
 ?>


<h1> AJOUTER UNE NEWS SUR L'ECOLE </h1>
<div class='col-md-2 col-sm-12 col-xs-12'></div>

<div class='col-md-8 col-sm-12 col-xs-12 news'>

	<div class="radio center">
	  <label class="radio-inline"><input type="radio" name="btnradio" onclick="visuForm(1)" checked="checked">Article avec image</label>
	  <label class="radio-inline"><input type="radio" name="btnradio" onclick="visuForm(2)">Article sans image</label>
	</div>

	<form id="formImage" method="POST" action="index.php?section=traitementNewsEcole" enctype="multipart/form-data">   
	    <div class='col-md-12 col-sm-12 col-xs-12'>
	    	<label> Titre : </label><input type=text name='titre' style='width:100%' />
		
			<label> Contenu : </label><textarea name="contenu" style='width:100%; height:250px;'></textarea>
		
			<label> Image : </label><input type="file" name="image" /></p>
		</div>
	   <input type="hidden" name="MAX_FILE_SIZE" value="100000">
	   <button class='btn btn-default' style='width:100%'>PUBLIER L'ARTICLE</button>
	</form>

	<form id="formSansImage" method="POST" action="index.php?section=traitementNewsEcole" enctype="multipart/form-data" style="display:none"> 
	    <div class='col-md-12 col-sm-12 col-xs-12'>
	    	<label> Titre : </label><input type=text name='titre' style='width:100%' />
		
			<label> Contenu : </label><textarea name="contenu" style='width:100%; height:250px;'></textarea>
		</div>
		<div class='col-md-12 col-sm-12 col-xs-12' style='height:30px;'></div>
		<button class='btn btn-default' style='width:100%'>PUBLIER L'ARTICLE</button>
	</form>

</div>

<div class='col-md-2 col-sm-12 col-xs-12'></div>

</body>

</html>