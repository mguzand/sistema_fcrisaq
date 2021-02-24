<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	if(empty($_GET['user_id'])){
		header('Location: index.php');
	}
	
	if(empty($_GET['token'])){
		header('Location: index.php');
	}
	
	$user_id = $mysqli->real_escape_string($_GET['user_id']);
	$token = $mysqli->real_escape_string($_GET['token']);
	
	
			

$objeto="PANTALLA DE CAMBIO DE CONTRASEÑA";
$accion="CAMBIO DE CONTRASEÑA";
$descripcion="Esta en la pantalla de cambio de contraseña";
$bita=grabarBitacora($user_id,$objeto,$accion,$descripcion);
	
	
?>

<html>
	<head>
		<title>Cambiar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		
		<script src="js/bootstrap.min.js" ></script>
		<script src="../login/js/jquery.min.js" ></script>
		<script src="../login/js/bootstrap.min.js" ></script>

						<style>
body {font-family: "Ubuntu", helvetica;
  background-image:url(imagen/quem1.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: 94% 96%;;
  
  background-attachment: fixed;
}
* {box-sizing: border-box;}

.container{
  width: 60%;
  background: grey;
  opacity:0.8;
  padding: 40px;
  max-width: 450px;
  margin: 40px auto;
  border-radius: 15px; 
  color: white;
  padding: auto;
}

.tiene{
	color: black;

}
</style>
		
		
	</head>
	
	<body>
		
		<div class="container">    
		                   
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Cambiar Contraseña</div>
				
			</div>     
			
			<div style="padding-top:30px" class="panel-body" >
				
				<form id="loginform" class="form-horizontal" role="form" action="guarda_pass.php" method="POST" autocomplete="off">
					
					<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
					
					<input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
					
					<div class="form-group">
						<label for="password" class="col-md-3 control-label">
						Nuevo Password</label>
						<div class="col-md-9">
							<div class="input-group">
						<span class="input-group-addon">
						<i class="glyphicon glyphicon-lock"></i></span>
							<input  title="Nuevo Password"
							 type="password" class="form-control"
							 name="password" placeholder="Contraseña Nueva" 
							 maxlength="20"
							  onPaste="return false;" onkeyup="return noespacios1();"  required>
							 <span id="show-hide-passwd" action="hide" 
							 class="input-group-addon glyphicon glyphicon 
							 glyphicon-eye-open"></span>
						</div>
						</div>
					</div>
					<script type="text/javascript">                
                      function noespacios1(){
		              orig=document.form.password.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.form.password.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	}
      
                     </script>      



					
					<div class="form-group">
						<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
				 		<div class="col-md-9">
							<div class="input-group">
						<span class="input-group-addon"><i 
						class="glyphicon glyphicon-lock"></i></span>
							<input title="Confirmacion del nuevo Password"
							 type="password" class="form-control" 
							  autocomplete="off" autofocus="on"name="con_password" 
							 placeholder="Confirmar Contraseña" maxlength="20" 
							 onPaste="return false;" nrequired>
							<span id="show-hide-passwd1" action="hide" 
							class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span>
						</div>
						</div>
					</div>
					<script>  
                
			$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
			
			
						$(document).on('ready', function() {
			$('#show-hide-passwd1').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
	</script>



					<center>
					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
							<button title="Guardar Nuevo Password" id="btn-login" type="submit" class="btn btn-success">Modificar</a>
						</div>
					</div>
					</center> 
					<center><p class="tiene">Tienes una cuenta existente?<a class="iniciar" href="index.php"> Iniciar sesion</a></p></center>  
				</form>
			</div>                     
		</div>  
		
		</div>
	</body>
</html>	






  <script>  
                
			$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
			
			
						$(document).on('ready', function() {
			$('#show-hide-passwd1').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
	</script>