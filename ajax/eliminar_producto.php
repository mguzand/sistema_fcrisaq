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

		if (empty($_POST['user_id_mod'])){
			$errors[] = "ID vacío";
		 
        }  elseif (
			 !empty($_POST['user_id_mod'])
			
        ) {
            
			
				$id_parametro=$_POST['user_id_mod'];
			
				
                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
				$objeto=" PANTALLA PRODUCTO";
                     $us="probando";
                    $accion="DELETE";
					
               
					// write new user's data into database
                    $sql = "DELETE  FROM tbl_producto WHERE id_producto='".$id_parametro."'";
                    $query = mysqli_query($mysqli,$sql);

                    // if user has been added successfully
		if ($query) {
					$bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
                        $messages[] = "El Registro ha sido eliminado con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , No se puede eliminar el registro porque tiene relacion con otras tablas.";
                    }
                
            
        } else {
            $errors[] = "Un error desconocido ocurrió.";
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