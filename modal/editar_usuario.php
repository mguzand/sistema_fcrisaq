<?php
//Archivo verifica que el usario que intenta acceder a la URL esta logueado
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("funcs/conexion.php");
}		
		if (empty($_POST['nombre_usuario'])){
			$errors[] = "Nombres vacíos";
		
		} elseif (empty($_POST['usuario']) > 64 || strlen($_POST['usuario']) < 2){
			$errors[] = "usuario";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['usuario'])) {
            $errors[] = "Nombre de usuario no encaja en el esquema de nombre: Sólo aZ y los números están permitidos , de 2 a 64 caracteres";
		}  elseif (empty($_POST['rol'])) {
            $errors[] = "Nombre de usuario vacío";
        } elseif (empty($_POST['correo_electronico'])) {
            $errors[] = "El correo electrónico no puede estar vacío";
        } elseif (strlen($_POST['correo_electronico']) > 64) {
            $errors[] = "El correo electrónico no puede ser superior a 64 caracteres";
        } elseif (!filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Su dirección de correo electrónico no está en un formato de correo electrónico válida";
        } elseif (
			!empty($_POST['nombre_usuario'])
            && strlen($_POST['usuario']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['usuario'])
			&& !empty($_POST['rol'])
            && !empty($_POST['correo_electronico'])
            && strlen($_POST['correo_electronico']) <= 64
            && filter_var($_POST['correo_electronico'], FILTER_VALIDATE_EMAIL)
          )
         {
       
		//Contiene funcion que conecta a la base de datos
			
				// escaping, additionally removing everything that could be (html/javascript-) code
                $nombre_usuario = mysqli_real_escape_string($mysqli,(strip_tags($_POST["nombre_usuario"],ENT_QUOTES)));
				$usuario = mysqli_real_escape_string($mysqli,(strip_tags($_POST["usuario"],ENT_QUOTES)));
				$rol = mysqli_real_escape_string($mysqli,(strip_tags($_POST["rol"],ENT_QUOTES)));
                $estado_usuario = mysqli_real_escape_string($mysqli,(strip_tags($_POST["estado_usuario"],ENT_QUOTES)));
				
				$user_id=intval($_POST['mod_id']);
					
               
					// write new user's data into database
                    $mysqli = "UPDATE tbl_usuario SET nombre_usuario='".$firstname."', usuario='".$user_name."', correo_electronico='".$user_email."'
                            WHERE user_id='".$user_id."';";
                    $query_update = mysqli_query($mysqli,$sql);

                    // if user has been added successfully
                    if ($query_update) {
                        $messages[] = "La cuenta ha sido modificada con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                
            
        } else {
            $errors[] = "Un error desconocido ocurrió.";
        }
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>