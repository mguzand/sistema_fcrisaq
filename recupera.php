<?php
	
require 'funcs/conexion.php';
require 'funcs/funcs.php';
$errors =array();
if  (!empty($_POST))
{
    $email = $mysqli->real_escape_string($_POST['email']);

        if (usuarioExiste($email)){
            
			$co="correo_electronico";
			$usuariocam="usuario";
			$cor= getValor($co,$usuariocam,$email);
			
			
            $user_id= getValor('id_usuario','usuario',$email);
            $nombre= getValor('nombre_usuario','correo_electronico',$cor);
            $token=  generateToken();
            $token1= generaTokenPass($user_id,$token);
            $url = 'http://localhost/web/cambia_pass.php?user_id='.$user_id.'&token='.$token;
					
					$asunto = 'recuperar pass';
					$cuerpo = "Estimado:$nombre <br /><br />Para continuar con el proceso de recuperación, es indispensable de click en la siguiente url <a href='$url'>Recuperar password</a>";
					
					if(mail($cor,$asunto, $cuerpo)){
					
					echo " le hemos enviado la direccion de correo electronico: $email por favor revisar";
					
					echo "<br><a href='index.php' >Iniciar Sesion</a>";
                        exit;
                        
        }else{
            
                        $errors[]="error al enviar";
        }
    }else{
        $errors[]="no existe usuario";
    }
}
?>
<html>
	<head>
		<title>Recuperar Contraseña</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>

				<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image:url(imagen/index.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
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
						<div class="panel-title">Recuperar Contraseña</div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="text" class="form-control" name="email" placeholder="USUARIO" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" maxlength="15" onPaste="return false;" required>                                        
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

							<center>
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Enviar</a>
								</div>
							</div>
							</center>
							<div class="form-group">
								<div class="col-md-12 control">
									
								</div>
							</div>
							<center><p class="tiene">Tienes una cuenta existente?<a class="iniciar" href="index.php"> Iniciar sesion</a></p></center>    
						</form>
                        <?php echo resultBlock($errors); ?>
					</div>                     
				</div>  
			
		</div>
	</body>
</html>							