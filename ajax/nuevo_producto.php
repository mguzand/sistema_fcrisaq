  <!-- Modal -->
  <?php

session_start();
date_default_timezone_set("America/Tegucigalpa");


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
	if (empty($_POST['prod'])) {
           $errors[] = "Producto Vacio";
        } else if (empty($_POST['precio'])){
			$errors[] = "Precio Vacio";
		} else if (empty($_POST['max'])){
			$errors[] = "Cantida Maxima vacía";
		} else if (empty($_POST['max'])){
			$errors[] = "Cantidad Minima vacía";
		} 
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$producto=mysqli_real_escape_string($con,(strip_tags($_POST["prod"],ENT_QUOTES)));
		$precio=mysqli_real_escape_string($con,(strip_tags($_POST["precio"],ENT_QUOTES)));
		$maximo=mysqli_real_escape_string($con,(strip_tags($_POST["max"],ENT_QUOTES)));
		$minimo=mysqli_real_escape_string($con,(strip_tags($_POST["min"],ENT_QUOTES)));
	//	$proveedor=mysqli_real_escape_string($con,(strip_tags($_POST["proveedor"],ENT_QUOTES)));


		$producto=strtoupper($producto);
		 $minimo=strtoupper($minimo);
		 $maximo=strtoupper($maximo);
	//	 $proveedor=strtoupper($proveedor);


		
		
		$objeto="PANTALLA PRODUCTO";
                     $us="probando";
                    $accion="INSERT";
	
					//$usuario='ADMINISTRADOR';
					$NOW='NOW()';
		$date = date('Y-m-d H:i:s');			
		$sql="INSERT INTO tbl_producto
        (nombre,precio,maximo, minimo,Creado_por,fecha_creacion) 
        VALUES ('$producto','$precio','$maximo','$minimo','$usuario','$date');";

		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$sql="select * from tbl_producto where nombre = '".$producto."';";
				$query = mysqli_query($con,$sql);
				$row = mysqli_fetch_array($query);
				$idpr=$row['id_producto'];
                $sql="INSERT INTO tbl_inventario(nombre_equipo,id_producto, precio,cantidad,
				fecha_creacion, Creado_por, modificado_por) 
			   VALUES ('$producto',$idpr,$precio,0,now(),'$usuario', '$usuario');";
			   //var_dump($idpr);
				$query_new_insert = mysqli_query($con,$sql);

				$bita=grabarBitacora($usuario,$objeto,$accion,$sql);
				$messages[] = "El registro ha sido ingresado satisfactoriamente.";
				
				
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente....".mysqli_error($con);
			
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