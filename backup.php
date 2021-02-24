
<?php
include 'Connet.php';
require 'funcs/conexion.php';
require 'funcs/funcs.php';
session_start();


if (isset ($_POST['btn_guardar'])) {
    $idUsuario = $_SESSION['id_usuario'];
    $rol = $_SESSION['id_rol'];
    $sql = "Select id_usuario, nombre_usuario from tbl_usuario WHERE id_usuario = '$idUsuario'";
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    
$day=date("d");
$mont=date("m");
$year=date("Y");
$hora=date("H-i-s");
$fecha=$day.'-'.$mont.'-'.$year;
$DataBASE=$fecha."_(".$hora."_hrs).sql";
$tables=array();
$result=SGBD::sql('SHOW TABLES');
if($result){
    while($row=mysqli_fetch_row($result)){
       $tables[] = $row[0];
    }
    $sql='SET FOREIGN_KEY_CHECKS=1;'."\n\n";
    $sql.='CREATE DATABASE IF NOT EXISTS '.BD.";\n\n";
    $sql.='USE '.BD.";\n\n";;
    foreach($tables as $table){
        $result=SGBD::sql('SELECT * FROM '.$table);
        if($result){
            $numFields=mysqli_num_fields($result);
            $sql.='DROP TABLE IF EXISTS '.$table.';';
            $row2=mysqli_fetch_row(SGBD::sql('SHOW CREATE TABLE '.$table));
            $sql.="\n\n".$row2[1].";\n\n";
            for ($i=0; $i < $numFields; $i++){
                while($row=mysqli_fetch_row($result)){
                    $sql.='INSERT INTO '.$table.' VALUES(';
                    for($j=0; $j<$numFields; $j++){
                        $row[$j]=addslashes($row[$j]);
                        $row[$j]=str_replace("\n","\\n",$row[$j]);
                        if (isset($row[$j])){
                            $sql .= '"'.$row[$j].'"' ;
                        }
                        else{
                            $sql.= '""';
                        }
                        if ($j < ($numFields-1)){
                            $sql .= ',';
                        }
                    }
                    $sql.= ");\n";
                }
            }
            $sql.="\n\n\n";

            $objeto="PANTALLA DE BACKUP";
		$accion="INGRESO A LA PANTALLA DE BACKUP";
		$descripcion="ingreso a pantalla usuarios";
		
		$bita=grabarBitacora($idUsuario,$objeto,$accion,$descripcion);
        }else{
            $error=1;
        }
    }
    if($error==1){
        echo 'Ocurrio un error inesperado al crear la copia de seguridad';
    }else{
        chmod(BACKUP_PATH, 0777);
        $sql.='SET FOREIGN_KEY_CHECKS=1;';
        $handle=fopen(BACKUP_PATH.$DataBASE,'w+');
       $B="backup/";
   
        if(fwrite($handle, $sql)){
            fclose($handle);
            
            
             $text="<a  href=$B$DataBASE download>Descargar Archivo </a>";

        

            
        }else{
            echo 'Ocurrio un error inesperado al crear la copia de seguridad';
        }
    }
}else{
    echo 'Ocurrio un error inesperado';
}
mysqli_free_result($result);





}

   
//$text="<textarea class='js-encrypted' value='$c'></textarea>";
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Backup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Cat Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/es.css" type="text/css" media="all" />
<!--// css -->
     <link rel="stylesheet" href="css/style3.css"   type="text/css" media="all">
<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script> 
    
    
    
    
    
    <script type="text/javascript">
    function cargarHojaExcel()
    {
        if(document.frmcargararchivo.excel.value=="")
        {
            alert("Suba un archivo");
            document.frmcargararchivo.excel.focus();
            return false;
        }       

        document.frmcargararchivo.action = "procesar.php";
        document.frmcargararchivo.submit();
    }

</script>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
    <?php include("menu.php"); ?>
</head>
    
    
<body>
    <!-- banner -->
    <!-- banner -->
    <!-- Inicio header -->
            
        <div class="about-heading"> 
            <div class="con">
                Copias de Seguridad
            
        </div>
    </div>
    <!-- //banner -->
    <!-- contact -->
    <!-- //banner -->
    <!-- contact -->
    <div class="contact-top">
        <!-- container -->
        <div class="container">
        <div class="panel panel-success">
            <div class="panel-body">
            
    <div class="containerw3layouts-agileits">

        <div class="w3imageaits">
            
            
            
            
            
                
            
                        <form action="#" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                              
               <h2>Copia Seguridad</h2>
                            <div class="icon1">
                                  <img class="" src="imagen/database.png" width="50%" alt="Custom Signup Form">
                 
                            </div>
                            
                        
<div class="icon1">
                            <br>
                            </div>
<div class="icon1">
                           
    
    
    
    <?php
  echo $text;
 ?>
   
    
    
    
    
                            </div>
<div class="icon1">
                            <br>
                            </div>
                            <div class="bottom">
                                
 <input type="submit"   id="btn_guardar" name="btn_guardar" value="CREAR" />

                            </div>
                            
<div class="icon1">
                            <br>
                            </div>
                            
<div class="icon1">
                            <br>
                            </div>
                            
<div class="icon1">
                            <br>
                            </div>
                            
<div class="icon1">
                            <br>
                            </div>
<div class="icon1">
                            <br>
                            </div>
                    </form>
           
        
     
                        
        </div>




        <div class="aitsloginwthree w3layouts agileits">
            
     <h2>Subir Archivo</h2>

        
        <form name="frmcargararchivo" method="post" enctype="multipart/form-data">
           
          <input type="file" name="excel" id="excel" accept="text/sql" /> <br>
            <div>
        <input   type="submit"   value="subir"   onclick="cargarHojaExcel();" />
                </div>
        </form>


           

            
            
            
            
        </div>
    
        <div class="clear"></div>

    </div>  
            </div>
        </div>

    </div>
        <!-- //container -->
    </div>
    <!-- //contact -->
    <!-- footer -->
    <footer>

    </footer>
  
    
    <script type="text/javascript" src="js/parametros.js"></script>
    <!-- footer -->
    <!-- copyright -->
    
    <!-- //copyright -->
    <script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>

    <!-- here stars scrolling icon -->
    
<!-- //here ends scrolling icon -->
</body> 
</html>