<?php


require 'funcs/conexion.php';
		$consulta="select id_rol, rol from tbl_roles";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));

		$consulta2="select descripcion from tbl_parametros where nombre = 'vencimiento'";
		$result2=mysqli_query($mysqli, $consulta2) or die (mysqli_error($mysqli));
		$fss=mysqli_fetch_row($result2);
		$vig= $fss[0];
		$fecha = date('Y-m-j');
		$nuevafecha = strtotime ( "+$vig day" , strtotime ( $fecha ) ) ;
		$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
?>


<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"></meta>
<style>
body { 
    font-family: Arial, Helvetica, sans-serif;
  background-image:url(imagen/index.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
}

form{
  width: 85%;
  background: grey;
  opacity:0.9;
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 15px;
  color: black;
}

* {
    box-sizing: border-box;
}

 h2{
  color: white;

 }

/* Add padding to containers */
.container {
    padding: 16px;
    background-color: white;


}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
    border-radius: 10px;

}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
<!--
<script>
    function comprobarClave(){
    Contraseña = document.form1.Contraseña.value
    password = document.form1.password.value

    if (Contraseña == password)
        alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo")
    else
        alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo")
    mysqli_close($con);
}


</script>
-->

<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<!--<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>-->
<!--
<link rel="stylesheet" href="../login/css/style2.css" type="text/css" media="all" >

<link rel="stylesheet" href="../login/css/bootstrap.min.css" >
<link rel="stylesheet" href="../login/css/bootstrap-theme.min.css" >

<script src="../login/js/jquery.min.js" ></script>
<script src="../login/js/bootstrap.min.js" ></script>

-->

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>
</head>
<body>
  <script>
  	function unspaces(){
  		orig=document.form.txt_nc.value;
  		nuev=orig.split('  ');
  		nuev=nuev.join(' ');
  		document.form.txt_nc.value=nuev;
  		if(nuev=orig.split(' ').length>=2);
  	}

  	function nospaces(){
  		orig=document.form.txt_us.value;
  		nuev=orig.split(' ');
  		nuev=nuev.join('');
  		document.form.txt_us.value=nuev;
  		if(nuev=orig.split(' ').length>=2);
  	}
  function unosolo() {
  	while(txt_nc.value.match(/\s\s/)) txt_nc.value = txt_nc.value.replace('  ', ' ');
  }

  </script>
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
</script>


<form  action="registrar2.php" name="form" method="post"  onsubmit="return validar();"  autocomplete="off">
<div class="container">
    <center>
    <strong><legend>REGISTRO DE UN NUEVO USUARIO</legend>
</center></strong>
	<label for="nombre"><b>Nombre:</b></label>
	<input type="text" placeholder="Ingrese el nombre" 
    
     maxlength="70" name="txt_nom" autofocus="on"  style="text-transform: uppercase;" 
     onkeyup="return unspaces()"  onkeypress="return soloLetras(event)" autofocus required ></input>
	<label for="nombre"><b>Apellido:</b></label>
	<input type="text" placeholder="Ingrese el Apellido" name="txt_ape" maxlength="70" 
     style="text-transform: uppercase;" onkeyup="return unspaces()"  onkeypress="return soloLetras(event)"  required ></input>

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
</script>

	<label for="usuario"><b>Nombre de Usuario:</b></label>
	<input type="text" placeholder="Ingrese el nombre de Usuario" 
    name="txt_us" placeholder="Ingrese el nombre del usuario" style="text-transform: uppercase;" 
    
     onkeyup="return nospaces()" onkeypress="return soloLetras(event)" 
      onkeypress="return soloLetras(event)" onPaste="return false;" title="Usuario solo letras" 
      required></input>
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
 </script>


    <label for="Contra"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingrese su contraseña" maxlength="20" name="pass1"  
    title="debe contener una mayuscula , numero , signo especial no menor a 8" 
    onkeyup="return nospaces2()" onPaste="return false;" required></input>
    <script>
         function nospaces2(){
   orig=document.form.pass1.value;
   nuev=orig.split(' ');
   nuev=nuev.join('');
   document.form.pass1.value=nuev;
   if(nuev=orig.split(' ').length>=2);
   }
   </script>

    <label for="contra-repetir"><b>Repetir Contraseña</b></label>
    <input type="password" placeholder="Repita su Contraseña" name="pass2"
     title="debe ser igual a la Contraseña" autofocus="on" onkeyup="return nospaces1()"
      onPaste="return false;"required></input>


    <script>
         function nospaces1(){
   orig=document.form.pass2.value;
   nuev=orig.split(' ');
   nuev=nuev.join('');
   document.form.pass2.value=nuev;
   if(nuev=orig.split(' ').length>=2);
 }
   </script>

      <label for="contra-repetir"><b>Rol del Usuario</b></label>

   <select title="Rol del Usuario" class='form-control' name='rol' id='rol' onchange="load(1);"  readonly>


     <?php
     $query_cod_veh=mysqli_query($mysqli,"SELECT id_rol,rol from tbl_roles WHERE id_rol=1");
     while($rw=mysqli_fetch_array($query_cod_veh))	{
       ?>
     <option value="<?php echo $rw['id_rol'];?>"><?php echo $rw['rol'];?></option>
       <?php
     }

     ?>
	</select><br>
	
     <label for="email"><b> Correo: </b></label>
     <input type="text" maxlength="80"  placeholder="Ingrese su direccion de correo"  name="correo" id="correo" autocomplete="off" autofocus="on" o onPaste="return false;" required  onkeyup=" nospaces3();" required ></input>

     <script>
         function nospaces3(){
   orig=document.form.correo.value;
   nuev=orig.split(' ');
   nuev=nuev.join('');
   document.form.correo.value=nuev;
   if(nuev=orig.split(' ').length>=2);
 }

           function validar(){
      var correo, expresion;
      correo = document.getElementById("correo").value;
      expresion= /\w+@\w+\.+[a-z]/;

       if(correo.length > 80){
       alert("El campo correo excede su capacidad de caracteres");
            }
       else if(!expresion.test(correo)){
         alert('El correo no es valido');
         return false;
       }
    }

   /*
function validar() {
if (/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3,4})+$/.test('correo')){
alert("La dirección de email " + 'correo' + " es correcta.");
}else {
alert("La dirección de email es incorrecta.");
}
}*/
    </script>

    <label for="contra-repetir"><b>Estado</b></label>

    <input type="combo_estado" id="combo_estado" name="combo_estado" class="form-control" value="NUEVO" readonly>


<div class="form-group">
   <input type="hidden" name="fecha1" class="form-control" value="<?php echo date("Y-m-d");?>" readonly>
     </div>



<center>
     <button type="submit" class="registerbtn" value="Comprobar si son iguales"  onClick="comprobarClave()" onclick = "this.form.action='registrar2.php'">Registrar nuevo Usuario</button>
</center>

  <div class="container signin">
    <p>Tienes una cuenta existente? <a href="index.php">Iniciar Sesion</a>.</p>
  </div>
</div>


</form>


</body>

</html>
