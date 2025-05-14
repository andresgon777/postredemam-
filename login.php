<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="css/estiloLogin.css">
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
      <div class="contenedor-flex">
        <form method="POST" action="controlador/loginController.php">
          <h2>Iniciar Sesión</h2>
          <input type="text" name="nombre" placeholder="Nombre" required>
          <input type="password" name="contrasena" placeholder="Contraseña" required>

          <?php if (!empty($_GET['error']) && $_GET['error'] == 'usuario'): ?>
            <div class="mensaje rojo">El usuario no está registrado.</div>
          <?php elseif (!empty($_GET['error']) && $_GET['error'] == 'clave'): ?>
            <div class="mensaje rojo">Contraseña incorrecta.</div>
          <?php endif; ?>

          <div class="botones">
            <a href="vista/olvido.php" class="btn">¿Olvidaste la contraseña?</a>
            <button type="submit" class="btn rosa">Iniciar Sesión</button>
          </div>

          <a href="vista/register.php" class="btn">Registrarse</a>
        </form>
      </div>
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