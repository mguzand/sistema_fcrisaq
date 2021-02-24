

		<?php

$consulta="select id_rol, rol from tbl_roles";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));
           
	?>
	
	
<!DOCTYPE html>
<html lang="es">
<head>




	<meta charset="utf-8">
	<title></title>

	<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

	<link rel="stylesheet" href="../login/css/style2.css" type="text/css" media="all" >

	<link rel="stylesheet" href="../login/css/bootstrap.min.css" >
	<link rel="stylesheet" href="../login/css/bootstrap-theme.min.css" >

	<script src="../login/js/jquery.min.js" ></script>
	<script src="../login/js/bootstrap.min.js" ></script>


	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
	<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>


</head>
	
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
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Usuario</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="guardar_usuario" name="form" onsubmit="return validar();">
		<div id="resultados_ajax"></div>
		

			  <div class="form-group">
			   <label for="nombre_usuario" class="col-sm-3 control-label">Nombres</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="Nombre del Usuario" type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombres" style="text-transform: uppercase;" onkeypress="return soloLetras(event)" onkeyup="return unespacio()" maxlength="30" onPaste="return false;" autocomplete="off" required>
				</div>
			  </div>
			  </div>
<script>
	function unespacio(){
		orig=document.form.nombre_usuario.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.form.nombre_usuario.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nombre_usuario.value.match(/\s\s/)) nombre_usuario.value = nombre_usuario.value.replace('  ', ' ');
}

</script>

   
   <script type="text/javascript">
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


	/*
	function noespacios() {
		var er = new RegExp(/\s/);
		var web = document.getElementById('usuario').value;
		if(er.test(web)){
			alert('No se permiten espacios');
			return false;
		}
                else
			return true;
	}*/
       

</script>

			  <div class="form-group">
			   <label for="usuario" class="col-sm-3 control-label">Usuario</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>			  	  
				  <input  type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario"
				   pattern="[a-zA-Z0-9]{2,64}" title="Usuario" style="text-transform: uppercase;" 
				   onkeypress="soloLetras(event)"
				   onkeyup="noespacios();" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|"
				     onPaste="return false;"  maxlength="15" autocomplete="off" required>

				</div> 
			  </div>
			  </div>
                    
                    
                     <script type="text/javascript">                
                      function noespacios(){
		              orig=document.form.usuario.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.form.usuario.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
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
			 
              
                <div class="form-group">
				<label for="mod_rol" class="col-sm-3 control-label">Rol Del Usuario</label>
				<div class="col-sm-8">
		  		<div class="input-group">
			  	<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				<select title="Rol del Usuario" class='form-control' name='mod_rol' id='mod_rol' onchange="load(1);"  readonly>
				<?php 
				$query_cod_veh=mysqli_query($mysqli,"SELECT id_rol,rol from tbl_roles WHERE id_rol=1");
				while($rw=mysqli_fetch_array($query_cod_veh))	{
					?>
				<option value="<?php echo $rw['id_rol'];?>"><?php echo $rw['rol'];?></option>			
					<?php
				}

				?>
				</select>
				</div>
			  </div>
			 </div>
 
                          	             
			  <div class="form-group">
				<label for="correo_electronico" class="col-sm-3 control-label">Correo Electronico</label>
				 <div class="col-sm-8">
			  	  <div class="input-group">
			  	   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				    <input title="E-mail" type="email" class="form-control" id="correo_electronico" 
					name="correo_electronico"  required onkeyup="return noespacios1();"
					 placeholder="Correo Electronico" maxlength="80" onPaste="return false;"  
					 autocomplete="off" >
					</div>
				  </div>
				</div>	
	            
	                <script type="text/javascript">                
                      function nospaces1(){
		              orig=document.form.correo_electronico.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.form.correo_electronico.value=nuev;
		              if(nuev=orig.split(' ').length>=2);	}
      
                     </script>			
				
	 <script type="text/javascript">    
    
      function validar(){
      var correo, expresion;
      correo = document.getElementById("correo_electronico").value;    
      expresion= /\w+@\w+\.+[a-z]/;
            
       if(correo.length > 80){
       alert("El campo correo excede su capacidad de caracteres");
            }
       else if(!expresion.test(correo)){
         alert('El correo no es valido');
         
       }
          return false();
      }
  
    </script>
                     
                     
			

			
				<div class="form-group">
				  <label class="col-md-3 control-label">Estado del Usuario:</label>
				    <div class="col-md-8 selectContainer">
				      <div class="input-group">
				        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
						<input title="Estado del Usuario" name="estado_usuario"  id="estado_usuario"class="form-control" value="NUEVO" readonly required>

					 </div>
				  </div>
				</div>
				

			  <div class="form-group">
				<label for="contrasena" class="col-sm-3 control-label">Contraseña</label>
				 <div class="col-sm-8">
		  		  <div class="input-group">
			  	   <span class="input-group-addon"><i 
					 class="glyphicon glyphicon-lock"></i></span>
				   <input  type="password" class="form-control" 
				   id="contrasena" name="contrasena" 
				   placeholder="Contraseña" pattern=".{6,}" 
				   title="Contraseña ( min . 6 caracteres)"
				    maxlength="20" onPaste="return false;"  
					required onkeyup="return noespacios1();">
				   <span id="show-hide-passwd" action="hide" 
				   class="input-group-addon glyphicon glyphicon
				    glyphicon-eye-open"></span>
				</div>
			  </div>
			</div>
                       
                    <script type="text/javascript">                
                      function noespacios1(){
		              orig=document.form.contrasena.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.form.contrasena.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	}
      
                     </script>                    
    
                            
      
          	 <div class="form-group">          	 	
			  <label for="contrasena" class="col-sm-3 control-label">Confirmar Contraseña</label>
			   <div class="col-sm-8">
		  		<div class="input-group">
			  	<span class="input-group-addon"><i 
				  class="glyphicon glyphicon-lock"></i></span>
				<input title="Confirmacion de Contraseña"
				 type= "password" name="contrasena2"  
				id="contrasena2" class="form-control"
				 autocomplete="off" autofocus="on"
				 onkeyup="return nospaces2()" placeholder="Confirmar Contraseña" maxlength="20"
				  onPaste="return false;"  required >
		 		<span id="show-hide-passwd1" action="hide" 
				 class="input-group-addon glyphicon glyphicon
				  glyphicon-eye-open"></span>
				</div>
			   </div> 
             </div>
                     <script type="text/javascript">                
                      function nospaces2(){
		              orig=document.form.contrasena2.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.form.contrasena2.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	}
      
                     </script>                    

                            
           
		    </div>
              
              
		  <div class="modal-footer">
			<button title="Cerrar ventana" type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
	
	
	    <script>  
                
			$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
			
			
						$(document).on('ready', function() {
			$('#show-hide-passwd1').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
                    
                   
				}
			})
		})
	</script>
