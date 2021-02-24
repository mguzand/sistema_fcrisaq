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
				$objeto=" PANTALLA KARDEX DE SALIDA";
                     $us="probando";
                    $accion="DELETE";
					
					$result=$mysqli->query("SELECT b.nombre_equipo,a.cantidad as kardex,
					 (a.cantidad + b.cantidad) as modificacion, b.Id_equipo, b.precio
					FROM tbl_tipo_kardex as a
					 inner join tbl_inventario as b on a.Id_equipo= b.Id_equipo 
					 WHERE a.Id_Kardex=".$id_parametro.";");       
					$row=$result->fetch_array();
					$producto=$row['Id_equipo'];
					$cantidad=$row['kardex'];
					$nombre=$row['nombre_equipo'];
					$cant_up = $row['modificacion'];
					$precio = $row['precio']*$cantidad;	
				
					$sql="UPDATE tbl_inventario SET 
					cantidad=$cant_up
					,fecha_modificacion = now()
			 		WHERE  Id_equipo=".$producto.";";
					$query = mysqli_query($mysqli,$sql);
					// write new user's data into database
					
					$sql = "UPDATE tbl_tipo_kardex
					SET estado='EL' WHERE Id_Kardex='".$id_parametro."'";
					$query = mysqli_query($mysqli,$sql);
					
					$sql="INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_cuenta_debitada,monto_operacion,fecha_operacion,
					desglose_operacion) VALUES(121,119,$precio,now(),'RETIRO DE ".$nombre."');";
					$query_new_insert = mysqli_query($mysqli,$sql);

                    // if user has been added successfully
		if ($query_new_insert) {
					$bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
                        $messages[] = "La transaccion a sido cancelada con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , No se puede Cancelar el registro porque tiene relacion con otras tablas.";
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