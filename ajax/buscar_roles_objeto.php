<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';

?>
       <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
          
            <th>Rol</th>
            <th>Objeto</th>
             <th>Consulta</th>
        <th>Inserción</th>
        <th>Eliminación</th>
        <th>Actualización</th>
         <th>opcionas</th>
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT tbl_roles_objeto.id_rol,tbl_roles_objeto.id_permiso ,tbl_roles.rol as nombre_rol, tbl_pantallas.id_objeto, tbl_pantallas.objeto as nombre_objeto, tbl_roles_objeto.permiso_consulta, tbl_roles_objeto.permiso_insercion,tbl_roles_objeto.permiso_eliminacion,tbl_roles_objeto.permiso_actualizacion FROM tbl_pantallas INNER JOIN tbl_roles  INNER JOIN tbl_roles_objeto  ON tbl_roles_objeto.id_rol = tbl_roles.id_rol AND tbl_roles_objeto.id_objeto = tbl_pantallas.id_objeto ORDER BY tbl_roles_objeto.id_objeto ";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_roles_objeto  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			       $id= $row["id_permiso"];  
$id_rol= $row["nombre_rol"];   
$id_objeto = $row["nombre_objeto"];   
$permiso_consulta = $row['permiso_consulta'];
$permiso_insercion = $row['permiso_insercion'];
$permiso_eliminacion = $row['permiso_eliminacion'];
$permiso_actualizacion = $row['permiso_actualizacion'];
			           
          ?>
                      
              <tr>
                   
              <td><?php echo $id_rol; ?></td>
                <td><?php echo $id_objeto; ?></td>
                <td><?php echo $permiso_consulta;?></td>
                <td><?php echo $permiso_insercion;?></td>
            <td><?php echo $permiso_eliminacion;?></td>
    <td><?php echo $permiso_actualizacion;?></td>

                <td>
               
                   
                      
                     <a href="#" class='btn btn-primary' title='Editar Permiso'  data-toggle="modal" data-target="#myModal2" onclick='capturar("<?php echo $row['id_permiso'];?>","<?php echo $row['permiso_consulta'];?>","<?php echo $row['permiso_insercion'];?>","<?php echo $row['permiso_actualizacion'];?>","<?php echo $row['permiso_eliminacion'];?>" )' ><i class="glyphicon glyphicon-edit"></i></a>
               
               
               
             
                  
                  	 <a href="#" class='btn btn-danger' title='Eliminar Permiso'    data-toggle="modal" data-target="#myModal4" onclick='capturar_eli("<?php echo $row['id_permiso'];?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
            
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
     