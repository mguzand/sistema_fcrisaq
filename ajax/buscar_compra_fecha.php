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
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Proveedor</th>
            <th>Fecha Creacion</th>

           
          </tr>
        </thead>
        <tbody>
            <?php
           

	$registro = "SELECT a.id_compra,a.cantidad,a.precio,a.nombre,a.fecha_creacion,
   concat_ws(' ',pr.Nombre,pr.Apellido) as proveedor 
  FROM tbl_compra a inner join tbl_proveedor pr on a.ID_Proveedor= pr.ID_Proveedor where a.fecha_creacion
   BETWEEN '".$desde."' AND '".$hasta."' order by id_compra ASC";
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
                  $id=$row['id_compra'];
                  $nombre=$row['nombre'];
            $precio=$row['precio'];
            $cantidad=$row['cantidad'];
            $provee=$row['proveedor'];
            $fcreacion=$row['fecha_creacion'];
     
				        
		
?>
		 <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $precio;?></td>
                <td><?php echo $cantidad;?></td>
                <td><?php echo $provee;?></td>
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
    
     