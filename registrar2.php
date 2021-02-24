<?php
require_once 'funcs/funcs.php';

require( 'funcs/conexion.php');
if (!$_POST["pass1"] or !$_POST["txt_nom"] 
or !$_POST["txt_ape"] or !$_POST["correo"] or !$_POST["txt_us"] 
or !$_POST["combo_estado"] or !$_POST["rol"]){
	$mensaje= "Llene todos los campos.";
	print "<script>alert('$mensaje')</script>";
 	print ("<script>window.location.replace('Registro.php');</script>");
 	}else{
		$us= $_POST["txt_us"];
				$us= strtoupper($us);

    $pass1= $_POST["pass1"];
	$pass2=$_POST["pass2"];
	$correo= $_POST["correo"];
	$lo=("select correo_electronico from tbl_usuario where correo_electronico='$correo'");
				$ss=mysqli_query($mysqli,$lo) or die (mysqli_error($mysqli));
				$fb=mysqli_fetch_row($ss);


		$la=("select usuario from tbl_usuario where usuario='$us'");
				$sa=mysqli_query($mysqli,$la) or die (mysqli_error($mysqli));
				$fa=mysqli_fetch_row($sa);


 			if ($fb) {
				$mensaje= "Este correo ya existe ";
				print "<script>alert('$mensaje')</script>";
		 		print ("<script>window.location.replace('Registro.php');</script>");
			}elseif($pass1!=$pass2){
				$mensaje= "las contraseñas no coinciden ";
				print "<script>alert('$mensaje')</script>";
		 		print ("<script>window.location.replace('Registro.php')</script>");
			}elseif($fa){
				$mensaje= "ya existe este usuario ";
				print "<script>alert('$mensaje')</script>";
		 		print ("<script>window.location.replace('Registro.php')</script>");
			}	else{

				$nom=$_POST["txt_nom"];

                $nom= strtoupper($nom);
						$ape=$_POST["txt_ape"];
						  $ape= strtoupper($ape);
				$us= $_POST["txt_us"];
				$us= strtoupper($us);



				$estado= $_POST["combo_estado"];
				$rol= $_POST["rol"];
				$f1= $_POST["fecha1"];


				$pass_hash = hashPassword($pass1);
				$co=("select * from tbl_usuario where '$us'=usuario");
				$res=mysqli_query($mysqli,$co) or die (mysqli_error($mysqli));
				$fss=mysqli_fetch_row($res);
				if (preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,16}$/', $pass1))
				if (!$fss) {
					$consulta=("insert into tbl_usuario (nombre_usuario,Apellidos,usuario,contrasena,correo_electronico,estado_usuario,id_rol, fecha_creacion,activacion,fecha_cambio_contrasena) values('$nom','$ape', '$us','$pass_hash','$correo','$estado',$rol,'$f1',1,NOW())");

					$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error($mysqli));




					//
					$dueño="ADMIN_CORREO";


                       $objeto="PANTALLA REGISTRO";
                    $nuevo=$us;
					$dest= $correo;

                    $accion="INSERTAR";
                     $miau=getValor('id_usuario','correo_electronico',$dest);
                     $bita=grabarBitacora($miau, $objeto, $accion,$consulta);

					  $admin="ansluisa@hotmail.com";
					$mail = "verificar en el sistema el nuevo usuario: '$nuevo'";
			        $titulo = "NUEVO USUARIO";
			        $headers = "MIME-Version: 1.0\r\n";
			        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			        $headers .= "From: BERNARDOS PET SYSTEM < ansluisa@hotmail.com >\r\n";

			        $msg=mail($admin,$titulo,$mail,$headers);






			        if ($msg) {
			        	$mensaje= "Usuario Registrado con correo";
						print "<script>alert('$mensaje')</script>";
				 		print ("<script>window.location.replace('index.php');</script>");
			        }else{
			        	$mensaje= "Usuario Registrado Correctamente ";
						print "<script>alert('$mensaje')</script>";
				 		print ("<script>window.location.replace('index.php');</script>");  
			        }
				}else{
					$mensaje= "El Usuario ya existe";
					print "<script>alert('$mensaje')</script>";
			 		print ("<script>window.location.replace('registro.php');</script>");
                    }else{
            $mensaje="Su Contraseña debe Incluir Una Mayúscula, Minuscula, Números y Caracteres Especiales !";
                print "<script>alert('$mensaje')</script>";
			 		print ("<script>window.location.replace('registro.php');</script>");
				}
				mysqli_close($mysqli);

}
}


 	/*
"^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$"
 	*/
?>
