<?php

require 'conexion.php';		


		
function getEdad($fecha)
	{
		global $mysqli;
		



		$stmt = $mysqli->prepare("SELECT TIMESTAMPDIFF(YEAR,'$fecha',CURDATE()) AS edad FROM dual");
		 
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($_campo);
			$stmt->fetch();
			return $_campo;
		}
		else
		{
			return null;	
		}
	}









		
function getPer($campo, $valor,$panta)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT $campo FROM tbl_roles_objeto WHERE id_rol = ?  and  id_objeto= ? LIMIT 1");
		$stmt->bind_param('ss', $valor,$panta);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($_campo);
			$stmt->fetch();
			return $_campo;
		}
		else
		{
			return null;	
		}
	}

	

function preguCorrectas($id_usuario,$id_pregunta,$respuesta)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT respuesta FROM tbl_respuestas WHERE id_usuario = ? and id_pregunta = ? and respuesta = ? ");
		$stmt->bind_param("iis", $id_usuario,$id_pregunta,$respuesta);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		if ($num > 0){
			return true;
			} else {
			return false;
		}
	}






function grabarBitacora($id_usuario,$objeto,$accion,$descripcion){
		
		global $mysqli;
		$stmt = $mysqli->prepare("INSERT INTO  tbl_bitacoras(id_usuario,objeto,accion,descripcion) VALUES(?,?,?,?)");
		$stmt->bind_param('isss', $id_usuario,$objeto, $accion,$descripcion);
		
		if ($stmt->execute()){
			return $mysqli->insert_id;
			} else {
			return 0;	
		}		
	}



	
	function isNull($nombre, $user, $pass, $pass_con, $email){
		if(strlen(trim($nombre)) < 1 || strlen(trim($user)) < 1 || strlen(trim($pass)) < 1 || strlen(trim($pass_con)) < 1 || strlen(trim($email)) < 1)
		{
			return true;
			} else {
			return false;
		}		
	}
	
	function isEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
			} else {
			return false;
		}
	}
	
	function validaPassword($var1, $var2)
	{
		if (strcmp($var1, $var2) !== 0){
			return false;
			} else {
			return true;
		}
	}
	
	function minMax($min, $max, $valor){
		if(strlen(trim($valor)) < $min)
		{
			return true;
		}
		else if(strlen(trim($valor)) > $max)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function usuarioExiste($usuario)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id_usuario FROM tbl_usuario WHERE usuario = ? LIMIT 1");
		$stmt->bind_param("s", $usuario);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;
		}
	}
	
	function emailExiste($email)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id_usuario FROM tbl_usuario WHERE correo_electronico = ? LIMIT 1");
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		$stmt->close();
		
		if ($num > 0){
			return true;
			} else {
			return false;	
		}
	}
	
	function generateToken()
	{
		$gen = md5(uniqid(mt_rand(), false));	
		return $gen;
	}
	
	function hashPassword($password) 
	{
		$hash = password_hash($password, PASSWORD_DEFAULT);
		return $hash;
	}
	
	function resultBlock($errors){
		if(count($errors) > 0)
		{
			echo "<div id='error' class='alert alert-danger' role='alert'>
			<a href='#' onclick=\"showHide('error');\">[X]</a>
			<ul>";
			foreach($errors as $error)
			{
				echo "<li>".$error."</li>";
			}
			echo "</ul>";
			echo "</div>";
		}
	}
	
	function registraUsuario($usuario, $pass_hash, $nombre, $email, $activo, $token, $tipo_usuario){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("INSERT INTO tbl_usuario (usuario, contrasena, nombre_usuario, correo_electronico, activacion, token_password, id_usuario) VALUES(?,?,?,?,?,?,?)");
		$stmt->bind_param('ssssisi', $usuario, $pass_hash, $nombre, $email, $activo, $token, $tipo_usuario);
		
		if ($stmt->execute()){
			return $mysqli->insert_id;
			} else {
			return 0;	
		}		
	}
	
	function enviarEmail($email, $nombre, $asunto, $cuerpo){
		
	
		require_once  'funcs/PHPMailer.php';
		
		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'tls'; //Modificar
		$mail->Host = 'smtp.gmail.com'; //Modificar
		$mail->Port = 587; //Modificar
		
		$mail->Username = 'crisaqfundacion@gmail.com'; //Modificar
		$mail->Password = 'fundacion_20'; //Modificar
		
		$mail->setFrom('crisaqfundacion@gmail.com', 'Soporte del sistema'); //Modificar
		$mail->addAddress($email, $nombre);
		
		$mail->Subject = $asunto;
		$mail->Body    = $cuerpo;
		$mail->IsHTML(true);
		
		if($mail->send())
		return true;
		else
		return false;
	}
	
	function validaIdToken($id, $token){
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT activacion FROM tbl_usuario WHERE id_usuario = ? AND token_password = ? LIMIT 1");
		$stmt->bind_param("is", $id, $token);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;
		
		if($rows > 0) {
			$stmt->bind_result($activacion);
			$stmt->fetch();
			
			if($activacion == 1){
				$msg = "La cuenta ya se activo anteriormente.";
				} else {
				if(activarUsuario($id)){
					$msg = 'Cuenta activada.';
					} else {
					$msg = 'Error al Activar Cuenta';
				}
			}
			} else {
			$msg = 'No existe el registro para activar.';
		}
		return $msg;
	}
	
	function activarUsuario($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE tbl_usuario SET activacion=1 WHERE id = ?");
		$stmt->bind_param('s', $id);
		$result = $stmt->execute();
		$stmt->close();
		return $result;
	}
	
	function isNullLogin($usuario, $password){
		if(strlen(trim($usuario)) < 1 || strlen(trim($password)) < 1)
		{
			return true;
		}
		else
		{
			return false;
		}		
	}
	

