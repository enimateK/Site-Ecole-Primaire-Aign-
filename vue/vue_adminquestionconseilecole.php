 <?php 
	include "vue_adminentete.php";
 ?>
 <html>
 <h1>Validation des questions</h1>
 <div id="corps">
<?php
$wTest=0;
//affichage des Questions 
	foreach($lesQuestions as $uneQues)
	{   
		$wTest=1;
		$wQuestion=$uneQues['question'];
		$wDate=$uneQues['date'];
		$wEtat=$uneQues['etat'];
		$widQuestion=$uneQues['idQuestion'];
		
		if(isset($wQuestion)){
		$question = nl2br($wQuestion); // met des <br /> a chaque retour chariot
		}
		
		echo "<div class='col-md-10 col-sm-12 col-xs-12";
		if ($wEtat == "ok")
		{
			echo" alert alert-success' role='alert'";
		}else{
			echo" alert alert-warning' role='alert'";
		}
		echo">$wDate <br/> $question</div><div class='col-md-2 col-sm-12 col-xs-12'>";
		if ($wEtat == "nonTraite")
		{
			echo"<form action='index.php?section=traitementValidQuestion' method=post>
			<input type=hidden name=idQuestion value='$widQuestion'> <button class='btn btn-default' style='width:100%'>VALIDER</button></form>";
		}
		
		echo "<form action='index.php?section=traitementSuppQuestion' method=post>
			<input type=hidden name=idQuestion value='$widQuestion'> <button class='btn btn-default' style='width:100%'>SUPPRIMER</button></form></div>";
	}

	if($wTest==0){
		echo "<h3>Il n'y a aucune questions en attente de validation actuellement. </h3>";
	}
?>

<script>
function alert(){
	confirm('Vous avez demandé la suppression du message. Cette action est irréversible. Voulez vous continuer ?');
}
</script>
 </div>
 </html> 
