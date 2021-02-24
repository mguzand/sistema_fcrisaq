<?php
session_start();

require 'funcs/conexion.php';
require_once 'funcs/funcs.php';





if(($_SESSION['id_usuario'])){
 	$idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
	$sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
	$result = $mysqli->query($sql);
	$row = $result->fetch_assoc();   

	$usuario=getPer('permiso_consulta',$rol,'1');
	//var_dump($usuario);
	$parametro=getPer('permiso_consulta',$rol,'2');
	$pantallas=getPer('permiso_consulta',$rol,'9');
	$roles=getPer('permiso_consulta',$rol,'14');
	$rolob=getPer('permiso_consulta',$rol,'15');
	$back=getPer('permiso_consulta',$rol,'16');
	$proveedores=getPer('permiso_consulta',$rol,'15');
	$producto=getPer('permiso_consulta',$rol,'15');
	$compra=getPer('permiso_consulta',$rol,'15');
	$inventario=getPer('permiso_consulta',$rol,'15');
	$retiro=getPer('permiso_consulta',$rol,'15');
	$ldiario=getPer('permiso_consulta',$rol,'14');
	$catalogo=getPer('permiso_consulta',$rol,'14');
	// $eresultado=getPer('permiso_consulta',$rol,'21'); 
	$bitacora=getPer('permiso_consulta',$rol,'14');
	// $ficha=getPer('permiso_consulta',$rol,'23');
	$eresultado=getPer('permiso_consulta',$rol,'14');  
	$bgeneral=getPer('permiso_consulta',$rol,'14');

}else{
	header ("Location: index.php");
}

//var_dump($per_up);

?>

<link rel="stylesheet" type="text/css" href="css/es1.css">

<div class="banner about-banner">
	<div class="header about-header">
		<div class="container">
			<div class="header-left">
				<div class="w3layouts-logo">
					<img src="imagen/crisaq2.png" alt="image" height="80" width="80">
				</div>
			</div>
			<div class="header-right"  >
								<div class="top-nav">
									<nav class="navbar ">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>
										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
											<ul class="nav navbar-nav">
						<li><a class="active" href="principal.php">Inicio</a></li>
<?php
$permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
							FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
							WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario);
