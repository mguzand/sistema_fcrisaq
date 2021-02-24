<?php

session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';
$idUsuario = $_SESSION['id_usuario'];
if(($_SESSION['id_usuario'])){
 
    $rol = $_SESSION['id_rol'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." AND pa.objeto='USUARIOS'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
//$actualizacion=$res_per['permiso_actualizacion'];
//$eliminacion=$res_per['permiso_eliminacion'];
//var_dump($insertar);

	
	$insertar=getPer('permiso_insercion',$rol,'1');
	$consultar=getPer('permiso_consulta',$rol,'1');

		$objeto="PANTALLA USUARIOS";
		$accion="INGRESO A LA PANTALLA USUARIOS";
		$descripcion="ingreso a pantalla usuarios";
		
		$bita=grabarBitacora($idUsuario,$objeto,$accion,$descripcion);
			
}else{
	header ("Location: index.php");
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Usuarios</title>



<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap1.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<link href="css/es1.css" rel="stylesheet" type="text/css" media="all" />
<!-- css -->
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->

<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/usuarios.js"></script>
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
<!-- Inicio header -->
				<?php include("menu.php"); ?>

</head>


   

   
		<div class="about-heading">	
			<div class="con">
			    USUARIOS
		</div>
	</div>
	
	
	<!-- //banner -->
	<!-- contact -->
	<!-- //banner -->
	<!-- contact -->
	 <div class="container">
		<div class="panel panel-success">
		<div class="panel-heading">
            	<?php
               if ($insertar==1 || $idUsuario==2){?>
		    <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span> Nuevo Usuario</button>
			</div>
                	<?php } ?>
                	
               
			
			
		</div>			
			<div class="panel">
			
		<form>
				<center>
			      <i class='glyphicon glyphicon-share'  title="salir de la consulta" onclick="load(1)"></i>

				  <input type="date" id="bd-desde"  /><input type="date" id="bd-hasta" /><a onclick="reportePDF();" class="btn btn-danger">Consulta a PDF</a>
				</center>
			</form>
			
				<?php
				
				
			include("modal/registro_usuarios.php");
			include("modal/editar_usuarios.php");
				require 'modal/eliminar_usuario.php';
	

		  
			?>
						
			</div>
			<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			
		</div>


	<!-- footer -->
	<!-- copyright -->
	
	<!-- //copyright -->
	<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	
<!-- //here ends scrolling icon -->

</html>

  <script>

	  function
	  obtener_id(item){
		
				
			$("#user_id_mod").val(item);
	        
	      
 }
	  
	  
	  
$( "#editar_password" ).submit(function( event ) {
  $('#actualizar_datos3').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/eliminar_usuario.php",
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
	  
	function obtener_datos(id,nombre,usuario,rol,correo,estado){
     
			
			$("#mod_id").val(id);
			$("#nombre_usuarios").val(nombre);
			$("#usuarios").val(usuario);
			$("#rols").val(rol);
			$("#correo_electronicos").val(correo);
			$("#estado_usuarios").val(estado);
		}

	
	  $( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_usuariossss.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			$("#guardar_usuario")[0].reset();
				load(1);
			
		  }
		 
	});
  event.preventDefault();
})
	  
	  
	  $( "#editar_usuario" ).submit(function( event ) {
  $('#actualizar_datos2').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_usuarios.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos2').attr("disabled", false);
			$("#editar_usuario")[0].reset();
			load(1);
		  }
	});
  event.preventDefault();
})





	
	  
	 	$(document).ready(function(){
			load(1);
		});

		function load(page){
		
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/buscar_usuarios2.php',
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}

$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = 'ajax/buscar_usuario_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(data){
			$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
		}
	});
	return false;
	});
	
	  
	  
	  $('#bd-hasta').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = 'ajax/buscar_usuario_fecha.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'desde='+desde+'&hasta='+hasta,
		success: function(data){
			$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
		}
	});
	return false;
	});
	
	
		
function reportePDF(){
	var desde = $('#bd-desde').val();
	var hasta = $('#bd-hasta').val();
	window.open('reporte/usuario.php?desde='+desde+'&hasta='+hasta);
}


	
	 </script>