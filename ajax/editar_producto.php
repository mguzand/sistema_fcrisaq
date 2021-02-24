<?php

session_start();

if(($_SESSION['usuario'])){

require '../funcs/conexion.php';
require '../funcs/funcs.php';
$rol = $_SESSION['id_rol'];
$usuario = $_SESSION['usuario'];
//$idUsuario = $_SESSION['id_usuario'];
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
//ar_dump($_POST);
	if (empty($_POST['produc'])) {
           $errors[] = "Producto vacio";
        }else if (empty($_POST['pre'])) {
           $errors[] = "Precio Vacio";
        } else if(
			!empty($_POST['produc']) &&
			!empty($_POST['pre'])
			
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST["mod"];
		$produc=mysqli_real_escape_string($mysqli,(strip_tags($_POST["produc"],ENT_QUOTES)));
		$precio=mysqli_real_escape_string($mysqli,(strip_tags($_POST["pre"],ENT_QUOTES)));
		
		$produc= strtoupper($produc);
			

		 
			  $objeto="PANTALLA PRODUCTO";
                     $us="probando";
                    $accion="UPDATE";
         
      //  var_dump($id);
		$sql="UPDATE tbl_producto
        SET nombre = '".$produc."', precio = '".$precio."', modificado_por='".$rol."', 
		fecha_modificacion = now() 
        WHERE id_producto = ".$id.";";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;
                      
			if ($query_update){
				  $bita=grabarBitacora($rol,$objeto,$accion,$sql);
			 
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