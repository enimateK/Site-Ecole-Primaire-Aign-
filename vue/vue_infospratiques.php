<?php 
	include "vue_entete.php";
 ?>
 <html>
<div id="details">

			<?php
				$wAdresse=$infos['adresse'];
				$wCodePostal=$infos['codePostal'];
				$wVille=$infos['Ville'];
				$wHoraires=$infos['horaires'];
				$wMail=$infos['mail'];
				$wTel=$infos['tel'];
				$wPdf=$infos['pdf'];
				echo "	
							<div class='col-md-3 col-sm-12 col-xs-12'>
								<div class='col-md-12 col-sm-12 col-xs-12 panel panel-info'>
									<div class='panel-heading'><h3 class='panel-title'>Nous contacter</h3></div>
									<div class='panel-body'>
										<label for='adresse'> Adresse : </label><p>$wAdresse</p>
										<label for='cp'> Code Postal : </label><p>$wCodePostal</p>
										<label for='ville'> Ville : </label><p>$wVille</p>
										<label for='horaires'> Horaires : </label><p>$wHoraires</p>
										<label for='mail'> Mail : </label><p>$wMail</p>
										<label for='tel'> T&eacutel&eacutephone : </label><p>$wTel</p>
									</div>
								</div>
							

							
							</div>
						

						<div class='col-md-6 col-sm-10 col-xs-12'>   
 							<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2666.3491350882277!2d0.11706561518427613!3d48.064903464199496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e2877395082bfd%3A0xf8b8942de345e5ad!2s3+Rue+de+la+Mairie%2C+72650+Aign%C3%A9!5e0!3m2!1sfr!2sfr!4v1461181846526' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>
 						</div>

 						<div class='col-md-3 col-sm-12 col-xs-12'>
							
						</div>

 						";	
 
				
			    
			?>

</div>
 </html> 