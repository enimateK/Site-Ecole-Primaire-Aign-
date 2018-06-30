<?php
	include_once 'modele/mod_parentseleves.php';
	
	$Id=$_POST['id'];
	suppNews($Id);
	header("location:index.php?section=adminParentsEleves");