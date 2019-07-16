<div class="container-fluid" id="properties">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footerdescripcion" id="properties">
		<div class="col-lg-2 d-lg-none">
			<b>Real State Artstyloweb</b><br>
			Search for sale<br>
			Search for rent<br>
			Search sold prices<br>
			Sign in / Create account<br>
			Blog<br>
			Follow us<br>
		</div>
		<div class="col-lg-2 d-lg-none">
			<b>Resources</b><br>
			Where can I live?<br>
			Schools<br>
			Students<br>
			Removals<br>
			Property guides<br>
			House price index<br>
			Help to buy<br>
		</div>
		<div class="col-lg-2 d-lg-none">
			<b>Quick links</b><br>
			Cheap flats to rent<br>
			Property investment<br>
			Cheap houses for sale<br>
			Overseas<br>
			Find an agent<br>
		</div>
		<div class="col-lg-2 d-lg-none">
			<b>Artstyloweb PLC</b><br>
			About<br>
			Press centre<br>
			Investor relations<br>
			Contact us<br>
			Careers<br>
		</div>
		<div class="col-lg-2 d-lg-none">
			<b>Regions</b><br>
			England<br>
			Scotland<br>
			Northern Ireland<br>
			Wales<br>
			London<br>
			London stations<br>
		</div>
		<div class="col-lg-2 d-lg-none">
			<b>Professional</b><br>
			Artstyloweb Plus<br>
			Automated Valuations<br>
			Agents and Developers<br>
		</div>

		<div class="col-xs-12"><hr></div>
	</div>
</div>

<div class="container-fluid" id="properties">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="properties3">
			
			<div class="col-sm-6 col-xs-12 text-left text-muted">
				
				<h5>&copy; 2018 All rights reserved. Site created by Artstyloweb.com</h5>

			</div>

			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 social">
				
				<ul>
					<?php

					$social = '[{
										"red": "fa-facebook",
										"estilo": "facebookNegro",
										"url": "http://facebook.com/"
									}, {
										"red": "fa-youtube",
										"estilo": "youtubeNegro",
										"url": "http://youtube.com/"
									}, {
										"red": "fa-twitter",
										"estilo": "twitterNegro",
										"url": "http://twitter.com/"
									},{
										"red": "fa-google-plus",
										"estilo": "googleNegro",
										"url": "http://google.com/"
									}, {
										"red": "fa-instagram",
										"estilo": "instagramNegro",
										"url": "http://instagram.com/"
									}

								]';

					$jsonRedesSociales = json_decode($social,true);		

					foreach ($jsonRedesSociales as $key => $value) {

						echo '<li>
								<a href="'.$value["url"].'" target="_blank">
									<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
								</a>
							</li>';
					}

					?>
			
				</ul>

			</div>

		</div>

	</div>