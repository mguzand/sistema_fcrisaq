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
            
            <th>ID LD</th>
            <th>Cuenta Debitada</th>
            <th>Cuenta Cargada</th>
            <th>Monto</th>
            <th>Descripcion</th>
            <th>Fecha Creacion</th>
          </tr>
        </thead>
        <tbody>
            <?php
	
	$registro = "SELECT li.id_libro_diario,ca.tipo_cuenta as cargada,ca2.tipo_cuenta 
  as debitada,li.monto_operacion, li.desglose_operacion, li.fecha_operacion 
  FROM tbl_libro_diario as li, tbl_catalogo_cuenta as ca, tbl_catalogo_cuenta as ca2
   WHERE li.id_cuenta_cargada=ca.id_catalogo AND li.id_cuenta_debitada=ca2.id_catalogo 
   AND li.fecha_operacion 
   BETWEEN '".$desde."' AND '".$hasta."' AND status='ACTI' ORDER BY li.fecha_operacion ASC";







	
	$query = mysqli_query($mysqli, $registro);
if(mysqli_num_rows($query)>0){
	while($row = mysqli_fetch_array($query)){
    $id=$row[0];
    $cuentac=$row[1];
    $cuentad=$row[2];
    $monto=$row[3];
    $desglose=$row[4];
    //$usuario=$row[6];
    $fecha_creacion=$row[5];	
  	
?>
		 <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $cuentac;?></td>
                <td><?php echo $cuentad;?></td>
                <td><?php echo $desglose;?></td>
                <td><?php echo $monto;?></td>
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
    
     