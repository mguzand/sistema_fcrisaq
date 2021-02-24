
	<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"  onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Parametro</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Parametro:</label>
				<div class="col-sm-8">
				  <input title="Nombre del Parametro" type="text" class="form-control" id="parametros" name="parametros" placeholder="parametro" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;"  onkeyup="return unespacio()" readonly> 
				  <input  type="hidden" id="mod_id" name="mod_id" >
				</div>
			  </div>
			  <script>
    function unespacio(){
		orig=document.editar_usuario.parametros.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.parametros.value=nuev;
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
				  <input type="text" class="form-control" id="valors" name="valors" placeholder="valor" maxlength="150" required title="Valor del Parametro" onkeyup="return noespacios()" onkeypress="return soloNumeros(event) "value=">0">
				</div>
			  </div>
	
			  <script type="text/javascript">                
      function noespacios(){
		orig=document.editar_usuario.valors.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.valors.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>	
                
                <script>
    function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " 0123456789";
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
			
		  </div>
		  <div class="modal-footer">
			<button title="Cerrar Ventana" type="button" class="btn btn-danger"  onClick="location.reload();"data-dismiss="modal">Cerrar</button>
			<button title="Cerrar Ventana" type="submit" class="btn btn-warning"  id="actualizar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	