<?php

session_start();

if(($_SESSION['id_usuario'])){
	require '../funcs/conexion.php';
require '../funcs/funcs.php';
	$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
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
		   $errors[] = "Codigo vacio";
        }else if (empty($_POST['eq'])) {
           $errors[] = "Equipo Vacia";
        }else if (empty($_POST['cant'])) {
			$errors[] = "cantidad Vacia";
		}else if (empty($_POST['tp'])) {
				$errors[] = "transaccion vacia";
		}else if (empty($_POST['prov'])) {
           $errors[] = "Proveedor  Vacia";
        }  
         else if (
			
			!empty($_POST['cod']) &&
			!empty($_POST['eq']) &&
			!empty($_POST['cant']) &&
			!empty($_POST['tp']) &&
			!empty($_POST['prov'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
	             	$id=$_POST["mod"];
					$cod=$_POST['cod'];
					$cantidad=$_POST['cant'];
					$tipo_transaccion=$_POST['tp'];
					$equip=$_POST['eq'];
					$provee=$_POST['prov'];
			 
			    $equip= strtoupper($equip);
				//$regional= strtoupper($reg);
				//categoria= strtoupper($cate);

		 
			  $objeto="PANTALLA inventario";
                     $us="probando";
					$accion="UPDATE ";		
					$cant_up=0;
					$usuario='ADMMINISTRADOR';
		$result=$mysqli->query("SELECT * FROM tbl_inventario WHERE codigo='".$cod."';");       
		$row=$result->fetch_array();
		
		$cant_eq = $row['cantidad'];
			
		if($tipo_transaccion=='ENTRADA'){
			$cant_up = $cant_eq + $cantidad;
			$sql="UPDATE tbl_inventario SET nombre_equipo='".$equip."',
			id_proveedor='".$provee."', cantidad=$cant_up
		   ,fecha_modificacion = now()
			WHERE  codigo='".$cod."'";
		   $query_update = mysqli_query($mysqli,$sql);
		
		}elseif ($tipo_transaccion=='SALIDA') {
			if ($cant_eq>=$cantidad) {
				$cant_up = $cant_eq-$cantidad;
				$sql="UPDATE tbl_inventario SET nombre_equipo='".$equip."',
				id_proveedor='".$provee."', cantidad=$cant_up
			   ,fecha_modificacion = now()
				WHERE  codigo='".$cod."'";
			   $query_update = mysqli_query($mysqli,$sql);
			
			}else{
				$query_update=false;				
				$errors[]="La cantidad que solicita en inventario no existe";
			}
		}		         
	
   $id= 1; 
  // var_dump($query_update);
	if ($query_update){
	   $bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
	   $mysqli->query("INSERT INTO tbl_tipo_kardex( Id_equipo, tipo_movimiento,
	   cantidad, fecha_operacion, fecha_creacion, creado_por) 
	  VALUES ('$id','$tipo_transaccion','$cantidad',now(),now(),'$usuario');");	
	 $messages[] = "El Registro se  ha sido actualizada correctamente.";
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