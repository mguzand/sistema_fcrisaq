<?php
	
require 'funcs/conexion.php';
require 'funcs/funcs.php';
$errors =array();
if  (!empty($_POST))
{
    $user = $mysqli->real_escape_string($_POST['email']);
   
   
        if (usuarioExiste($user)){
            
            $user_id= getValor('id_usuario','usuario',$user);
         echo "esta bien";
						
header('Location:cambia_pass_pre.php?user_id='.$user_id);
					 
					
                        
        
    }else{
        $errors[]="no existe usuario";
    }
}
?>
<html>
	<head>
		<title>Recuperar Contraseña</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >

		<script src="js/bootstrap.min.js" ></script>
		
				<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image:url(imagen/donacion.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}
* {box-sizing: border-box;}

.container{
  width: 60%;
  background: grey;
  opacity:0.9;
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
								<input id="email" type="text" class="form-control" name="email" placeholder="USUARIO"   style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  onPaste="return false;" maxlength="15" required>                                        
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
							</center><br>
							<center><p class="tiene">Tienes una cuenta existente?<a class="iniciar" href="index.php"> Iniciar sesion</a></p></center>
							<div class="form-group">
								<div class="col-md-12 control">
									
								
							</div>    
						</form>
                        <?php echo resultBlock($errors); ?>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>							