<?php 
require '../funcs/conexion.php';

if(isset($_GET['padre']) ){
    $sql = "SELECT cuenta_padre FROM `tbl_catalogo_cuenta` WHERE descripcion = '".$_GET['padre']."' ";
    $query = mysqli_query($mysqli, $sql);


    $row= mysqli_fetch_array($query);
    $numrows = $row['cuenta_padre'];
    
    
    echo json_encode(array('cuenta_padre' => $numrows ));



}else{
    $sql = ("SELECT precio FROM `tbl_producto` WHERE id_producto = ".$_GET['id_producto']." ");
    $query = mysqli_query($mysqli, $sql);
    
    
    $row= mysqli_fetch_array($query);
    $numrows = $row['precio'];
    
    
    echo json_encode(array('precio' => $numrows ));
}




 














 ?>