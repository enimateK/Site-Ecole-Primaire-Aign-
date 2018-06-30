<?php
include_once('modele/mod_conseilecole.php');
$lesQuestions = getQuestionsconseilecole();
include_once('vue/vue_adminquestionconseilecole.php');