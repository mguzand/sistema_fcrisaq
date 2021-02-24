
	<!-- Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" onClick="location.reload();" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Registro</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_usuario" name="editar_usuario">
			<div id="resultados_ajax2"></div>
			<div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Desglose</label>
				<div class="col-sm-8">
				  <input   title="Nombre del Parametro" type="text" class="form-control" id="des" name="des" placeholder="Desglose" style="text-transform: uppercase;" onkeypress="return sololetras(event)"  maxlength="50"  onPaste="return false;" onkeyup="return nospacio60()" required> 
				  <input  type="hidden" id="mod" name="mod">
				</div>
			  </div>

			  <div class="form-group">
				<label for="descripcions" class="col-sm-3 control-label">Cuenta Debitada</label>
				<div class="col-sm-8">
				<select title="sistema" class='form-control' name="cuentasd" id="cuentasd"  style="text-transform: uppercase;" >
					<option value="">Seleccione una cuenta</option>
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
            <label for="parametro" class="col-sm-3 control-label">monto</label>
				<div class="col-sm-8">
				  <input   title="Nombre del Parametro" type="text" class="form-control" id="mon" name="mon" placeholder="Monto" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="50"  onPaste="return false;" onkeyup="return unespacio60()" required> 
				
				</div>
              </div>

			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Cuenta Acreditada</label>
				<div class="col-sm-8"> 
					<select title="sistema" class='form-control' name="cuentasc" id="cuentasc"  style="text-transform: uppercase;" >
			        <option value="">Seleccione una cuenta</option>
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



			  
           <!----  <div class="form-group">	
            <label for="parametro" class="col-sm-3 control-label">Tipo Transaccion</label>
				<div class="col-sm-8">
				  <input   title="Nombre del Parametro" type="text" class="form-control" id="tip" name="tip" placeholder="Tipo De transaccion DE/CR" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="50"  onPaste="return false;" onkeyup="return unespacio60()" required> 
				</div>
			  </div>------>

		
  

			                <script>
    function unespacio60(){
		orig=document.editar_usuario.mon.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.mon.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

function unosolo() {
	while(mon.value.match(/\s\s/)) mon.value = mon.value.replace('  ', ' ');
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
				<label for="rol" class="col-sm-3 control-label">Fecha Operacion</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="30"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div>



			  
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
	