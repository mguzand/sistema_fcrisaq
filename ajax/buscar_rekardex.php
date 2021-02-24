<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';
session_start();
$idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
    $permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." AND pa.objeto='INVENTARIO'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
$update=$res_per['permiso_actualizacion'];
$delete=$res_per['permiso_eliminacion'];
//var_dump($insertar);
  
	$eliminar=getPer('permiso_eliminacion',$rol,'15');
	$actualizar=getPer('permiso_actualizacion',$rol,'15');


?>
         <link href="css1/bootstrap.min.css" rel="stylesheet">
        <link href="css1/datepicker3.css" rel="stylesheet">
        <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
        <table class="table" id="tableListar">
          <thead>
            <tr class="success">
              
              <th>ID </th>
              <th>Nombre Producto</th>
              <th>Precio</th>
              <th>Existencia</th>
              <th>Fecha Creacion</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
    <?php
				
  			 $sql = "SELECT a.Id_equipo, a.fecha_creacion, a.creado_por,b.codigo_producto, b.nombre ,b.precio, c.cantidad ,
         concat_ws(' ',pr.Nombre,pr.Apellido) as proveedor FROM tbl_inventario a INNER join tbl_producto b 
         on a.id_producto = b.id_producto inner join tbl_proveedor pr on a.ID_Proveedor= pr.ID_Proveedor 
         inner join tbl_compra c on a.id_compra= a.id_compra ORDER BY a.Id_equipo ASC";




  			$query = mysqli_query($mysqli, $sql);
  			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_inventario  ");
  		  $row1= mysqli_fetch_array($count_query);
  			
  			$numrows = $row1['numrows'];
			
        if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){ 
          $id=$row['Id_equipo'];
          $codigo=$row['codigo_producto'];
          $equipo=$row['nombre'];
          $precio=$row['precio'];
          $proveedor= $row['proveedor'];
          $existencia=$row['cantidad'];
          $usuario=$row['creado_por'];
        $fecha_creacion=$row['fecha_creacion'];
          
    ?>
                      
              <tr>
              
              <td><?php echo $id;?></td>
                <td><?php echo $equipo;?></td>
                <td><?php echo $precio;?></td>
                <td><?php echo $existencia;?></td>
                <td><?php echo $fecha_creacion;?></td>

                <td>
               
                     <?php
			if ($update==1 || $idUsuario ==15){?>  
                      
                  <a href="#" class='btn btn-primary' title='Editar Inventario'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id;?>" , "<?php echo $equipo ;?>","<?php echo $precio;?>","<?php echo $existencia;?>","<?php echo $existencia;?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>
                       
                        <?php
			if ($delete==1 || $idUsuario ==15){?>  
                      
                  	 <a href="#" class='btn btn-danger' title='Eliminar Inventario'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
                  
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
     