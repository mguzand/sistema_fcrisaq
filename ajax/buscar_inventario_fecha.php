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

//EJECUTAMOS LA CONSULTA DE BUSQUEDA





?>




<div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            
            <th>ID Inventario</th>
          
            <th>Nombre Equipo</th>
            <th>Precio</th>
            <th>Cantidad</th>
            
            <th>Fecha Creacion</th>
           
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro = "SELECT Id_equipo,nombre_equipo,cantidad,precio,fecha_creacion
   FROM tbl_inventario  where fecha_creacion
   BETWEEN '".$desde."' AND '".$hasta."' order by Id_equipo ASC";
	
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
                  $id=$row['Id_equipo'];
                //  $codigo=$row['codigo'];
            $equipo=$row['nombre_equipo'];
            $precio=$row['precio'];
            $cant=$row['cantidad'];
          //  $proveedor=$row['proveedor'];

                $fecha_creacion=$row['fecha_creacion'];
				        
		
?>
		 <tr>
                <td><?php echo $id; ?></td>
              
                <td><?php echo $equipo;?></td>
                <td><?php echo $precio;?></td>
                <td><?php echo $cant;?></td>
               
                <td><?php echo $fecha_creacion;?></td>
                 
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
    
     