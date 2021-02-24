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
	if (empty($_POST['codigo'])) {
           $errors[] = "Codico Cuenta vacio";
        }else if (empty($_POST['tipo'])) {
           $errors[] = "Tipo cuenta Vacio";
        }else if (empty($_POST['cpa'])) {
			$errors[] = "Codico Cuenta Padre Vacio";
		 }else if (empty($_POST['desc'])) {
           $errors[] = "Descripcion Vacia";
        }else if (
			!empty($_POST['codigo']) &&
			!empty($_POST['tipo'])&&
			!empty($_POST['cpa'])&&
			!empty($_POST['desc'])
			){
	
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST["mod"];
		$codigo=mysqli_real_escape_string($mysqli,(strip_tags($_POST["codigo"],ENT_QUOTES)));
		$tipo=mysqli_real_escape_string($mysqli,(strip_tags($_POST["tipo"],ENT_QUOTES)));
		$descripcion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["desc"],ENT_QUOTES)));
		$padre=mysqli_real_escape_string($mysqli,(strip_tags($_POST["cpa"],ENT_QUOTES)));
		
		
			 
			    $codigo= strtoupper($codigo);
				$descripcion= strtoupper($descripcion);
			

		 
			  $objeto="PANTALLA CATALAGO";
                     $us="probando";
                    $accion="UPDATE";
         
     //   var_dump($id);
		$sql="UPDATE tbl_catalogo_cuenta
        SET  tipo_cuenta = '".$tipo."', 
        codigo_cuenta = '".$codigo."',cuenta_padre = '".$padre."',
		 descripcion = '".$descripcion."', modificado_por = '".$usuario."', 
            fecha_modificacion = now() 
        WHERE id_catalogo = ".$id.";";
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