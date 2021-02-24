<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$user_id = $mysqli->real_escape_string($_POST['user_id']);
	$token = $mysqli->real_escape_string($_POST['token']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);



$sentencia = $mysqli->prepare("SELECT contrasena from tbl_usuario where id_usuario= ?");
$sentencia->bind_param("s",$user_id);
$sentencia->execute();
$result =$sentencia->get_result();
while ($row = $result->fetch_assoc()) {
	$passwd= $row['contrasena'];
}
$sentencia->free_result();
$sentencia->close();

	$validaPassw = password_verify($password, $passwd);

				
if($validaPassw){
	
	
	echo "Tienes que poner una contraseña diferente ";
}elseif (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,16}$/',$password))
	if(validaPassword($password, $con_password))
		
	{
			$pass_hash = hashPassword($password);
	
		
		$pass_hash = hashPassword($password);

		
		
		
		if(cambiaPassword($pass_hash, $user_id, $token))
		{
			
			
		 $sql= "UPDATE tbl_usuario SET contrasena='$pass_hash',fecha_cambio_contrasena=NOW(), intentos= 0
                            WHERE id_usuario='$user_id';";
                    $query_update= mysqli_query($mysqli,$sql);
			
			
			
			$accion="INSERT";
			$objeto="tbl_usuario";
          $bita=grabarBitacora($user_id,$objeto,$accion,$sql);

		
			echo "Contrase&ntilde;a Modificada <br> <a href='index.php' >Iniciar Sesion</a>";
			} else {
			
			echo "Error al modificar contrase&ntilde;a";
			
		}
		
		} else {
		
		
		
	echo"Las contraseñas no coinciden";
			
		
	}else{
	    
    echo 'Contraseña debe contener 12%%aA';
    
	}
	
?>	