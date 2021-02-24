<?php 
	$cod=$_GET['cod'];
	$_db = new mysqli('localhost', 'root', '', 'fcrisaq');
	$str="SELECT COUNT(id_usuario) AS r FROM tbl_usuario WHERE cod_reset='$cod'";
	$r = $_db->query($str); // HACER LA CONSULTA
	$datos = $r->fetch_assoc();
	$r=$datos['r'];
	if ($r==1) {?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Cambio de contraseña</title>
		</head>
		<body>
			<input type="text" id="new_pass" placeholder="Nueva contraseña">
			<input type="button" value="Cambiar contraseña">
		</body>
		<script type="text/javascript">
			var n_pass=document.getElementById('new_pass').value;
			// AQUI ACTUALIZAN EL CORREO ELECTRONICO DE ESA PERSONA EN LA TABLA DE USUARIOS
		</script>
		</html>
	<?php }else{ ?>
	<p>CODIGO INCORRECTO</p>
<?php } ?>