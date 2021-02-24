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
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." AND pa.objeto='INVENTARIO'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
//$update=$res_per['permiso_actualizacion'];
//$delete=$res_per['permiso_eliminacion'];
//var_dump($insertar);

	$insertar=getPer('permiso_insercion',$rol,'24');

echo $insertar;
		$objeto="PANTALLA ESTADO RESULTADO";
		$accion="INGRESO A LA PANTALLA ESTADO RESULTADO";
		$descripcion="ingreso a pantalla Estado Resultado";

		$bita=grabarBitacora($idUsuario,$objeto,$accion,$descripcion);

}else{
	header ("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Estado Resultado</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
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
				Estado Resultado
			
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
			if ($insertar==1 || $idUsuario==15){?>
		
		<?php } ?>
		<!---<h4><i class='glyphicon glyphicon-search'></i> Buscar Registro</h4>--->
		</div>			
			<div class="panel-body">
		
			
			<table>
    <tbody>
        <tr><th colspan="2">Filtro:</th></tr>
        <tr><th>Mes que decea: <input type="" id="datepicker" name='datepicker' readonly><button id="filtrar" name="filtrar"><img src="imagen/lupa.png" style="height: 22px;width: 47px;"></th></tr>
        <th><button id="exportar" name="exportar"><img src="imagen/pdf.png"  style="height: 22px;width: 47px;"></button></th>
    </tbody>
</table>
 <form> 
<table id='tabla1' name='tabla1' >
			
			<?php
                
                include("modal/registro_ldiario.php");
			    include("modal/editar_libro_diario.php");
                
			?>
			<form class="form-horizontal" role="form" id="datos_cotizacion">
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div' ><table id="tabla" name="tabla"></table></div><!-- Carga los datos ajax -->
					<?php
                
                include("modal/eliminar_ldiario.php");
			   
                
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
      modal.find('.modal-body #mod_id').val(mod_idid)
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
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/eliminar_ldiario.php",
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
			url: "ajax/editar_ldiario.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax2").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax2").html(datos);
			$('#actualizar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})

	$( "#guardar_parametro" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_ldiario.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})
	
		   	$(document).ready(function(){
			load(1);
		});
		function cargar(){
  var fecha = $("#datepicker").val();
  $.ajax({
      url:"ajax/buscar_eresultado.php",
      data:({accion : 'cargar',fecha : fecha}),
      type: "POST",
      dataType: "JSON",
      success: function(datos){
          var objetivo = document.getElementById('tabla1');
          objetivo.innerHTML = datos;

      }
  });
};
        

		function obtener_datos(id,cuenta,tipo,des,mont){ 				
			$("#mod").val(id);
			$("#tc").val(cuenta);
			$("#tip").val(tipo);
			$("#des").val(des);	
			$("#mon").val(mont);	
		}	
        

        function capturar(id){ 				
			$("#user_id_mod").val(id);
				
		}
        
        
        
        
$('#bd-desde').on('change', function(){
		var desde = $('#bd-desde').val();
		var hasta = $('#bd-hasta').val();
		var url = 'ajax/buscar_ldiario_fecha.php';
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
		var url = 'ajax/buscar_ldiario_fecha.php';
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

	$(function() {
  $('#datepicker').datepicker( {
    closeText: 'Cerrar',
    prevText: '<Ant',
    nextText: 'Sig>',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    // monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    dateFormat: 'mm-yy',
    onClose: function(dateText, inst) { 
      $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
    }
    });
  });

  $(document).ready(function(){
  $("#exportar").click(function(){
        var fecha = $('#datepicker').val();
		var day = $('#date').val();
		var primer_dia=$('#date').val();
		var ultimo_dia=$('#date').val();
		
        window.open ('reporte/re_estado_resultado.php?fecha='+fecha, 'Reporte', "height=700,width=800,scrollTo,resizable=1,scrollbars=1,location=0", true);
    //     exportar();
    });
    $("#filtrar").click(function(){
        cargar();
    });
});

	
	
		
function reportePDF(){
	var desde = $('#bd-desde').val();
var hasta = $('#bd-hasta').val();
	window.open('reporte/rldiario.php?desde='+desde+'&hasta='+hasta);
}

        
        
		</script>