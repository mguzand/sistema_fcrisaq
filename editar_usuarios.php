	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar usuario</h4>
		  </div>

		  // CAMPOS DEL FORMULARIO DE REGISTRO

		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-group">
				<label for="nombre_usuario" class="col-sm-3 control-label">Nombre Completo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Nombre Completo" required>
				  <input type="hidden" id="mod_id" name="mod_id">
				</div>
			  </div>
			  <div class="form-group">
				<label for="usuario" class="col-sm-3 control-label">Usuario</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="contrasena" class="col-sm-3 control-label">Contraseña</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" pattern="[a-zA-Z0-9]{2,64}" title="Nombre de usuario ( sólo letras y números, 2-64 caracteres)"required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="id_roll" class="col-sm-3 control-label">Rol de Usuario</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control" id="id_roll" name="id_roll" placeholder="Rol del Usuario" required>
				</div>
			  </div>
				<div class="form-group">
				<label for="correo_electronico" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Correo electrónico" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="estado_usuario" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control" id="estado_usuario" name="estado_usuario" placeholder="Estado" required>
				</div>
			  </div>
			  <div class="form-group">
				<label for="fecha_creacion" class="col-sm-3 control-label">Fecha de Creación</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control" id="fecha_creacion" name="fecha_creacion" placeholder="Correo electrónico" required>
				</div>
			  </div>		 	 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>