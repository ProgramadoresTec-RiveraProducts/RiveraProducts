<!--
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
                                $_SESSION['apaterno']  = $data['apaternoe'];
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
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Rivera Products</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/Principal.css">
  </head>
  <body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top" id="customNavbar">
      <img src="../Imagenes/logo.png" width="150">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle  bg-light-dark text-dark" href="#" id="navbarDropdown" role="button" 
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Usuarios
            </a>
            <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-dark" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-dark" href="#">Registrarse</a>
          </li>
        </ul>
      </div>
    </nav>
    
<!-- HEADER1 -->
<header class="main-header">
      <div class="background-overlay text-white py-5 ">
        <div class="container">
          <div class="row d-flex h-100 m-5" >
            <div class="col-sm-12 text-center justify-content-center align-self-center p-5" >
              <h1 class="font-italic p-3">
                ¡Más que cumplir metas hacemos sueños realidad!
              </h1>
              <h5 class="font-italic ">En Rivera Products nos esforzamos con exportar la más alta calidad en limón; cuidando la ecología y el medio ambiente.</h5>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- FEATURES -->

    <section class="py-5">
      <div class="m5 text-center  font-italic p-3">
        <h1>¿Por qué elegirnos?</h1> 
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card text-justify border-success">
              <div class="card-body">
                <h3 class="text-center">Calidad</h3>
                <p>
                  Nosotros ofrecemos solo la más alta calidad en limón, cosechados con cuidado en la limpieza de la ecología y el ambiente.
                </p>
                <img class="align-self-center" src="../Imagenes/calidadlimon.png" alt="" width="280" height="180">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-justify border-success">
              <div class="card-body">
                <h3 class="text-center">Entrega Inmediata </h3>
                <p>
                  Nuestro rápido equipo de entrega se los llevara a su destino final en las mejores condiciones
                </p>
                <img class="align-self-center" src="../Imagenes/trailer.png" alt="" width="290" height="180">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-justify border-success">
              <div class="card-body">
                <h3 class="text-center">Amplia selección</h3>
                <p>
                  Gran gama de todo tipo de limones.  Nos encantaría escuchar sus sugerencias y expandir nuestro producto!
                </p>
                <img class="align-self-center" src="../Imagenes/seleccion.png" alt="" width="280" height="180">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TEAM -->
    <section class="text-center team">
      <div class="container p-5">
        <h1 class="text-center text-white font-italic">Equipo de Trabajo</h1>
        <h2 class="text-white text-justify font-italic p-4">
          ¡Contamos con la experiencia en todos los procesos de recepción, selección, empaque y exportación, que nos hacen ser una de las empresas más importantes de la región!
        </h2>
        <h2 class="text-center font-italic text-white p-5">¡Conócenos!</h2>
        <div class="row">
          <!-- USER TEAM -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="../Imagenes/person.png" class="img-fluid rounded-circle w-50">
                <h3>I. Agr. Fernando Sagardi Pérez </h3>
                <p class="text-justify">
                  Ingieniero en Agronomía experto en cítricos con más de 10 años en el sector productivo.
                </p>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  </div>
                  <div class="p-4">
                    <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                  </div>
                  <div class="p-4">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="../Imagenes/person.png" class="img-fluid rounded-circle w-50">
                <h3>L.A.E. Lucila Macías Romero </h3>
                <p class="text-justify">
                 Licenciada en Administración de Empresas con más de 5 años de experiencia en la empresa Rivera Products.
                </p>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  </div>
                  <div class="p-4">
                    <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                  </div>
                  <div class="p-4">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="../Imagenes/person.png" class="img-fluid rounded-circle w-50">
                <h3>I. IND. Víctor Manuel Rivera Martinez </h3>
                <p class="text-justify">
                  Ingeniro Industrial con especialidad en procesos de  producción y manufactura por la Universidad Veracruzana.
                </p>
                <div class="d-flex flex-row justify-content-center">
                  <div class="p-4">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  </div>
                  <div class="p-4">
                    <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                  </div>
                  <div class="p-4">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
       </div>
      </div>
    </section>

<!-- ABOUT -->
<section class="m5 text-center ">
  <div class="container">
    <div class="row">
      <div class="m-5">
        <h1 class="text-center font-italic p-3">Acerca de nosotros</h1>
        <h5 class="text-justify font-italic">
          Somos una  empresa exportadora de limón persa que se ubica en la carretera federal Martínez de la torre- Nautla, en la comunidad de cañizo sus principales exportaciones son hacia los estados unidos de norte américa exportando limón persa en presentación de 40 y 10 libras. 
