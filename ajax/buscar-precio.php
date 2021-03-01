<?php 
require '../funcs/conexion.php';


$sql = ("SELECT precio FROM `tbl_producto` WHERE id_producto = ".$_GET['id_producto']." ");
$query = mysqli_query($mysqli, $sql);


$row= mysqli_fetch_array($query);
$numrows = $row['precio'];


echo json_encode(array('precio' => $numrows ));


 














 ?>