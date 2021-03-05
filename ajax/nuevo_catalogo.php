<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set("America/Tegucigalpa");
require '../config/conexion_PDO.php';


		if(isset($_SESSION['id_usuario'])  ){
			$idUsuario = $_SESSION['id_usuario'];
			$usuario = $_SESSION['usuario'];
		}else{
			 echo json_encode(array('ok' => false ));
			 return;
		}

		global $db;

		$tipo        = $_POST["tp"];
		$descripcion = $_POST["des"];
		$padre       = $_POST["cp"];

		$q = "INSERT INTO tbl_catalogo_cuenta(codigo_cuenta,tipo_cuenta, descripcion,cuenta_padre,creado_por,fecha_creacion) VALUES ((SELECT (MAX(T.codigo_cuenta)+1) FROM `tbl_catalogo_cuenta` AS T),:A,:B,:C,:D,now());"; 

		$p = array(':A' => $tipo, 
	    		   ':B' => $descripcion,
	    		   ':C' => $padre,
	    		   ':D' => $usuario
	    		);

	    if (!Insertar($q,$p)) {
	            echo '<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					Lo siento algo ha salido mal intenta nuevamente.
			</div>';
	            return;
	    }

	    $objeto="PANTALLA CATALOGO";
        $accion="INSERT";

	    $bita=grabarBitacora($idUsuario,$objeto,$accion,'INSERTs tbl_catalogo_cuenta');





	    echo '<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						El registro ha sido ingresado satisfactoriamente.
				</div>';
















		function Insertar($q, $parametros){
		    global $db;
		    $stmt = $db->prepare($q);
		    return $stmt->execute($parametros );
		}


		function grabarBitacora($id_usuario,$objeto,$accion,$descripcion){
			global $db;
			$q='INSERT INTO  tbl_bitacoras(id_usuario,objeto,accion,descripcion) VALUES(:A,:B,:C,:D)';
			$p = array(':A' => $id_usuario,
					   ':B' => $objeto,
					   ':C' => $accion,
					   ':D' => $descripcion );
			Insertar($q,$p);

			 
		}


	   

	    




 ?>