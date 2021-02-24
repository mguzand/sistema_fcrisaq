<?php
	$user=$_GET['user'];
	$_db = new mysqli('localhost', 'root', '', 'fcrisaq');
	$str="SELECT COUNT(id_usuario) AS r,correo_electronico FROM tbl_usuario WHERE usuario='$user'";
	$r = $_db->query($str); // HACER LA CONSULTA
	$datos = $r->fetch_assoc();
	$r=$datos['r'];
	$correo=$datos['correo_electronico'];
	function generateRandomString($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
		 ceil($length/strlen($x)) )),1,$length);
	}
	$ran=  generateRandomString();
	$ran.= generateRandomString();
	if ($r==1) {
		$str="UPDATE tbl_usuario SET cod_reset='$ran' WHERE usuario='$user'";
		$pa = file_get_contents("http://www.ceedhn.com/enviar_correo.php?correo=".$correo.'&cod='.$ran.'&user='.$user);
		$r = $_db->query($str);
		if ($r) {
			echo 1;
		}
	}
	//echo "http://www.ceedhn.com/index.php?correo=".$correo.'&cod='.$ran.'&user='.$user;
 ?>
