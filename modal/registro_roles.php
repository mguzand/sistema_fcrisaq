
	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Nuevo Rol</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Rol:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="rol" name="rol" placeholder="rol" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="30"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div>

<script>
    function unespacio58(){
		orig=document.guardar_parametro.rol.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.rol.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(rol.value.match(/\s\s/)) rol.value = rol.value.replace('  ', ' ');
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
				<label for="descrepcion" class="col-sm-3 control-label">Descripción</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion" style="text-transform: uppercase;"  maxlength="100" onPaste="return false;" onkeyup="return unespacio59()" onkeypress="return soloLetras(event)"  required>
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
