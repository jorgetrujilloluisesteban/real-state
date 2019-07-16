<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php

		if(!isset($_SESSION["validarsesion"])){

			$_SESSION["validarsesion"] = "";
		}

		$server = Url::ctrUrlServer();

		//$template = ControllerTemplate::ctrStyleTemplate();


		/*=============================================
		PUT THE URL IN THE PROJECT
		=============================================*/
		
		$url = Url::ctrUrl();

		/*=============================================
		MARCADO DE CABECERA
		=============================================*/

		$rutas = array();

		if(isset($_GET["ruta"])){

			$rutas = explode("/", $_GET["ruta"]);

			$ruta = $rutas[0];

		}else{

			$ruta = "index";

		}

	?>

	<!--=====================================
	PLUGINS CSS
	======================================-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo $url; ?>views/css/plugins/sweetalert.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--=====================================
	PERSONALIZED STYLE LEAVES
	======================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>views/css/plantilla.css">

	<link rel="stylesheet" href="<?php echo $url; ?>views/css/cabezote.css">

	<link rel="stylesheet" href="<?php echo $url; ?>views/css/productos.css">

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="<?php echo $url; ?>views/js/plugins/sweetalert.min.js"></script>
	

</head>

<body>

<?php

include "modules/head.php";

if(isset($_GET["id"])){

	include "modules/property.php";

}else
{
/*=============================================
HEADER AND BODY
=============================================*/

	//include "modules/cabezote.php";
	include "modules/body.php";
}

	include "modules/footer.php";

?>

<!--=====================================
JAVASCRIPT PERSONALIZED
======================================-->

<script src="<?php echo $url; ?>views/js/body.js"></script>


</body>
</html>