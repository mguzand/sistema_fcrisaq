<?php

session_start();

if(($_SESSION['usuario'])){
require '../funcs/conexion.php';
require '../funcs/funcs.php';
//$idUsuario = $_SESSION['id_usuario'];
$usuario = $_SESSION['usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE usuario = '".$usuario."'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	 
}else{
	  header ("Location: index.php");
}

?>
<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['dcr'])) {
           $errors[] = "Descripcion Vaciavacio";
        }else if (empty($_POST['db'])) {
           $errors[] = "Cuanta  Vacia";
        }else if (empty($_POST['mon'])) {
			$errors[] = "Cuenta Vacio";
		 }else if (empty($_POST['hb'])) {
           $errors[] = "Cuenta Vacia";
        }else if (empty($_POST['fecha'])) {
            $errors[] = "Fecha Vacia";
         }else if (
			!empty($_POST['dcr']) &&
			!empty($_POST['db'])&&
			!empty($_POST['mon'])&&
            !empty($_POST['hb'])&&
            !empty($_POST['fecha'])
			){
	
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST["mod"];
		$descrip=mysqli_real_escape_string($mysqli,(strip_tags($_POST["dcr"],ENT_QUOTES)));
		$debe=mysqli_real_escape_string($mysqli,(strip_tags($_POST["db"],ENT_QUOTES)));
		$monto=mysqli_real_escape_string($mysqli,(strip_tags($_POST["mon"],ENT_QUOTES)));
        $haber=mysqli_real_escape_string($mysqli,(strip_tags($_POST["hb"],ENT_QUOTES)));
        $fecha=mysqli_real_escape_string($mysqli,(strip_tags($_POST["fecha"],ENT_QUOTES)));
		
		
			 
			    $descrip= strtoupper($descrip);
                $debe= strtoupper($debe);
                $haber= strtoupper($haber);
			

		 
			  $objeto="PANTALLA LIBRO DIARIO";
                     $us="probando";
                    $accion="UPDATE";
         
     //   var_dump($id);
		$sql="UPDATE tbl_libro_diario
        SET  desglose_operacion = '".$descrip."', 
         id_cuenta_cargada= '".$debe."',monto_operacion = '".$monto."',id_cuenta_debitada = '".$haber."', 
         fecha_operacion = '".$fecha."', modificado_por = '".$usuario."', 
            fecha_modificacion = now() 
        WHERE id_libro_diario = ".$id.";";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($usuario,$objeto,$accion,$sql);
			 
				$messages[] = "Los Datos han sido actualizado correctamente.";
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