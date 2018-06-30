<?php
	include_once 'modele/mod_tap.php';

	$idTap=$_POST['idTap'];
	
	suppTap($idTap);
	
	header("location:index.php?section=adminTap&numPage=1");