function login($usuario, $password)
	{
		global $mysqli;
		$str="SELECT intentos ,(SELECT descripcion FROM tbl_parametros WHERE id_parametro= 8)  AS intentos_param FROM tbl_usuario WHERE usuario='$usuario' ";
    $array = mysqli_query($mysqli, $str);
    $hola = mysqli_fetch_assoc($array);
                  $intentos = $hola['intentos'];
      $intentos_param = $hola['intentos_param'];
		$stmt = $mysqli->prepare("SELECT id_usuario, id_rol,contrasena FROM tbl_usuario WHERE usuario = ? || correo_electronico = ? LIMIT 1");
		$stmt->bind_param("ss", $usuario, $usuario);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;
		
   
		if($rows > 0) {
			
			if(isActivo($usuario)){
				
				$stmt->bind_result($id, $id_tipo, $passwd);
				$stmt->fetch();
				
				$validaPassw = password_verify($password, $passwd);
				
				if($validaPassw){
					
					lastSession($id);
					$_SESSION['id_usuario'] = $id;
					$_SESSION['id_rol'] = $id_tipo;
					
					header("location: welcome.php");
					} else {
					
					$errors = "El usuario o contrase&ntilde;a son incorrect@s";
                    
                    
				}
                
                
                $a=($intentos_param-($intentos+1));
                   if ( $a> 0 ) {
            $errors = 'a fallado quedan';
            echo "A FALLADO LE QUEDAN ". ( $intentos_param-($intentos+1) )." INTENTOS";
                       $str2="UPDATE tbl_usuario SET intentos=$intentos+1 WHERE usuario='$usuario'";
                     $array2 = mysqli_query($mysqli, $str2);
                    
            # code...
          }else {
           echo ' HA SIDO BLOQUEADO';
            $str3="UPDATE tbl_usuario SET intentos=0, activacion= 0 WHERE usuario='$usuario'";
                        $array3 = mysqli_query($mysqli, $str3);
                    
                     }
				} else {
				$errors = 'El usuario no esta activo O BLOQUEADO';
			}
			} else {
			$errors = "El nombre de usuario o correo electr&oacute;nico no existe";
		}
		return $errors;
	}
	
	
	
	
	
	
	function lastSession($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE tbl_usuario SET ultima_conexion=NOW(), token_password='', password_request=0 WHERE id_usuario = ?");
		$stmt->bind_param('s', $id);
		$stmt->execute();
		$stmt->close();
	}
	
	function isActivo($usuario)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT activacion FROM tbl_usuario WHERE usuario = ? || correo_electronico = ? LIMIT 1");
		$stmt->bind_param('ss', $usuario, $usuario);
		$stmt->execute();
		$stmt->bind_result($activacion);
		$stmt->fetch();
		
		if ($activacion == 1)
		{
			return true;
		}
		else
		{
			return false;	
		}
	}	
	
	function generaTokenPass($user_id, $token)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE tbl_usuario SET token_password=?, password_request=1 WHERE id_usuario = ?");
		$stmt->bind_param('ss', $token, $user_id);
		$stmt->execute();
		$stmt->close();
		
		return $token;
	}
	
	function getValor($campo, $campoWhere, $valor)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT $campo FROM tbl_usuario WHERE $campoWhere = ? LIMIT 1");
		$stmt->bind_param('s', $valor);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($_campo);
			$stmt->fetch();
			return $_campo;
		}
		else
		{
			return null;	
		}
	}



function getBitacora($campo, $campoWhere, $valor)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT $campo FROM tbl_parametros WHERE $campoWhere = ? LIMIT 1");
		$stmt->bind_param('s', $valor);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($_campo);
			$stmt->fetch();
			return $_campo;
		}
		else
		{
			return null;	
		}
	}





	
	function getPasswordRequest($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT password_request FROM tbl_usuario WHERE id_usuario = ?");
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->bind_result($_id);
		$stmt->fetch();
		
		if ($_id == 1)
		{
			return true;
		}
		else
		{
			return null;	
		}
	}
	
	function verificaTokenPass($user_id, $token){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT activacion FROM tbl_usuario WHERE id_usuario = ? AND token_password = ? AND password_request = 1 LIMIT 1");
		$stmt->bind_param('is', $user_id, $token);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($activacion);
			$stmt->fetch();
			if($activacion == 1)
			{
				return true;
			}
			else 
			{
				return false;
			}
		}
		else
		{
			return false;	
		}
	}
	
	function cambiaPassword($password, $user_id, $token){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE tbl_usuario SET contrasena = ?, token_password='', password_request=0 WHERE id_usuario = ? AND token_password = ?");
		$stmt->bind_param('sis', $password, $user_id, $token);
		
		if($stmt->execute()){
			return true;
			} else {
			return false;		
		}
	}		


function cambia($password, $user_id, $token){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE tbl_usuario SET contrasena = ?, token_password='', password_request=0 WHERE id_usuario = ? AND token_password = ?");
		$stmt->bind_param('sis', $password, $user_id, $token);
		
		if($stmt->execute()){
			return true;
			} else {
			return false;		
		}
	}		