/*=============================================
BODY LIST0 AND GRID0
=============================================*/

$("#btnList0").click(function(){

	/*$(".grid0").css("display:none");*/

	$("#properties .grid0").hide();
	$("#properties .map01").hide();
	$("#properties .list0").show();
		
});

$("#btnGrid0").click(function(){

	$("#properties .list0").hide();
	$("#properties .map01").hide();
	$("#properties .grid0").show();
		
});

$("#btnMap0").click(function(){

	$("#properties .grid0").hide();
	$("#properties .list0").hide();
	$("#properties .map01").show();

		
});

$("#salir").click(function(){

	window.location ="../modules/salir.php"

		
});


/*=============================================
TAKE MIN PRICE MAX PRICE AND NUMBER OF BED
=============================================*/

$(".seleccionarMinprice").change(function(){

		// Get the value from the selected option in a dropdown
		var minprice = $( "select#seleccionMinprice option:checked" ).val();
		var maxprice = $( "select#seleccionMaxprice option:checked" ).val();


		minprice2 = parseInt(minprice);
		maxprice2 = parseInt(maxprice);


		localStorage.setItem("minprice", minprice2);
		localStorage.setItem("maxprice", maxprice2);

		//location.reload();

		var datos = new FormData();

		datos.append("minprice", localStorage.getItem("minprice"))
		datos.append("maxprice", localStorage.getItem("maxprice"));

		$.ajax({

			url:"http://www.artstyloweb.com/real-state/ajax/ajax.property.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success:function(respuesta){

					console.log(respuesta);

					var listaPropiedades = JSON.parse(respuesta);

				if (listaPropiedades.length != 0){
					//var listaPropiedades = jQuery.parseJSON(JSON.stringify(respuesta));
					//var listaPropiedades = jQuery.parseJSON(respuesta);
					//var listaPropiedades = JSON.stringify(respuesta);

					//listaPropiedades.forEach(funcionForEach);
					$("#properties").html('');

					$("#properties").append('<ul class="list0">');
					//function funcionForEach(item, index){
					for(var i = 0; i < listaPropiedades.length; i++){

						$("#properties").append('<div class="list0">'+
												'<li class="col-xs-12">'+
												'<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">'+
												'<figure>'+

												'<a href="?id='+listaPropiedades[i]["id"]+'" class="pixelProducto">'+

												'<img src="http://www.artstyloweb.com/real-state/views/img/'+listaPropiedades[i]["photo1"]+'" class="img-responsive">'+
												'</a>'+
												'</figure>'+
												'<br>'+
												'<span id="price">£'+listaPropiedades[i]["price"]+'pcm</span>'+
												'</div>'+
												'<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">'+
												'<figure>'+
												'<a href="?id='+listaPropiedades[i]["id"]+'"  class="pixelProducto">'+
												'<img src="http://www.artstyloweb.com/real-state/views/img/'+listaPropiedades[i]["photo2"]+'" class="img-responsive">'+
												'</a>'+
												'</figure>'+
												'</div>'+
												'<div class="col-sm-6 col-xs-12">'+
												'<b class="name">'+listaPropiedades[i]["name"]+'</b><br>'+
												'<b><i>'+listaPropiedades[i]["address"]+'</i></b><br>'+listaPropiedades[i]["descripcion"]+'<br><br>'+
												'<span style="color:green;">'+listaPropiedades[i]["person-in-charge"]+'</span>'+
												'</div>'+
												'</li>'+
												'<div class="col-xs-12"><hr></div>'+
												'</div>');
						
									
					}
					$("#properties").append('</ul>');


					$("#properties").append('<ul class="grid0" style="display:none;">');
					//function funcionForEach(item, index){
					x=0;
					for(var i = 0; i < listaPropiedades.length; i++){

						$("#properties").append('<div class="grid0">'+
												'<a href="?id='+listaPropiedades[i]["id"]+'" class="pixelProducto grid0">'+

												'<img src="http://www.artstyloweb.com/real-state/views/img/'+listaPropiedades[i]["photo1"]+'" class="img-responsive">'+

												'<br>'+
												'<b class="name">'+listaPropiedades[i]["name"]+'</b>'+
												'<br>'+
												'<span id="price">£'+listaPropiedades[i]["price"]+'pcm</span>'+

												'</a>'+
												'</div>');

												x++;
												if (x==3)
												{
													x=0;
													$("#properties").append('<div class="col-xs-12"><hr></div>'+
													'<div class="clearfix"></div>');
												}
									
					}
					$("#properties").append('</ul>');
					
					$("#properties").append('<div class="col-xs-12 map01" style="display:none">'+
											'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.599612312314!2d-16.256130685324266!3d28.46148368248556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cc9d167ca2b7%3A0xb3cc55ad9565258!2sCalle+de+Fern%C3%A1ndez+Navarro%2C+Santa+Cruz+de+Tenerife!5e0!3m2!1ses!2ses!4v1516983388716" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>'+
											'</div>');	


					if($("#properties .list0").show){
						$("#properties .grid0").hide();
					}

				}
				else
				{
					$("#properties").append('<div class="col-xs-12 error404 text-center">'+

						'<h1><small>¡Oops!</small></h1>'+

						'<h2>There are not any properties with this caracterist</h2>'+

					'</div>');
				}
						      },
			error: function(error){
						          alert(error);
						          console.log(error);
						      }

		});



});

