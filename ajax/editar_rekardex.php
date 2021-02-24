<?php

session_start();

if(($_SESSION['id_usuario'])){
require '../funcs/conexion.php';
require '../funcs/funcs.php';
$idUsuario = $_SESSION['id_usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '".$idUsuario."'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	 
}else{
	  header ("Location: index.php");
}

?>
<?php
	//Archivo verifica que el usario que intenta acceder a la URL esta logueado
	/*Inicia validacion del lado del servidor*/
	//var_dump($_POST);
	if (empty($_POST['prd'])) {
           $errors[] = "Producto vacio";
        }else if (empty($_POST['cant'])) {
           $errors[] = "Cantidad Vacio";
        }else if (empty($_POST['tp'])) {
           $errors[] = "Tipo Transaccion Vacia";
        }else if (
			!empty($_POST['prd']) &&
			!empty($_POST['cant'])&&
			!empty($_POST['tp'])
		){
		/* Connect To Database*/
		//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=$_POST["mod"];
		$producto=mysqli_real_escape_string($mysqli,(strip_tags($_POST["prd"],ENT_QUOTES)));
		$existencia=mysqli_real_escape_string($mysqli,(strip_tags($_POST["cant"],ENT_QUOTES)));
		$transaccion=mysqli_real_escape_string($mysqli,(strip_tags($_POST["tp"],ENT_QUOTES)));
		
		
			 
			    $producto= strtoupper($producto);
				$transaccion= strtoupper($transaccion);
			

		 
			  $objeto="PANTALLA SALIDA KARDEX";
                     $us="probando";
					$accion="UPDATE";
					$cant_up=0;
					$usuario='ADMMINISTRADOR';
         
       // var_dump($id);
		$sql="SELECT * FROM tbl_tipo_kardex WHERE Id_Kardex='".$producto."';";
		$query_update = mysqli_query($mysqli,$sql);
	

		 $cant_eq = $row['cantidad'];
		 $cant_up = $cant_eq-$existencia;
	//	if($transaccion=='ENTRADA'){
	//		$cant_up = $cant_eq + $existencia;
	//		$sql="UPDATE tbl_inventario SET nombre_equipo='".$producto."',
	//		 cantidad=$cant_up ,fecha_modificacion = now()
	//		WHERE  Id_equipo='".$producto."'";
	//	   $query_update = mysqli_query($mysqli,$sql);
		
		
			if ($cant_eq>=$existencia) {
				//$cant_up = $cant_eq-$existencia;
				$sql="UPDATE tbl_inventario SET nombre_equipo='".$equip."', cantidad=$cant_up
			   ,fecha_modificacion = now()
				WHERE  Id_equipo='".$producto."'";
			   $query_update = mysqli_query($mysqli,$sql);
			
			}else{
				$query_update=false;				
				$errors[]="La cantidad que solicita en inventario no existe";
			}
		         
	
   $id= 1; 
                      
			if ($query_update){
				  $bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
				  $mysqli->query("INSERT INTO tbl_inventario( Id_equipo,nombre_equipo,
				  cantidad, fecha_operacion, fecha_creacion, creado_por) 
				 VALUES ('$id','$nombre','$existencia',now(),now(),'$usuario');");	
			 
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