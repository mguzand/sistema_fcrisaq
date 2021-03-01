

	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nueva Compra</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Producto</label>
				<div class="col-sm-8">
				  <select onchange="datosprecio(this)" title="sistema"  class='form-control selectpicker ' data-live-search="true"   name="pd" id='pd'  style="text-transform: uppercase;" >
			        <option value="">- Seleccione un Producto -</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_producto");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option onclick='llenado(a)' value="<?php echo $rw['id_producto'];?>"><?php echo $rw['nombre'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				
				</div>
              </div>
			  <script>
 function llenado(a){
	$("#precio").val(a);
 }
 </script>
			  
			  <script>


	let precio;
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


    const datosprecio = () => {

    	fetch(`ajax/buscar-precio.php?id_producto=${ $('#pd').val() }`)
    	     .then((resp) => resp.json())
    	     .then(dataserver=>{
    	     	precio= dataserver.precio;
    	     })
    	     .catch(err => {
    	     	console.log(err);
    	     })
    }

    const resulprecio = () => {
    	let cantidad = $('#ct').val();
    	if (precio !==undefined && cantidad !=='' )    {
    		let resul = (parseInt(cantidad))*(parseInt(precio));
    		$('#precio').val(resul);
    	}else{
    		$('#precio').val('');
    	}
    }





</script>
			
              <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Cantidad</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="ct" name="ct" placeholder="Ingrese Cantidad Producto" style="text-transform: uppercase;" onkeypress="return solonumeros(event)" onkeyup="resulprecio()"  maxlength="6"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div>

			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Precio</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precio" readonly="true" name="precio" placeholder="Precio Producto" style="text-transform: uppercase;" onkeypress="return llenado(a) "  maxlength="10"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div>



<script>
    function unespacio58(){
		orig=document.guardar_parametro.cod.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.cod.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(cod.value.match(/\s\s/)) cod.value = cod.value.replace('  ', ' ');
}
    
    </script>




			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Proveedor</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="proveedor" id='proveedor'  style="text-transform: uppercase;" >
			        <option value="">- Seleccione un Proveedor -</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_proveedor");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['ID_Proveedor'];?>"><?php echo $rw['Nombre'];?>-<?php echo $rw['Apellido'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
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
