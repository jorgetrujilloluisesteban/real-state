<!--=====================================
HEADER
======================================-->

<div class="container-fluid" id="bar">
	
			<!--=====================================
			BLOQ CITY AND SEARCH
			======================================-->

			<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">

				<!--=====================================
				SEARCH CITY
				======================================-->
				
				<div class="input-group col-lg-8 col-md-6 col-sm-8 col-xs-12" id="buscador">
					
					<input type="search" name="buscar" class="form-control" placeholder="Search city...">	

					<span class="input-group-btn">
						
						<a href="#">

							<button class="btn btn-default backColor" type="submit">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>
			
			</div>

			<!--=====================================
			OTHER OPCION
			======================================-->

			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 opcion-bar">

					<div class="bs-example">

					    	<div class="col-sm-2 col-xs-6">
									<select class="form-control seleccionarMinprice" id="seleccionMinprice">
										
										<option value="0">Min Price</option>';
										<option value="0">All</option>';
										<option value="100">£ 100 PCM</option>';
										<option value="150">£ 150 PCM</option>';
										<option value="200">£ 200 PCM</option>';
										<option value="400">£ 400 PCM</option>';
										<option value="500">£ 500 PCM</option>';
										<option value="600">£ 600 PCM</option>';
										<option value="750">£ 750 PCM</option>';
										<option value="1200">£ 1200 PCM</option>';

									</select>
									
							</div>
							
							<div class="col-sm-2 col-xs-6">
									<select class="form-control seleccionarMaxprice" id="seleccionMaxprice">
										
										<option value="0">Max Price</option>';
										<option value="0">All</option>';
										<option value="100">£ 100 PCM</option>';
										<option value="150">£ 150 PCM</option>';
										<option value="200">£ 200 PCM</option>';
										<option value="400">£ 400 PCM</option>';
										<option value="500">£ 500 PCM</option>';
										<option value="600">£ 600 PCM</option>';
										<option value="750">£ 750 PCM</option>';
										<option value="1200">£ 1200 PCM</option>';

									</select>
							</div>

					    
							<div class="col-sm-2 col-xs-6">
									<select class="form-control seleccionarMinbed" id="seleccionMinbed">
										
										<option value="0>">All</option>
										<!--<option value="0">Min Beds</option>';
										<option value="0">All</option>';
										<option value="s">Studio</option>';
										<option value="1">1 Bed</option>';
										<option value="2">2 Bed</option>';
										<option value="3">3 Bed</option>';-->

									</select>

							</div>

							<div class="col-sm-2 col-xs-6">
									<select class="form-control seleccionarMaxbed" id="seleccionMaxbed">
										
										<option value="0>">All</option>
										<!--<option value="0">Max Beds</option>';
										<option value="0">All</option>';
										<option value="s">Studio</option>';
										<option value="1">1 Bed</option>';
										<option value="2">2 Bed</option>';
										<option value="3">3 Bed</option>';-->

									</select>
							</div>

					    <!--Warning buttons with dropdown menu-->
					    <div class="btn-group pull-right">
					        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle filter">Filters <span class="caret"></span></button>
					        <ul class="dropdown-menu">
					        	<div>
					        		<li><a href="#"></a></li>
					        	</div>
					        </ul>
					    </div>

					</div>

			</div>

</div>

<?php

$url1 = Url::ctrUrlimg();

?>

<!--=====================================
LISTAR PROPERTY
======================================-->
<div class="col-sm-10" id="info-city">

	Properties To Rent in Bristol City Centre, Bristol, within 5 miles

</div>

