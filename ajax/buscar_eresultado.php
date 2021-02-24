<?php

require '../funcs/conexion.php';
require '../funcs/funcs.php';
session_start();
$idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
    $permisos = $mysqli->query("SELECT ro.id_rol, ro.id_objeto, pa.objeto, ro.permiso_consulta, 
ro.permiso_insercion, ro.permiso_eliminacion, ro.permiso_actualizacion 
FROM tbl_roles_objeto as ro, tbl_usuario as us, tbl_pantallas as pa 
WHERE us.id_rol = ro.id_rol AND pa.id_objeto = ro.id_objeto AND us.id_usuario =".$idUsuario." AND pa.objeto='ESTADO DE RESULTADO'");
//var_dump($permisos);
$res_per = $permisos->fetch_assoc();
//$insert=$res_per['permiso_insercion'];
//$update=$res_per['permiso_actualizacion'];
//$delete=$res_per['permiso_eliminacion'];
//var_dump($insertar);
  
//	$eliminar=getPer('permiso_eliminacion',$rol,'24');
//	$actualizar=getPer('permiso_actualizacion',$rol,'24');

    $acciones = $_POST['accion'];
    $fecha = $_POST['fecha'];
    $month = substr($fecha, 0,2);
    $year = substr($fecha, 3,5);
    $day = date("d", mktime(0,0,0, $month+1, 0, $year));
    $primer_dia = date('Y-m-d', mktime(0,0,0, $month, 1, $year));
    $ultimo_dia = date('Y-m-d', mktime(0,0,0, $month, $day, $year));
    
    $Inventario_inicial=0;
    $compra=0;
    $Fletes_Compra=0;
    $Devoluciones_Compras=0;
    $Descuento_Compras=0;
    $Inventario_Disponible=0;
    $Inventario_Final=0;
    $Impuesto_Renta=0;
    $Utilidad_Netas=0;
    $servicios=0;
    $ingresos=0;
    $compras_netas = 0; 
    $utilidad_bruta = 0;
    $compras_totales=0;

    switch($acciones){
        case 'cargar':
            $result = $mysqli->query("SELECT li.id_libro_diario, ca.descripcion,ca.tipo_cuenta, li.fecha_operacion, 
            li.monto_operacion 
            FROM tbl_libro_diario as li
            INNER join tbl_catalogo_cuenta as ca 
            on ca.id_catalogo = li.id_cuenta_cargada 
            WHERE li.fecha_operacion 
            BETWEEN '$primer_dia' AND '$ultimo_dia'
 UNION ALL
 SELECT li.id_libro_diario, ca.descripcion, ca.tipo_cuenta, li.fecha_operacion, 
            li.monto_operacion 
            FROM tbl_libro_diario as li
            INNER join tbl_catalogo_cuenta as ca 
            on ca.id_catalogo = li.id_cuenta_debitada
            WHERE li.fecha_operacion 
            BETWEEN '$primer_dia' AND '$ultimo_dia'");
           
            $titulo = 'Estado de Rusultado del '.$primer_dia.' Al '.$ultimo_dia; 
            
            while($row=$result->fetch_array()){
                $variable = $row[2];
                switch ($variable) {
                    case 'INVENTARIO':
                        $Inventario_inicial=$Inventario_inicial+$row[4];
                        break; 
                    case 'COMPRAS':
                        $compra=$compra+$row[4];
                    break;
                    case 'FLETES SOBRE COMPRA':
                        $Fletes_Compra=$Fletes_Compra+$row[4];
                    break;
                    case 'DEVOLUCION SOBRE COMPRAS':
                        $Devoluciones_Compras=$Devoluciones_Compras+$row[4];
                    break;
                    case 'DESCUENTOS SOBRE COMPRAS':
                        $Descuento_Compras=$Descuento_Compras+$row[4];
                    break;
                    case 'GASTO DE MANTENIMENTO':
                    $servicios=$servicios+$row[4];
                    break;
                    case 'GASTOS DE REPARACION':
                        $servicios=$servicios+$row[4];
                    break;
                    case 'SERVICIOS PUBLICOS':
                        $servicios=$servicios+$row[4];
                    break;
                    case 'SUELDOS Y SALARIOS':
                        $servicios=$servicios+$row[4]; 
                    break;
                    case 'DONACIONES':
                        $servicios=$servicios+$row[4];
                    break;
                    case 'VIGILANCIA':
                        $servicios=$servicios+$row[4];
                    break;
                    case 'GASTOS DE ASEO':
                        $servicios=$servicios+$row[4];
                    break;
                    case 'OTROS GASTOS':
                        $servicios=$servicios+$row[4];
                    break;
                    case 'GASTOS LEGALES':
                        $servicios=$servicios+$row[4];
                    break;
                    case 'DONACIONES':
                        $ingresos=$ingresos+$row[4];
                    break;
                    case 'OTROS INGRESOS':
                        $ingresos=$ingresos+$row[4];
                    break;
                    
                }                
            }
            $compras_totales = $compra + $Fletes_Compra;
            $compras_netas= $compras_totales - $Devoluciones_Compras - $Devoluciones_Compras;
            $Inventario_Disponible = $compras_netas + $Inventario_inicial;
            $utilidad_bruta = $Inventario_Disponible - $Inventario_Final;
           $utilidad_operacion = $utilidad_bruta - $servicios;
           $utilidad_operacional = $utilidad_operacion + $ingresos;

            //tabla de ISR            
            //DE      L.          0.01  A    L. 141000.00 EXENTO
            //DE      L.  141000.01       L. 215,000.00 15%
            //DE      L.215,000,01         L. 500,000.00 20%
            //DE      L. 500,000.01   en adelante  25%
            //$utilidad_operacional = 141000.01;
            switch ($utilidad_operacional) {
                case ($utilidad_operacional <= 141000.00):
                    $Impuesto_Renta = 0;
                    break;
                case (($utilidad_operacional >= 141000.01) && ($utilidad_operacional <= 215000.00)):
                    $Impuesto_Renta = $utilidad_operacional * 0.15;
                    break;
                case (($utilidad_operacional >= 215000.01) && ($utilidad_operacional <= 500000.00)):
                    $Impuesto_Renta = $utilidad_operacional * 0.2;
                    break;
                case (($utilidad_operacional >= 500000.01)):
                    $Impuesto_Renta = $utilidad_operacional * 0.25;
                    break;
                    }
                $Utilidad_Netas = $utilidad_operacional - $Impuesto_Renta;
                    if ($Utilidad_Netas < 0) {
                        $msj = 'Perdidad Neta';
                    }else{
                        $msj = 'Utilidad Neta';
                    }
            $resultados='';
            //<th></th>
            $resultados='
            <tbody>
            <tr><th colspan="5" bgcolor="#FEC574">CRISAQ</th></tr>
            <tr><th colspan="5" bgcolor="#FEC574">'.$titulo.'</th></tr>
            <tr><th>Compras</th><th> '.$compra .' </th><th></th><th></th><th></th></tr>
            <tr><th>Gastos Sobre Compra</th><th> + '.$Fletes_Compra .' </th><th></th><th></th><th></th></tr>
            <tr><th>Compras Totales</th><th></th><th>'.$compras_totales .'</th><th></th><th></th></tr>
            <tr><th>Devoluciones en Compras</th><th></th><th> - '.$Devoluciones_Compras .'</th><th></th><th></th></tr>
            <tr><th>Descuento en Compras</th><th></th><th> - '.$Descuento_Compras .'</th><th></th><th></th></tr>
            <tr><th>Compras Netas</th><th></th><th></th><th>'.$compras_netas .'</th><th></th></tr>
            <tr><th>Inventario inicial</th><th></th><th></th><th> + '.$Inventario_inicial.'</th<th></th><th></th></tr>
            <tr><th>Inventario Disponible</th><th></th><th></th><th>'.$Inventario_Disponible .'</th><th></th></tr>
            <!--  <tr><th>Inventario Final</th><th></th><th></th><th>'.$Inventario_Final .'</th><th></th></tr> -->
            <tr><th>Utilidad Bruta</th><th></th><th></th><th></th><th>'.$utilidad_bruta .'</th></tr>
            <tr><th bgcolor="#FEC574">Gastos de Operacion</th><th bgcolor="#FEC574"></th><th bgcolor="#FEC574"></th>
            <th bgcolor="#FEC574"></th><th bgcolor="#FEC574"0></th></tr>
            <tr><th>Gastos Administrativos</th><th></th><th></th><th></th><th> - '.$servicios.'</th></tr>
           <tr><th>Total Gastos Operacion</th><th></th><th></th><th></th><th>'.$utilidad_operacion.'</th></tr>
            <tr><th>Ingresos</th><th></th><th></th><th></th><th> +'.$ingresos.'</th></tr>
            <tr><th>Utilidad Antes de Inpuestos</th><th></th><th></th><th></th><th>'.$utilidad_operacional.'</th></tr>
            <tr><th>Impuesto Sobre la Renta</th><th></th><th></th><th></th><th>'.$Impuesto_Renta .'</th></tr>
            <tr><th>'.$msj.'</th><th></th><th></th><th></th><th>'.$Utilidad_Netas .'</th></tr>
            </tbody>';
            echo json_encode($resultados);
        break;
    }
?>