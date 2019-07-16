<?php

class ControllerUser{

	/*=============================================
	USER REGISTER
	=============================================*/

	public function ctrRegisterUser(){

		if(isset($_POST["regUsuario"])){

				$datos = array("nombre"=>$_POST["regUsuario"],
							   "email"=> $_POST["regEmail"],
							   "password"=>$_POST["regPassword"],
							   "modo"=> "directo",
							   "verificacion"=> 1);

				$tabla = "customer";

				$respuesta = ModelUser::mdlFindUsername($tabla, $datos);


				if($respuesta["email"] <> $_POST["regEmail"]){
			

					$respuesta = ModelUser::mdlRegisterUser($tabla, $datos);


					if($respuesta == "ok"){

						unset($_POST['regUsuario']);
						unset($_POST['regEmail']);
						unset($_POST['regPassword']);

						echo '<script> 

								swal({
									  title: "¡Registered user!",
									  text: "",
									  type:"success",
									  confirmButtonText: "Close",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											window.location = "index.php";
										}
								});

						</script>';
					}else
					{
						unset($_POST['regUsuario']);
						unset($_POST['regEmail']);
						unset($_POST['regPassword']);

						echo '<script> 

								swal({
									  title: "¡failure to register!",
									  text: "",
									  type:"error",
									  confirmButtonText: "Close",
									  closeOnConfirm: false
									},

									function(isConfirm){

										if(isConfirm){
											window.location = "index.php";
										}
								});

						</script>';
					}
				}
				else
				{
						unset($_POST['regUsuario']);
						unset($_POST['regEmail']);
						unset($_POST['regPassword']);

					echo '<script> 

							swal({
								title: "¡User already exists!",
								text: "¡Please put another email",
								type:"error",
								confirmButtonText: "Close",
								closeOnConfirm: false
								},

										function(isConfirm){

											if(isConfirm){
												window.location = "index.php";
											}
								});

							</script>';
				}
		}
		
	}
	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

	public function ctrLoginUser(){

		if($_SESSION["validarsesion"]==""){

				if(isset($_POST["ingEmail"])){

						$tabla = "customer";
						$item = "email";
						$valor = $_POST["ingEmail"];

						$respuesta = ModelUser::mdlShowUser($tabla, $valor);

						if($respuesta["email"] == $_POST["ingEmail"] && $respuesta["password"] == $_POST["ingPassword"]){

								$_SESSION["validarsesion"] = "ok";
								$_SESSION["id"] = $respuesta["id"];
								$_SESSION["nombre"] = $respuesta["name"];
								//$_SESSION["foto"] = $respuesta["foto"];
								$_SESSION["email"] = $respuesta["email"];
								$_SESSION["password"] = $respuesta["password"];
								//$_SESSION["modo"] = $respuesta["modo"];

								echo '<script> 

										swal({
											  title: "¡Logged user!",
											  text: "",
											  type:"success",
											  confirmButtonText: "Close",
											  closeOnConfirm: false
											},

											function(isConfirm){

												if(isConfirm){
													window.location = "index.php";
												}
										});

								</script>';

						}else{

							$_SESSION["validarsesion"] = "";

							echo'<script>

									swal({
										  title: "¡LOGIN ERROR!",
										  text: "¡Please check that the email exists or the password matches the registered one!",
										  type: "error",
										  confirmButtonText: "Close",
										  closeOnConfirm: false
									},

									function(isConfirm){
											 if (isConfirm) {	   
											    window.location = "index.php";
											  } 
									});

									</script>';

						}
							unset($_POST['ingUsuario']);
							unset($_POST['ingEmail']);
							unset($_POST['ingPassword']);

				}

			}
			else
			{
				$_SESSION["validarsesion"] = "ok";

			}
	}
}
