<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
     <!-- Encabezado -->
  <header>
    <nav>
      <ul>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#productos">Productos</a></li>
        <li><a href="#carrito">Carrito</a></li>
        <li><a href="#nosotros">Nosotros</a></li>

    </nav>
  </header>
  <section id="registro" style="display: none;">
      <form action="registro_usuario.php" method="POST"> 
        <h2>Registro</h2>
        <input type="text" placeholder="Cedula " name="cedula">
        <input type="email" placeholder="Correo" name="correo">
        <input type="text" placeholder="Ciudad" name="ciudad">
        <input type="text" placeholder="Direccion" name="direccion">
        <input type="text" placeholder="Celular" name="celular">
        <input type="password" placeholder="Clave" name="clave">
        <input type="submit" value="Registrarse">
    
        <input type="submit" value="Registrarse">
        <p id="mensaje-error" class="mensaje-error"></p>
      </form>
    </section>
</body>
</html>

