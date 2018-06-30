
<?php
if(isset($_FILES['menu']))
{
     $dossier = 'vue/images/';
	 $_FILES['menu']['name'] = 'menu.pdf';
     $fichier = basename($_FILES['menu']['name']);
     if(move_uploaded_file($_FILES['menu']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
	 
}
header('location:index.php?section=AdminModifMenu')
?>
