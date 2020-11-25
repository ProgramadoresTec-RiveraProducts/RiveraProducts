<?php 
    
$alert = '';

//session_start();
if(!empty($_SESSION['active']))
{
    header('location: sistema/');
}else{

    if(!empty($_POST))
    {
        if(empty($_POST['usuario']) || empty($_POST['contraseña']))
        {
            $alert = 'Ingrese su usuario y su calve';
        }else{

            require_once "conexion.php";

            $user = mysqli_real_escape_string($conection,$_POST['usuario']);
            $pass = (mysqli_real_escape_string($conection,$_POST['contraseña']));

            $query = mysqli_query($conection,"SELECT * FROM Usuario WHERE usuario= '$user' AND contraseña = '$pass'");
            mysqli_close($conection);
            $result = mysqli_num_rows($query);

            if($result > 0)
            {
                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id_usuario'] = $data['id_usuario'];
                $_SESSION['nombre'] = $data['nombre'];
                                $_SESSION['apaterno']  = $data['apaterno'];
                                $_SESSION['amaterno']  = $data['amaterno'];
                                $_SESSION['id_rol']    = $data['idrol'];
                $_SESSION['usuario']   = $data['usuario'];
                

                header('location: sistema/');
            }else{
                $alert = 'El usuario o la clave son incorrectos';
                session_destroy();
            }


        }

    }
}
?>

<!doctype html>
    <html larg="en" dir="ltr">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
        <title>Rivera Products</title>
        <link rel="stylesheet" href="StylesLogin.css">
    </head>
    <body>
        <section class="form-login" >
            
            <form action="" method="post">
            <h5>Iniciar Sesión</h5>
            <div class="alert  alert-danger"><?php echo isset($alert) ? $alert : ''; ?></div>
            <img src="Imagenes\Logo.jpeg">
                <!-- NombreUsuario -->
                <input class="controls" tipe="text" name="usuario" value="" placeholder="Usuario">
        
                <!-- Contraseña -->
                <input class="controls" tipe="password" name="contraseña" value="" placeholder="Contraseña">
        
                <!-- Button -->
                <input  class="buttons1" type="submit" value="Ingresar">
                <a id="btn_custom" class="buttons2"  href="Registro.html" >Registrarse</a>
               

                
        

            
                <p><a href="#">¿Olvidaste tu contraseña?</a>
            </form>
        
        </section>
    </body>

</html>