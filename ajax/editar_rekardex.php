<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set("America/Tegucigalpa"); 

		require '../config/conexion_PDO.php';

		//Archivo verifica que el usario que intenta acceder a la URL esta logueado
		session_start();
		if(isset($_SESSION['id_usuario']) && isset($_POST['prd'])  ){
			$idUsuario = $_SESSION['id_usuario'];
		}else{
			 echo json_encode(array('ok' => false ));
			 return;
		}

		global $db;
   		$db->beginTransaction();

   		$objeto="PANTALLA SALIDA KARDEX";
   		$accion="UPDATE";



   		$producto = $_POST["mod"];
		$p = array(':ID' => $producto );
		$data = Seleccionar('SELECT * FROM tbl_inventario WHERE Id_equipo = :ID ',$p);
		if (count($data)==0) {
			echo json_encode(array('status' => 0, 'error'=> 'La cantidad solicitada no esta disponible'));
            $db->rollBack();
            return;
		}

		$cant_up =  intval($_POST["cant"]) + $data[0]['cantidad'];
		$q="UPDATE tbl_inventario SET  cantidad = :C ,fecha_modificacion = now() WHERE  Id_equipo = :ID;";
		$p = array(':ID' => $producto, 
				   ':C' => $cant_up );
		if (!Insertar($q,$p)) {
            echo json_encode(array('ok' => true, 'status'=> 2, 'ID'=> $p ));
            $db->rollBack();
            return;
        }


        $q = "INSERT INTO tbl_tipo_kardex (tipo_movimiento,cantidad,fecha_operacion, Id_equipo) VALUES(:A, :B, :C, :D )"; 
	    $p = array(':A' => 'ENTRADA', 
	    		   ':B' => $_POST["cant"],
	    		   ':C' => date('Y-m-d H:i:s'),
	    		   ':D' => intval($producto) 
	    		);

	    if (!Insertar($q,$p)) {
	            echo json_encode(array('ok' => true, 'status'=> 2, 'ID'=> 'INSERT INTO tbl_tipo_kardex' ));
	            $db->rollBack();
	            return;
	    }


	    $precio = $data[0]['cantidad']*$_POST["cant"];
        $q="INSERT INTO tbl_libro_diario(id_cuenta_cargada,id_cuenta_debitada,monto_operacion, desglose_operacion, fecha_operacion) VALUES(:A,:B,:C,:D,:E)";
		$p = array(':A' => 121,  ':B' => 141, ':C'=> $precio,  ':D'=> 'devolucion', ':E' => date('Y-m-d') );
		if (!Insertar($q,$p)) {
	          echo json_encode(array('ok' => true, 'status'=> 2, 'ID'=> 'INSERTs tbl_libro_diario',  'p'=> $p ));
	          $db->rollBack();
	          return;
	    }

	    grabarBitacora($idUsuario,$objeto,$accion,'Devolucion de kardex');

	    $db->commit();
		echo json_encode(array('status' => 1, 'ok'=> 'La devolucion ha sido ingresado satisfactoriamente.' ));



		function Seleccionar($q, $parametros){
		  global $db;
		  $stmt = $db->prepare($q);
		  $stmt->execute($parametros);
		  return $stmt->fetchAll();
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

		function Insertar($q, $parametros){
		    global $db;
		    $stmt = $db->prepare($q);
		    return $stmt->execute($parametros ); //or die(print_r($stmt->errorInfo(), true));
		}




















