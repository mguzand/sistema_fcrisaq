
	<!-- Modal -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-remove'></i> ¿Seguro que deséa eliminar esta Pantalla?</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_password" name="editar_password">
			<div id="resultados_ajax3"></div>

			  <div class="form-group">
				
				<div class="col-sm-8">
					<input type="hidden" id="user_id_mod" name="user_id_mod">
				</div>
			  </div>
	
		  <div class="modal-footer">
			<button type="button" class="btn btn-default"  onClick="location.reload();" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-danger" id="actualizar_datos3">Eliminar Pantalla</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	