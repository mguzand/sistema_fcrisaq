<?php
require('../fpdf182/fpdf.php');
require('../funcs/conexion.php');
date_default_timezone_set('America/Tegucigalpa');

ob_start();

$fecha = $_GET['fecha'];
$month = substr($fecha, 0,2); 
$year = substr($fecha, 3,5);

//var_dump($year);

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
//var_dump($result);
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
        case 'GASTOS DE MANTENIMIENTO':
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

    $pdf=new FPDF('P','mm','A4');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B');
      //COLOR RELLENO
      $pdf->SetFillColor(253, 135, 39);
      //COLOR LINEAS
      //$pdf->SetDrawColor( 223, 32, 32  );
      //COLOR TEXTO
      //$pdf->SetTextColor(150,150,15);
    //$pdf->SetXY(30, 15);
    $pdf->Image('recursos/fpdf.png' , 90 ,10, 30, 30,'PNG');
    $pdf->Ln(30);
    $pdf->Cell(70, 10, '', 0);
    $pdf->Cell(100, 10, 'Fundacion CRISAQ', 0, 'C');
    $pdf->Ln(3);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(159, -30, 'FECHA:     '.date('d-m-Y h:i:s').'', 0);
    $pdf->ln(10);
    $pdf->Cell(180,10,'Estado de Resultado de '.$primer_dia.' al '.$ultimo_dia,1,0,'C',1);
    $pdf->ln(10);
  
    $pdf->cell(60,10,'Compras',1,0,'L',0);
    $pdf->cell(30,10, $compra,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0); $pdf->ln(10);
    $pdf->cell(60,10,'Gastos Sobre Compra',1,0,'L',0);
    $pdf->cell(30,10,' + '.$Fletes_Compra ,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Compras Totales',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$compras_totales ,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Devoluciones en Compras',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,' - '.$Devoluciones_Compras,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Descuento en Compras',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,' - '.$Descuento_Compras,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Compras Netas',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$compras_netas,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Inventario inicial',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,' + '.$Inventario_inicial,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Inventario Disponible',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$Inventario_Disponible ,1,0,'C',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    // $pdf->cell(60,10,'Inventario Final',1,0,'L',0);
    // $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    // $pdf->cell(30,10,$Inventario_Final ,1,0,'C',0);
    // $pdf->cell(30,10,'',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Utilidad Bruta',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$utilidad_bruta ,1,0,'C',0);$pdf->ln(10);
    $pdf->cell(180,10,'Gastos de Operacion',1,0,'L',0);$pdf->ln(10);
    $pdf->cell(60,10,'Gastos Administrativos',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,' - '.$servicios,1,0,'C',0);$pdf->ln(10);
    $pdf->cell(60,10,'Total Gastos Operacion',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$utilidad_operacion,1,0,'C',0);$pdf->ln(10);
    $pdf->cell(60,10,'Otros Ingresos',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,' + '.$ingresos,1,0,'C',0);$pdf->ln(10);
    $pdf->cell(60,10,'Total Utilidad Operacional',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$utilidad_operacional,1,0,'C',0);$pdf->ln(10);
    $pdf->cell(60,10,'Utilidad Antes de Inpuestos',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$utilidad_operacional,1,0,'C',0);$pdf->ln(10);
    $pdf->cell(60,10,'Impuesto Sobre la Renta',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$Impuesto_Renta ,1,0,'C',0);$pdf->ln(10);
    $pdf->cell(60,10,$msj,1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,'',1,0,'L',0);$pdf->cell(30,10,'',1,0,'L',0);
    $pdf->cell(30,10,$Utilidad_Netas ,1,0,'C',0);$pdf->ln(10);
  

    $nombre = "Estado_Resultado_".$primer_dia."_a_".$ultimo_dia.".pdf";
    $pdf->Output($nombre,"I");
?>