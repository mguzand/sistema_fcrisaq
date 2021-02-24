<?php
// 	define('DB_HOST', '127.0.0.1');//DB_HOST:  generalmente suele ser "127.0.0.1"
// define('DB_USER', 'root');//Usuario de tu base de datos
// define('DB_PASS', '');//Contraseña del usuario de la base de datos
// define('DB_NAME', 'bd_ber');//Nombre de la base de datos
// $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//     if(!$con){
//         die("imposible conectarse: ".mysqli_error($con));
//     }
//     if (@mysqli_connect_errno()) {
//         die("Conexión falló: ".mysqli_connect_error()." : ". mysqli_connect_error());
//     }


	$mysqli=new mysqli("127.0.0.1","fcrisaq","fcrisaq","fcrisaq"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	
?>