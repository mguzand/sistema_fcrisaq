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
$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();
$pdf->SetFont('Arial', 'B', 15);
$pdf->Image('recursos/fpdf.png' , 10 ,10, 15, 15,'PNG');
$pdf->Ln(1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(150, 8, '', 0);
$pdf->Cell(10, 8, 'FECHA:     '.date('d-m-Y').'', 0);
$pdf->Ln(5);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(150, 8, '', 0);
$pdf->Cell(10, 8, 'HORA:       '.date('h:i:s a').'', 0);
$pdf->Ln(4);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(40, 8, '', 0);
$pdf->Cell(10,8,'REGISTRO DE RETIRO DE KARDEX DEL '.$verDesde.' AL'.$verHasta);
$pdf->ln(15);
$pdf->Cell(10, 8, '', 0);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(20, 8, 'ID KARDEX', 1,0,'C');
$pdf->Cell(50, 8, 'NOMBRE EQUIPO ', 1,0,'C');
$pdf->Cell(30, 8, 'EXISTENCIA', 1,0,'C');
$pdf->Cell(40, 8, 'TIPO MOVIMIENTO ', 1,0,'C');
$pdf->Cell(25, 8, 'FECHA REG.', 1,0,'C');

$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysqli_query($mysqli,"SELECT a.Id_Kardex, a.tipo_movimiento, 
a.fecha_creacion, b.nombre_equipo ,a.cantidad
FROM tbl_tipo_kardex as a
 inner join tbl_inventario as b on a.Id_equipo= b.Id_equipo 
 WHERE estado='AC' ORDER BY a.Id_Kardex ASC");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysqli_fetch_array($productos)){
	$item = $item+1;
	$pdf->Cell(10, 8, '', 0);
	$pdf->Cell(20, 8, $item, 0,0,'C');
	$pdf->Cell(50, 8, $productos2['nombre_equipo'], 0);
	$pdf->Cell(30, 8, $productos2['cantidad'], 0,0,'C');
	$pdf->Cell(40, 8, $productos2['tipo_movimiento'], 0,0,'C');
	$pdf->Cell(25, 8, date('d/m/Y', strtotime($productos2['fecha_creacion'])), 0,0,'C');
	$pdf->Ln(5);
}
$pdf->Output();
?>