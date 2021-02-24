<!-- Modal -->
<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(($_SESSION['usuario'])){
	
//$usuario = $_SESSION['usuario'];
//$rol = $_SESSION['id_rol'];
	$idusuario = $_SESSION['usuario'];
$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE usuario = '$idusuario'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
	 
}else{
	  header ("Location: index.php");
}

?>
<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['nom'])) {
           $errors[] = "nombre Vacia";
        } else if (empty($_POST['ape'])){
			$errors[] = "Apellido vacía";
		}else if (empty($_POST['depa'])){
			$errors[] = "lugar vacío";
		} else if (empty($_POST['tel'])){ 
			$errors[] = "telefono vacía";
		} else if (empty($_POST['iden'])){
			$errors[] = "identidad vacía";
		} 
		
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		
		$nom=$_POST["nom"];   
		$ape=$_POST["ape"];
		$dire=$_POST["depa"]; 
		$tel=$_POST["tel"];
		$iden=$_POST["iden"];

		$nom=strtoupper($nom);
		$ape=strtoupper($ape);
		 $dire=strtoupper($dire);
		$tel=strtoupper($tel);
		 $iden=strtoupper($iden);
		
		$objeto="PANTALLA PROVEEDORES";
                     $us="probando";
                    $accion="INSERTAR NUEVO PROVEEDOR";

		$sql="INSERT INTO tbl_proveedor (Nombre,Apellido,id_departamento,Telefono,Num_Iden, creado_por)
		 VALUES ('$nom','$ape','$dire','$tel','$iden','$idusuario')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$bita=grabarBitacora($idusuario,$objeto,$accion,$sql);
				$messages[] = "El registro ha sido ingresado satisfactoriamente.";
				
				
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