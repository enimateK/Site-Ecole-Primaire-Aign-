<?php 
	include "vue_entete.php";
 ?>
 <html>
<body>
<?php
//affichage des Questions
	$wTest=0;
	foreach($lesQuestions as $uneQues)
	{   
		$wEtat=$uneQues['etat'];
		if($wEtat == "nonTraite"){
			$wTest=0;  
		}else{
			$wTest=1;  
		}
	}

	if($wTest==0){
		echo "<h2>Actuellement, aucun parent d'élève n'a posé de question</h2>";
	}else{
		echo "<h2>Questions des parents d'eleves concernant le conseil d'ecole :</h2>";
	}

	foreach($lesQuestions as $uneQues)
	{         
		$wQuestion=$uneQues['question'];
		$wDate=$uneQues['date'];
		$wEtat=$uneQues['etat'];
		
		if(isset($wQuestion)){
		$question = nl2br($wQuestion); // met des <br /> a chaque retour chariot
		}
		
		if ($wEtat == "ok")
		{
			echo "<div class='well well-sm col-md-10 col-sm-12 col-xs-12'>Publi&eacute le : $wDate <br>";
			echo "$question </div><div class='row'></div>";
		}
	}

?>

<div class="col-md-10 col-sm-12 col-xs-12">
	<h4> Ici vous pouvez poser des questions qui seront abord&eacutes durant le prochain conseil d'&eacutecole :</h4>
	<form action='index.php?section=traitementsetquestion' method=post>
		<textarea style="width:100%; height:200px;" name="txtareaQuestions"></textarea><br>
		<div align='right'><input class='btn btn-default' type='submit' value='envoyer' onclick="questionenvoye()"/></div>
	</form>
</div>

</body>
 </html> 
 
