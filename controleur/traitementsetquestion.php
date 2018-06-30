<?php
	include_once 'modele/mod_conseilecole.php';
	
	$question=$_POST['txtareaQuestions'];
	
	setQuestionsconseilecole($question);
	
	header("location:index.php?section=questionsconseilecole");