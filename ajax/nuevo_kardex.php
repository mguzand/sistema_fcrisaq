  <!-- Modal -->
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
	if (empty($_POST['producto'])) {
           $errors[] = "Codigo Vacio";
        } else if (empty($_POST['cant'])){
			$errors[] = "Tipo Cuenta Vacio";
		} else if (empty($_POST['tt'])){
			$errors[] = "Tipo Transaccion Vacia ";
				

		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$producto=mysqli_real_escape_string($con,(strip_tags($_POST["producto"],ENT_QUOTES)));
		$cantidad=mysqli_real_escape_string($con,(strip_tags($_POST["cant"],ENT_QUOTES)));
		$cantidad_R=mysqli_real_escape_string($con,(strip_tags($_POST["tt"],ENT_QUOTES)));
		
		$objeto="PANTALLA RETIRO KARDEX";
            $us="probando";
        $accion="INSERT";
        $result=$mysqli->query("SELECT * FROM tbl_inventario WHERE Id_equipo='".$producto."';");       
        $row=$result->fetch_array();
        
        $cant_eq = $row['cantidad'];
		$precio = $row['precio']*$cantidad;
		$nameproducto = $row['nombre_equipo'];
        if($cantidad<=$cant_eq){
    
    $cant_up = $cant_eq-$cantidad;
    $sql="UPDATE tbl_inventario SET 
    cantidad=$cant_up
    ,fecha_modificacion = now()
 WHERE  Id_equipo=".$producto.";";
    //var_dump($sql);
    
    $query_new_insert = mysqli_query($con,$sql);
                    
      $sql="INSERT INTO tbl_tipo_kardex (Id_equipo,tipo_movimiento,cantidad,fecha_operacion)
                    VALUES($producto,'SALIDA',$cantidad,NOW());";
                    $query_new_insert = mysqli_query($con,$sql);
            //CUENTA #121 ES INVENTARIO
			//CUENTA #141 ES DONACIONES
      $sql="INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_cuenta_debitada,monto_operacion,fecha_operacion,
	  desglose_operacion) VALUES(141,121,$precio,now(),'DONATIVO DE ".$nameproducto."');";
		$query_new_insert = mysqli_query($con,$sql);
    
			if ($query_new_insert){
				$bita=grabarBitacora($idUsuario,$objeto,$accion,$sql);
				$messages[] = "El registro ha sido ingresado satisfactoriamente.";
				
				
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			
		}
    }else{
				$errors []= "La cantidad solicitada no esta disponible.".mysqli_error($con);

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