<?php 

	$user_conexion = "fcrisaq";
	$pass_conexion = "fcrisaq";
	$data_base_conexion = "fcrisaq";

	try{
	$db = new PDO('mysql:host=localhost;dbname='.$data_base_conexion.'', $user_conexion, $pass_conexion);
	} catch (PDOException $e) {
	    echo 'Fallo Johana la conexion'; // . $e->getMessage();
	}


 ?>