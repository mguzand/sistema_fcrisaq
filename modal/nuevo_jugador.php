<?php
error_reporting( ~E_NOTICE ); // avoid notice
	session_start();
	require 'funcs/conexion.php';
//require '../funcs/funcs.php';

	
	if(isset($_POST['btnsave']))
	{
         $usernumber = $_POST['user_number'];// user email
		$username = $_POST['user_name'];// user name
       // $userexterno = $_POST['user_externo'];// user name
		$userjob = $_POST['user_job'];// user email
       
		$nombre=$_POST["nombre"];
				$ape=$_POST["apellido"];
         $iden = $_POST["identidad"];
				//$zona=$_POST["zona"];
    			$sex= $_POST["sexo"];
          	$fechan= $_POST["fechanac"];
            	$tel= $_POST["telefono"];
              // $mem=$_POST["membresia"];
               $dir=$_POST["direccion"];
              $muni=$_POST["municipio"];
              // $lig=$_POST["ligaper"];
              $nombrep=$_POST["nomp"];
               $nombrem=$_POST["nomm"];
                $telpa=$_POST["telp"];
                 $telma=$_POST["telm"];
                $depart=$_POST["depto"];
            $categoria=$_POST["cate"];
$equipo=$_POST["eq"];
	$regional=$_POST["reg"];
        
        $nombre= strtoupper($nombre);
				$ape= strtoupper($ape);
				$dir= strtoupper($dir);
				$muni= strtoupper($muni);
				$depart= strtoupper($depart);
				$nombrep= strtoupper($nombrep);
				$nombrem= strtoupper($nombrem);
		$imgFile = $_FILES['user_image']['name'];
		$tmp_dir = $_FILES['user_image']['tmp_name'];
		$imgSize = $_FILES['user_image']['size'];
		
		
		if(empty($nombre)){
			$errMSG = "Por favor ingrese el nombre del solicitante";
		}
        
        //else if(empty($userexterno)){

			//$errMSG = "Por favor ingrese el exterior";
		//
        else if(empty($iden)){

			$errMSG = "Por favor ingrese numero de solicitud";
		}
        else if(empty($tel)){
            $errMSG = "Por favor ingrese lugar de origen/unidad admon";

		}
		else if(empty($imgFile)){
            echo $imgFile;
			$errMSG = "Por favor escoja foto de la solicitud";
		}
		else
		{
			$upload_dir = 'imagen/perfil/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){			
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			/*$stmt = $mysqli->prepare('INSERT INTO cass_solicitudes(	sol_num_solicitud,perx_id_per_externa,sol_procedencia,sol_imagen) VALUES(:unum, :uname, :ujob, :upic)'); 
            $stmt->bindParam(':unum',$usernumber);
			$stmt->bindParam(':uname',$username);  
          //  $stmt->bindParam(':uext',$userexterno); 
			$stmt->bindParam(':ujob',$userjob);
			$stmt->bindParam(':upic',$userpic);
			*/
            
            
            
            $consulta=("INSERT INTO tbl_jugador(Nombre,Apellido,Num_Iden,Sexo,Fecha_Nac,Telefono,Direccion,Municipio,Nom_Pad,Nom_Mad,Tel_Pad,Tel_Mad,Depto,ID_Categoria,ID_Equipo,ID_Regional,foto) VALUES('$nombre','$ape','$iden','$sex','$fechan','$tel','$dir','$muni','$nombrep','$nombrem','$telpa','$telma','$depart','$categoria','$equipo','$regional','$userpic')");
            
            	$resultado=mysqli_query($mysqli,$consulta) or die (mysqli_error($mysqli));
			if($resultado)
			{
				$successMSG = "!!Se ha guardado con exito!! ";
				header("refresh:5;jugador.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "Error al guardar la solicitud";
			}
		}
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Nuevo Jugador</title>
<style>
	
	body{
	background-image: url(imagen/jugando.png);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	font-family: "Ubuntu", helvetica;
}

.container2{
  width: 100%;
  background: white;
  opacity:0.9;
  padding: 20px;
  max-width: 1300px;
  margin: 60px auto;
  border-radius: 15px;
  color: black;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Cat Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/es.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
	<?php include("menu.php"); ?>
</head>
<body>
	<!-- banner -->
	<!-- banner -->
	<!-- Inicio header -->
			
		<div class="about-heading">	
			<div class="con">
				Nuevo Jugador
			
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<!-- //banner -->
	<!-- contact -->

	<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo  $userpic; ?></strong>
        </div>
        <?php
	}
	?>   


				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="form-vertical">
	    
				



<div class="container2">

<a href="jugador.php" class="btn btn-danger" class="fa fa-undo	
">Regresar a Busqueda</a>

				<fieldset>
				<legend> Datos del Jugador </legend>
                    
<td><label class="control-label">Foto de Jugador</label></td>
        <td><input class="input-group" type="file" id="user_image" name="user_image" accept="image/*" /></td><br>
                    
                    
                    
			 <div class="form-group">
			  <label for="nombre" class="col-sm-1 control-label">Nombre: </label>
				<div class="col-sm-5">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					 
				   <input  type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese el nombre del jugador."   title="Nombre" style="text-transform: uppercase;" onkeypress="return sololetras(event)" onkeyup="return noespacios()" onPaste="return false;"  maxlength="20" autocomplete="off" >
				
				</div>  
			  </div>
			  </div>  
	<script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

function unespacio(){
		orig=document.guardar_usuario.nombre.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.nombre.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nombre.value.match(/\s\s/)) nombre.value = nombre.value.replace('  ', ' ');
}

</script>	


<div class="form-group">
			   <label for="apellido" class="col-sm-1 control-label">Apellido: </label>
				<div class="col-sm-5">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				   <input  type="text" onkeyup="return unespacio1()" class="form-control" id="apellido" name="apellido" placeholder="Ingrese Apellido" pattern="[a-zA-Z0-9]{2,64}" title="Apellidos" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  onPaste="return false;"  maxlength="15" autocomplete="off">
				</div> 
			  </div>
			  </div>
<script>
function unespacio1(){
		orig=document.guardar_usuario.apellido.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_usuario.apellido.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(apellido.value.match(/\s\s/)) apellido.value = apellido.value.replace('  ', ' ');
}

</script>	


				<div class="agileinfo-row">
		  
			<div class="form-group">
		<label for="identidad" class="col-sm-1 control-label">Identidad: </label>
	 <div class="col-sm-5">
			<div class="input-group">
			 <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
		<input  type="" class="form-control" id="identidad" name="identidad" placeholder="ingrese su numedro de identidad"   title="Identidad" style="text-transform: uppercase;" onkeypress="return solonumeros(event)" onkeyup="return noespacios()" onPaste="return false;"  maxlength="15" autocomplete="off" >
	 </div> 
	 </div>
	 </div>


	 <script>
function solonumeros(e){
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " 1234567890";
	especiales = "8-37-39-46";

	tecla_especial = false
	for(var i in especiales){
			 if(key == especiales[i]){
					 tecla_especial = true;
					 break;
			 }
	 }
	 if(letras.indexOf(tecla)==-1 && !tecla_especial){
			 return false;
	 }
}
         
         function noespacios(){
orig=document.guardar_usuario.identidad.value;
nuev=orig.split(' ');
nuev=nuev.join('');
document.guardar_usuario.identidad.value=nuev;
if(nuev=orig.split(' ').length>=2);
								}
         
         
         
         function noespacios2(){
orig=document.guardar_usuario.telefono.value;
nuev=orig.split(' ');
nuev=nuev.join('');
document.guardar_usuario.telefono.value=nuev;
if(nuev=orig.split(' ').length>=2);
						 }
 
</script>	
	 <div class="form-group">
				<label for="sexo" class="col-sm-1 control-label">Sexo:</label>
				  <div class="col-sm-5">
					<div class="input-group">
			  	      <span class="input-group-addon"><i class="glyphicon glyphicon-edit "></i></span>
								 <select name="sexo" id= "sexo" class="form-control" style="text-transform: uppercase;">			      <option value="">--SELECCIONE SEXO--</option>		  
						  <option value="Masculino">MASCULINO</option>						  
						  <option value="Femenino">FEMENINO</option>				  
						</select>
			  
					</div>
				  </div>
          </div>

		
			 
			 
	 
			 <div class="agileinfo-row w3ls-row2"> 
			 
		 <div class="form-group">
 <label for="nacimiento" class="col-sm-1 control-label">Fecha:</label>
<div class="col-sm-5">
	 <div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
		<input  type="date" class="form-control" id="fechanac" name="fechanac"  title="Fecha de Nacimiento" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="15" autocomplete="off" required>
</div> 
</div>
</div>	       
			 


<div class="agileinfo-row w3ls-row2"> 
			 
			       
			 <div class="form-group">
 <label for="telefono" class="col-sm-1 control-label">Telefono: </label>
<div class="col-sm-5">
	 <div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
	<input  type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" pattern="^[9
	|8|3|2]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="15" autocomplete="off" required onkeyup="return noespacios2()" onkeypress="return solonumeros(event)">
</div> 
</div>
</div>



			  

<div class="form-group">
			   <label for="direccion" class="col-sm-1 control-label">Direccion:</label>
				<div class="col-sm-5">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				 <textarea input  class="form-control" row="25" cols="30" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  onPaste="return false;" id="direccion" name="direccion" placeholder="Direccion" pattern="[a-zA-Z0-9]{2,64}" title="Direccion"   onPaste="return false;"  maxlength="40" autocomplete="off"></textarea>
				</div> 
			  </div>
			  </div>

			

				<div class="form-group">
			  <label for="municipio" class="col-sm-1 control-label">Municipio: </label>
				<div class="col-sm-5">
			  	 <div class="input-group">
			  	 <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
				  <input  type="text" class="form-control" id="municipio" name="municipio" placeholder="nombre de municipio."   title="Municipio" style="text-transform: uppercase;" onkeypress="return sololetras(event)" onkeyup="return noespacios()" onPaste="return false;"  maxlength="20" autocomplete="off" >
				</div> 
			  </div>
			  </div> 

				<div class="form-group">
			  <label for="nombre" class="col-sm-1 control-label">Departamento: </label>
				<div class="col-sm-5">
			  	 <div class="input-group">
			  	 <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
					 
				
				  <input  type="text" class="form-control" id="depto" name="depto" placeholder="nombre del departamento."   title="Departamento" style="text-transform: uppercase;" onkeypress="return sololetras(event)" onkeyup="return noespacios()" onPaste="return false;"  maxlength="20" autocomplete="off" >
				</div> 
			  </div>
				</div> 
				
				</fieldset>

				<fieldset>
			  <legend> Datos de los parientes </legend>
				<div class="form-row">
				<div class="form-group">
				<label for="nombre" class="col-sm-1 control-label">Nombre del padre: </label>
				<div class="col-md-5 mb-3">
			  	 <div class="input-group">
			  	 <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
			 <input  type="text" class="form-control" id="nompad" name="nomp" placeholder="nombre del padre."   title="nombre del padre" style="text-transform: uppercase;" onkeypress="return sololetras(event)" onkeyup="return noespacios()" onPaste="return false;"  maxlength="20" autocomplete="off" >
				</div>
				</div> 
				</div>
		
				<div class="form-group">
			  <label for="nombre" class="col-sm-1 control-label">Nombre de la madre: </label>
				<div class="col-md-5 mb-3">
			  	 <div class="input-group">
			  	 <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
				    <input  type="text" class="form-control" id="nomm" name="nomm" placeholder="nombre de la madre."   title="nombre de la madre" style="text-transform: uppercase;" onkeypress="return sololetras(event)" onkeyup="return noespacios()" onPaste="return false;"  maxlength="20" autocomplete="off" >
				</div> 
			  </div>
			  </div> 
        </div>	
				<br>
				<br>
					
	<div class="form-row">
	<div class="form-group">
 <label for="telefono" class="col-sm-1 control-label">Telefono del padre: </label>
<div class="col-md-5 mb-3">
	 <div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
<input  type="tel" class="form-control" id="telpa" name="telp" placeholder="Telefono del padre" pattern="^[9
	|8|3|2]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="15" autocomplete="off"   onkeypress="return solonumeros(event)">
