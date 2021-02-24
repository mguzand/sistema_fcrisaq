<?php

session_start();


if(($_SESSION['usuario'])){
	require '../funcs/conexion.php';
require '../funcs/funcs.php';
//	$idUsuario = $_SESSION['id_usuario'];
$usuario = $_SESSION['usuario'];
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
	if (empty($_POST['des'])) {
           $errors[] = "desglose vacio";
        }else if (empty($_POST['cuentasd'])) {
			$errors[] = "Cuentas  Vacia";
		 }else if (empty($_POST['mon'])) {
           $errors[] = "Monto Vacia";
        }else if (empty($_POST['cuentasc'])) {
			$errors[] = "Cuenta  Vacia";
		 }else if (empty($_POST['fecha'])) {
           $errors[] = "Fecha Vacia";
        }else if (
			!empty($_POST['des']) &&
			!empty($_POST['cuentasd'])&&
			!empty($_POST['mon']) &&
			!empty($_POST['cuentasc'])&&
			!empty($_POST['fecha'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id_libro_diario=$_POST["mod"];
		$desglose=mysqli_real_escape_string($mysqli,(strip_tags($_POST["des"],ENT_QUOTES)));
		$catalogod=mysqli_real_escape_string($mysqli,(strip_tags($_POST["cuentasd"],ENT_QUOTES)));
		$monto=mysqli_real_escape_string($mysqli,(strip_tags($_POST["mon"],ENT_QUOTES)));
		$catalogoc=mysqli_real_escape_string($mysqli,(strip_tags($_POST["cuentasc"],ENT_QUOTES)));
		$fecha=mysqli_real_escape_string($mysqli,(strip_tags($_POST["fecha"],ENT_QUOTES)));
		

		
		
			 
			    $monto= strtoupper($monto);
				$desglose= strtoupper($desglose);
			

		 
			  $objeto="PANTALLA LIBRO DIARIO";
                     $us="probando";
                    $accion="UPDATE";
         
            
		$sql="UPDATE tbl_libro_diario
        SET id_cuenta_cargada = '$catalogoc',id_cuenta_debitada = '$catalogod',fecha_operacion = '$fecha',
        monto_operacion = '$monto', desglose_operacion = '$desglose', fecha_modificacion = now() ,
		 modificado_por = '$usuario'
        WHERE id_libro_diario = $id_libro_diario";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($usuario,$objeto,$accion,$sql);
			 
                $messages[] = "El Registro ha sido actualizado correctamente.";
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