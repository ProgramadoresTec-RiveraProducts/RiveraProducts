<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php include "includes/scripts.php"; ?>
  <title>Lista de compras</title>
  <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.css" />
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
  <!--Custom styles-->
   
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<body>
  <?php include "includes/header.php"; ?>
  <section id="container">
    
    <h1 style="margin:20px">Compras Realizadas <i class="fas fa-clipboard-list"></i></h1>
    
             <a href="crearPdf3.php" class="btn_new">Generar reporte de compras</a>
                <form action="buscar_compra.php" method="get" class="form_search">
      <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
      <input type="submit" value="Buscar" class="btn_search">
    </form>
                 <div class="containerTable">
    <table>
      <tr>
        <th>ID</th>
        <th>Material</th>
        <th>Proveedor</th>
        <th>Nombre Representante</th>
        <th>Apellidos</th>
                <th>Cantidad</th>
                <th>Precio</th>
        <th>Fecha compra</th>
        <th>Total</th>
        <th>Acciones</th>
      </tr>
    <?php 
      //Paginador
     // $sql_registe = mysqli_query($conection,"SELECT COUNT(*) as total_registro FROM compra WHERE estatus = 1 ");
      //$result_register = mysqli_fetch_array($sql_registe);
      //$total_registro = $result_register['total_registro'];

      $por_pagina = 15;

      if(empty($_GET['pagina']))
      {
        $pagina = 1;
      }else{
        $pagina = $_GET['pagina'];
      }

      $desde = ($pagina-1) * $por_pagina;
      //$total_paginas = ceil($total_registro / $por_pagina);

      //$query = mysqli_query($conection,"SELECT id_compra,material.nombrem,proveedor.Empresa,usuario.nombre,usuario.apellidos , compra.cantidad,compra.precio,compra.fecha_compra,compra.total FROM compra inner join material on compra.id_material=material.id_material inner join proveedor on proveedor.id_proveedor=material.idproveedor inner join usuario on proveedor.id_usuario=usuario.id_usuario WHERE compra.estatus = 1 ORDER BY id_compra ASC LIMIT $desde,$por_pagina 
      //  ");

     // mysqli_close($conection);

      //$result = mysqli_num_rows($query);
      //if($result > 0){

        while ($data = mysqli_fetch_array($query)) {
          
      ?>
        <tr>
          <td><?php echo $data["id_compra"]; ?></td>
                    <td><?php echo $data["nombrem"]; ?></td>
          <td><?php echo $data["Empresa"]; ?></td>
          <td><?php echo $data["nombre"]; ?></td>
          <td><?php echo $data["apellidos"]; ?></td>
          <td><?php echo $data["cantidad"] ?></td>
          <td><?php echo $data["precio"] ?></td>
          <td><?php echo $data["fecha_compra"] ?></td>
          <td><?php echo $data["total"] ?></td>
          <td>
                                           
                                          

          
             <a class="link_delete" href="eliminar_confirmar_compra.php?id=<?php echo $data["id_compra"]; ?>"><i class="fas fa-trash"></i> Eliminar</a> 
          
          </td>
        </tr>
                                
      
    <?php 
        }

      //}
     ?>


    </table>
                 </div>
    <div class="paginador">
      <ul>
      <?php 
        if($pagina != 1)
        {
       ?>
        <li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
        <li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
      <?php 
        }
        for ($i=1; $i <= $total_paginas; $i++) { 
          # code...
          if($i == $pagina)
          {
            echo '<li class="pageSelected">'.$i.'</li>';
          }else{
            echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
          }
        }

        if($pagina != $total_paginas)
        {
       ?>
        <li><a href="?pagina=<?php echo $pagina + 1; ?>">>></a></li>
        <li><a href="?pagina=<?php echo $total_paginas; ?> ">>|</a></li>
      <?php } ?>
      </ul>
    </div>


  </section>
  <?php include "includes/footer.php"; ?>
  <script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.0/firebase-auth.js"></script>
<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyApBD2H3kLnqI9NsiUW_cn60wwzIBwsVSk",
    authDomain: "riveraproductsapp.firebaseapp.com",
    databaseURL: "https://riveraproductsapp.firebaseio.com",
    projectId: "riveraproductsapp",
    storageBucket: "riveraproductsapp.appspot.com",
    messagingSenderId: "946098361984",
    appId: "1:946098361984:web:4f7202bc926da707b2f865",
    measurementId: "G-QHM8J9JVR9"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script type="text/javascript" src="js/functions.js"></script>
  
</body>
</html>
