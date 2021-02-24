<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';
$idUsuario =$_SESSION['id_usuario'];
if(!isset($_SESSION['id_usuario'])){
    header ("Location: index.php");
}
$rol = $_SESSION['id_rol'];
$permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." 
AND pa.objeto='PANTALLAS'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
//$actualizacion=$res_per['permiso_actualizacion'];
//$eliminacion=$res_per['permiso_eliminacion'];
//var_dump($insertar);

$actualizacion=getPer('permiso_actualizacion',$rol,'9');	
$eliminacion=getPer('permiso_eliminacion',$rol,'9');
		
?>
       <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            <th>Id</th>
            <th>Pantalla</th>
            <th>Descripcion</th>
            <th>Fecha creacion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
				
			 $sql = "SELECT * FROM tbl_pantallas order by id_objeto ASC";

			$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_pantallas  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			            $id_pantalla=$row['id_objeto'];
			            $nombre=$row['objeto'];
						$descripcion=$row['descripcion'];
				        $fecha_creacion=$row['fecha_creacion'];
                        $fecha_creacion = date('d/m/Y', strtotime($fecha_creacion));
			           
          ?>
                      
              <tr>
              <td><?php echo $id_pantalla; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $fecha_creacion;?></td>

                <td>
               
                      <?php
				if ($actualizacion==1 || $idUsuario==2 ){?>
                      
                  <a href="#" class='btn btn-primary' title='Editar Pantalla'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id_pantalla;?>" , "<?php echo $nombre ;?>", "<?php echo $descripcion; ?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>
                      
                         <?php
				if ($eliminacion==1 || $idUsuario==2){?>
                  	 <a href="#" class='btn btn-danger' title='Eliminar Pantalla'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id_pantalla;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
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
     