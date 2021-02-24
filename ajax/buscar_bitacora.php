<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';
session_start();
$idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];



?>
         <link href="css1/bootstrap.min.css" rel="stylesheet">
        <link href="css1/datepicker3.css" rel="stylesheet">
        <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
        <table class="table" id="tableListar">
          <thead>
            <tr class="success">
              
              <th>ID Bitacora</th>
              <th>Usuario</th>
              <th>Pantalla Ingresada</th>
              <th>Descripcion</th>          
              <th>Fecha</th>
            

            </tr>
          </thead>
          </body>
    <?php
				
  			 $sql = "SELECT  a.id_bitacora, a.id_usuario, a.objeto, a.accion, a.descripcion, a.fecha,b.id_usuario, b.usuario FROM tbl_bitacoras a INNER join tbl_usuario b on  a.id_usuario = b.id_usuario order by id_bitacora desc";

  			$query = mysqli_query($mysqli, $sql);
  			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_bitacoras  ");
  		  $row1= mysqli_fetch_array($count_query);
  			
  			$numrows = $row1['numrows'];
			
        if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){ 
            $id_bit=$row['id_bitacora'];
            $id_us=$row['id_usuario'];
            $usuario=$row['usuario'];
            $pantalla= $row['objeto'];
            $accion_realizada=$row['accion'];

            $fech=$row['fecha'];
           

  
    ?>
                      
              <tr>
              
                <td><?php echo $id_bit; ?></td>
                <td><?php echo $usuario;?></td>
                <td><?php echo $pantalla;?></td>
                <td><?php echo $accion_realizada;?></td>
                <td><?php echo $fech;?></td>
               

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
     