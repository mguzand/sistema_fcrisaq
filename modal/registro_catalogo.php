
	<!-- Modal --> 
	<div class="modal fade" id="myModalpara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar Cuenta Contable</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_parametro" name="guardar_parametro">
			<div id="resultados_ajax"></div>
			  
      <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Codigo Cuenta</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="cod" name="cod" placeholder="Ingrese Codigo De Cuenta" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="10"  onPaste="return false;" onkeyup="return unespacio58()" required>
		     	</div>
			  </div> 


			  
<script>
    function unespacio58(){
		orig=document.guardar_parametro.codigo.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.codigo.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(codigo.value.match(/\s\s/)) codigo.value = codigo.value.replace('  ', ' ');
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
				<label for="descrepcion" class="col-sm-3 control-label">Tipo Cuenta</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="tp" name="tp" placeholder="Nombre De Cuenta" style="text-transform: uppercase;" onkeypress="return soloLetras(event)"  maxlength="40"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div> 

			  
<!-----
<div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Tipo Cuenta</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="tp" id="tp"  style="text-transform: uppercase;" >
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
			  </div> 

             <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Codigo</label>
				<div class="col-sm-8">
					<select title="sistema" class='form-control' name="cod" id="cod"  style="text-transform: uppercase;" >
			        <option value="">- Seleccione una Cuenta -</option>

			        <?php 
			        $query_cod_veh=mysqli_query($mysqli,"SELECT * FROM tbl_tipo_cuenta");
			        while($rw=mysqli_fetch_array($query_cod_veh)) {
			          ?>

			        <option value="<?php echo $rw['id_cuenta'];?>"><?php echo $rw['codigo_cuenta'];?></option>     
			          <?php
			        }

			        ?>
			        </select>
				</div>
			  </div> ----->

			  
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
				<label for="descrepcion" class="col-sm-3 control-label">Codigo Padre</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" id="cp" name="cp" placeholder="Ingrese codigo Cuenta Padre" style="text-transform: uppercase;" onkeypress="return solonumeros(event)"  maxlength="10"  onPaste="return false;" onkeyup="return unespacio58()" required>
				</div>
			  </div> 

			  
      
              <div class="form-group">
				<label for="rol" class="col-sm-3 control-label">Cuenta Padre</label>
				<div class="col-sm-8">
				<select title="sistema" class='form-control' name="des" id="des"  style="text-transform: uppercase;" >
			        <option value="">- Seleccione una Cuenta Padre -</option>
					<option value="ACTIVO CORRIENTE">ACTIVO CORRIENTE</option>
					<option value="ACTIVO NO CORRIENTE">ACTIVO NO CORRIENTE</option>
					<option value="PASIVO CORRIENTE">PASIVO CORRIENTE</option>
					<option value="PASIVO NO CORRIENTE">PASIVO NO CORRIENTE</option>
					<option value="PATRIMONIO">PATRIMONIO</option>
					<option value="INGRESO">INGRESO</option>
					<option value="GGASTOS">GASTOS</option>

	        <?php 
			        
			          ?>

			           
			          <?php
			        

			        ?>
			        </select>
				</div>
			  </div> 
			  

			

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




              <script>
    function unespacio59(){
		orig=document.guardar_parametro.cuenta_padre.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.guardar_parametro.cuenta_padre.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
function unosolo() {
	while(cuenta_padre.value.match(/\s\s/)) cuenta_padre.value = cuenta_padre.value.replace('  ', ' ');
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

		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			<button  type="submit" class="btn btn-warning" id="guardar_datos">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
