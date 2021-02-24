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




if (empty($_POST['cod'])) {
           $errors[] = " codigo vacío";
        } else if (empty($_POST['equipo'])){
			$errors[] = "equipo vacio";
        } else if (empty($_POST['can'])){
			$errors[] = "Cantidad vacio";
        }  else if (empty($_POST['proveedor'])){
			$errors[] = "proveedor vacio";
			
		}  

		 else if (
			!empty($_POST['cod']) &&
			!empty($_POST['equipo']) &&
			!empty($_POST['can']) &&
				!empty($_POST['proveedor']) 
		//	$_POST['']!=""
		 ){


				// escaping, additionally removing everything that could be (html/javascript-) code
			//	$id=$_POST[""];
									$codigo= $_POST["cod"];					
									$nombre=$_POST["equipo"];
									$cantidad=$_POST["can"];
									$proveedor=$_POST["proveedor"];
								

                // check if user or email address already exists
			         $codigo= strtoupper($codigo);
					//$cate= strtoupper($cate);
			        // $mem= strtoupper($mem);
					$nombre= strtoupper($nombre);

								$objeto="inventario";
                     $us="probando";
                    $accion="INSERT";


				$consulta=("INSERT INTO tbl_inventario
				(codigo, nombre_equipo,id_proveedor, cantidad, fecha_creacion) 
				VALUES ('$codigo','$nombre','$proveedor',$cantidad,now());");

							
						//	$consulta1=("INSERT INTO equipo(Nom_Eq)VALUES('$equipo')");
						//	$consulta2=("INSERT INTO regional(Nom_Reg)VALUES('$regional')");
					$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error($mysqli));
				//	$resultado1=mysqli_query($mysqli,$consulta1) or die (mysqli_error($mysqli));
				//	$resultado2=mysqli_query($mysqli,$consulta2) or die (mysqli_error($mysqli));

				//var_dump($resultado);
                    // if user has been added successfully
                if ($resultado) {
							$bita=grabarBitacora($idUsuario,$objeto,$accion,$consulta);
							$result = $mysqli->query("SELECT * FROM tbl_inventario
							ORDER by Id_equipo DESC");
							$id=$result->fetch_array();
							$id_eq = $id['Id_equipo'];
							$mysqli->query("INSERT INTO tbl_tipo_kardex( Id_equipo, tipo_movimiento,
							 cantidad, fecha_operacion, fecha_creacion, creado_por) 
							VALUES ('$id_eq','ENTRADA','$cantidad',now(),now(),'ad');");
							$messages[] = "el registro fue creado con exito.";
								}
								
										}
									
									//	else{
                      // $errors[] = "El formato del correo es invalido,  ==>> correo@ejemplo.com.";

								
         else{
                       $errors[] = "error desconocido";

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
