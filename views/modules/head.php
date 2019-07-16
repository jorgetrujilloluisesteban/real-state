<?php

$servidor = Url::ctrUrlServer();
$url = Url::ctrUrl();

/*=============================================
INICIO DE SESIÓN USUARIO
=============================================*/

if(isset($_SESSION["validarSesion"])){

	if($_SESSION["validarSesion"] == "ok"){

		echo '<script>
		
			localStorage.setItem("usuario","'.$_SESSION["id"].'");

		</script>';

	}

}

?>
<!--=====================================
TOP
======================================-->

<div class="container-fluid barraSuperior" id="top">
	
			<!--=====================================
			COMPANY LOGO
			======================================-->

			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 logo">
				
				<ul>
					<li><a href="index.php">Real State Artstyloweb.com</a></li>
				</ul>

			</div>

			<!--=====================================
			REGISTRO
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
				
				<ul>

				<?php

					if($_SESSION["validarsesion"] == "ok"){

							echo '<li>

								<img class="img-circle" src="'.$url.'views/img/usuarios/104.jpg" width="10%">

							</li>';

							echo '<li>|</li>
							 <li><a href="#">'.$_SESSION["nombre"].'</a></li>
							 <li>|</li>
							 <li><a href="'.$url.'views/modules/salir.php">Exit</a></li>';

					}else{

					echo '<li><a href="#modalIngreso" data-toggle="modal">Login</a></li>
						  <li>|</li>
						  <li><a href="#modalRegistro" data-toggle="modal">Register</a></li>';

					}

				?>
	
				</ul>

			</div>	


</div>