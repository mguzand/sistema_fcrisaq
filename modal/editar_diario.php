 
	<!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Libro Diario</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
				  <input   title="Nombre del Parametro" type="text" class="form-control" id="dcr" name="dcr" placeholder="Descripcion" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;" onkeyup="return unespacio60()" required> 
				  <input  type="hidden" id="mod" name="mod">
				</div> 
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
				<label for="descripcions" class="col-sm-3 control-label">Cuenta Debitada</label>
				<div class="col-sm-8">
				<select title="sistema" class='form-control' name="db" id="db"  style="text-transform: uppercase;" >
					<option value="">- Seleccione una Cuenta -</option>
			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_catalogo_cuenta");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['codigo_cuenta'];?>"><?php echo $rw['tipo_cuenta'];?></option>     
			          <?php
			        }

			        ?>
			        </select>

				</div>
			  </div>

<div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Monto</label>
				<div class="col-sm-8">
				  <input   title="Nombre del Parametro" type="text" class="form-control" id="mon" name="mon" placeholder="Monto" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="10"  onPaste="return false;" onkeyup="return unespacio60()" required> 
				  
				</div>
              </div>


              <div class="form-group">
				<label for="descripcions" class="col-sm-3 control-label">Cuenta Cargada</label>
				<div class="col-sm-8">
				<select title="sistema" class='form-control' name="hb" id="hb"  style="text-transform: uppercase;" >
					<option value="">- Seleccione una Cuenta -</option>
			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_catalogo_cuenta");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['Codigo_cuenta'];?>"><?php echo $rw['tipo_cuenta'];?></option>     
			          <?php
			        }

			        ?>
			        </select>

				</div>
			  </div>         
              
<div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Fecha Operacion</label>
				<div class="col-sm-8">
				  <input   title="Nombre del Parametro" type="date" class="form-control" id="fecha" name="fecha" placeholder="Fech Operacion" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="6"  onPaste="return false;" onkeyup="return unespacio60()" required> 
				  
				</div>
              </div>
        <!--- <div class="form-group">
				<label for="descripcions" class="col-sm-3 control-label">Tipo Transaccion</label>
				<div class="col-sm-8">
				<select title="sistema" class='form-control' name="tp" id="tp"  style="text-transform: uppercase;" >
					<option value="">-- Seleccione una Transaccion --</option>
          <option value="ENTRADA">ENTRADA</option>
          <option value="SALIDA">SALIDA </option>

			        </select>

				</div>
			  </div>
      
            	
     
              <script>
    function unespacio60(){
		orig=document.editar_usuario.eq.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.eq.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

function unosolo() {
	while(eq.value.match(/\s\s/)) eq.value = eq.value.replace('  ', ' ');
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
            if(key == especiales[i]){s
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>---->


			  
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
	