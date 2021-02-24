<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- Modal -->
	<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div  class="modal-dialog modal-lg" role="d class="modal-dialog modal-lg"t">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close"  onClick="location.reload();"data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Jugadores</h4>
		   </div>
		  <div class="modal-body">
		 <form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
		<div id="resultados_ajax2"></div>
					<div id="wrapper">
					
<div class="agileinfo-row">
		  
<div class="form-group">
			   <label for="nombre" class="col-sm-3 control-label">Nombre </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input  type="text" class="form-control" id="nom" name="nom" placeholder="Nombre" pattern="[a-zA-Z0-9]{2,64}" title="Nombre" style="text-transform: uppercase;" onkeyup="return unespacio1()" onkeypress="return soloLetras(event)"  onPaste="return false;"  maxlength="70" autocomplete="off">
					<input  type="hidden" id="mod_id" name="mod_id">
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
</script>	
     
     <script type="text/javascript">                
      function noespacios(){
		orig=document.editar_usuario.identidad.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.identidad.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>


		  
		  
			  <div class="form-group">
			   <label for="Apellido" class="col-sm-3 control-label">Apellido</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  <input title="Apellido" type="text" class="form-control" id="ape" name="ape" placeholder="Apellido" style="text-transform: uppercase;" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="70" onPaste="return false;" autocomplete="off" required>
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
		orig=document.editar_usuario.nombre.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.nombre.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nom.value.match(/\s\s/)) nom.value = nom.value.replace('  ', ' ');
}

</script> 

<div class="form-group">
			   <label for="identidad" class="col-sm-3 control-label">Identidad</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
				  <input class="form-control" id="id" name="id" placeholder="Identidad" title="min 13 numeros solo"onPaste="return false;" onkeyup="return noespacios()" onkeypress="return solonumeros(event)"  maxlength="15" autocomplete="off" >
				</div> 
			  </div>
			  </div>
			  

			  
        <script>
	        function unespacio1(){
		orig=document.editar_usuario.apellido.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.apellido.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(apellido.value.match(/\s\s/)) apellido.value = apellido.value.replace('  ', ' ');
}

