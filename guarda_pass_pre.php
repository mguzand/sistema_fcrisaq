<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$user_id = $mysqli->real_escape_string($_POST['user_id']);
	
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);
	
if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,16}$/',$password))
	if(validaPassword($password, $con_password))
		
	{
			$pass_hash = hashPassword($password);

		 $sql= "UPDATE tbl_usuario SET contrasena='$pass_hash'
                            WHERE id_usuario='$user_id';";
                    $query_update= mysqli_query($mysqli,$sql);
		
		if (!$query_update)
		{
			echo "Contrase&ntilde;a Modificada <br> <a href='index.php' >Iniciar Sesion</a>";
			} else {
			
			echo "Error al modificar contrase&ntilde;a";
			
		}
		
		} else {
		
		
		
	echo"Las contraseñas no coinciden";
			
		
	}else{
	    
    echo 'debe contener caracter especiales numero y una mayus';
    
	}
	
?>	