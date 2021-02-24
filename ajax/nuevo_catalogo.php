  <!-- Modal -->
<?php

session_start();


if(($_SESSION['usuario'])){
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
	if (empty($_POST['cod'])) {
           $errors[] = "Codigo Vacio";
        } else if (empty($_POST['tp'])){
			$errors[] = "Tipo Cuenta Vacio";
		} else if (empty($_POST['des'])){
			$errors[] = "descripcion vacía";
		}  else if (empty($_POST['cp'])){
			$errors[] = "Codigo Cuenta vacía";
		} 
		
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$codigo=mysqli_real_escape_string($con,(strip_tags($_POST["cod"],ENT_QUOTES)));
		$tipo=mysqli_real_escape_string($con,(strip_tags($_POST["tp"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($con,(strip_tags($_POST["des"],ENT_QUOTES)));
	$padre=mysqli_real_escape_string($con,(strip_tags($_POST["cp"],ENT_QUOTES)));

		$tipo=strtoupper($tipo);
		 $descripcion=strtoupper($descripcion);

		
		
		$objeto="PANTALLA CATALOGO";
                     $us="probando";
                    $accion="INSERT";
    
		$sql="INSERT INTO tbl_catalogo_cuenta
        (codigo_cuenta,tipo_cuenta, descripcion,cuenta_padre,creado_por,fecha_creacion) 
        VALUES ('$codigo','$tipo','$descripcion','$padre','$usuario',now());";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$bita=grabarBitacora($usuario,$objeto,$accion,$sql);
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