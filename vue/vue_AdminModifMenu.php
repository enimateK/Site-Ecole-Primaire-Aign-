<?php
  include_once 'vue_adminentete.php';
?>

<html>
<form method="POST" action="index.php?section=traitementModifMenu" enctype="multipart/form-data">
   <input type="file" name="menu" />
   Fichier : <input type="hidden" name="MAX_FILE_SIZE" value="100000">
   <input type="submit" name="envoyer" value="Envoyer le fichier">
</form>

<div>
	<iframe src="vue/images/menu.pdf" width="1000" height="1000"></iframe>
</div>

</html>
