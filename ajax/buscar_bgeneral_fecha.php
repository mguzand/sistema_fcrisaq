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


$resultados='';
$activo_corriente = "";
        $activo_nocorriente = "";
        $pasivo_corriente = "";
        $pasivo_nocorriente = "";
        $patrimonio = "";		
			 $sql = "SELECT li.id_libro_diario,ca.tipo_cuenta,SUM(li.monto_operacion) as monto,
       li.desglose_operacion, ca.codigo_cuenta, ca.cuenta_padre FROM tbl_libro_diario as li,
       tbl_catalogo_cuenta as ca WHERE li.id_libro_diario = ca.id_catalogo
       and li.fecha_operacion BETWEEN '".$desde."' AND '".$hasta."' AND status='ACTI'
       UNION
       SELECT li.id_libro_diario, ca.tipo_cuenta,SUM(li.monto_operacion) as monto,
       li.desglose_operacion, ca.codigo_cuenta, ca.cuenta_padre FROM tbl_libro_diario as li,
       tbl_catalogo_cuenta as ca WHERE li.id_libro_diario = ca.id_catalogo
       and li.fecha_operacion BETWEEN '".$desde."' AND '".$hasta."' AND status='ACTI'
        GROUP By ca.id_catalogo";


      $result = $mysqli->query($sql);
      //var_dump($result);
			//$query = mysqli_query($mysqli, $sql);
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_libro_diario  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
          if ($numrows>0){
      
			//convierte la consulta mysql en una variable de tipo array (como si fuera una tabla)
      $resultados .='
        <div id="lis" name="lis">
        <table cellpadding="8" cellspacing="10" border=2>
        <thead><tr  bgcolor="#FEC574">
            <th>Cuentas</th>
            <th> Saldos </th>
            

        </tr></thead><tbody>';
        //var_dump($result);
        while($row=$result->fetch_array()){
            $tipo = substr($row[4],0,2);
            //var_dump($tipo);
            switch ($tipo) {
                case '11':
                  $activo_corriente.= '<tr><td>'.$row[1].'</td></td></td>';
                    $activo_corriente .= '<td>'.$row[2].'</td></tr>';
                    break;
                case '12':
                    $activo_nocorriente .= '<tr><td>'.$row[1].'</td>';
                    $activo_nocorriente .= '<td>'.$row[2].'</td></tr>';
                    break;
                case '21':
                    $pasivo_corriente .= '<tr><td>'.$row[1].'</td>';
                    $pasivo_corriente .= '<td>'.$row[2].'</td></tr>';
                break;
                case '22':
                    $pasivo_nocorriente .= '<tr><td>'.$row[1].'</td>';
                    $pasivo_nocorriente .= '<td>'.$row[2].'</td></tr>';
                break;
                case '31':
                    $patrimonio .= '<tr><td>'.$row[1].'</td>';
                    $patrimonio .= '<td>'.$row[2].'</td></tr>';
                break;
            }
            
        }
        
        $resultados .= 
        '<tr><th>ACTIVO CORRIENTE</td></th>';
        $resultados .= $activo_corriente;
        $resultados .= 
        '<tr><th>ACTIVO NO CORRIENTE </th></tr>';
        $resultados .= $activo_nocorriente;
        $resultados .= '<tr><th>PASIVO CORRIENTE </th></tr>';
        $resultados .= $pasivo_corriente;
        $resultados .= '<tr><th>PASIVO NO CORRIENTE</th></tr>';
        $resultados .= $pasivo_nocorriente;
         $resultados .= '<tr><th>PATRIMONIO</th></tr>';
        $resultados .= $patrimonio;
        $resultados .='</tbody></table>';  
      
        echo $resultados;
      
      
      while ($row= $result->fetch_array()){
                
          //tomamos cada fila en el while y los llamamos por columnas
          //$row (variable)
          //[0] el numero de la columna
         // $fecha=$row['fecha_creacion'];
          $cuenta=$row[1];
              $monto=$row[2];
        

          //var_dump($tipo);
         //filtramos el tipo de transaccion para poder crear las dos columnas en html
        //  $desglose=$row[3];
      //    $codigo=$row[5];
        //  $fecha_creacion=
//          $usuario=$row[4];
//          $fecha_creacion=$row[5];
          
          ?>
           <!--           
              <tr>
              
                <td><?php echo $cuenta;?></td>
                <td><?php echo $monto;?></td>
          





?>

<div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
            
           
?>
		 <tr>
                
                 
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
    
     