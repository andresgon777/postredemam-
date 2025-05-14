<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>¿Olvidaste tu contraseña?</title>
  <link rel="stylesheet" href="css/estiloOlvido.css">
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
    <div class="olvido-container">
      <h2>¿Has olvidado tu contraseña?</h2>
      <p>Ingresa el correo electrónico asociado a tu cuenta para enviarte un vínculo para restablecer tu contraseña.</p>
      <form method="POST" action="#">
        <input type="email" name="correo" placeholder="Correo electrónico" required>
        <button type="submit" class="btn rosa">Enviar</button>
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