</script> 
	 
	 <div class="form-group">
			   <label for="sexo" class="col-sm-3 control-label">Sexo</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
					 <select name="sexo" id= "sexo" class="form-control" style="text-transform: uppercase;">			      <option value="">--SELECCIONE sexo--</option>		  
						  <option value="Masculino">Masculino</option>						  
						  <option value="Femenino">Femenino</option>				  
						</select>
				</div>
			  </div>
			  </div> 

				 <div class="form-group">
			   <label for="fecha" class="col-sm-3 control-label">Fecha de Nacimiento</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	<input  type="date" class="form-control" id="fechanac" name="fechanac"  title="Fecha de Nacimiento" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="15" autocomplete="off" required>
				</div>
			  </div>
			  </div> 
		 
			  <div class="form-group">
			   <label for="telefono" class="col-sm-3 control-label">Telefono</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				  <input  type="tel" class="form-control" id="telefono" name="telefono" placeholder="" pattern="^[9|8|3]\d{7}$"  title="min 8 numeros solo" onkeypress="return solonumeros(event)" onkeyup="return noespacios1()" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="8" autocomplete="off" required>

				</div> 
			  </div>
			  </div>
			 
    <script type="text/javascript">                
      function noespacios1(){
		orig=document.editar_usuario.celular.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.celular.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
  
			 
              
       

			 </div>
			 <!--
			 	<div class="agileinfo-row w3ls-row2"> 
			 
			       
			         <div class="form-group">
			   <label for="telefono" class="col-sm-3 control-label">Telefono  </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>
				  <input  type="tel" class="form-control" id="telefono" name="telefono" placeholder="22345678" pattern="^[9
				  |8|3|2]\d{7}$"  title="min 8 numeros solo" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="8" autocomplete="off" onkeyup="return noespacios2()" onkeypress="return solonumeros(event)" required>
				</div> 
			  </div>
			  </div>

				-->
     <script type="text/javascript">                
      function noespacios2(){
		orig=document.editar_usuario.telefono.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.telefono.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
			   <!--          
			  <div class="form-group">
				<label for="correo_electronico" class="col-sm-3 control-label">Correo Electronico</label>
				 <div class="col-sm-8">
			  	  <div class="input-group">
			  	   <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				    <input title="E-mail" type="text" class="form-control" id="correo_electronico" name="correo_electronico" onkeyup="return noespacios3()" placeholder="Correo Electronico" maxlength="80" onPaste="return false;" required autocomplete="off">
					</div>
				  </div>
				</div>

				-->
	<script type="text/javascript">                
      function noespacios3(){
		orig=document.editar_usuario.correo_electronico.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.correo_electronico.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
				
			  <div class="form-group">
			   <label for="direccion" class="col-sm-3 control-label">Direccion</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
				  <textarea input  class="form-control" id="direccion" name="direccion" placeholder="Direccion" pattern="[a-zA-Z0-9]{2,64}" title="Usuario" style="text-transform: uppercase;" onPaste="return false;"  maxlength="200" onkeyup="return unespacio2()" autocomplete="off"></textarea>
				</div> 
			  </div>
			  </div>
	<script>
	        function unespacio2(){
		orig=document.editar_usuario.direccion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.direccion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	   }

	
        function unosolo() {
	       while(direccion.value.match(/\s\s/)) direccion.value = direccion.value.replace('  ', ' ');
        }

    </script> 

<div class="form-group">
			   <label for="nom" class="col-sm-3 control-label">Municipio </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				  <input title="Municipio" type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" style="text-transform: uppercase;" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="70" onPaste="return false;" autocomplete="off" required>
				</div>
			  </div>
			  </div>
			   

			<!--		                  
      
          	 <div class="form-group">          	 	
			 <label for="membresia" class="col-sm-3 control-label">Membresía</label>
			   <div class="col-sm-8">
		  		<div class="input-group">
		  		 <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
		  		<select name="membresia" style="text-transform: uppercase;"  id="membresia"class="form-control">

			<option value="SI">si</option>
			<option value="NO">no</option>
			
		</select>
				</div>
			   </div> 
             </div>
          -->                  

					<div class="form-group">
			   <label for="departamento" class="col-sm-3 control-label">Departamento </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				  <input title="Municipio" type="text" class="form-control" id="depto" name="depto" placeholder="Departamento" style="text-transform: uppercase;" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="70" onPaste="return false;" autocomplete="off" required>
				</div>
			  </div>
			  </div>



					<div class="form-group">
			   <label for="nom" class="col-sm-3 control-label">Nombre del padre </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				  <input title="Nombre Padre" type="text" class="form-control" id="nomp" name="nomp" placeholder="nombre padre" style="text-transform: uppercase;" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="70" onPaste="return false;" autocomplete="off" required>
				</div>
			  </div>
			  </div> 




				<div class="form-group">
			   <label for="nom" class="col-sm-3 control-label">Nombre de la Madre </label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
				  <input title="Nombre Madre" type="text" class="form-control" id="nomm" name="nomm" placeholder="Nombre de la Madre" style="text-transform: uppercase;" onkeyup="return unespacio()" onkeypress="return soloLetras(event)" maxlength="70" onPaste="return false;" autocomplete="off" required>
				</div>
			  </div>
			  </div>

				<div class="form-group">
			   <label for="telefono" class="col-sm-3 control-label">Telefono Padre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				  <input  type="tel" class="form-control" id="telp" name="telp" placeholder="Tel Padre" pattern="^[9|8|3]\d{7}$"  title="min 8 numeros solo" onkeypress="return solonumeros(event)" onkeyup="return noespacios1()" style="text-transform: uppercase;"  onPaste="return false;"  maxlength="8" autocomplete="off" required>

				</div> 
			  </div>
			  </div>
			 

				<div class="form-group">
			   <label for="tele" class="col-sm-3 control-label">Telefono Madre</label>
				<div class="col-sm-8">
			  	 <div class="input-group">
			  	  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				  <input  type="tel" class="form-control" id="telm" name="telm" placeholder="Tel Madre" pattern="^[9|8|3]\d{7}$"  title="min 8 numeros solo" onkeypress="return solonumeros(event)"  style="text-transform: uppercase;"  onPaste="return false;"  maxlength="8" autocomplete="off" required>

				</div> 
			  </div>
			  </div>











			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Regional</label>
				<div class="col-sm-8">
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
              
			 </div>
		 
		 
		 
		   <center>

		 
		   <div class="modal-footer">
			<button  onClick="location.reload();" title="Cerrar ventana" type="submit"   class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button title="Guardar Datos" type="submit" class="btn btn-primary" name="actualizar_datos" id="actualizar_datos">Guardar datos</button>
		  </div>
		  </center>
		  </form>
		 
		</div>
		  </div>
		</div>
		
	</div>
		
	
