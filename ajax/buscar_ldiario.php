<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';
session_start();
$idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
    $permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." AND pa.objeto='LIBRO DIARIO'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion']; 
//$update=$res_per['permiso_actualizacion'];
//$delete=$res_per['permiso_eliminacion'];
//var_dump($insertar);
  
	$eliminar=getPer('permiso_eliminacion',$rol,'14');
	$actualizar=getPer('permiso_actualizacion',$rol,'14');


?>
       <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            
            <th>ID LD</th>
            <th>Descripcion Transaccion</th>
            <th>Cuenta Cargada</th>
            <th>Monto Cargado</th>
            <th>Cuenta Acreditada</th>
            <th>Monto Acreditado</th>
            <th>Fecha Creacion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php


//$monto=0;

       $sql="SELECT li.id_libro_diario,ca.tipo_cuenta as cargada,ca2.tipo_cuenta as debitada,li.monto_operacion, 
       li.desglose_operacion, li.fecha_operacion 
       FROM tbl_libro_diario as li
       INNER JOIN tbl_catalogo_cuenta as ca
       ON li.id_cuenta_cargada=ca.id_catalogo
       INNER JOIN tbl_catalogo_cuenta as ca2 
       ON li.id_cuenta_debitada=ca2.id_catalogo
       WHERE li.status='ACTI'
       ORDER BY li.fecha_operacion ASC";
      $result = $mysqli->query($sql);
      //var_dump($result);
			//$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_libro_diario  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){


			//convierte la consulta mysql en una variable de tipo array (como si fuera una tabla)
        while ($row= $result->fetch_array()){
          //tomamos cada fila en el while y los llamamos por columnas
          //$row (variable)
          //[0] el numero de la columna

        
          $id=$row['id_libro_diario'];
          $cuentac=$row['cargada'];
          $cuentad=$row['debitada'];
          $monto=$row['monto_operacion'];
          $desglose=$row['desglose_operacion'];
          //$usuario=$row[6];
          $fecha_creacion=$row['fecha_operacion'];

    
          
          ?>
                      
              <tr>
              
                <td><?php echo $id; ?></td>
                <td><?php echo $desglose;?></td>
                <td><?php echo $cuentad;?></td>
                <td><?php echo $monto;?></td>
                <td><?php echo $cuentac;?></td>
                <td><?php echo $monto;?></td>
                <td><?php echo $fecha_creacion;?></td>
                <td>
               
              <!---       <?php
			if ($actualizar==1 || $rol ==14){?>   
                      
                  <a href="#" class='btn btn-primary' title='Editar ldiario'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id; ?>" , "<?php echo $desglose; ?>", "<?php echo $cuentad; ?>", "<?php echo $monto; ?>", "<?php echo $cuentac; ?>","<?php echo $fecha_creacion; ?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>--->
                       
                        <?php
			if ($eliminar==1 || $rol ==14){?>  
                      
                  	 <a href="#" class='btn btn-danger' title='Eliminar ldiario'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id;?>") ' ><i class="glyphicon glyphicon-remove"></i></a> 
                  
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
     