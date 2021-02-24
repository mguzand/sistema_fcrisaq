<?php
require_once ("funcs/conexion.php");
$consulta="select id_rol, rol from tbl_roles";
		$result=mysqli_query($mysqli, $consulta) or die (mysqli_error($mysqli));
           
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Editar Registros</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_proveedor" name="editar_proveedor">
			<div id="resultados_ajax2"></div>
			
			<div class="form-group">
				<label for="nombre_usuario" class="col-sm-3 control-label">Nombre </label>
				<div class="col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <input type="text" class="form-control" id="nombre" name="nombre" autocomplete="off" style="text-transform: uppercase;" onkeyup="return unespacionom()" onkeypress="return soloLetras(event)" placeholder="Ingrese Su Nombre" required>
				  <input type="hidden" id="mod_id" name="mod_id">
				</div>
                </div>
			  </div>

			  <div class="form-group">
				<label for="Apellido" class="col-sm-3 control-label">Apellido </label>
				<div class="col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <input type="text" class="form-control" id="apellido" name="apellido" autocomplete="off" style="text-transform: uppercase;" onkeyup="return unespacionom()" onkeypress="return soloLetras(event)" placeholder="Ingrese Su Apellido" required>
				</div>
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
    
    function unespacionom(){
		orig=document.editar_usuario.nombre.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.nombre.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	}

	
    function unosolo() {
	while(nombre.value.match(/\s\s/)) nombre.value = nombre.value.replace('  ', ' ');
}

</script>

<div class="form-group">
				<label for="usuarios" class="col-sm-3 control-label">Telefono</label>
				<div class="col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <input type="text" class="form-control" id="telefono" name="telefono" style="text-transform: uppercase;" autocomplete="off" placeholder="Ingrese Su Numero" onkeypress="return solonumeros(event)" onkeyup="return noespaciosusu()" required>
				</div>
			  </div>
                </div>
<div class="form-group">
				<label for="mod_rol" class="col-sm-3 control-label">Direccion</label>
				<div class="col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <select class='form-control' name='dire' id='dire' style="text-transform: uppercase;" >
							<option value="">Seleccione un Departamento</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"SELECT * from tbl_departamento");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_departamento'];?>"><?php echo $rw['Departamento'];?></option>			
								<?php
							}

							?>
						</select>
				</div>
                  </div>
			  </div>
  

                <script>
	        function unespacio2(){
		orig=document.editar_usuario.direccion.value;
		nuev=orig.split('  ');
		nuev=nuev.join(' ');
		document.editar_usuario.direccion.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	   }

	
        function unosolo() {
	       while(direccion.value.match(/\s\s/)) direccion.value = direccion.value.replace('  ', ' ');
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
                


    <script type="text/javascript">                
      function noespacios1(){
		orig=document.editar_usuario.telefono.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.telefono.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>
  


                  
			  <div class="form-group">
				<label for="usuarios" class="col-sm-3 control-label">Identidad</label>
				<div class="col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <input type="text" class="form-control" id="identidad" name="identidad" style="text-transform: uppercase;" autocomplete="off" placeholder="Ingrese Su Identificacion" onkeypress="return solonumeros(event)" onkeyup="return noespaciosusu()" required>
				</div>
			  </div>
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
     
     <script type="text/javascript">                
      function noespacios(){
		orig=document.editar_usuario.identidad.value;
		nuev=orig.split(' ');
		nuev=nuev.join('');
		document.editar_usuario.identidad.value=nuev;
		if(nuev=orig.split(' ').length>=2);
	                   }
      
    </script>



	<!---		  <div class="form-group">
				<label for="mod_rol" class="col-sm-3 control-label">Rol</label>
				<div class="col-sm-8">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <select class='form-control' name='rols' id='rols' style="text-transform: uppercase;" onchange="load(1);">
							<option value="">Seleccione un Rol</option>
							<?php 
							$query_cod_veh=mysqli_query($mysqli,"select * from tbl_roles order by id_rol");
							while($rw=mysqli_fetch_array($query_cod_veh))	{
								?>
							<option value="<?php echo $rw['id_rol'];?>"><?php echo $rw['rol'];?></option>			
								<?php
							}

							?>
						</select>
				</div>
                  </div>
			  </div>
  
			
			  <div class="form-group">
				<label for="correo_electronico" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
                  <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
				  <input type="text" class="form-control" id="correo_electronicos" name="correo_electronicos" placeholder="Correo electrónico" onkeyup="return noespaciosemail()" required>
				</div>
			  </div>
             </div>
              <script type="text/javascript">                
                      function noespaciosemail(){
		              orig=document.editar_usuario.correo_electronicos.value;
		              nuev=orig.split(' ');
		              nuev=nuev.join('');
		              document.editar_usuario.correo_electronicos.value=nuev;
		              if(nuev=orig.split(' ').length>=2);
	}
      
               </script> 
              
               
               
               
            	<div class="form-group">
  <label class="col-md-3 control-label">Estado:</label>
    <div class="col-md-8 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
		<select name="estado_usuarios"  id="estado_usuarios"class="form-control" style="text-transform: uppercase;">
			<option value="-1">--seleccione estado--</option>
			<option value="BlOQUEADO">BlOQUEADO</option>
			<option value="ACTIVO">ACTIVO</option>
			<option value="INACTIVO">INACTIVO</option>
		
		</select>---->
	 
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-warning" id="actualizar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>  
	</div>
	