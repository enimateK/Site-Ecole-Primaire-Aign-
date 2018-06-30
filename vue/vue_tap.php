<?php 
	include "vue/vue_entete.php";
 ?>
<html>
	<body>
		<div id= "Corps" >
			<div id="txtCorps">
				
					
					<div class="col-md-2 col-sm-2 col-xs-12">
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12"><H1>Les Temps d'activit&eacutees p&eacuteriscolaires  </H1></div>
					<div class="col-md-3 col-sm-3 col-xs-12">
						<form action ="index.php?section=rechercheTap" method="post">
							<div class='input-group'>
  								<span class='input-group-addon' id='sizing-addon1'><span class='glyphicon glyphicon-search' aria-hidden='true'></span></span>
  								<input type='text' class='form-control' placeholder='Rechercher un TAP' aria-describedby='sizing-addon1' name='recherche' id='recherche'>
							</div>
						</form>
					</div>
					
					<div class="col-md-12 col-sm-12 col-xs-12">
						
					
							
								<br/>
						
									<h2>	Qu'est ce que c'est  : </h2> 
													<p> Les TAP sont des temps d'activités organisés et pris en charge par la commune en prolongement de la journée de classe.
														Ces activités visent à favoriser l'accès de tous les enfants aux pratiques culturelles, artistiques, sportives, etc ...</p>
											</BR>
										</BR>
									<h2>	L'ensembles des T.A.P. propos&eacutes par notre &eacutetablissemennt : </h2>
							<?php
									$i = 2;
									foreach($lesTap as $unTap)
									{	
										$wIdTap=$unTap['idTap'];
										$wNomTap=$unTap['NomTap'];
										$wDescr=$unTap['DescriptifTap'];
										$wNombreEnfant=$unTap['NombreEnfant'];

										if(isset($wDescr)){
											$wDescr = nl2br($wDescr); // met des <br /> a chaque retour chariot
										}

										


										
												
											echo "

											
											  <div class='col-md-4 col-sm-6 col-xs-12'>
											    <div class='thumbnail'>
											      <div class='caption'>
											        <h3>$wNomTap</h3>
											        $wDescr
											        <p><label>Nombres d'enfants participant &agrave l'activit&eacute : </label> $wNombreEnfant</p>
											        
											        
											      </div>
											    </div>
											  </div>
											
											";

											if($i%3==1){
												echo"<div class='col-md-12 col-sm-12 col-xs-12' style='height:15px'></div>";
											}

											$i++;
										
											
																											
										}
										
							?>
											
			</div>	
			</div>					
					
		</div>
		
	</body>
</html>