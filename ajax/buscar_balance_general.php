<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';
session_start();
$idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
    $permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." AND pa.objeto='BALANCE GENERAL'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
//$update=$res_per['permiso_actualizacion'];
//$delete=$res_per['permiso_eliminacion'];
//var_dump($insertar);
  
	$eliminar=getPer('permiso_eliminacion',$rol,'19');
	$actualizar=getPer('permiso_actualizacion',$rol,'19');

  $primer_dia = date('Y-m-d', mktime(0,0,0, date("m"), 1, date("Y")));
  $ultimo_dia = date('Y-m-d', mktime(0, 0, 0, date("m"),   30,   date("Y")));
?>
       <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
   <?php

$resultados='';
$activo_corriente = "";
        $activo_nocorriente = "";
        $pasivo_corriente = "";
        $pasivo_nocorriente = "";
        $patrimonio = "";		
			 $sql = "SELECT li.id_libro_diario,ca.tipo_cuenta,SUM(li.monto_operacion) as 
       monto, li.desglose_operacion, li.fecha_operacion, ca.descripcion FROM tbl_libro_diario as li 
       INNER JOIN tbl_catalogo_cuenta as ca ON li.id_libro_diario=ca.id_catalogo WHERE li.status='ACTI'
        GROUP by ca.tipo_cuenta
       ";
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
        while($row=$result->fetch_array()){
            
          $tipo = $row[5];
            //var_dump($tipo);
            switch ($tipo) {
                case 'ACTIVO CORRIENTE':
                  $activo_corriente.= '<tr><td>'.$row[1].'</td></td></td>';
                    $activo_corriente .= '<td>'.$row[2].'</td></tr>';
                    break;
                case 'ACTIVO NO CORRIENTE':
                    $activo_nocorriente .= '<tr><td>'.$row[1].'</td>';
                    $activo_nocorriente .= '<td>'.$row[2].'</td></tr>';
                    break;
                case 'PASIVO CORRIENTE':
                    $pasivo_corriente .= '<tr><td>'.$row[1].'</td>';
                    $pasivo_corriente .= '<td>'.$row[2].'</td></tr>';
                break;
                case 'PASIVO NO CORRIENTE':
                    $pasivo_nocorriente .= '<tr><td>'.$row[1].'</td>';
                    $pasivo_nocorriente .= '<td>'.$row[2].'</td></tr>';
                break;
                case 'PATRIMONIO':
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
          
                <td>--->
     <!---          
                     <?php
			if ($actualizar==1 || $idUsuario ==15){?>   
                      
                  <a href="#" class='btn btn-primary' title='Editar ldiario'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id; ?>" , "<?php echo $desglose; ?>", "<?php echo $monto; ?>", "<?php echo $fecha_creacion; ?>", "<?php echo $tipo; ?>","<?php echo $cuenta; ?>")' ><i class="glyphicon glyphicon-edit"></i></a>
                  <?php } ?>
                       
                        <?php
			if ($eliminar==1 || $idUsuario ==15){?>  
                      
                  	 <a href="#" class='btn btn-danger' title='Eliminar ldiario'  data-toggle="modal" data-target="#myModal4" onclick='capturar("<?php echo $id;?>" )' ><i class="glyphicon glyphicon-remove"></i></a> 
                  
               <?php } ?>
                </td>
              </tr>--->
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
     