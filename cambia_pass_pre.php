<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	$errors =array();
	if(empty($_GET['user_id'])){
		header('Location: index.php');
	}
	

	$user_id = $mysqli->real_escape_string($_GET['user_id']);
	

$consulta="select pregunta from tbl_preguntas";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));
	
	
	$objeto="PANTALLA DE RECUPERACION POR PREGUNTA";
$accion="PREGUNTAS DE SEGURIDAD";
$descripcion="Esta en la pantalla de verificacion de pregunta y respuesta";
$bita=grabarBitacora($user_id,$objeto,$accion,$descripcion);



if  (!empty($_POST)){   
    $res = $mysqli->real_escape_string($_POST['email']);
    $pre = $mysqli->real_escape_string($_POST['mod_rol']);
        if (preguCorrectas($user_id,$pre,$res)){
           $token=  generateToken();
			
         echo "esta bien";
				header('Location:cambia_contra.php?user_id='.$user_id.'&token='.$token);
			

					 
					
                        
        
    }else{
        $errors[]="respuesta o pregunta incorrectas";
    }

}











?>

<html>
	<head>
		<title>Cambiar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
		<style>
body {font-family: Arial, Helvetica, sans-serif;
  background-image:url(imagen/login1.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: 90% 115%;;
  background-attachment: fixed;
  font-family: "Ubuntu", helvetica;
}
* {box-sizing: border-box;}

.container{
  width: 85%;
  background: grey; 
  opacity:0.8;
  padding: 40px;
  max-width: 450px;
  margin: 40px auto;
  border-radius: 15px; 
  color: white;
  padding: auto;
}

.tiene{
	color: black;

}

.pre{
	color: black;
}
</style>

	</head>
	
	<body>
		
		<div class="container">    
		                  
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Responde una Pregunta de seguridad </div>
			</div>     
			
			<div style="padding-top:30px" class="panel-body" >
			<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
				<div class="form-group">
				
				<div class="col-sm-8">
					<label class="pre">Preguntas</label>
				  <select title="Preguntas" class='form-control' name='mod_rol' id='mod_rol' onchange="load(1);">
							<center><option value="">Seleccione una pregunta</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"select * from tbl_preguntas order by id_pregunta");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_pregunta'];?>"><?php echo $rw['pregunta'];?></option>			
								<?php
							}

							?>
						</select></center>
				</div>
			  </div>
					
					<div class="form-group">
						<label for="con_password" class="col-md-3 control-label">Respuesta</label>
						<div class="col-md-9">
							<center><input  title="Respuesta de la Pregunta" id="email" type="text" class="form-control" name="email" placeholder="Respuesta" title="Debes responder la pregunta" onPaste="return false;" maxlength="50" required></center></input>
						</div>
					</div>
					<center>
					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
							<button title="Modificar contraseña" id="btn-login" type="submit" class="btn btn-success">Modificar</a>
						</div>
					</div>  
					</center> 
					<br><br>
    <center><p class="tiene">Tienes una cuenta existente?<a class="iniciar" href="index.php"> Iniciar sesion</a></p></center>
				</form>
				<?php echo resultBlock($errors); ?>
			</div>                     
		</div>  
		
		</div>
	</body>
</html>	