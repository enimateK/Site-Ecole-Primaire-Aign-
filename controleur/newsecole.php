<?php
include_once('modele/mod_newsEcole.php');
$lesNews = getNewsEcole();
include_once('vue/vue_ecole.php');