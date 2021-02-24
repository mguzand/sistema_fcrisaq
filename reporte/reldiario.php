<?php
if(strlen($_GET['desde'])>0 and strlen($_GET['hasta'])>0){
	$desde = $_GET['desde'];
$hasta = $_GET['hasta'];

	$verDesde = date('Y-m-d', strtotime($desde));
	$verHasta = date('Y-m-d', strtotime($hasta));
}else{
	$desde = date('Y-m-d', strtotime($desde));
	$hasta = date('Y-m-d', strtotime($hasta));

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
require('../funcs/conexion.php');
require('../fpdf182/fpdf.php');
date_default_timezone_set('America/Tegucigalpa');
ob_start();
$monto_operacion=0;
$result = $mysqli->query("SELECT li.id_libro_diario,ca.tipo_cuenta as cargada,ca2.tipo_cuenta 
as debitada,li.monto_operacion, li.desglose_operacion, li.fecha_operacion 
FROM tbl_libro_diario as li, tbl_catalogo_cuenta as ca, tbl_catalogo_cuenta as ca2
 WHERE li.id_cuenta_cargada=ca.id_catalogo AND li.id_cuenta_debitada=ca2.id_catalogo 
 AND li.fecha_operacion 
 BETWEEN '".$desde."' AND '".$hasta."' AND status='ACTI' ORDER BY li.fecha_operacion ASC");

        $pdf=new FPDF('L','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B');
        $pdf->Ln(30);
        $pdf->Image('recursos/fpdf.png' , 125 ,10, 30, 30,'PNG');
        $pdf->Cell(115, 10, '', 0);
        $pdf->Cell(70, 30, 'Fundacion CRISAQ', 0, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(159, -30, 'FECHA:     '.date('d-m-Y h:i:s').'', 0);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'B', 11);
        $pdf->Cell(100, 15, '', 0);
        $pdf->Cell(100, 8, 'Listado de Cuentas Registrados', 0);
        $pdf->Ln(10);
         $pdf->Cell(100, 8, '', 0);
        $pdf->Cell(1,10,'LIBRO DIARIO del '.$verDesde.' al '.$verHasta);
        $pdf->ln(15);
        //COLOR RELLENO
      $pdf->SetFillColor(253, 135, 39);
        //COLOR LINEAS
        //$pdf->SetDrawColor( 223, 32, 32  );
        //COLOR TEXTO
        //$pdf->SetTextColor(150,150,15);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->cell(10,10,'Id Trx',1,0,'L',1);
        $pdf->cell(80,10,'Cuenta Debitada',1,0,'L',1);
        $pdf->cell(60,10,'Cuenta Cargada',1,0,'L',1);
        $pdf->cell(25,10,'Monto',1,0,'L',1);
        $pdf->cell(75,10,'Descripcion de la transaccion',1,0,'L',1);
        $pdf->cell(20,10,'Fecha',1,0,'L',1);
        
    //var_dump($result);
        while($file = $result->fetch_object()){
            $pdf->ln(10);
            $pdf->cell(10,10,$file->id_libro_diario,1,0,'L',0);
            $pdf->cell(80,10,$file->cargada,1,0,'L',0);
            $pdf->cell(60,10,$file->debitada,1,0,'L',0);
                
            $pdf->Cell(25,10,$file->monto_operacion,1,0,'L',0);
            $monto_operacion = $file->monto_operacion + $monto_operacion;
            $pdf->cell(75,10,$file->desglose_operacion ,1,0,'L',0);
            $pdf->cell(20,10,$file->fecha_operacion ,1,0,'L',0);
        }
        $pdf->ln(10);
       $pdf->cell(125,10,'',0,0,'L',0);
        $pdf->cell(25,10,'Total Cuentas',1,0,'L',1);
        $pdf->cell(25,10,$monto_operacion,1,0,'L',0);
        //$pdf->cell(25,10,$debito,1,0,'L',0);
        //vista previa        
        //$pdf->Output("reporte.pdf","I");
        //descargar
        $nombre = "Lib_diario_".$verDesde."_a_".$verHasta.".pdf";
        $pdf->Output($nombre,"I");
        //salida
    

?>