<div class="container-fluid property">
			<!--=====================================
			BOTON GRID AND LIST
			======================================-->

			<div class="col-sm-9 col-xs-12" id="gridlistmap">

				<div class="btn-group pull-right">

					 <button type="button" class="btn btn-default btnGrid" id="btnGrid0">
					 	
						<i class="fa fa-th" aria-hidden="true"></i>  

						<span class="col-xs-0 pull-right"> GRID</span>

					 </button>

					 <button type="button" class="btn btn-default btnList" id="btnList0">
					 	
						<i class="fa fa-list" aria-hidden="true"></i> 

						<span class="col-xs-0 pull-right"> LIST</span>

					 </button>

					 <button type="button" class="btn btn-default btnList" id="btnMap0">
					 	
						<i class="fa fa-list" aria-hidden="true"></i> 

						<span class="col-xs-0 pull-right"> MAP</span>

					 </button>
					
				</div>		

			</div>

			<div class="clearfix"></div>

	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" id="properties">

			<!--=====================================
			PROPERTY
			======================================-->

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="properties">

				<!--=============================================
				CALL PROPERTY
				=============================================-->
					<?php

							$minprice = 0; $maxprice = 0; $minbed = 0; $maxbed = 0;
							$properties = ControllerProperty::ctrShowProperty($minprice, $maxprice, $minbed, $maxbed);

							if(!$properties){

							echo '<div class="col-xs-12 error404 text-center">

									 <h1><small>¡Oops!</small></h1>

									 <h2>There are not property</h2>

								</div>';

							}else{

								echo '<ul class="grid0" style="display: none;">';

								$i = 0 ;

								foreach ($properties as $key => $value) {


									echo '<a href="?id='.$value["id"].'"  class="pixelProducto grid0">

											<img src="'.$url1.$value["photo1"].'" class="img-responsive">

											<br>
											<b class="name">'.$value["name"].'</b>
											<br>
											<span id="price">£'.$value["price"].'pcm</span>


										</a>';

										$i++;
										if ($i==3)
										{
											$i=0;
											echo '<div class="col-xs-12"><hr></div>';
											echo '<div class="clearfix"></div>';

										}

								}
									

								echo '</ul>';

								echo'<ul class="list0">';

								foreach ($properties as $key => $value) {

									echo '<li class="col-xs-12">
									  
								  		<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">
											   
											<figure>
										
												<a href="?id='.$value["id"].'"  class="pixelProducto">

													<img src="'.$url1.$value["photo1"].'" class="img-responsive">

												</a>

											</figure>

											<br>
											<span id="price">£'.$value["price"].'pcm</span>

										</div>

										<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">

											<figure>
										
												<a href="?id='.$value["id"].'"  class="pixelProducto">

													<img src="'.$url1.$value["photo2"].'" class="img-responsive">

												</a>

											</figure>

									  	</div>  	

									  	<div class="col-sm-6 col-xs-12">
											<b class="name">'.$value["name"].'</b><br>
											<b><i>'.$value["address"].'</i></b><br>
									  		'.$value["descripcion"].'<br><br>
									  		<span style="color:green;">'.$value["person-in-charge"].'</span>

									  	</div>  
											

									</li>

									<div class="col-xs-12"><hr></div>';
								}
									
								echo '</ul>';
								
								echo'<div class="col-xs-12 map01" style="display:none">
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.599612312314!2d-16.256130685324266!3d28.46148368248556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cc9d167ca2b7%3A0xb3cc55ad9565258!2sCalle+de+Fern%C3%A1ndez+Navarro%2C+Santa+Cruz+de+Tenerife!5e0!3m2!1ses!2ses!4v1516983388716" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
									 </div>';

								}					

					?>

			</div>

		</div>


		<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12" id="properties2">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.599612312314!2d-16.256130685324266!3d28.46148368248556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cc9d167ca2b7%3A0xb3cc55ad9565258!2sCalle+de+Fern%C3%A1ndez+Navarro%2C+Santa+Cruz+de+Tenerife!5e0!3m2!1ses!2ses!4v1516983388716" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

				<div class="col-xs-12"><hr></div>

				Exploring Related Searches<br>
				Property to rent in Bristol City Centre<br>
				Houses to rent in Bristol City Centre<br>
				2 bedroom houses to rent in Bristol City Centre<br>
				3 bedroom houses to rent in Bristol City Centre<br>
				4 bedroom houses to rent in Bristol City Centre<br>
				5+ bedroom houses to rent in Bristol City Centre<br>

				<div class="col-xs-12"><hr></div>

				What Other People Are Looking For<br>
				Detached houses to rent in Bristol City Centre<br>
				Terraced houses to rent in Bristol City Centre<br>
				Bungalows to rent in Bristol City Centre<br>
				Retirement properties to rent in Bristol City Centre<br>
				Commercial properties to rent in Bristol City Centre<br>
		</div>
		<!--=====================================
        MODAL WINDOW FOR REGISTRATION
        ======================================-->

        <div class="modal fade modalFormulario" id="modalRegistro" role="dialog">

            <div class="modal-content modal-dialog">

                <div class="modal-body modalTitulo">

                  <h3 class="backColor2">REGISTER</h3>

                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                  

              <!--=====================================
              DIRECT REGISTRATION
              ======================================-->

              <form method="post" onsubmit="">

                <div class="form-group">
                  
                  <div class="input-group">
                    
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-user"></i>
						
						</span>

                    <input type="text" class="form-control" id="regUsuario" name="regUsuario" placeholder="Name" value="" pattern="^([a-zA-Z]+[0-9]{0,2}){5,12}$" required>

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

                    <input type="email" class="form-control" id="regEmail" name="regEmail" placeholder="Email" value="" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>

                  </div>

                </div>

                <div class="form-group">
                  
                  <div class="input-group">
                    
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

                    <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Password" value="" pattern="[A-Za-z0-9!?-]{5,12}" required>

                  </div>

                </div>


                <?php

                  $registro = new ControllerUser();
                  $registro -> ctrRegisterUser();

                  //unset($_POST['regUsuario']);
                  //unset($_POST['regEmail']);
                  //unset($_POST['regPassword']);

                ?>
                
                <input type="submit" id="cleanInput" class="btn btn-default backColor2 btn-block" value="SEND">  

              </form>

                </div>
              
            </div>

        </div>

    <!--=====================================
	VENTANA MODAL PARA EL INGRESO
	======================================-->

	<div class="modal fade modalFormulario" id="modalIngreso" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor2">LOGIN</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>

			<!--=====================================
			DIRECT LOGIN
			======================================-->

			<form method="post" onsubmit="">

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="ingEmail" name="ingEmail" placeholder="Email" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="ingPassword" name="ingPassword" placeholder="Password" required>

					</div>

				</div>

				

				<?php

					$ingreso = new ControllerUser();
					$ingreso -> ctrLoginUser();

	                //unset($_POST['ingUsuario']);
	                //unset($_POST['ingEmail']);
	                //unset($_POST['ingPassword']);
				?>
				
				<input type="submit" class="btn btn-default backColor2 btn-block btnIngreso" value="SEND">	

			</form>

        </div>
      
    </div>

</div>
