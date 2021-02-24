<?php

session_start();


if(($_SESSION['id_usuario'])){
	require '../funcs/conexion.php';
require '../funcs/funcs.php';
$usuario = $_SESSION['usuario'];
//	$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE usuario = '$usuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	 
}else{
	  header ("Location: index.php");
}

?>
<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['nombre'])) {
           $errors[] = "Nombre vacio";
        }else if (empty($_POST['apellido'])) {
			$errors[] = "Apellido  Vacia";
		 }else if (empty($_POST['dire'])) {
           $errors[] = "Direccion  Vacia";
        }else if (empty($_POST['telefono'])) {
           $errors[] = "telefono Vacia";
        }else if (empty($_POST['identidad'])) {
           $errors[] = "Identiad  Vacia";
        }else if (
			!empty($_POST['nombre']) && 
			!empty($_POST['apellido']) &&
			!empty($_POST['dire'])&&
			!empty($_POST['telefono'])&&
			!empty($_POST['identidad'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos 
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST["mod_id"];
		$nombre=mysqli_real_escape_string($mysqli,(strip_tags($_POST["nombre"],ENT_QUOTES)));
		$apellido=mysqli_real_escape_string($mysqli,(strip_tags($_POST["apellido"],ENT_QUOTES)));
		$dire=mysqli_real_escape_string($mysqli,(strip_tags($_POST["dire"],ENT_QUOTES)));
		$tel=mysqli_real_escape_string($mysqli,(strip_tags($_POST["telefono"],ENT_QUOTES)));
		$identidad=mysqli_real_escape_string($mysqli,(strip_tags($_POST["identidad"],ENT_QUOTES)));
		
		
			 
				$nombre= strtoupper($nombre);
				$apellido= strtoupper($apellido);
				//$dire= strtoupper($dire);
				$tel= strtoupper($tel);
				$identidad= strtoupper($identidad);

		 
			  $objeto="PANTALLA PROVEEDORES";
                     $us="probando";
                    $accion="UPDATE ";
         
            
		$sql="UPDATE tbl_proveedor SET Nombre='$nombre',Apellido='$apellido',
		 Num_Iden='$identidad', id_departamento='$dire', 
		 Telefono='$tel', modificado_por='$usuario', 
		  fecha_modificacion = now()
        WHERE ID_Proveedor=$id;";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($usuario,$objeto,$accion,$sql,$nombre);
			 
				$messages[] = "El Proveedor ha sido actualizado correctamente.";
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