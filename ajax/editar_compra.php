<?php

session_start();

if(($_SESSION['usuario'])){
require '../funcs/conexion.php';
require '../funcs/funcs.php';
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
	if (empty($_POST['product'])) {
           $errors[] = "Producto vacio";
        }else if (empty($_POST['prec'])) {
           $errors[] = "Precio Vacio";
        }else if (empty($_POST['cantidad'])) {
           $errors[] = "Cantidad Vacia";
        }else if (empty($_POST['provee'])) {
           $errors[] = "Proveedor Vacia";
        }else if (
			!empty($_POST['product']) &&
			!empty($_POST['prec'])&&
			!empty($_POST['cantidad'])&&
			!empty($_POST['provee'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST["mod"];
		$productos=mysqli_real_escape_string($mysqli,(strip_tags($_POST["product"],ENT_QUOTES)));
		$prec=mysqli_real_escape_string($mysqli,(strip_tags($_POST["prec"],ENT_QUOTES)));
		$cant=mysqli_real_escape_string($mysqli,(strip_tags($_POST["cantidad"],ENT_QUOTES)));
		$provee=mysqli_real_escape_string($mysqli,(strip_tags($_POST["provee"],ENT_QUOTES)));
		
		
			 
			    $productos= strtoupper($productos);
				$provee= strtoupper($provee);
			

		 
			  $objeto="PANTALLA COMPRAS";
                     $us="probando";
                    $accion="UPDATE";
         
	   // var_dump($id);
	   $sql ="SELECT cp.id_producto,cp.precio ,cp.cantidad as comprada, iv.cantidad as disponible
	    FROM tbl_compra as cp 
	   INNER JOIN tbl_inventario as iv ON iv.id_producto = cp.id_producto
	   WHERE cp.id_compra =".$id.";";
	   $result = mysqli_query($mysqli,$sql);
	   $row=mysqli_fetch_array($result);
		$a=$row['comprada'];
		$diferencia=$cant-$row['comprada'];
		if($diferencia<0){
			$diferencia=$diferencia*-1;
		}
		if($cant<$a){
		//resta
		//var_dump($diferencia);
		$cant_up= $row['disponible']-$diferencia; 
		//var_dump($cant_up);
	}else{
		//suma
		//var_dump($id);
		$cant_up= $diferencia+$row['disponible'];
	}
		
		$sql="UPDATE tbl_compra
        SET nombre = '".$productos."', 
        cantidad = '".$cant."', ID_Proveedor = '".$provee."', modificado_por = '".$usuario."', 
            fecha_modificacion = now() 
        WHERE id_compra = ".$id.";";
		$query_update = mysqli_query($mysqli,$sql);
		$sql="UPDATE tbl_inventario
        SET  
		cantidad = ".$cant_up.",
		precio = $prec  
        WHERE id_producto = ".$row['id_producto'].";";
		$query_update = mysqli_query($mysqli,$sql);
		 $id= 1;

		 $sql="INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_cuenta_debitada,monto_operacion,fecha_operacion,
					desglose_operacion) VALUES(147,119,$prec,now(),'DEVOLUCION DE ".$productos."');";
					$query_new_insert = mysqli_query($mysqli,$sql);
					$row=mysqli_fetch_array($result);
					
              
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