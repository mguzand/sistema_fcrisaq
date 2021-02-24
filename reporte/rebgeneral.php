<?php
if(strlen($_GET['desde'])>0 and strlen($_GET['hasta'])>0){
	$desde = $_GET['desde'];
$hasta = $_GET['hasta'];

	$verDesde = date('Y-m-d', strtotime($desde));
	$verHasta = date('Y-m-d', strtotime($hasta));
}else{
	$desde = date('Y-m-d', mktime(0,0,0, date('m'), 1, date("Y")));
	$hasta = date('Y-m-d', mktime(0,0,0, date("m"), 30, date("Y")));

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
require('../fpdf182/fpdf.php');
require('../funcs/conexion.php');
date_default_timezone_set('America/Tegucigalpa');

ob_start();

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
$pdf->Ln(5);
$pdf->Cell(55, 10, '', 0);
$pdf->Cell(1,10,'BALANCE GENERAL DEL '.$verDesde.' al '.$verHasta);
$pdf->ln(15);

$activo_corriente = array();
$activo_nocorriente = array();
$pasivo_corriente = array();
$pasivo_nocorriente = array();
$patrimonio = array();
$activot=0;
$pasivot=0;
$result = $mysqli->query("SELECT li.id_libro_diario,ca.tipo_cuenta,SUM(li.monto_operacion) as monto,
li.desglose_operacion, ca.codigo_cuenta, ca.cuenta_padre FROM tbl_libro_diario as li,
tbl_catalogo_cuenta as ca WHERE li.id_libro_diario = ca.id_catalogo
and li.fecha_operacion BETWEEN '".$desde."' AND '".$hasta."' AND status='ACTI'
UNION
SELECT li.id_libro_diario, ca.tipo_cuenta,SUM(li.monto_operacion) as monto,
li.desglose_operacion, ca.codigo_cuenta, ca.cuenta_padre FROM tbl_libro_diario as li,
tbl_catalogo_cuenta as ca WHERE li.id_libro_diario = ca.id_catalogo
and li.fecha_operacion BETWEEN '".$desde."' AND '".$hasta."' AND status='ACTI'
 GROUP By li.id_libro_diario");
  $a=0;
  $b=0; 
  $c=0;
  $d=0;
  $e=0;
$tactivo=0;
$tpasovo=0;
$tactivo1=0;
$tpasovo1=0;
$tpatri=0;

  $total=0;
  while($row=$result->fetch_array()){
      $cod=$row['codigo_cuenta'];
      $tipo = substr($cod,0,2);
      //var_dump($tipo);
      
      switch ($tipo) {
          case '11':
              $activo_corriente[$a] = array('fila'=>$a,'tipo_cuenta'=>$row[1],'monto'=>$row[2]);
              $a++;
          break;
          case '12':
              $activo_nocorriente[$b] = array('fila' =>$b ,'tipo_cuenta'=>$row[1],'monto'=>$row[2]);
              $b++;
          break;
          case '21':
              $pasivo_corriente[$c] = array('fila' =>$c ,'tipo_cuenta'=>$row[1],'monto'=>$row[2]);
              $c++;
          break;
          case '22':
              $pasivo_nocorriente[$d] = array('fila' =>$d ,'tipo_cuenta'=>$row[1],'monto'=>$row[2]);
              $d++;
          break;
          case '31':
              $patrimonio[$e] = array('fila' =>$e ,'tipo_cuenta'=>$row[1],'monto'=>$row[2]);
              $e++;
          break;
      }
  }
  $cordenadaY=63;
  $contador1 = 5;
  $contador2 = 5;
  $pdf->cell(90,10,'ACTIVO CORRIENTE',1,0,'L',1); 
  $pdf->ln(10);
  foreach ($activo_corriente as $row) {
      $pdf->cell(45,10,$row['tipo_cuenta'],1,0,'L',0);
      $pdf->cell(45,10,$row['monto'],1,0,'L',0);
      $total = $row['monto'] +$total;
      $pdf->ln(10);
        # code...
      $contador1=$contador1+10;
  }
  //var_dump($contador);
  $pdf->cell(45,10,'TOTAL',1,0,'L',0);
  $pdf->cell(45,10,$total,1,0,'L',0);
  $activot=$total+$activot;
  $tactivo1=$total;
  $total=0;

 

  $pdf->ln(10);$pdf->ln(10);
  $pdf->SetXY(100,$cordenadaY);  
  $pdf->cell(90,10,'ACTIVO NO CORRIENTE',1,0,'L',1); 
  $pdf->ln(10);
  $contador2=$contador2+20;
  $pdf->SetXY(100,$cordenadaY+10);  
  foreach ($activo_nocorriente as $row) {
      $pdf->cell(45,10,$row['tipo_cuenta'],1,0,'L',0);
      $pdf->cell(45,10,$row['monto'],1,0,'L',0);
      $total = $row['monto'] +$total;

      $pdf->ln(10);
      $pdf->SetXY(100,$cordenadaY+$contador2-5);  
      $contador2=$contador2+10;
  }
//var_dump($contador2);
  $pdf->SetXY(100,$cordenadaY+$contador2-15);  
  $pdf->cell(45,10,'TOTAL',1,0,'L',0);
  $pdf->cell(45,10,$total,1,0,'L',0);
  $activot=$total+$activot;
  $tactivo = $total;
  $total=0;

  $pdf->SetXY(10,$cordenadaY+$contador2-15);
  $pdf->ln(10);$pdf->ln(10);
  $pdf->ln(10);$pdf->ln(10);
  $pdf->ln(10);$pdf->ln(10);
  $pdf->ln(10);$pdf->ln(0);
  
  $pdf->cell(45,10,'Total Activos',1,0,'L',1);
  $pdf->cell(45,10,$tactivo1+$tactivo,1,0,'L',0);
  $total=$activot+$total;
 
  $total=0;

  if($contador1>$contador2){
    $cordenadaY=$contador1+70;
}elseif($contador1<$contador2){
    $cordenadaY=$contador2+70;
}elseif($contador1==$contador2){
    $cordenadaY=$contador1+70;
}

  $pdf->SetXY(0,$cordenadaY);  
  
  $pdf->ln(10);$pdf->ln(10);
  $pdf->cell(103,10,'PASIVO CORRIENTE',1,0,'L',1); 
  $pdf->ln(10);
  foreach ($pasivo_corriente as $row) {
      $pdf->cell(63,10,$row['tipo_cuenta'],1,0,'L',0);
      $pdf->cell(40,10,$row['monto'],1,0,'L',0);
      $total = $row['monto'] +$total;
      $pdf->ln(10);
  }
  $pdf->cell(63,10,'TOTAL',1,0,'L',1);
  $pdf->cell(40,10,$total,1,0,'L',0);
  $pasivot=$total+$pasivot;
  $tpasovo=$total;
  $total=0;



  //$pdf->ln(10);$pdf->ln(10);
  //var_dump($cordenadaY);
  $pdf->SetXY(115,$cordenadaY+20);  
  $pdf->cell(90,10,'PASIVO NO CORRIENTE',1,0,'L',1); 
  $pdf->ln(10);
  $cordenadaY=$cordenadaY+30;
  $pdf->SetXY(115,$cordenadaY);  
  foreach ($pasivo_nocorriente as $row) {
      $pdf->cell(55,10,$row['tipo_cuenta'],1,0,'L',0);
      $pdf->cell(35,10,$row['monto'],1,0,'L',0);
      $total = $row['monto'] +$total;
      $pdf->ln(10);
      $pdf->SetXY(115,$cordenadaY+$contador2-55);  
      $contador2=$contador2+10;
  }
  $pdf->cell(55,10,'TOTAL',1,0,'L',0);
  $pdf->cell(35,10,$total,1,0,'L',0);
  $pasivot=$total+$pasivot;
  $tpasovo1=$total;
  $total=0;
  $pdf->SetXY(30,$cordenadaY+$contador2-15);  

  $pdf->SetXY(115,$cordenadaY+$contador2-5);
  $pdf->ln(0);$pdf->ln();
  $pdf->cell(45,10,'TOTAL PASIVOS',1,0,'L',0);
 // $=$total+$pasivot;
  $pdf->cell(45,10,$tpasovo+$tpasovo1,1,0,'L',0);
  $total=0;

  $pdf->ln(10);$pdf->ln(10);
  $pdf->cell(90,10,'PATRIMONIO',1,0,'L',1); 
  $pdf->ln(10);
  //var_dump($patrimonio);
  foreach ($patrimonio as $row) {
      $pdf->cell(45,10,$row['tipo_cuenta'],1,0,'L',0);
      $pdf->cell(45,10,$row['monto'],1,0,'L',0);
      $total = $row['monto'] +$total;
      $pdf->ln(10);
      $pdf->SetXY(0,$cordenadaY+$contador1-5);  
    $contador2=$contador2+10;
  }
  $pdf->ln(10);
  $pdf->SetXY(10,$cordenadaY+$contador1+15);  
//  $total = $pasivot+$activot;
  $pdf->cell(45,10,'TOTAL',1,0,'L',1);
  $pdf->cell(30,10,$total,1,0,'L',0);
  $tpatri=$total+$tpatri;
  $total=0;
  $pdf->ln(10);$pdf->ln(10);
  
  
  $pdf->cell(50,10,'Total Pasivo + Patrimonio',1,0,'L',1);
  $pdf->cell(45,10,$tpasovo+$tpasovo1+$tpatri,1,0,'L',0);
  $total=0;

    
    $nombre = "Balance_General_a_.pdf";
    $pdf->Output("I");
?>