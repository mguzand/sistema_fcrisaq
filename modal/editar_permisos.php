
	<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" onClick="location.reload();"   class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i>EDITAR PERMISOS</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			

	
					 
	<input type="hidden" name="df" id="df">
			  <div class="form-group">
				<label for="inser" class="col-sm-3 control-label"> Inserccion</label>
				<div class="col-sm-3">  		
                    <select name="inser"  id="inser"  class="">
			<option value="1">si</option>
			<option value="0">no</option>
		
		</select>
                
				</div>
			  </div>
			  <div class="form-group">
				<label for="con" class="col-sm-3 control-label">Consulta</label>
				<div class="col-sm-3">  		
                    <select name="con"  id="con"  class="">
			<option value="1">si</option>
			<option value="0">no</option>
		
		</select>
                
				</div>
			  </div>		
                
			  <div class="form-group">
				<label for="edi" class="col-sm-3 control-label"> Edicion</label>
				<div class="col-sm-3">  		
                    <select name="edi"  id="edi"  class="">
			<option value="1">si</option>
			<option value="0">no</option>
		
		</select>
                
				</div>
			  </div>
			
                
			  <div class="form-group">
				<label for="eliminar" class="col-sm-3 control-label">ELiminar</label>
				<div class="col-sm-3">  		
                    <select name="eliminar"  id="eliminar"  class="">
			<option value="1">si</option>
			<option value="0">no</option>
		
		</select>
                
				</div>
			  </div>		 
	
		  
		  <div class="modal-footer">
			<button title="Cerrar Ventana" type="button" class="btn btn-danger" data-dismiss="modal" onClick="location.reload();" >Cerrar</button>
			<button title="Cerrar Ventana" type="submit" class="btn btn-warning"  id="actualizar_datos" >Guardar Datos</button>
		  </div>
		  </form>
		</div>
          </div>
	  </div>
	</div>
	