?>
<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proveedores<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<?php if ($proveedores==1|| $rol==15){ ?>     
		<li><a class="hvr-bounce-to-bottom" href="proveedores.php">Registro de Proveedores</a></li>    
                                                         <?php } ?>
                        
	

	</ul>
	</li>	
											
	<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventario<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<?php if ($producto==1|| $rol==15){ ?>     
		<li><a class="hvr-bounce-to-bottom" href="producto.php">Producto</a></li>	  
                                                         <?php } ?>
	 <?php if ($compra==1|| $rol==15){ ?>     
	<li><a class="hvr-bounce-to-bottom" href="compra.php">Compras </a></li>
                                                         <?php } ?>													 
	 <?php if ($inventario==1|| $rol==15){ ?>     
	<li><a class="hvr-bounce-to-bottom" href="kinventario.php">Inventario</a></li>
                                                         <?php } ?>			
	<?php if ($retiro==1|| $rol==15){ ?>     
	
	<li><a class="hvr-bounce-to-bottom" href="kardex.php">Retiro</a></li>
                                                         <?php } ?>														 											 
		
	
	

	</ul>
	</li>
	<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalogo<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<?php if ($catalogo==1|| $rol==14){ ?>     
	
		<li><a class="hvr-bounce-to-bottom" href="catalogo.php">Crear Registro Nuevo</a></li>
                                                         <?php } ?>	

	</ul>
	</li>
	<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estados Financieros<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<?php if ($ldiario==1|| $rol==14){ ?>     
	
		<li><a class="hvr-bounce-to-bottom" href="libro_diario.php">Libro Diario</a></li>
													 <?php } ?>	

	<?php if ($bgeneral==1|| $rol==14){ ?>     
	
	<li><a class="hvr-bounce-to-bottom" href="balance_general.php">Balance General</a></li> 
													 <?php } ?>	

	<?php if ($eresultado==1|| $rol==14){ ?>     
	
	<li><a class="hvr-bounce-to-bottom" href="estado_resultado.php">Estado Resultado</a></li>
													 <?php } ?>	
	</ul>
	</li>
	<!-----<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Libro Diario<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<li><a class="hvr-bounce-to-bottom" href="libro_diario.php">Crear Nuevo Registro</a></li>
	</ul>
	</li>
	<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">B.General<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<li><a class="hvr-bounce-to-bottom" href="balance_general.php">Crear Registro Nuevo</a></li>

	</ul>
	</li> 

	<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">E.Resutaldo<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<li><a class="hvr-bounce-to-bottom" href="estado_resultado.php">Registros Contables</a></li>

	</ul>
	</li>--->
	<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seguridad<span class="caret"></span></a>
	<ul class="dropdown-menu">
	<?php if ($usuario==1 || $idUsuario==2){?>							
											<li><a class="hvr-bounce-to-bottom" href="usuarios.php">Usuarios</a></li>							 <?php } ?>
                                                        <?php if ($roles==1 || $idUsuario==2 ){?>
										    <li><a class="hvr-bounce-to-bottom" href="roles.php">Roles</a></li> 
                                                       <?php } ?> 
                                                          <?php if ($rolob==1 || $idUsuario==2 ){?>
                                            <li><a class="hvr-bounce-to-bottom" href="roles_objeto.php">Permisos</a></li>
                                                          <?php } ?> 
                                                         <?php if ($pantallas==1 || $idUsuario==2){?>
                                            <li><a class="hvr-bounce-to-bottom" href="pantallas.php">Pantallas</a></li>
                                                        	 <?php } ?> 
                                                          <?php if ($back==1 || $idUsuario==2){?>
                                            <li><a class="hvr-bounce-to-bottom" href="backup.php">Backup</a></li>
                                                         <?php } ?> 
                                                         <?php if ($parametro==1 || $idUsuario==2){?>
                                              <li><a class="hvr-bounce-to-bottom" href="parametros.php">Parametros</a></li>
                                                   	 <?php } ?>
                                                        <?php if ($bitacora==1 || $idUsuario==2){?>
                                              <li><a class="hvr-bounce-to-bottom" href="bitacora.php">Bitacora</a></li>
                                                     <?php } ?>
	</ul>
	</li>
	<!--<?php 
  //hasta aqui

 // while($result = $permisos->fetch_assoc()){
	//  $per_obje=$result['objeto'];
	  //switch ($per_obje) {
		//  case 'PROVEEDORES':?>
			  <li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proveedores<spa class="caret"></span></a>
			 <ul class="dropdown-menu">
							   
			 <li><a class="hvr-bounce-to-bottom" href="proveedores.php">Registro de Proveedores</a></li>
						  
			 </ul>
		     </li> <?php
		//	  break;
		 // case 'PRODUCTOS': ?>
			  <li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTOS<span class="caret"></span></a>
			  <ul class="dropdown-menu">
			  <li><a class="hvr-bounce-to-bottom" href="producto.php">PRODUCTO</a></li>
			  </ul>
		     </li> <?php
			 ///  case 'COMPRAS': ?>
				<li><a class="hvr-bounce-to-bottom" href="compra.php">COMPRAS</a></li>
				</ul>
				</li><?php 
		//		break;
		//	  break;
			//  case 'INVENTARIO': ?>
			   <li><a class="hvr-bounce-to-bottom" href="kinventario.php">INVENTARIO</a></li>
				</ul>
				</li><?php 
		//		break;
			  
			//  case 'KARDEX': ?>
			  <li><a class="hvr-bounce-to-bottom" href="kardex.php">RETTRO</a></li>
			  </ul>
			  </li><?php 
		//	  break;
			//  case 'CATALOGO':?>
				<li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalogo<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a class="hvr-bounce-to-bottom" href="catalogo.php">Crear Registro Nuevo</a></li>
	
				</ul>
				</li>
			<?php
		//	 break;
            //  case 'ESTADOS FINANCIEROS': ?>
	         <li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estados Financieros<span class="caret"></span></a>
              <ul class="dropdown-menu">
			  </ul>
			  </li>
			<?php
		//	 break;
            //  case 'LIBOR DIARIO': ?>
	          <li><a class="hvr-bounce-to-bottom" href="libro_diario.php">Libro Dirio</a></li>
			  </ul>	
			  </li>
			<?php
		//	 break;
           //   case 'BALANCE GENERAL': ?>
            <li><a class="hvr-bounce-to-bottom" href="balance_general.php">Balance General</a></li> 
			</ul>
			</li>
			<?php
		///	 break;
            //  case 'ESTADO RESULTADO': ?>
            <li><a class="hvr-bounce-to-bottom" href="estado_resultado.php">Estado Resultado</a></li>
	       </ul>
	        </li>											
	        <?php
        //     break;
			  //case 'SEGURIDAD': ?>
				  <li class=""><a href="" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Seguridad<span class="caret"></span></a>
				  <ul class="dropdown-menu">
				  <li><a class="hvr-bounce-to-bottom" href="usuarios.php">Usuarios</a></li>							
				  <li><a class="hvr-bounce-to-bottom" href="roles.php">Roles</a></li> 
				  <li><a class="hvr-bounce-to-bottom" href="roles_objeto.php">Permisos</a></li>
				  <li><a class="hvr-bounce-to-bottom" href="pantallas.php">Pantallas</a></li>
				  <li><a class="hvr-bounce-to-bottom" href="backup.php">Backup</a></li>
				  <li><a class="hvr-bounce-to-bottom" href="parametros.php">Parametros</a></li>
				  <li><a class="hvr-bounce-to-bottom" href="bitacora.php">Bitacora</a></li>
				  </ul>
				  </li>
				  <?php
			///	  break;
		//	  default:
				  # code...
			//	  break;
			//  }
		  //$per_ins=$result['permiso_insercion'];
				  //$per_con=$result['permiso_consulta'];
				  //$per_eli=$result['permiso_eliminacion'];
				  //$per_up=$result['permiso_actualizacion'];
	//	}
	 // }
	 // ?>	----->												
			             <li><a href='logout.php'>Salir</a></li>
											</ul>
											<div class="clearfix"> </div>
										</div>
												
											
									</nav>
								</div>

							</div>

		</div>
	</div>
