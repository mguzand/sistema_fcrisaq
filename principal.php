 

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistema Fundacion CRISAQ</title>

<style>
	
	body{
	background-image: url(imagen/cris.png);
	background-position: center center;
	background-repeat: no-repeat;
	background-size: 105% 95%;
	background-attachment: fixed;
	font-family: "Ubuntu", helvetica;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Cat Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->

<link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
<link rel="stylesheet" href="css/toastr.min.css" >
<!--// bootstrap-css -->
<!-- css -->

<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->

<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	
				<?php include("menu1.php"); ?>
			



<div id="modal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title">Preguntas a Responder</h4>
      </div>
      <div class="modal-body" >
    		<div class="panel panel-info">
    			<div class="panel-heading">
    				Elija la Pregunta  y Luego Registre su Respuesta
    			</div>
    			<div class="panel-body">
    				<form id="formpreguntas" class="form form-horizontal" >
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Preguntas</label>

                            <div class="col-md-8">
                                <select id="pregunta" class="form-control" name="pregunta" style="height: 45px;">
                                	
                                </select>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Respuesta</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" name="respuesta" id="respuesta" value="" placeholder="Respuesta para la pregunta" style="height: 40px;">
                            </div>
                        </div>
						<input type="submit" class="btn btn-primary" name="guardar" value="Guardar" />
    				</form>
    			</div>
    		</div>
      </div>
    </div>
  </div>
</div>


<script src="js/toastr.min.js" ></script>

<script src="js/responsiveslides.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
var totalpre=0;
var cont = 0;

$(document).ready(function() {				
	$().UItoTop({ easingType: 'easeOutQuart' });
	

	$.ajax({
     async: false,
     type: 'GET',
     url: 'funcs/preguntas.php',
     data:{'option': 'getTotal'},
     success: function(data) {
        totalpre = parseInt(data);
	    $.ajax({
		     async: false,
		     type: 'GET',
		     url: 'funcs/preguntas.php',
		     data:{'option': 'countrespond'},
		     success: function(data) {
		        cont = parseInt(data);
				if(cont< totalpre){
					console.log("Bien");
					$.get('funcs/preguntas.php',{'option':'listar'}, function(data) {
						$.each(data, function(index, val) {
							$('#pregunta').append('<option value="'+val.id_pregunta+'">' +  val.pregunta+'</option>');
						});
						
					},'json');

					$('#modal').modal({
					  backdrop: 'static',
					  keyboard: false
					});
				}
		     }
		});

     }
	});

	$(document).on('submit', '#formpreguntas', function(event) {
		var respuesta = $('#respuesta').val().trim();
		if(respuesta.length>0){
				$.ajax({
				url: 'funcs/preguntas.php',
				type: 'POST',
				dataType: 'JSON',
				data: { 'option' : 'guardar' ,  'data':$(this).serialize() },
				success:function(data){
					if(data=="ok"){
						toastr.info("Pregunta Guardada Correctamente .");
						$('#respuesta').val('');
						$("#pregunta option").remove();
						cont++;
						if(cont < totalpre){
							$.get('funcs/preguntas.php',{'option':'listar'}, function(data) {
								$.each(data, function(index, val) {
									
									$('#pregunta').append('<option value="'+val.id_pregunta+'">' +  val.pregunta+'</option>');
								});
								
							},'json');
						}
						else{
							$('#modal').modal('hide');
							$.ajax({
							url: 'funcs/preguntas.php',
							type: 'POST',
							dataType: 'JSON',
							data : {'option' :'activateUser'},
								success:function(data){
									if(data!= "ok")
										toastr.error("Ocurrio un error al Actualizar el Estado");
								}
							})
						}
					}
					else{
						toastr.warning("No se Pudo guardar la Repuesta");
					}
				}
			})
		}
		else{
			toastr.warning("Por favor ingrese una respuesta");
		}
		event.preventDefault();
	});
});
</script>
</body>	
</html>