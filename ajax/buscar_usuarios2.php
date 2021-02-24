<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$idUsuario=$_SESSION['id_usuario'];
$rol = $_SESSION['id_rol'];
$permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." AND pa.objeto='USUARIOS'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
//$update=$res_per['permiso_actualizacion'];   
//$delete=$res_per['permiso_eliminacion'];
//var_dump($insertar);


$actualizacion=getPer('permiso_actualizacion',$rol,'1');	
$eliminacion=getPer('permiso_eliminacion',$rol,'1');
		
?>
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">
  
        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            
            <th>Nombre</th>
            <th>Usuario</th>
            <th>Rol</th>
            <th>Estado</th>
            <th>Correo</th>
            <th>Fecha Creacion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
			
			
			 $sql = "SELECT * FROM tbl_usuario inner join tbl_roles on tbl_usuario.id_rol = tbl_roles.id_rol order by id_usuario ASC";

			$query = mysqli_query($mysqli, $sql);
     
			
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_usuario  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows']; 
			
 
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			               $id_usuario=$row['id_usuario'];
			               $nombre=$row['nombre_usuario'];
						$usuario=$row['usuario'];
			            $id_rol=$row['id_rol'];
						$rol=$row['rol'];
				        $correo=$row['correo_electronico'];
			            $estado=$row['estado_usuario'];
			            $correo=$row['correo_electronico'];
                        $fecha=$row['fecha_creacion'];
                        $fecha= date('d/m/Y', strtotime($fecha));
          ?>
              
              <tr>
             
                <td><?php echo $nombre ?></td>
                <td><?php echo $usuario;?></td>
                <td><?php echo $rol;?></td>
                 <td><?php echo $estado;?></td>
                  <td><?php echo $correo;?></td>
                  <td><?php echo $fecha;?></td>
                <td>
              
               
                     <?php
				if ($actualizacion==1 || $idUsuario==2){?>   
                  
                  	<a href="#" class='btn btn-primary' title='Editar usuario'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_usuario;?>","<?php echo $nombre;?>","<?php echo $usuario ?>","<?php echo $id_rol ?>","<?php echo $correo ?>","<?php echo $estado ?>")'  ><i class="glyphicon glyphicon-edit"></i></a> 
                  	<?php } ?>
                  	
                 	 <?php
				if ($eliminacion==1 || $idUsuario==2){?>   
            <a href="#" class='btn btn-danger' title='Eliminar usuario'  data-toggle="modal" data-target="#myModal4" onclick='obtener_id("<?php echo $id_usuario;?>")' ><i class="glyphicon glyphicon-remove"></i></a> 
             
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
     