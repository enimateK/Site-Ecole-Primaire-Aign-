 <?php
 	if( isset($_SESSION['validiteConnexion']) && ($_SESSION['validiteConnexion']==true) ){
		include 'vue_adminentete.php';
		echo"<html>
 				<div id='corps'>
 				Vous &ecirctes connect&eacute.";
	}else{
		echo"<html>";
					 
  		include "vue_head.php";
			
		echo"
			<body>
				<div class='col-md-12' style='height: 150px'></div>
				<div class='col-md-4'></div>
					<div class='col-md-4 col-sm-12 col-xs-12 panel panel-info'>
						
						<div class='panel-body'>
							<form action='index.php?section=traitementConnexion' method=post>
								<div class='input-group input-group-lg'>
	  								<span class='input-group-addon' id='sizing-addon1'><span class='glyphicon glyphicon-user' aria-hidden='true'></span></span>
	  								<input type='text' class='form-control' placeholder='Login' aria-describedby='sizing-addon1' name='pseudo'>
								</div></br>
								<div class='input-group input-group-lg'>
	  								<span class='input-group-addon' id='sizing-addon1'><span class='glyphicon glyphicon-lock' aria-hidden='true'></span></span>
	  								<input type='password' class='form-control' placeholder='Mot de passe' aria-describedby='sizing-addon1' name='pass'>
								</div></br>
								<div class='col-md-6 col-sm-6 col-xs-6' align='left'><a href='index.php?section=accueil' class='btn btn-default' title='retour'>Retour sur le site</a></div>
								<div class='col-md-6 col-sm-6 col-xs-6' align='right'><input type=submit value='connexion' class='btn btn-default' style='text-align: center;'/></div>
							</form>
						</div>
					</div>
				<div class='col-md-4'></div>
			</body>
		</html>
			";
	}
	?>