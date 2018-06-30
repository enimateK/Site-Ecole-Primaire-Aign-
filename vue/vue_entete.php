<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >


    <?php 
     include "vue_head.php";
    ?>

    <style>
    #banniere{
      height: 150px;
      width:100%;
      margin:0px;     
      background: url(vue/images/bandeau.jpg);
      background-repeat: repeat-z; 
    }
    </style>

    </head>
	
	<body>
	<div id="banniere">
    <h1 class="nomdusite"> Ecole Primaire ROGER BAZILLE - Aign&eacute - Sarthe </h1>
  </div>
	
	
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php?section=accueil">Roger Bazille</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php?section=ecole">Ecole</a></li>
        <li class="dropdown">
          <a href="index.php?section=periscolaire" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Periscolaire <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?section=cantine">Cantine</a></li>
            <li><a href="index.php?section=accueilperiscolaire">Accueil periscolaire</a></li>
            <li><a href="index.php?section=TAP&numPage=1">T.A.P.</a></li>
          </ul>
        </li>
		<li><a href="index.php?section=parentseleves">Parents d'eleves</a></li>
		<li class="dropdown">
          <a href="index.php?section=conseilecole" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conseil d'ecole <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?section=newsconseilecole">News</a></li>
            <li><a href="index.php?section=questionsconseilecole">Questions</a></li>
          </ul>
        </li>
		<li><a href="index.php?section=infospratiques">Infos pratiques</a></li>
      </ul>
      <?php
        if( isset($_SESSION['validiteConnexion']) && ($_SESSION['validiteConnexion']==true) ){
      echo"
      <ul class='nav navbar-nav navbar-right'>
    <li><a href='index.php?section=connexion'> Espace Admin</a></li>
    <li><a href='index.php?section=seDeconnecter'> D&eacuteconnexion </a></li>
    </ul>";
  }else{
    echo"
      <ul class='nav navbar-nav navbar-right'>
    <li><a href='index.php?section=connexion'> Connexion </a></li>
    </ul>";
  }
    ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
</html>