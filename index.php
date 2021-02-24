<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
 
	
session_start();
require 'funcs/conexion.php';
require 'funcs/funcs.php';
 
$errors = array();
if(isset ($_SESSION['id_usuario'])) 
   {
    header("location: principal.php");
	exit;
}
else{
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>

		<link rel="stylesheet" href="css/lo.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/toastr.min.css" >
		<link rel="stylesheet" href="css/font-awesome.css" >

		<style>
			body {font-family: Arial, Helvetica, sans-serif;
        background-image:url(imagen/ojos.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: 90% 115%;;
  background-size: cover;
  background-attachment: fixed;}
* {box-sizing: border-box;}

.container{
  width: 85%;
  background: orange;
  opacity:0.9;
  padding: 40px;
  max-width: 450px;
  margin: 40px auto;
  border-radius: 15px;
  color: black;
}




		</style>
	</head>
	<body >

		
		<div class="container">    
			<div class="row">
				    <nav class="recupera">
				        <ul style="float:right; " class="nav">
				           <li><a href="#"> Recuperar Password</a>
				             <ul>
				                <li><a href="recuperacioncorreo.html"> Recuperar por correo</a></li> 
				                <li><a href="recupera_pre.php"> Recuperar por pregunta</a></li> 
				             </ul>
				           </li>				         
				         </ul>
						</nav>				
					<div class="panel panel-primary" >
						<div class="panel-heading">
							<div class="panel-title">Ingreso al Sistema</div>
						</div>     
						
						<div style="padding-top:10px" class="panel-body" >
							
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
							
							<form id="loginform" class="form-horizontal" role="form"  autocomplete="off">
					            <center>
					                <div class="form-group">
										<img src="imagen/crisaq2.png" alt="image" width="130" height="130px">
									</div>
					            </center>
										
			                 
			                    <div class="form-group">
			                        <label for="usuario" class="col-md-4 control-label">Usuario</label>

			                        <div class="input-group col-md-6">
									    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input title="USUARIO" id="usuario" type="text" class="form-control" style="text-transform: uppercase;" name="usuario" value="" placeholder="usuario" onkeypress="return soloLetras(event)" maxlength="15" onPaste="return false;" required> 
									    
									</div>
			                    </div>
                                 <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>



			                    <div class="form-group">
			                        <label for="password" class="col-md-4 control-label">Contraseña</label>

			                        <div class="input-group col-md-6">
									    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input title="PASSWORD" id="password" type="password" class="form-control" name="password" placeholder="password" maxlength="20" onPaste="return false;" required>
                            <span id="show-hide-passwd" action="hide" class="input-group-addon glyphicon glyphicon glyphicon-eye-open"></span>
									</div>
			                    </div>
			                   

			                    <div class="form-group">
			                        <div class="col-md-8 col-md-offset-4">
			                            <button type="submit" class="btn btn-success">
			                                Ingresar 
			                            </button>

			                           
			                        </div>
			                    </div>
	                <div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
								</div>
							</div>
						</div>   
							</form>
						</div>
					</div>
				</div>                     
			</div>  
		</div>




<div id="modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title">Preguntas a Responder</h4>
      </div>
      <div class="modal-body" >
    		<div class="panel panel-info">
    			<div class="panel-heading">
    				Elija la Pregunta  y Luego Registre su Respuesta
    			</div>
    			<div class="panel-body">
    				<form id="formpreguntas" class="form form-horizontal" >
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Preguntas</label>

                            <div class="col-md-6">
                                <select id="pregunta" class="form-control" name="pregunta">
                                	
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Respuesta</label>

                            <div class="col-md-6">
                                <input class="form-control" type="text" name="respuesta" id="respuesta" value="" placeholder="Respuesta para la pregunta">
                            </div>
                        </div>
                        <center>
						<input type="submit" class="btn btn-danger" name="guardar" value="Guardar" />
   				   				
						</center>
    				</form>
    			</div>
    		</div>
      </div>
    </div>
  </div>
</div>
<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/toastr.min.js" ></script>

<script type="text/javascript">
var cont = 0;
var totalpre = 0;
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

	$(document).on('submit', '#loginform', function(event) {
		event.preventDefault();
		$.ajax({
			url: 'funcs/login.php',
			type: 'POST',
			dataType: 'JSON',
			data: $(this).serialize(),
			success:function(data){
	
				toastr.options.timeOut = 2000;
				// toastr.options.showMethod = 'fadeIn';
				// toastr.options.hideMethod = 'fadeOut';
				// toastr.options.positionClass = 'toast-top-center';
				
				if(data=="ok"){
					toastr.success("Bienvenido al Sistema de la Fundacion CRISAQ");
					setTimeout(function(){
						location.href="principal.php";
					},2000);
				}
				else if(data=="nuevo"){
					toastr.success("Usuario Nuevo , Deberá Responder algunas preguntas de Seguridad");
					setTimeout(function(){
						$.get('funcs/preguntas.php',{'option':'listar'}, function(data) {
							$.each(data, function(index, val) {
								$('#pregunta').append('<option value="'+val.id_pregunta+'">' +  val.pregunta+'</option>');
							});
							
						},'json');

						$.get('funcs/preguntas.php',{'option':'getTotal'}, function(data) {
							totalpre = parseInt(data);
						},'json');
						
						$('#modal').modal({
						  backdrop: 'static',
						  keyboard: false
						});

					},2000);
				}
				else{
					toastr.error(data);
				}
			}
		})
	});

	$(document).on('submit', '#formpreguntas', function(event) {
		
		
		$.ajax({
			url: 'funcs/preguntas.php',
			type: 'POST',
			dataType: 'JSON',
			data: { 'option' : 'guardar' ,  'data':$(this).serialize() },
			success:function(data){
				if(data=="ok"){
					toastr.info("Pregunta Guardada Correctamente .");
					$('#respuesta').val('');
					$("#pregunta option").remove();
					cont++;
					if(cont < totalpre){
						$.get('funcs/preguntas.php',{'option':'listar'}, function(data) {
							$.each(data, function(index, val) {
								
								$('#pregunta').append('<option value="'+val.id_pregunta+'">' +  val.pregunta+'</option>');
							});
							
						},'json');
					}
					else{
						$('#modal').modal('hide');
						$.ajax({
							url: 'funcs/preguntas.php',
							type: 'POST',
							dataType: 'JSON',
							data : {'option' :'activateUser'},
							success:function(data){
								if(data=="ok")
									location.href="principal.php";
								else
									toastr.error("Ocurrio un error al Actualizar el Estado");
							}
						})
						
						
					}
				}
				else{
					toastr.warning("No se Pudo guardar la Repuesta");
				}
			}
		})
		event.preventDefault();
	});

})

</script>

<div class="footer">

</div>
</body>
</html>

<?php 

}
 ?>
<!-- ADMIN
Aluisa32$ -->