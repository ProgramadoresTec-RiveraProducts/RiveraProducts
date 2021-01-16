<?php 
	$alert='';
	$host = 'sql9.freesqldatabase.com:3306';
	$user = 'sql9385280';
	$password = 'drPr7vX8Wk';
	$db = 'sql9385280';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if(!$conection){
		echo "Error en la conexión";
	}

       $query_insert = mysqli_query($conection,"INSERT INTO 'usuarios' (id,nombre,correo,telefono,contraseña) VALUES ('','fe','efef','efefe','frf')");
				if($query_insert){
					$alert='<p class="msg_save">Usuario creado correctamente.</p>';
				}else{
                                $alert='<p class="msg_error">Error al crear el usuario.</p>';}

?>