<?php
if(isset($_FILES['image']))
{
     $dossier = 'vue/images/';
     $fichier = basename($_FILES['image']['name']);
     if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}

 include_once 'modele/mod_conseilecole.php';
	
	 $titre=$_POST['titre'];
	 $contenu=$_POST['contenu'];
	 $image='vue/images/'.$_FILES['image']['name'];
	 setNewsConseilEcole($titre,$contenu,$image);
	
	header("location:index.php?section=adminNewsConseilEcole");

?>