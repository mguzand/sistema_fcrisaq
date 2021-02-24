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
            
            <th>ID Prov.</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>IdentiFicacion</th>
            <th>Fecha Creacion</th>
         
          </tr>
        </thead>
        <tbody>
            <?php

	$registro = "SELECT * FROM tbl_proveedor inner join tbl_departamento on 
  tbl_proveedor.id_departamento = tbl_departamento.id_departamento 
  where Fecha_Creacion BETWEEN '".$desde."' AND '".$hasta."' order by ID_Proveedor ";
	$query = mysqli_query($mysqli, $registro); 
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
                  $id=$row['ID_Proveedor'];
                  $nombre=$row['Nombre'];
                  $nombre=$row['Apellido'];
            $dire=$row['Departamento'];
            $Tel=$row['Telefono'];
            $ide=$row['Num_Iden'];
            $fecha_creacion=$row['Fecha_Creacion'];
				        
		
?>
		 <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $nombre;?></td>
                <td><?php echo $dire;?></td>
                <td><?php echo $Tel;?></td>
                <td><?php echo $ide;?></td>
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
    
     