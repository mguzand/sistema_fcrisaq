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
	if (empty($_POST['roles'])) {
           $errors[] = "rol vacio";
        }else if (empty($_POST['descripcions'])) {
           $errors[] = "Descripción Vacia";
        } 
         else if (
			!empty($_POST['descripcions']) &&
			!empty($_POST['descripcions'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_rol=$_POST["mod_id"];
		$roles=mysqli_real_escape_string($mysqli,(strip_tags($_POST["roles"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["descripcions"],ENT_QUOTES)));
		
		
			 
			    $roles= strtoupper($roles);
				$descripcion= strtoupper($descripcion);

		 
			  $objeto="PANTALLA DE ROL";
                     $us="probando";
                    $accion="ACTUALIZAR UN REGISTRO";
         
            
		$sql="UPDATE tbl_roles SET rol='".$roles."', descripcion='".$descripcion."' WHERE id_rol='".$id_rol."'";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
			 
				$messages[] = "El Rol ha sido actualizado correctamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intente nuevamente.".mysqli_error($mysqli);
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