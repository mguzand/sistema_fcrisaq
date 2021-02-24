
	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Proveedor</h4>
		  </div>
		 <!--- <form id="formulario" class="formulario">--->
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_proveedor" name="guardar_proveedor">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nom" name="nom" placeholder="Ingrese Su Nombre" style="text-transform: uppercase;"
				   onkeypress="return soloLetras(event)"  maxlength="40"  onPaste="return false;" 
				   pattern="[a-zA-Z0-9]{4,64}" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|"
				 
				   required>
				</div>
			  </div>

			

			  		      
	

			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Apellido</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="ape" name="ape" 
				  pattern="[a-zA-Z0-9]{2,64}" 
				   pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|"
				    placeholder="Ingrese su Apellido" style="text-transform: uppercase;"  
					maxlength="40"  onPaste="return false;" onkeyup="return unespacio58()"
					 onkeypress="return soloLetras(event)" required>
				</div>
			  </div>

  

			  <!----<div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Direccion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="dire" name="dire" placeholder="Ingrese Su Direccion" style="text-transform: uppercase;"  maxlength="50" onPaste="return false;" onkeyup="return unespacio58()" onkeypress="return " onkeypress="return soloLetras(event)" required>
				</div>---->

	

			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Telefono</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="tel" name="tel"
				   placeholder="Ingrese Su Telefono" style="text-transform: uppercase;" 
				    maxlength="15" onkeyup="return unespacio59()"
					 onkeypress="return solonumeros(event)"  
					 pattern="[a-zA-Z0-9]{4,64}" 
				   onkeyup="noespacios();" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|"required>
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
	</script>
				<script type="text/javascript">                
                      function noespacios(){
		              orig=document.form.usuario.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.form.usuario.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	}
	
      
                     </script> 

				<div class="form-group">
				<label for="descripcion" class="col-sm-3 control-label">Direccion</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="depa" id='depa' style="text-transform: uppercase;" >
			        <option value="" > Seleccione un Lugar </option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_departamento");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['id_departamento'];?>"><?php echo $rw['Departamento'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				</div>            
                

			  </div>

			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Num. Identidad</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="iden" 
				  name="iden" placeholder="Ingrese su Identidad" style="text-transform: uppercase;" 
				   maxlength="25" onPaste="return false;" onkeyup="return unespacio59()"
				    onkeypress="return solonumeros(event)" 
					pattern="[a-zA-Z0-9]{4,64}"  
				   
				   onkeyup="noespacios();" pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|" required>
				</div>

			  </div>

		  </div>

		  
		  <script>
    function unespacio59(){
		orig=document.guardar_parametro.descripcion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.descripcion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(descripcion.value.match(/\s\s/)) descripcion.value = descripcion.value.replace('  ', ' ');
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



  
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-warning" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