</div> 
</div>
</div>
<div class="form-group">
 <label for="telefono" class="col-sm-1 control-label">Telefono de la madre: </label>
<div class="col-md-5 mb-3">
	 <div class="input-group">
		<span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
<input  type="tel" class="form-control" id="telpa" name="telm" placeholder="Telefono de la madre" pattern="^[9
	|8|3|2]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="15" autocomplete="off"   onkeypress="return solonumeros(event)">
</div> 
</div>
</div>
</div>
</fieldset>

<fieldset>
	<legend>  Datos de Regional  </legend> 
	<div class="form-row"> 
<div class="form-group">
				<label for="descripcion" class="col-sm-1 mb-3 control-label">Equipo:</label>
				<div class="col-md-5 mb-3">
				<div class="input-group" >
				<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
<select title="sistema" class='form-control' name="eq" id='eq'  style="text-transform: uppercase;" >
			        <option value="">- Seleccione un Equipo -</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_equipo");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['ID_Equipo'];?>"><?php echo $rw['Nom_Eq'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				</div>
			 </div>
       </div>
      
			  <div class="form-group">
				<label for="descrepcion" class="col-sm-1 mb-3 control-label">Categoria:</label>
				<div class="col-md-5 mb-3">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
					<select title="sistema" class='form-control' name="cate" id='cate'  style="text-transform: uppercase;" >
			        <option value="">- Seleccione una Categoria -</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_categoria");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['ID_Categoria'];?>"><?php echo $rw['Nom_Cat'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				</div>
			  </div>  
        </div>
       </div>
			 
			  <div class="form-group">
				<label for="descrepcion" class="col-sm-1 control-label">Regional:</label>
				<div class="col-sm-5">
				<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
					<select title="sistema" class='form-control' name="reg" id='reg'  style="text-transform: uppercase;" >
			        <option value="">- Seleccione una Regional -</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_regional");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['ID_Regional'];?>"><?php echo $rw['Nom_Reg'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				</div>
			  </div> 
				</div>

    
    
				</fieldset> 
                 <br>
                 <center><button type="submit" name="btnsave" class="btn btn-primary">
       <i class="fa fa-save" style="font-size: 25px;"></i> &nbsp; Guardar Jugador
        </button></center>
                         

			</div>
                    </div>
                </div>
			</form>	




	<!-- here stars scrolling icon -->
	
<!-- //here ends scrolling icon -->
</body>	
</html>

