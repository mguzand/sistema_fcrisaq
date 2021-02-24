
	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Producto</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="" name="prod" placeholder="Nombre del Producto" 
				  pattern="[a-zA-Z0-9]{4,64}"  pattern="|^[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ]*$|"style="text-transform: uppercase;"   maxlength="35"  onPaste="return false;" onkeyup="return unespacio58()" onkeypress="return soloLetras(event)" required>
				</div>
              </div>

	
              <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio Producto" style="text-transform: uppercase;" 
				  onkeypress="return solonumeros(event)"  maxlength="11"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div>

			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Minimo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="min" name="min" placeholder="Producto Minimo" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="10"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div>



			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Maximo</label>
				<div class="col-sm-8">
			  <input type="text" class="form-control" id="max" name="max" placeholder="Producto Minimo" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="10"  onPaste="return false;" onkeyup="return unespacio58()" required>
			    
				</div>
			  </div>  


		<!----	 <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Proveedor</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="proveedor" id='proveedor' style="text-transform: uppercase;" >
			        <option value="" >- Seleccione un Proveedor -</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_proveedor");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['ID_Proveedor'];?>"><?php echo $rw['Nombre'];?>--<?php echo $rw['Apellido'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				</div>
			  </div>  ---->
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
		  <script>

 function llenado(a){
	$("#precio").val(a);
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
