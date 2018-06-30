<?php
include_once('modele/mod_accueilPeriscolaire.php');
$lesNews = getNewsPeriscolaire();
include_once('vue/vue_adminAccueilPeriscolaire.php');