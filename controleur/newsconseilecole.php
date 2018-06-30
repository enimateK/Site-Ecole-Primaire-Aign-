<?php
include_once('modele/mod_conseilecole.php');
$lesNews = getNewsconseilecole();
include_once('vue/vue_newsconseilecole.php');