<!doctype html>
    <html larg="en">
    <head>
        <meta charset="utf-8">
        <title>Rivera Products</title>
        <link rel="stylesheet" href="Principal.css">
    <body>
        <section class="form-registro">
            <h5>Registro</h5>
            <img src="Imagenes\LogoRegistro.png" width="100" height="100">
            
                <!-- NombreUsuario -->
                <input class="controls" type="text" name="nombre" value="" placeholder="Nombre">
                <!-- Apellido Paterno -->
                <input class="controls" type="text" name="apaterno" value="" placeholder="Apellido paterno">
                <!-- Apellido Materno-->
                <input class="controls" type="text" name="amaterno" value="" placeholder="Apellido materno">
                <!-- Direccion -->
                <input class="controls" type="text" name="direccion" value="" placeholder="Dirección">
                <!-- Numero -->
                <input class="controls" type="tel" pattern="[0-9]" name="telefono" maxlength="10" placeholder="Número de teléfono">
                 <!-- Usuario -->
                 <input class="controls" type="text" name="nombreUsuario" value="" placeholder="Usuario">
                  <!-- Correo eléctronico -->
                <input class="controls" type="text" name="correoE" value="" placeholder="Correo eléctronico">
                <!-- Contraseña -->
                <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña"> 
                
                <!-- Select -->
            <label for="name">Rol a tomar:</label>
            <select name="OS">
                <option value="1">Productor</option> 
                <option value="2">Usuario</option> 
             </select>
        
                <!-- Button -->
                <div class="button-op">
                    <button type="button" class="button-op1">Registrar</button>
                    <button type="button" class="button-op2">Ya tengo cuenta</button>
                  </div>
        
        </section>
    </body>

</html>