$(".seleccionarMaxprice").change(function(){

		// Get the value from the selected option in a dropdown
		var minprice = $( "select#seleccionMinprice option:checked" ).val();
		var maxprice = $( "select#seleccionMaxprice option:checked" ).val();


		minprice2 = parseInt(minprice);
		maxprice2 = parseInt(maxprice);

		console.log("minprice2", minprice2);
		console.log("maxprice2", maxprice2);


		localStorage.setItem("minprice", minprice2);
		localStorage.setItem("maxprice", maxprice2);

		//location.reload();

		var datos = new FormData();

		datos.append("minprice", localStorage.getItem("minprice"))
		datos.append("maxprice", localStorage.getItem("maxprice"));

		$.ajax({

			url:"http://www.artstyloweb.com/real-state/ajax/ajax.property.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success:function(respuesta){

					//console.log(respuesta);

					var listaPropiedades = JSON.parse(respuesta);

					console.log(listaPropiedades);

				if (listaPropiedades.length != 0){
					//var listaPropiedades = jQuery.parseJSON(JSON.stringify(respuesta));
					//var listaPropiedades = jQuery.parseJSON(respuesta);
					//var listaPropiedades = JSON.stringify(respuesta);

					//listaPropiedades.forEach(funcionForEach);
					$("#properties").html('');

					$("#properties").append('<ul class="list0">');
					//function funcionForEach(item, index){
					for(var i = 0; i < listaPropiedades.length; i++){

						$("#properties").append('<div class="list0">'+
												'<li class="col-xs-12">'+
												'<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">'+
												'<figure>'+

												'<a href="?id='+listaPropiedades[i]["id"]+'" class="pixelProducto">'+

												'<img src="http://www.artstyloweb.com/real-state/views/img/'+listaPropiedades[i]["photo1"]+'" class="img-responsive">'+
												'</a>'+
												'</figure>'+
												'<br>'+
												'<span id="price">£'+listaPropiedades[i]["price"]+'pcm</span>'+
												'</div>'+
												'<div class="col-lg-3 col-md-5 col-sm-6 col-xs-12">'+
												'<figure>'+
												'<a href="?id='+listaPropiedades[i]["id"]+'"  class="pixelProducto">'+
												'<img src="http://www.artstyloweb.com/real-state/views/img/'+listaPropiedades[i]["photo2"]+'" class="img-responsive">'+
												'</a>'+
												'</figure>'+
												'</div>'+
												'<div class="col-sm-6 col-xs-12">'+
												'<b class="name">'+listaPropiedades[i]["name"]+'</b><br>'+
												'<b><i>'+listaPropiedades[i]["address"]+'</i></b><br>'+listaPropiedades[i]["descripcion"]+'<br><br>'+
												'<span style="color:green;">'+listaPropiedades[i]["person-in-charge"]+'</span>'+
												'</div>'+
												'</li>'+
												'<div class="col-xs-12"><hr></div>'+
												'</div>');
						
									
					}
					$("#properties").append('</ul>');


					$("#properties").append('<ul class="grid0" style="display:none;">');
					//function funcionForEach(item, index){
					x=0;
					for(var i = 0; i < listaPropiedades.length; i++){

						$("#properties").append('<div class="grid0">'+
												'<a href="?id='+listaPropiedades[i]["id"]+'" class="pixelProducto grid0">'+

												'<img src="http://www.artstyloweb.com/real-state/views/img/'+listaPropiedades[i]["photo1"]+'" class="img-responsive">'+

												'<br>'+
												'<b class="name">'+listaPropiedades[i]["name"]+'</b>'+
												'<br>'+
												'<span id="price">£'+listaPropiedades[i]["price"]+'pcm</span>'+

												'</a>'+
												'</div>');

												x++;
												if (x==3)
												{
													x=0;
													$("#properties").append('<div class="col-xs-12"><hr></div>'+
													'<div class="clearfix"></div>');
												}
									
					}
					$("#properties").append('</ul>');
					
					$("#properties").append('<div class="col-xs-12 map01" style="display:none">'+
											'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.599612312314!2d-16.256130685324266!3d28.46148368248556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc41cc9d167ca2b7%3A0xb3cc55ad9565258!2sCalle+de+Fern%C3%A1ndez+Navarro%2C+Santa+Cruz+de+Tenerife!5e0!3m2!1ses!2ses!4v1516983388716" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>'+
											'</div>');	


					if($("#properties .list0").show){
						$("#properties .grid0").hide();
					}
				}
				else
				{
					$("#properties").html('');
					$("#properties").append('<div class="col-xs-12 error404 text-center">'+

						'<h1><small>¡Oops!</small></h1>'+

						'<h2>There are not any properties with this caracterist</h2>'+

					'</div>');
				}

						      },
			error: function(error){
						          alert(error);
						          console.log(error);
						      }

		});



});