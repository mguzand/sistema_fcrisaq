<!-- Modal -->

<?php
session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(($_SESSION['usuario'])){

	//$idUsuario = $_SESSION['id_usuario'];
	//$nombre = $_SESSION['Nombre_Usuario'];
	$idusuario = $_SESSION['usuario'];

$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE usuario = '$idusuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	 
}else{
	  header ("Location: index.php");
}

?>
<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['rol'])) {
           $errors[] = "Rol Vacio";
        } else if (empty($_POST['descripcion'])){
			$errors[] = "Nombre del rol vacío";
		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$rol=mysqli_real_escape_string($con,(strip_tags($_POST["rol"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["descripcion"],ENT_QUOTES)));
		
               $rol=strtoupper($rol);
		 $descripcion=strtoupper($descripcion);


		 $objeto="PANTALLA DE ROL";
		 $us="probando";
		$accion="INSERT";

		
		$sql="INSERT INTO tbl_roles (rol,descripcion,creado_por) 
		VALUES ('$rol','$descripcion','$idusuario')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$bita=grabarBitacora($idusuario,$objeto,$accion,$sql);
				$messages[] = "El registro ha sido ingresado satisfactoriamente.";
				
				
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			
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