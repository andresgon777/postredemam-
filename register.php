<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/estiloRegister.css">
</head>
<body>

<header class="header-con-imagen">
  <div class="barra-navegacion">
    <img class="logo" src="img/LogoPostres.png" alt="Postres de Mamá">
    <nav>
      <a href="index.php">Inicio</a>
      <a href="#">Ubicación</a>
      <a href="#">Ocasión</a>
      <a href="vista/login.php">Iniciar sesión</a>
      <a href="vista/register.php">Registrarse</a>
    </nav>
  </div>

  <div class="carrusel">
    <img src="img/POSTRE1.jpg" alt="Postre 1" class="active">
    <img src="img/POSTRE3.jpg" alt="Postre 3">
    <img src="img/POSTRE4.jpg" alt="Postre 4">
  </div>
</header>

<main>
  <div class="login-container">
    <form method="POST" action="controlador/usuarioController.php">
      <h2>REGISTRAR</h2>
      <div class="campo">
      <h5>Nombre Completo</h5>
      <input type="text" name="nombre" placeholder="Nombre" required>
      </div>
      <div class="campo">
      <h5>Contraseña</h5>
      <input type="password" name="contrasena" placeholder="Contraseña" required>
      </div>
      <div class="campo">
      <h5>Confirmar Contraseña</h5>
      <input type="password" name="confirmar_contrasena" placeholder="Confirmar Contraseña" required>
      </div>
      <div class="campo">
      <h5>Ciudad</h5>
      <input type="text" name="ciudad" placeholder="Ciudad" required>
      </div>
      <div class="campo">
      <h5>Correo Electronico</h5>
      <input type="email" name="correo" placeholder="Correo" required>
      </div>
      <div class="campo">
      <h5>Telefono</h5>
      <input type="number" name="telefono" placeholder="Telefono" required>
      </div>
      <div class="campo">
      <h5>Fecha de Nacimiento</h5>
      <input type="date" name="nacimiento" placeholder="Fecha de Nacimiento" required>
      </div>
      <button type="submit" class="btn rosa">Registrar</button>
      <a href="login.php" class="btn">Volver al login</a>

      <?php if (!empty($mensaje)): ?>
          <div class="mensaje rojo"><?php echo $mensaje; ?></div>
      <?php endif; ?>
    </form>
  </div>
</main>

<footer class="footer">
  <img class="logo" src="img/LogoPostres.png" alt="Postres de Mamá">
  <div class="links">
    <h3>Contáctanos</h3>
    <a href="#">Nosotros</a>
    <a href="#">Términos y condiciones</a>
    <a href="#">Política de privacidad</a>
    <a href="#">Soporte</a>
    <a href="#">Métodos de pago</a>
  </div>
  <div class="social">
    <img src="img/instagram.jpg" alt="Instagram">
    <img src="img/whatsapp.png" alt="WhatsApp">
    <img src="img/facebook.png" alt="Facebook">
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>
