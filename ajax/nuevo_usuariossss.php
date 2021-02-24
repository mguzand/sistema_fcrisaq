<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();

?>




<?php

		if (empty($_POST['nombre_usuario'])){
			$errors[] = "Nombres vacíos";
		} elseif (empty($_POST['usuario'])){
			$errors[] = "Alias de usuario vacío";
        } elseif (empty($_POST['mod_rol'])) {
            $errors[] = "Rol de Usuario no seleccionado"; 		
        } elseif (empty($_POST['correo_electronico'])) {
            $errors[] = "El correo electrónico no puede estar vacío";
        } elseif (empty($_POST['estado_usuario'])) {
            $errors[] = "Estado del usuario no seleccionado";      
        } elseif (empty($_POST['contrasena'])) {
            $errors[] = "Contraseña vacía";                
        } elseif (empty($_POST['contrasena2'])){
            $errors[] = "Confirmacion de contraseña vacía";

			   } elseif (
			
			
			
			
			
			!empty($_POST['usuario'])
			&& !empty($_POST['nombre_usuario'])
			         
            && !empty($_POST['mod_rol'])

            && !empty($_POST['correo_electronico'])

            && !empty($_POST['estado_usuario'])
                      
            && !empty($_POST['contrasena'])
                
            && !empty($_POST['contrasena2'])
           

        ) {
           
			
				// escaping, additionally removing everything that could be (html/javascript-) code
              
				$nombre_usuario=$_POST["nombre_usuario"];
				$usuario=$_POST["usuario"];				
                $correo_electronico = $_POST["correo_electronico"];				
				$contrasena=$_POST["contrasena"];
                $contrasena2=$_POST["contrasena2"];
				$estado_usuario=$_POST['estado_usuario'];
				$pass_hash=hashPassword($contrasena);
                $rol=$_POST['mod_rol'];
              //  $variable = filter_var('correo@correo.com');
            

            $nombre_usuario=strtoupper($nombre_usuario);
            $usuario=strtoupper($usuario);
            $estado_usuario=strtoupper($estado_usuario);
            $rol=strtoupper($rol);
                // check if user or email address already exists
            
    		if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,16}$/', $contrasena)){
                
                
                    
                
			
                $sql = "SELECT * FROM tbl_usuario WHERE usuario = '" . $usuario . "' OR correo_electronico = '" . $correo_electronico . "';";
                $query_check_user_name = mysqli_query($mysqli,$sql);
				$query_check_user=mysqli_num_rows($query_check_user_name);
                if ($query_check_user == 1) {
                    $errors[] = "Lo sentimos , el nombre de usuario ó la dirección de correo electrónico ya está en uso.";
                } elseif($contrasena2!=$contrasena){
                       ($errors[] = "Las contraseñas no coinciden.");
                        
              /*  }elseif (filter_var($correo_electronico, FILTER_VALIDATE_EMAIL)){
                    mail("bernardo@me.com", $nombre_usuario, $correo_electronico, $messages);
                    
                }else{
                    header("location:../modal/registro_usuarios.php?id=incorrecto");
                   */
                } // elseif($correo_electronico!=$variable){
                   // ($errors[] = "El formato del correo es invalido.");
                if (preg_match('/\w+@\w+\.+[a-z]/', $correo_electronico)){         
                
                
                
					// write new user's data into database
                    $consulta=("insert into tbl_usuario (nombre_Usuario,usuario,id_rol,estado_usuario,contrasena,correo_electronico,fecha_cambio_contrasena,activacion) values('$nombre_usuario', '$usuario', '$rol','$estado_usuario','$pass_hash','$correo_electronico',NOW(),1)");
					$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error($mysqli));
            
                    $objeto="PANTALLA DE USUARIOS";
                  
                    $accion="INSERTAR NUEVO USUARIO";
         
                    // if user has been added successfully
                    if ($resultado) {
						$bita=grabarBitacora($idUsuario,$objeto,$accion,$consulta);
                        $messages[] = "La cuenta ha sido creada con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                    
                
               }else{
                     $errors[] = "formato de correo invalido ==> ejemplo@correo.com.";
                }			
			
        } else {
            $errors[] = "Contraseña debe contener 12%%aA.";
        }
			
			
	
		if (isset($errors)){
			
			?>
			

			
			
			
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
        }
?>