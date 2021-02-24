
	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo Parametro</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="parametro" class="col-sm-3 control-label">Parametro:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="parametro" name="parametro" placeholder="parametro" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;" onkeyup="return unespacio80()" required>
				</div>
			  </div>


<script>
    function unespacio80(){
		orig=document.guardar_parametro.parametro.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.parametro.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(parametro.value.match(/\s\s/)) parametro.value = parametro.value.replace('  ', ' ');
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
				<label for="valor" class="col-sm-3 control-label">Valor:</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="valor" name="valor" placeholder="valor"  maxlength="150" onkeyup="return noespacios81()" onPaste="return false;" required>
				</div>
			  </div>                
		  </div>
		    <script type="text/javascript">                
      function noespacios81(){
		orig=document.guardar_parametro.valor.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.guardar_parametro.valor.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
              
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
