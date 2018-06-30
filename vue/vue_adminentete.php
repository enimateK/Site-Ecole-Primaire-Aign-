<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >


<?php 
  include "vue_head.php";
?>

	<body>
	<div id="banniere"></div>
	
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?section=connexion">Roger Bazille</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?section=adminNewsEcole">Ecole</a></li>
        <li class="dropdown">
          <a href="index.php?section=periscolaire" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Periscolaire <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?section=AdminModifMenu">Cantine</a></li>
            <li><a href="index.php?section=adminAccueilPeriscolaire">Accueil periscolaire</a></li>
            <li><a href="index.php?section=adminTap&numPage=1">T.A.P.</a></li>
          </ul>
        </li>
		<li><a href="index.php?section=adminParentsEleves">Parents d'eleves</a></li>
		<li class="dropdown">
          <a href="index.php?section=conseilecole" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conseil d'ecole <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?section=adminNewsConseilEcole">News</a></li>
            <li><a href="index.php?section=adminquestionconseilecole">Questions</a></li>
          </ul>
        </li>
		<li><a href="index.php?section=admininfospratiques">Infos pratiques</a></li>
          
      </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li><a href="index.php?section=accueil">Retour vers le site</a></li>
    <li><a href='index.php?section=seDeconnecter'> D&eacuteconnexion </a></li>
	</ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
</html>