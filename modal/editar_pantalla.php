
	<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"  onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Pantalla</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Nombre:</label>
				<div class="col-sm-8">
				  <input title="Nombre de la pantalla" type="text" class="form-control" id="nombres" name="nombres" placeholder="NOMBRE" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;"  onkeyup="return unespacio56()"  required> 
				  <input  type="hidden" id="mod_id" name="mod_id">
				</div>
			  </div>
			     <script>
    function unespacio56(){
		orig=document.editar_usuario.nombres.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.nombres.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(nombres.value.match(/\s\s/)) nombres.value = nombres.value.replace('  ', ' ');
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
				<label for="descripcion" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="descripcions" name="descripcions" placeholder="DESCRIPCION" style="text-transform: uppercase;" maxlength="200" required title="Descripcion de la pantalla" onkeyup="return unespacio57()" onPaste="return false;">
				</div>
			  </div>
	    <script>
    function unespacio57(){
		orig=document.editar_usuario.descripcions.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.descripcions.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(descripcions.value.match(/\s\s/)) descripcions.value = descripcions.value.replace('  ', ' ');
}
    
    </script>
						 	 
			
		  </div>
		  <div class="modal-footer">
			<button title="Cerrar Ventana" type="button" class="btn btn-danger" onClick="location.reload();" data-dismiss="modal">Cerrar</button>
			<button title="Cerrar Ventana" type="submit" class="btn btn-warning"  id="actualizar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	