<?php


require '../funcs/conexion.php';
require '../funcs/funcs.php';



?>
       <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/datepicker3.css" rel="stylesheet">
    <link href="css1/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css1/estilos.css" rel="stylesheet">

        
  
     
      
        <div class="dataTables_length" id="tableListar_length">
      <table class="table" id="tableListar">
        <thead>
          <tr class="success">
          <th>N°</th>
            <th>Id</th>
            
            <th>Nombre</th>
            <th>Telefonos </th>
             <th>Correo</th>
                <th>fecha</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
			
			
			

  
			
			 $sql = "SELECT * FROM tbl_clientes order by id_cliente ASC";

			$query = mysqli_query($mysqli, $sql);
     
			
			$count_query   = mysqli_query($mysqli, "SELECT count(*) AS numrows FROM tbl_clientes  ");
		$row1= mysqli_fetch_array($count_query);
			
			$numrows = $row1['numrows'];
			
 
          if ($numrows>0){
			
        while ($row=mysqli_fetch_array($query)){
			
			
			
			               $item=$row['id_cliente'];
			               $id=$row['identidad'];
						$apellido=$row['ape_cliente'];
						$nom=$row['nom_cliente'];
				        $cel=$row['tel_celular'];
			            $tel=$row['tel_2'];
			           $correo=$row['cor_cliente'];
                  $fecha=$row['fecha_registro'];
                 $fecha= date('d/m/Y', strtotime($fecha));
			           $membresia= $row['membresia'];
			           $direccion=$row['direccion'];
          ?>
  
              <tr>
              <td><?php echo $item ?></td>
                <td><?php echo $id ?></td>
             
                <td><?php echo $nom." ". $apellido;?></td>
                <td><?php echo $cel." || ".$tel;?></td>
                 <td><?php echo $correo;?></td>
                  <td><?php echo $fecha;?></td>
                <td>
              
                  <a href="cambia_pass_pre.php?user_id=<?php echo $item;?>" data-toggle="tooltip" title="Eliminar cliente"><span class="glyphicon glyphicon-remove"></span></a>&nbsp;
                  
                  
                  
                  	<a href="#" class='btn btn-default' title='Editar parametro'  data-toggle="modal" data-target="#myModal2" onclick='obtener_datos("<?php echo $id;?>" , "<?php echo $nom ?>", "<?php echo $apellido ?>", "<?php echo $cel ?>","<?php echo $tel ?>","<?php echo $correo ?>","<?php echo $direccion ?>","<?php echo $membresia ?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
                  	
                  	
            <a href="#" class='btn btn-default' title='Editar parametro'  data-toggle="modal" data-target="#myModal4" onclick='obtener_id("<?php echo $item;?>")' ><i class="glyphicon glyphicon-edit"></i></a> 
               
                </td>
              </tr>
          <?php
            
           }
          }else{ 
          
          ?>
          <tr>
            <td colspan="4">No se encontraron resultados</td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
     
      </div>
      <script src="js1/jquery-1.11.1.min.js"></script>
    <script src="js1/bootstrap.min.js"></script>
	<script src="js1/bootstrap-datepicker.js"></script>
	<script src="js1/locales/bootstrap-datepicker.es.js"></script>
	<script src="js1/jquery.dataTables.min.js"></script>
    
        <script src="js1/dataTables.bootstrap.js"></script>

        <script src="js1/validator.js"></script>

    <script src="js1/global.js"></script>
     