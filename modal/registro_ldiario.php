
	<!-- Modal -->
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Asiento Contable</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="desglose" name="desglose" placeholder="Descripcion De La Transaccion" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="30"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
              </div>
			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Cuenta Debitada</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="cuentad" id="cuentad"  style="text-transform: uppercase;" >
			        <option value="">- Seleccione una Cuenta-</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_catalogo_cuenta");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['id_catalogo'];?>"><?php echo $rw['tipo_cuenta'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				</div>
			  </div> 

              
              <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Monto</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="monto" name="monto" placeholder="Ingrese en Monto" 
				  style="text-transform: uppercase;" onkeypress="return solonumeros(event)" 
				  onkeypress="return IsNumeric(event)"
				   maxlength="30"  onPaste="return false;"  required onkeyup="return noespacios1();" required>
				</div>
			  </div>
			  <script type="text/javascript">                
                      function noespacios(){
		              orig=document.monto.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.form.monto.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	}
      
                     </script>    
<script type="text/javascript">  
function IsNumeric(input){
    var RE = /^-{0,1}\d*\.{0,1}\d+$/;
    return (RE.test(input));
}

</script>             
    
		  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Cuenta Cargada</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="cuentac" id="cuentac"  style="text-transform: uppercase;" >
			        <option value="">- Seleccione un Cuenta -</option>
			      <?php

                   $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_catalogo_cuenta");
                while($rw=mysqli_fetch_array($query_cod_veh)) {
					?>

                  <option value="<?php echo $rw['id_catalogo'];?>"><?php echo $rw['tipo_cuenta'];?></option>     
			          <?php
				}
					 ?>  
			        </select>
				</div>
			  </div> 
		



		 <!--- <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Monto</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="monto" name="monto" placeholder="Cantidad" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="30"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div>

			  <div class="form-group">
				<label for="descrepcion" class="col-sm-3 control-label">Tipo transaccion</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="tt" id="tt"  style="text-transform: uppercase;" >
			        <option value="">- Seleccione un Tipo Transaccion -</option>
			        <option value="CR">Credito</option>
			        <option value="DE">Debito</option>
					</select>
				</div>
			  </div> --->

			  
		  <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Fecha Operacion</label>
				<div class="col-sm-8">
				  <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Ingrese la fecha" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="30"  onPaste="return false;" onkeyup="return unespacio58()" required>
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
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			<button  type="submit" class="btn btn-warning" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	</div>
	
