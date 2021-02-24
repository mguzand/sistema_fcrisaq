<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';


if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$rol = $_SESSION['id_rol'];

$actualizacion=getPer('permiso_actualizacion',$rol,'1');	
$eliminacion=getPer('permiso_eliminacion',$rol,'1');

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

//EJECUTAMOS LA CONSULTA DE BUSQUEDA





?>




<div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
                    
            <th>Nombres </th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>correo_electronico</th>
            <th>estado_usuario</th>
            <th>fecha_creacion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro="SELECT id_usuario, nombre_usuario, usuario, rol, correo_electronico, estado_usuario,tbl_usuario.fecha_creacion FROM tbl_usuario inner join tbl_roles on tbl_usuario.id_rol = tbl_roles.id_rol WHERE tbl_usuario.fecha_creacion BETWEEN '$desde' AND '$hasta' order by id_usuario";
		
		
		
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
		        $id_usuario=$row['id_usuario'];
						$nombre_usuario=$row['nombre_usuario'];
						$usuario=$row['usuario'];
            $id_rol=$row['rol'];
        ;
				    $correo=$row['correo_electronico'];
			      $estado_usuario=$row['estado_usuario'];
            $fecha=$row['fecha_creacion'];
			     
?>
		 <tr>
                
              <td><?php echo $nombre_usuario?></td>
              <td><?php echo $usuario ?></td>
               <td><?php echo $id_rol ?></td>
                 <td><?php echo $correo;?></td>
                 <td><?php echo $estado_usuario ?></td>
                  <td><?php echo $fecha;?></td>
                <td>
              
                 <?php
				if ($actualizacion==1 || idUsuario==1){?>   
                  
                  	<a href="#" class='btn btn-default' title='Editar usuario'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_usuario;?>","<?php echo $nombre;?>","<?php echo $usuario ?>","<?php echo $id_rol ?>","<?php echo $correo ?>","<?php echo $estado ?>")'  ><i class="glyphicon glyphicon-edit"></i></a> 
                  	<?php } ?>
                  	
                 	 <?php
				if ($eliminacion==1 || idUsuario==1){?>   
            <a href="#" class='btn btn-default' title='Eliminar usuario'  data-toggle="modal" data-target="#myModal4" onclick='obtener_id("<?php echo $id_usuario;?>")' ><i class="glyphicon glyphicon-remove"></i></a> 
             
               <?php } ?>
               
                </td>
              </tr>
          <?php
            
           }
          }else{ 
          
          ?>
          <tr>
            <td colspan="4">No se encontraron resultados</td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
     
      </div>
      <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
	<script src="js1/bootstrap-datepicker.js"></script>
	<script src="js1/locales/bootstrap-datepicker.es.js"></script>
	<script src="js1/jquery.dataTables.min.js"></script>
    
        <script src="js1/dataTables.bootstrap.js"></script>

        <script src="js1/validator.js"></script>

    <script src="js1/global.js"></script>
     