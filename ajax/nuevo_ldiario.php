c<!-- Modal -->
<?php

session_start();


if(($_SESSION['id_usuario'])){
	require '../funcs/conexion.php';
require '../funcs/funcs.php';
$usuario = $_SESSION['usuario'];
	//$idUsuario = $_SESSION['id_usuario'];
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
	if (empty($_POST['desglose'])) {
           $errors[] = "Descripcion Vacia";
        }else if (empty($_POST['cuentad'])){
			$errors[] = "cuenta vacía";
		}else if (empty($_POST['cuentac'])){
			$errors[] = "cuenta vacía";
		}else if (empty($_POST['monto'])){
			$errors[] = "Monto  vacía"; 
		} else if (empty($_POST['fecha'])){
			$errors[] = "fecha  vacía";
		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		//var_dump($_POST);
		$desglose=mysqli_real_escape_string($con,(strip_tags($_POST["desglose"],ENT_QUOTES)));
		$catalogod=mysqli_real_escape_string($con,(strip_tags($_POST["cuentad"],ENT_QUOTES)));
		$monto=mysqli_real_escape_string($con,(strip_tags($_POST["monto"],ENT_QUOTES)));
		
		$catalogoc=mysqli_real_escape_string($con,(strip_tags($_POST["cuentac"],ENT_QUOTES)));
		$fecha=mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));

        $desglose=strtoupper($desglose);
		 $monto=strtoupper($monto);
	
		
		$objeto="PANTALLA LIBRO DIARIO";
                     $us="probando";
                    $accion="INSERT";

		$sql="INSERT INTO tbl_libro_diario
        (id_cuenta_cargada,id_cuenta_debitada, monto_operacion,desglose_operacion,creado_por,fecha_operacion, 
		fecha_creacion) 
        VALUES ('$catalogoc','$catalogod','$monto','$desglose', '$usuario','$fecha',now() )";
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