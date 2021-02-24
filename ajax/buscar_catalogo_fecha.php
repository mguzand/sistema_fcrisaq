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
            
            <th>ID Catalogo</th>
          
            <th>Tipo Cuenta</th>
            <th>Codigo Cuenta</th>
            <th>Descripcion</th>
            <th>Fecha Creacion</th>
           
          </tr>
        </thead>
        <tbody>
            <?php
	
  $registro = "SELECT id_catalogo, tipo_cuenta, codigo_cuenta, cuenta_padre, 
  descripcion, fecha_creacion, estatus
  FROM tbl_catalogo_cuenta where fecha_creacion
  BETWEEN '".$desde."' AND '".$hasta."' order by id_catalogo ASC ";
  
	
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
		
		
                  $id=$row['id_catalogo'];
                  $padre=$row['cuenta_padre'];
            $tipo=$row['tipo_cuenta'];
            $codigo=$row['codigo_cuenta'];
            $descrip=$row['descripcion'];
                $fecha_creacion=$row['fecha_creacion'];
				        
		
?>
		 <tr>
                <td><?php echo $id; ?></td>
         
                <td><?php echo $tipo;?></td>
                <td><?php echo $codigo;?></td>
                <td><?php echo $descrip;?></td>
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
    
     