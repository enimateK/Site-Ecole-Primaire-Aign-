<?php
include_once('modele/mod_parentsEleves.php');
$lesNews = getNewsParentsEleves();
include_once('vue/vue_adminParentsEleves.php');