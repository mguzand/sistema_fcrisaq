
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar catalogo</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
					<div id="resultados_ajax2"></div>

					<div class="form-group">	
						<label  for="parametro" class="col-sm-3 control-label">Codigo Cuenta</label>
						<div class="col-sm-8">
							<input readonly  title="Nombre del Parametro" type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo Cuenta" style="text-transform: uppercase;" onkeypress="return solonuemros(event)"  maxlength="25"  onPaste="return false;" onkeyup="return unespacio60()" required>
							<input  type="hidden" id="mod" name="mod">
						</div>
					</div>

					<div class="form-group">	
						<label for="parametro" class="col-sm-3 control-label">Tipo Cuenta</label>
						<div class="col-sm-8">
							<input   title="Nombre del Parametro" type="text" class="form-control" id="tipo" name="tipo" placeholder="Nombre Cuenta" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="25"  onPaste="return false;" onkeyup="return unespacio60()" required>

						</div>
					</div>


<!-----		<div class="form-group">	
        <label for="parametro" class="col-sm-3 control-label">Tipo Cuenta</label>
			<div class="col-sm-8">
		 <select title="sistema" class='form-control' name="tipo" id="tipo"  style="text-transform: uppercase;" >
				<option value="">- Seleccione una Cuenta -</option>
		        <?php 
		        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_catalogo_cuenta");
		        while($rw=mysqli_fetch_array($query_cod_veh)) {
		          ?>

		        <option value="<?php echo $rw['tipo_cuenta'];?>"><?php echo $rw['codigo_cuenta'];?></option>     
		          <?php
		        }

		        ?>
		        </select>

			</div>
		</div>--->

		<script>
			function unespacio60(){
				orig=document.editar_usuario.tc.value;
				nuev=orig.split('  ');
				nuev=nuev.join(' ');
				document.editar_usuario.tc.value=nuev;
				if(nuev=orig.split(' ').length>=2);
			}

			function unosolo() {
				while(tc.value.match(/\s\s/)) tc.value = tc.value.replace('  ', ' ');
			}

		</script>

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


		<div class="form-group">	
			<label for="parametro" class="col-sm-3 control-label">Cuenta Padre</label>
			<div class="col-sm-8">
				<select onchange="codigoPadre(this)" title="sistema" class='form-control' name="desc" id="desc"  style="text-transform: uppercase;" >
					<option value="">- Seleccione una Cuenta -</option>
					<option value="ACTIVO CORRIENTE">ACTIVO CORRIENTE</option>
					<option value="ACTIVO NO CORRIENTE">ACTIVO NO CORRIENTE</option>
					<option value="PASIVO CORRIENTE">PASIVO CORRIENTE</option>
					<option value="PASIVO NO CORRIENTE">PASIVO NO CORRIENTE</option>
					<option value="PATRIMONIO">PATRIMONIO</option>
					<option value="INGRESO">INGRESO</option>
					<option value="GGASTOS">GASTOS</option>
				</select>

			</div>
		</div>


		<div class="form-group">	
			<label for="parametro" class="col-sm-3 control-label">Cuenta Padre</label>
			<div class="col-sm-8">
				<input readonly  title="Nombre del Parametro" type="text" class="form-control" id="cpa" name="cpa" placeholder="Codigo Cuenta Padre" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="10"  onPaste="return false;" onkeyup="return unespacio60()" required>

			</div>
		</div>
		<script>


			const codigoPadre = () => {

		    	fetch(`ajax/buscar-precio.php?padre=${ $('#desc').val() }`)
		    	     .then((resp) => resp.json())
		    	     .then(dataserver=>{
		    	     	$('#cpa').val(dataserver.cuenta_padre);
		    	     })
		    	     .catch(err => {
		    	     	console.log(err);
		    	     })
		    }



			function unespacio60(){
				orig=document.editar_usuario.cod.value;
				nuev=orig.split('  ');
				nuev=nuev.join(' ');
				document.editar_usuario.cod.value=nuev;
				if(nuev=orig.split(' ').length>=2);
			}

			function unosolo() {
				while(cod.value.match(/\s\s/)) cod.value = cod.value.replace('  ', ' ');
			}

		</script>

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
			function unespacio60(){
				orig=document.editar_usuario.desc.value;
				nuev=orig.split('  ');
				nuev=nuev.join(' ');
				document.editar_usuario.desc.value=nuev;
				if(nuev=orig.split(' ').length>=2);
			}

			function unosolo() {
				while(desc.value.match(/\s\s/)) desc.value = desc.value.replace('  ', ' ');
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


<!-----
		  <div class="form-group">
			<label for="descripcions" class="col-sm-3 control-label">Codigo Cuenta Padre</label>
			<div class="col-sm-8">
			<select title="sistema" class='form-control' name="padre" id="padre"  style="text-transform: uppercase;" >
				<option value="">- Seleccione una Cuenta -</option>
		        <?php 
		        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_catalogo_cuenta");
		        while($rw=mysqli_fetch_array($query_cod_veh)) {
		          ?>

		        <option value="<?php echo $rw['id_catalogo'];?>"><?php echo $rw['cuenta_padre'];?></option>     
		          <?php
		        }

		        ?>
		        </select>

			</div>
		</div>---->



		<script>
			function unespacio61(){
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

		
	</div>
	<div class="modal-footer">
		<button title="Cerrar Ventana" type="button"  onClick="location.reload();"class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		<button title="Cerrar Ventana" type="submit" class="btn btn-warning"  id="actualizar_datos">Guardar Datos</button>
	</div>
</form>
</div>
</div>
</div>
