<?php

session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';

if(($_SESSION['id_usuario'])){
 $idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND 
us.id_usuario =".$idUsuario." AND pa.objeto='PRODUCTO'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];


	
	
$insertar=getPer('permiso_insercion',$rol,'15');
$consultar=getPer('permiso_consulta',$rol,'15');



echo $insertar;
		$objeto="PANTALLA PRODUCTO";
		$accion="INGRESO A LA PANTALLA PRODUCTO";
		$descripcion="Ingreso a pantalla Producto";

		$bita=grabarBitacora($rol,$objeto,$accion,$descripcion);

}else{
	header ("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Productos</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Cat Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/es.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
	<?php include("menu.php"); ?>
</head>
<body>
	<!-- banner -->
	<!-- banner -->
	<!-- Inicio header -->
			
		<div class="about-heading">	
			<div class="con">
				Productos
			
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<!-- //banner -->
	<!-- contact -->
	<div class="contact-top">
		<!-- container -->
		<div class="container">
		<div class="panel panel-success">
		<div class="panel-heading">

			<?php
			if ($insertar==1 || $rol==15){?>
			 <div class="btn-group pull-right">
		    
		 
			<button type='button' class="btn btn-success" data-toggle="modal" data-target="#myModalpara"><span class="glyphicon glyphicon-plus" ></span> Agregar </button>
			</div>
			
		    <?php } ?>
			
		</div>			
			<div class="panel-body">
			
				<form>
				<center>
			      <i class='glyphicon glyphicon-share'  title="salir de la consulta" onclick="load(1)"></i>

				  <input type="date" id="bd-desde"  />
				  <input type="date" id="bd-hasta"  />
				  <a onclick="reportePDF();" class="btn btn-danger">Consulta a PDF</a>
				</center>
			</form>
			
			
			
			<?php
                
                include("modal/registro_producto.php");
			    include("modal/editar_producto.php");
                
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
					<?php
                
                include("modal/eliminar_producto.php");
			   
                
			?>
						
			</div>
		</div>

	</div>
		<!-- //container -->
	</div>
	<!-- //contact -->
	<!-- footer -->
	<footer>

	</footer>
  
   <script type="text/javascript">
	$('#myModal2').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget) // Button that triggered the modal
	  var mod_id= button.data('mod_id')
	  var parametro = button.data('parametro')
	  var valor = button.data('valor') 
	  var modal = $(this)
      modal.find('.modal-body #mod_id').val(mod_id)
	  modal.find('.modal-body #parametro').val(parametro)
	  modal.find('.modal-body #valor').val(valor)
	 
	  })
</script>
    
    <script type="text/javascript" src="js/parametros.js"></script>
	<!-- footer -->
	<!-- copyright -->
	
	<!-- //copyright -->
	<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>

	<!-- here stars scrolling icon -->
	
<!-- //here ends scrolling icon -->
</body>	
</html>



    <script>
        
        
$( "#editar_password" ).submit(function( event ) {
  $('#actualizar_datos3').attr("disabled", true);
  $('#guardar_datos')[0].reset();
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/eliminar_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax3").html(datos);
			$('#actualizar_datos3').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})
        
        
$( "#editar_usuario" ).submit(function( event ) {
  $('#actualizar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			$("#editar_usuario")[0].reset();
			load(1);
		  }
	});
  event.preventDefault();
})

	$( "#guardar_parametro" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);



 if ($('#min').val()<=499 || $('#min').val()>=1000  || $('#max').val() > 1000 || $('#max').val() <  $('#min').val() ) {
 	$("#resultados_ajax").html(` 
  			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					Validacion error 
				</div>
			`);
 	$('#guardar_datos').attr("disabled", false);
 	event.preventDefault();
 	return;
 }


 

 var parametros = $(this).serialize();


 		$("#resultados_ajax").fadeIn();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			$("#guardar_parametro")[0].reset();
			setTimeout( () => {
			        $("#resultados_ajax").fadeOut();
			}, 3000);

			load(1);
		  }
	});
  event.preventDefault();
})
	
		$(document).ready(function(){
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1; //January is 0!
			var yyyy = today.getFullYear();
			 if(dd<10){
			        dd='0'+dd
			    } 
			    if(mm<10){
			        mm='0'+mm
			    } 

			today = yyyy+'-'+mm+'-'+dd;
			document.getElementById("bd-hasta").setAttribute("max", today);
			document.getElementById("bd-desde").setAttribute("max", today);

 
			today = new Date();
			var day = today.getDate();
			var month = today.getMonth() + 1;
			var year = today.getFullYear();

			if (month < 10) month = "0" + month;
			if (day < 10) day = "0" + day;
			var today = year + "-" + month + "-" + day;
			$('#bd-hasta').val(today);
			console.log(today)
			load(1);
		});

		function load(page){
		
			$("#loader").fadeIn('slow');

		  var desde = $('#bd-desde').val();
		  var hasta = $('#bd-hasta').val();


			$.ajax({
				url:'ajax/buscar_productos.php?desde='+desde+'&hasta='+hasta,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}
        

		function obtener_datos(id,nombre,precio){ 				
			$("#mod").val(id);
			$("#produc").val(nombre);
			$("#pre").val(precio);
			
		
		}	
        
        function capturar(id){ 				
			$("#user_id_mod").val(id);
				
		}
        
        
        
        
$('#bd-desde').on('change', function(){
		// var desde = $('#bd-desde').val();
		// var hasta = $('#bd-hasta').val();
		// var url = 'ajax/buscar_producto_fecha.php';
		// $.ajax({
		// type:'POST',
		// url:url,
		// data:'desde='+desde+'&hasta='+hasta,
		// success: function(data){
		// 	$(".outer_div").html(data).fadeIn('slow');
		// 			$('#loader').html('');
		// }
	// });
	// return false;
	load(1)
	});
	
	  
	  
	  $('#bd-hasta').on('change', function(){
		// var desde = $('#bd-desde').val();
		// var hasta = $('#bd-hasta').val();
		// var url = 'ajax/buscar_producto_fecha.php';
		// $.ajax({
		// type:'POST',
		// url:url,
		// data:'desde='+desde+'&hasta='+hasta,
		// success: function(data){
		// 	$(".outer_div").html(data).fadeIn('slow');
		// 			$('#loader').html('');
		// }
	// });
	// return false;
	load(1)
	});
	
	
		

//	function reportePDF(){
//	var filtro = $('#buscar').val();
//	window.open('reporte/reproducto.php?filtro='+filtro);
//}
function reportePDF(){

	var desde = $('#bd-desde').val();
	var hasta = $('#bd-hasta').val();
	window.open('reporte/reproducto.php?desde='+desde+'&hasta='+hasta);
}

        
        
		</script>