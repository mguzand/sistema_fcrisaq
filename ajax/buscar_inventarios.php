<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';
session_start();
$idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
    $permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario 
=".$idUsuario." AND pa.objeto='INVENTARIO'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
//$update=$res_per['permiso_actualizacion'];
//$delete=$res_per['permiso_eliminacion'];
//var_dump($insertar);
  
	$eliminar=getPer('permiso_eliminacion',$rol,'18');
	$actualizar=getPer('permiso_actualizacion',$rol,'18');


?>
         <link href="css1/bootstrap.min.css" rel="stylesheet">
        <link href="css1/datepicker3.css" rel="stylesheet">
        <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
        <table class="table" id="tableListar">
          <thead>
            <tr class="success">
              
              <th>ID Inv</th>
              <th>Nombre Producto</th>
              <th>Precio</th>
              <th>Existencia</th>
              <th>Fecha Creacion</th>
              <th>Creado Por</th>
              <th></th>
              
            </tr>
          </thead>
          <tbody>
    <?php

//$sql='SELECT * FROM `tbl_inventario` order by Id_equipo';

							 $sql = "SELECT * from tbl_inventario  ORDER BY Id_equipo ASC";


  			// $sql = "SELECT inv.Id_equipo,inv.nombre_equipo,inv.precio,inv.cantidad,c.id_compra, c.cantidad, b.id_producto, b.nombre, b.precio, 
        // concat_ws(' ',pr.Nombre,pr.Apellido) as proveedor
         //from tbl_inventario inv INNER JOIN
         //tbl_producto b on inv.Id_equipo = b.id_producto INNER join tbl_compra c on inv.id_compra= c.id_compra
          //INNER JOIN tbl_proveedor pr on inv.id_proveedor= pr.ID_Proveedor order by inv.Id_equipo";




  			$query = mysqli_query($mysqli, $sql);
  			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_inventario  ");
  		  $row1= mysqli_fetch_array($count_query);
  			
  			$numrows = $row1['numrows'];
			
        if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){ 
          $id=$row['Id_equipo'];
          $equipo=$row['nombre_equipo'];
          $precio=$row['precio'];
       // $proveedor= $row['proveedor'];
          $existencia=$row['cantidad'];
       $fecha_creacion=$row['fecha_creacion'];
       $creado=$row['creado_por'];
       
          
    ?>
                      
              <tr>
              
              <td><?php echo $id;?></td>
                <td><?php echo $equipo;?></td>
                <td><?php echo $precio;?></td>
                <td><?php echo $existencia;?></td>
                <td><?php echo $fecha_creacion;?></td>
                <td><?php echo $creado;?></td>
                
              

                <td>
       <!----        
                     <?php
			if ($update==1 || $idUsuario ==30){?>  
                      
                  <a href="#" class='btn btn-primary' title='Editar Inventario'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id;?>" , "<?php echo $codigo ;?>","<?php echo $equipo;?>","<?php echo $existencia;?>","<?php echo $proveedor;?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>
                       
                        <?php
			if ($delete==1 || $idUsuario ==30){?>  
                      
                  	 <a href="#" class='btn btn-danger' title='Eliminar Inventario'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> ---->
                  
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
     