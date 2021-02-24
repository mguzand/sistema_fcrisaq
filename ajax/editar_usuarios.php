<?php

session_start();


if(($_SESSION['id_usuario'])){
	require '../funcs/conexion.php';
require '../funcs/funcs.php';
	$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	
	
  
}else{
	  header ("Location: index.php");
}


?>


<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['nombre_usuarios'])) {
           $errors[] = "ID vacío";
        }else if (empty($_POST['nombre_usuarios'])) {
           $errors[] = "Nombre vacío";
        } 
         else if (
			!empty($_POST['nombre_usuarios']) &&
			!empty($_POST['nombre_usuarios'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_usuario=intval($_POST['mod_id']);
		$nombre=mysqli_real_escape_string($mysqli,(strip_tags($_POST["nombre_usuarios"],ENT_QUOTES)));
		$user=mysqli_real_escape_string($mysqli,(strip_tags($_POST["usuarios"],ENT_QUOTES)));
		$rol = mysqli_real_escape_string($mysqli,(strip_tags($_POST["rols"],ENT_QUOTES)));
		$email=mysqli_real_escape_string($mysqli,(strip_tags($_POST["correo_electronicos"],ENT_QUOTES)));
		$est=mysqli_real_escape_string($mysqli,(strip_tags($_POST["estado_usuarios"],ENT_QUOTES)));
		

			 
			 
			 
			 $comparar="ACTIVO";
			 
			if  ($est==$comparar){
				$act="1";
			    	
			}else{
				$act="0";
				
			}
			 
			 
			 
			 
			 
			    $nombre= strtoupper($nombre);
				$user= strtoupper($user);
         if( $id_usuario==1){
               $errors []= "no puedes actualizar al administrador";
             
         }
			 else if (preg_match('/\w+@\w+\.+[a-z]/', $email)){
			 
			 
			  $objeto="PANTALLA DE USUARIOS";
                     $us="probando";
                    $accion="MODIFICAR UN REGISTRO";
         
            
		$sql="UPDATE tbl_usuario SET nombre_usuario='".$nombre."', usuario='".$user."', id_rol='".$rol."', correo_electronico='".$email."', estado_usuario='".$est."', activacion= '".$act."' WHERE id_usuario='".$id_usuario."'";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
			 
				$messages[] = "El usuario ha sido actualizado satisfactoriamente.";
            }else{
                $errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($mysqli);
            }
			} else{
				$errors []= "El formato del correo es invalido,  ==>> correo@ejemplo.com."; 			
            }
		} else {
			$errors []= "Error desconocido.";
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

?>