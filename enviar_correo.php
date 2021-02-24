<?php 
$correo=$_GET['correo'];
$cod=$_GET['cod'];
//$pa = file_get_contents("http://www.ceedhn.com/index.php?correo=".$correo.'&cod='.$cod);
echo "http://www.ceedhn.com/enviar_correo.php?correo=".$correo.'&cod='.$cod;
 ?>