Empezamos  a laborar en el mes de marzo del 2017 y cuenta con 10 empleados de planta y 16 empleados eventuales, la empresa envía a la unión americana la cantidad de 3 embarques por semana generando una derrama económica en la región y además de generar empleos directos e indirectos.
        </h5>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="m5 text-center  font-italic p-3">
    <h1>Productos</h1> 
    <h5 class="text-center font-italic">Nosotros promovemos un estilo de vida saludable y el Limón es uno de nuestros productos favoritos. Es delicioso y provee de platillos sanos y nutritivos.</h2>
      <h5 class="text-center font-italic">
        Es por eso que para nosotros es importante tomar en cuenta estos tres aspectos:</h5>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card text-justify border-success">
          <div class="card-body">
            <h3 class="text-center">Estándar de Calidad</h3>
            <p>
              Nuestra prioridad es proporcionarte un producto de calidad evaluado por expertos en la matería de producción y manufactura.
            </p>
            <img class="align-self-center" src="../Imagenes/calidad1.png" alt="" width="280" height="250">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-justify border-dark">
          <div class="card-body">
            <h3 class="text-center">Procesos</h3>
            <p>
              Los procesos de selección, empaque y lógistica son supervisados rigurosamente para que el producto llegue hasta la puerta de tu casa como si estuviese recién cortado.
            </p>
            <img class="align-self-center" src="../Imagenes/calidad2.png" alt="" width="280" height="200">
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-justify border-danger">
          <div class="card-body">
            <h3 class="text-center">Confiabilidad</h3>
            <p>
              Siempre apoyando al sector regional adquirimos el producto de agricultores de la región teniendo la certeza que siempre nos proporicionarán una mercancía de calidad.
            </p>
            <img class="align-self-center" src="../Imagenes/calidad3.png" alt="" width="280" height="200">
          </div>
        </div>
      </div>
    </div>
  </div>
  <h5 class="text-center font-italic p-5">
    El empaque se realiza de una forma artesanal, con lo cual se garantiza la calidad de la fruta en un 100%.</h5>
    <h5 class="text-center font-italic">Los tipos de empaque que manejamos corresponden a 10 y 40 libras, respectivamente.</h5>
    <div class="container p-5">
      <div class="row">
        <div class="col-md-6">
          <div class="card text-justify border-warning">
            <div class="card-body">
              <h3 class="text-center font-italic">10 Libras</h3>
              <p class="font-italic text-justify">
                Para el mercado de Estados Unidos de Norteamérica, empacados manualmente pieza por pieza, con etiqueta para cada fruta, tamaño; 54, 48, 42, 36. Marca: AGROPACK. En pallets de 180 cajas. Almacenado a temperatura ambiente.
                Ventajas: se garantiza 100% la calidad como resultado de su forma de empaque.
              </p>
              <img class="align-self-center" src="../Imagenes/caja10.png" alt="" width="280" height="250">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card text-justify border-warning">
            <div class="card-body">
              <h3 class="text-center font-italic">40 Libras</h3>
              <p class="text-justify font-italic">
                Para el mercado de Estados Unidos de Norteamérica. Marca: AGROPACK, fruta con o sin etiqueta envasado a granel, calibres: 110, 150, 175, 200, 230, 250. En pallets de 54 unidades. PALLET DE 40 LBS.
              </p>
              <img class="align-self-center" src="../Imagenes/caja40.png" alt="" width="300" height="270">
            </div>
          </div>
        </div>
  </section>

    <!-- CONTACT -->
    <section class="bg-light py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <h3>Contact</h3>
            <p>
              Consectetur neque numquam autem animi?
            </p>
            <form action="">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-user input-group-text"></i>
                </div>
                <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-envelope input-group-text"></i>
                </div>
                <input type="text" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <i class="fas fa-pencil-alt input-group-text"></i>
                </div>
                <textarea name="" cols="30" rows="10" placeholder="Message" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Send</button>
            </form>
          </div>
          <div class="col-lg-3 align-self-center">
            <img src="../Imagenes/logo.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container p-3">
        <div class="row text-center text-white">
          <div class="col ml-auto">
            <p>Copyright &copy; 2020</p>
          </div>
        </div>
      </div>       
    </footer>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
