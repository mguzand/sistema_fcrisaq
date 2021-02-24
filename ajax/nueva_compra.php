     <!-- Modal -->
	 <?php

session_start();


if(($_SESSION['id_usuario'])){
	require '../funcs/conexion.php';
require '../funcs/funcs.php';
	//$idUsuario = $_SESSION['id_usuario'];
	//$nombre = $_SESSION['Nombre_Usuario'];
	$usuario = $_SESSION['usuario'];

$sql = "Select id_usuario, usuario from tbl_usuario WHERE usuario = '$usuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	 
}else{
	  header ("Location: index.php");
}

?>
<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['pd'])) {
           $errors[] = "Producto Vacio";
        } else if (empty($_POST['ct'])){ 
			$errors[] = " Cantidad Vacio";
		} else if (empty($_POST['precio'])){
			$errors[] = "Precio vacía";
		} else if (empty($_POST['proveedor'])){
			$errors[] = "Proveedor Vacío";
		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$idproducto=mysqli_real_escape_string($con,(strip_tags($_POST["pd"],ENT_QUOTES)));
		$cantidad=mysqli_real_escape_string($con,(strip_tags($_POST["ct"],ENT_QUOTES)));
		$precio=mysqli_real_escape_string($con,(strip_tags($_POST["precio"],ENT_QUOTES)));
		$proveedor=mysqli_real_escape_string($con,(strip_tags($_POST["proveedor"],ENT_QUOTES)));
		//sacar id producto
		$sql="SELECT nombre FROM tbl_producto WHERE id_producto=".$idproducto.";";
		$query = mysqli_query($con,$sql);
		$producto=mysqli_fetch_array($query);
		$producto=strtoupper($producto['nombre']);
		$proveedor=strtoupper($proveedor);

		
		//var_dump($producto); 
		
		
		$objeto="PANTALLA COMPRAS";
                     $us="probando";
                    $accion="INSERT";

		//$usuario='ADMINISTRADOR';
		//$usuario = 'usuario';
		$NOW='NOW()';
		$sql="SELECT iv.Id_equipo, iv.cantidad,iv.precio,iv.creado_por,pr.maximo 
		FROM tbl_inventario as iv
		INNER JOIN tbl_producto as pr
		ON pr.id_producto = iv.id_producto
		WHERE pr.id_producto=".$idproducto;
		$query = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($query);
	//	$idc=$row['id_compra'];
		$precio = $row['precio']*$cantidad;
		$equipo=$row["Id_equipo"];
		$cantidad_disponible=$row["cantidad"];
		$maximo = $row["maximo"];
		//$usuario = $row["ADMINISTRADOR"];

//	var_dump($usuario);		
		$sql="INSERT INTO tbl_compra (nombre, precio,id_producto, cantidad, ID_Proveedor, fecha_creacion, creado_por)
		    VALUES ('".$producto."',".$precio.",".$idproducto.",".$cantidad.",".$proveedor.",$NOW,'$usuario')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){

				$cant_upd=$cantidad_disponible+$cantidad;
            	$sql="UPDATE  tbl_inventario SET
						cantidad =$cant_upd
						WHERE Id_equipo=$equipo";
				$query_new_insert = mysqli_query($con,$sql);
				
				//$sql="INSERT INTO tbl_tipo_kardex (Id_equipo,tipo_movimiento,cantidad,fecha_operacion)
				//VALUES($idproducto,'ENTRADA',$cantidad,$NOW);";
				//$query_new_insert = mysqli_query($con,$sql);

				$sql="INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_cuenta_debitada,monto_operacion,fecha_operacion,desglose_operacion)
				VALUES(145,119,$precio,now(),'COMPRA DE ".$producto."');";
				$query_new_insert = mysqli_query($con,$sql);

			$bita=grabarBitacora($usuario,$objeto,$accion,$sql);
			if($query_new_insert){
				$messages[] = "El registro ha sido ingresado satisfactoriamente.";

			}			
				
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