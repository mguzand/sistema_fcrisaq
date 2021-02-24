<?php

include('../funcs/conexion.php');


$desde = $_POST['desde'];
$hasta = $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

?>




<div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            
            <th>ID</th>
            <th>Usuario</th>
            <th>Pantalla Ingresada</th>
            <th>Accion</th>
          
            <th>Fecha Creacion</th>

           
          </tr>
        </thead>
        <tbody>
            <?php
           

    $registro = "SELECT  a.id_bitacora, a.id_usuario, a.objeto, a.accion,
     a.descripcion, a.fecha,b.id_usuario, b.usuario FROM tbl_bitacoras a 
    INNER join tbl_usuario b on  a.id_usuario = b.id_usuario where a.fecha
   BETWEEN '".$desde."' AND '".$hasta."'  order by id_bitacora desc ";
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
                  $id=$row['id_bitacora'];
                  $nombre=$row['usuario'];
            $precio=$row['objeto'];
            $cantidad=$row['accion'];
           
            $fcreacion=$row['fecha'];
     
				        
		
?>
		 <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $precio;?></td>
                <td><?php echo $cantidad;?></td>
             
                <td><?php echo $fcreacion;?></td>
              



                 
                <td>
               
               
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
    
     