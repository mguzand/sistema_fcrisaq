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
require('../fpdf182/fpdf.php');
require('../funcs/conexion.php');

class PDF extends FPDF
{
// Pie de página
function Footer()
{
	// Posición: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Número de página
	$this->Cell(0,10,utf8_decode('Pág. ').$this->PageNo().'/{nb}',0,0,'C');
}
}
date_default_timezone_set('America/Tegucigalpa');
$pdf = new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial', 'B', 15);
$pdf->Image('recursos/fpdf.png' , 10 ,10, 30, 30,'PNG');
$pdf->Ln(6);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(230, 8, '', 0);
$pdf->Cell(10, 8, 'FECHA:    '.date('d-m-Y').'', 0);
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(230, 8, '', 0);
$pdf->Cell(10, 8, 'HORA:      '.date('h:i:s a').'', 0);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(38, 8, '', 0);
$pdf->Cell(10,8,'REGISTRO DE BITACORA  DEL '.$verDesde.' AL'.$verHasta);
$pdf->ln(15);
$pdf->Cell(1, 8, '', 0);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'No.', 1,0,'C');
$pdf->Cell(40, 8, 'USUARIO', 1,0,'C');
$pdf->Cell(50, 8, 'PANTALLA INGRESDA', 1,0,'C');
$pdf->Cell(65, 8, 'ACCION', 1,0,'C');
$pdf->Cell(80, 8, 'DESCRIPCION', 1,0,'C');
$pdf->Cell(30, 8, 'FECHA INGRESO', 1,0,'C');

$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($mysqli,"SELECT  a.id_bitacora, a.id_usuario, a.objeto, a.accion,
a.descripcion, a.fecha,b.id_usuario, b.usuario FROM tbl_bitacoras a 
INNER join tbl_usuario b on  a.id_usuario = b.id_usuario where a.fecha
BETWEEN '".$desde."' AND '".$hasta."'  order by id_bitacora desc");
$item = 0;
$totaluni = 0;
$totaldis = 0;
$usuario=0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	$pdf->Cell(1, 8, '', 0);
	$pdf->Cell(10, 8, $item, 0,0,'C');
    $pdf->Cell(40, 8, $productos2['usuario'], 0);
    $pdf->Cell(50, 8, $productos2['objeto'], 0);
	$pdf->Cell(65, 8, $productos2['accion'], 0);
	$pdf->Cell(80, 8, $productos2['descripcion'], 0);
	$pdf->Cell(30, 8, date('d/m/Y', strtotime($productos2['fecha'])), 0,0,'C');
	$pdf->Ln(5);
}
$pdf->Output();
?>