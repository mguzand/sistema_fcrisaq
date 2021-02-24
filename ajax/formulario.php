<?php

session_start();

require 'funcs/conexion.php';


require 'funcs/funcs.php';

$nombre=getNum();

?>

<!DOCTYPE html>
<head>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript'></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0/js/bootstrap.min.js' type='text/javascript'></script>


<script src="js/jquery.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/toastr.min.js" ></script

 		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="css/toastr.min.css" >
		<link rel="stylesheet" href="css/toastr.min.css" >
    
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	     <link href="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /> 
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	  
	  <script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
    
      <script type="text/javascript">
    function showCo() {
        element = document.getElementById("co");
        check = document.getElementById("che");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
    
    
    <script type="text/javascript">
    function showCon() {
        element = document.getElementById("con");
        check = document.getElementById("chec");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>

</head>
<body>
   
  <div class='container'>
    <div class='panel panel-danger dialog-panel'>
      <div class='panel-heading'>
        <h5>Anamnesis</h5>
      </div>
      <div class='panel-body'>
     	<form id="loginform" class="form-horizontal" role="form"  autocomplete="off">
					            
            
           <input type="hidden" id="mod_id" name="mod_id" value="<?php echo $nombre;?>">
			                     <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Mascota</label>
            <div class='col-md-8'>
              <div class='col-md-6'>
                <select  class="myselect" id="masco" name="masco" style="width:300px">
                <?php 
				$query_cod_veh=mysqli_query($mysqli,"SELECT id_mascota,nom_mascota from tbl_mascotas");
				while($rw=mysqli_fetch_array($query_cod_veh))	{
					?>
                    
				<option value="<?php echo $rw['id_mascota'];?>"><?php echo $rw['nom_mascota'];?></option>			
					<?php
				}

				?>
			
                </select>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='fecha' name='fecha' placeholder='First Name' type='date'>
                </div>
              </div>
           
            </div>
          </div>
            
            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									
								</div>
			                 
                 <div>
            <br>
             
            </div>
                
                   <b>Servicios</b>
<input type="checkbox" name="che" id="che" value="1" onchange="javascript:showCo()" />
<div id="co" style="display: none;">
                <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Motivo de Consulta</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='motivo' name="motivo" placeholder='' rows='3'></textarea>
            </div>
          </div>  

                    <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Sintomas Notados y Duración</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='sintomas' name='sintomas' placeholder='' rows='3'></textarea>
            </div>
          </div>
                
                 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Tratamientos Previos y Respuesta</label>
            <div class='col-md-6'>
           <textarea class='form-control' id='tratamientos' name="tratamientos" placeholder='' rows='3'></textarea>
            </div>
          </div>
                
              <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_comments'>Dieta Suministrada y Consumo</label>
            <div class='col-md-6'>
              <textarea class='form-control' id='dieta'
                        name='dieta'placeholder='' rows='3'></textarea>
            </div>
          </div>    
			                   
            </div>
                             
                
             <div>
            <br>
                <br>
            </div>
                       <b>Examen Clinico</b>
<input type="checkbox" name="chec" id="chec" value="1" onchange="javascript:showCon()" />
<div id="con" style="display: none;" style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
        
                 <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
              <div class='col-md-2'>
        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='peso' name='peso' placeholder='Peso' type='text'>
                </div>
              </div>
                
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='TLLC' name="TLLC" placeholder='TLLC' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='temperatura' name='temperatura' placeholder='Temperatura' type='text'>
                </div>
              </div>
            </div>
          </div>
                
              <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
              <div class='col-md-2'>        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='frc' name='frc' placeholder='FC' type='text'>
                </div>
              </div>
                
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='fr' name='fr' placeholder='FR' type='text'>
                </div>
              </div>
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='act'name='act' placeholder='Actitud' type='text'>
                </div>
              </div>
            </div>
          </div>    
      <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
            <div class='col-md-2'>        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='condi' name='condi' placeholder='Condición ' type='text'>
                </div>
              </div>
                
              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='membra'  name='membra'placeholder='Membrana Mucosas' type='text'>
                </div>
              </div>
                
                <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='hn'name='hn' placeholder='Hidratación' type='text'>
                </div>
              </div> 

              <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' for='id_adults'></label>
            <div class='col-md-8'>
            <div class='col-md-5'>        
                <div class='form-group internal'>
                  <input class='form-control col-md-8' id='patron' name='patron' placeholder='Patrón Respiratorio' type='text'>
                </div>
              </div>

              <div class='col-md-3 indent-small'>
                <div class='form-group internal'>
                  <input class='form-control' id='estado' name='estado'placeholder='Temperamento' type='text'>
                </div>
              </div>       
        </div>
          </div>
          </div>
          </div>
			                   
          </div>
                
                
<br>
            <br>
            <div>
            <br>
                <br>
            </div>
         
	                <div class="form-group">
							<div class="col-md-12 control">
								<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
									
			                   
								</div>
							</div>
						</div>   
						
             <div class="btn-group pull-right">
				<button type='button' class="btn btn-success" data-toggle="modal"  onclick="obtener_id()" data-target="#myModal"><span class="glyphicon glyphicon-plus" ></span> Nuevo Usuario</button>
			</div>
          	<div id="resultados">
                   <b>Examen Clinico</b>
                </div><!-- Carga los datos ajax -->
				<div class='outer_div'></div>
              <div class="form-group">
							<div class="col-md-12 control">
								
							</div>
						</div> 
            <br>
            <br>
             <div class="form-group">
			                        <div class="col-md-9 col-md-offset-5">
			                            <button type="submit" class="btn btn-danger">
			                                registrar consulta
			                            </button>

			                           
			                        </div>
			                    </div>
            	</form>
        </div>
      </div>
    </div>
         
</body>


<?php
				
				
			include("modal/registro_usuarios.php");
			include("modal/editar_usuarios.php");
				require 'modal/eliminar_usuario.php';

	

		  
			?>
<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="css/toastr.min.css" >
<script type="text/javascript">
	
    
    
     $(document).on('submit', '#loginform', function(event) {
		event.preventDefault();
		$.ajax({
			url: 'funcs/consulta.php',
			type: 'POST',
			dataType: 'JSON',
			data: $(this).serialize(),
			success:function(data){
	
				toastr.options.timeOut = 2000;
				// toastr.options.showMethod = 'fadeIn';
				// toastr.options.hideMethod = 'fadeOut';
				// toastr.options.positionClass = 'toast-top-center';
				
				if(data=="ok"){
					toastr.info("Consulta registrada con exito");
					setTimeout(function(){
						location.href="recetas.php";
					},2000);
				}
			
				else{
					toastr.error(data);
				}
			}
		})
	});

    
    
    
    
		$(".myselect").select2();
		
    	 	  function obtener_id(){
		
var hasta = $('#mod_id').val();
var desde=$('#masco').val();
			$("#nom").val(hasta);
	        $("#mas").val(desde);
	      
 }
       
   
    
    
    
    

  	
	  $( "#guardar_usuario" ).submit(function( event ) {
  $('#guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/nuevo_parametro.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('#guardar_datos').attr("disabled", false);
				load(1);
			
		  }
		 
	});
  event.preventDefault();
})
	
	  
    
   
    
    
  
	 	$(document).ready(function(){
			load(1);
		});

		function load(page){
            var hasta = $('#mod_id').val();	
		
			$("#loader").fadeIn('slow');
			$.ajax({
                type:'POST',
				url:'ajax/atencion_ajax.php',
                data:'hasta='+hasta,
				 beforeSend: function(objeto){
				 $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$('#loader').html('');
					
				}
			})
		}  
    
    
    
    
    
    
    
    
    
    
     
    
    
    
    
    
    
   
          
    
	</script>		
        
        
        