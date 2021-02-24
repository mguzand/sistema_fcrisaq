<?php 

require 'conexion.php';
require 'funcs.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['password']; 

$sentencia = $mysqli->prepare("SELECT fecha_cambio_contrasena from tbl_usuario where usuario= ?");
$sentencia->bind_param("s",$usuario);
$sentencia->execute();
$result =$sentencia->get_result();
while ($row = $result->fetch_assoc()) {
	$fechacontra= $row['fecha_cambio_contrasena'];
}
$sentencia->free_result();
$sentencia->close();





$sentencia = $mysqli->prepare("SELECT descripcion FROM tbl_parametros where id_parametro=1");
$sentencia->execute();
$result  = $sentencia->get_result();
 while ($row = $result->fetch_assoc()) {
    $dias_vence = $row['descripcion'];
	
}
$sentencia->free_result();
$sentencia->close();




$sentencia = $mysqli->prepare("SELECT descripcion FROM tbl_parametros where id_parametro=8");
$sentencia->execute();
$result  = $sentencia->get_result();
 while ($row = $result->fetch_assoc()) {
    $intentostotal = $row['descripcion'];
}
$sentencia->free_result();
$sentencia->close();

$sentencia = $mysqli->prepare("SELECT usuario from tbl_usuario where usuario = ? or correo_electronico= ?");
$sentencia->bind_param("ss", $usuario,$usuario);
$sentencia->execute();
$sentencia->store_result();
$row_cnt = $sentencia->num_rows;


$sentencia->free_result();
$sentencia->close();





if($row_cnt>0){
	$sentencia = $mysqli->prepare("SELECT id_usuario , id_rol,usuario,nombre_usuario,intentos,estado_usuario,contrasena,activacion from tbl_usuario where usuario = ? or 
		correo_electronico= ?");
	$sentencia->bind_param("ss", $usuario,$usuario);
	$sentencia->execute();


	$result  = $sentencia->get_result();
	
	while ($row = $result->fetch_assoc()) {
		$iduser = $row['id_usuario'];
		$idrol = $row['id_rol'];
		$user = $row['usuario'];
        $intentos = $row['intentos'];
        $passwd = $row['contrasena'];
        $name = $row['nombre_usuario'];
        $estado_usuario = $row['estado_usuario'];
		  $activacion = $row['activacion'];
    }

	$sentencia->free_result();
	$sentencia->close();
	
	$sentencia = $mysqli->prepare("SELECT * FROM permiso_modulo where id_mo=1 and id_rol='$rol'");
	
	$sentencia->execute();


	$result  = $sentencia->get_result();
	
	while ($row = $result->fetch_assoc()) {
		$inser = $row['id_usuario'];
		$eli = $row['id_rol'];
		$edi = $row['usuario'];
        
	
    }
	
	
	if ($iduser==35){
		
			$validaPassw = password_verify($clave, $passwd);
		
			if($validaPassw){
				

				$_SESSION['id_usuario']= $iduser;
				$_SESSION['user_login_status']=1;
				$_SESSION['id_rol'] = $idrol;
				$_SESSION['usuario'] = $user;
				$_SESSION['nombre_usuario'] = $name;

				

					echo json_encode("ok");
			}
			else{
				
				echo json_encode("Datos Incorrectos " );
			}
		
		
		
		}elseif($activacion==1){
		
	




	if($intentos<$intentostotal){

			$validaPassw = password_verify($clave, $passwd);
		
			if($validaPassw){
				$sentencia = $mysqli->prepare("UPDATE tbl_usuario set intentos = 0 where id_usuario = ?");
				$intentos+=1;
				$sentencia->bind_param("i", $iduser);
				$sentencia->execute();
				$sentencia->free_result();
				$sentencia->close();

				$_SESSION['id_usuario']= $iduser;
				$_SESSION['user_login_status']=1;
				$_SESSION['id_rol'] = $idrol;
				$_SESSION['usuario'] = $user;
				$_SESSION['nombre_usuario'] = $name;

				

				if(strtolower($estado_usuario)== strtolower('nuevo')){
					
					echo json_encode("nuevo");
				}
				else
					echo json_encode("ok");
			}
			else{
				$sentencia = $mysqli->prepare("UPDATE tbl_usuario set intentos = ? where id_usuario = ?");
				$intentos+=1;
				$sentencia->bind_param("ii", $intentos,$iduser);
				$sentencia->execute();
				$sentencia->free_result();
				$sentencia->close();
				echo json_encode("Datos Incorrectos , le quedan  ". ( $intentostotal-($intentos)." intentos." ));
			}
	 }else{
		echo json_encode("Ha Excedido el Limite de Intentos ");
		
		$sentencia = $mysqli->prepare("UPDATE tbl_usuario set activacion = 0  where id_usuario = ?");
				$sentencia->bind_param("i",$iduser);
				$sentencia->execute();
				$sentencia->free_result();
				$sentencia->close();
		        $estado="BLOQUEADO";
		
		$sentencia = $mysqli->prepare("UPDATE tbl_usuario set estado_usuario = ? where id_usuario = ?");
				$sentencia->bind_param("si",$estado,$iduser);
				$sentencia->execute();
				$sentencia->free_result();
				$sentencia->close();
		
		
	}
	
	

	
	
}else{
	echo json_encode("BLOQUEADO O INACTIVO");
}
	
		
	
}else{
	echo json_encode("Usuario o  Correo Electronico no Registrados");
}




?>

