<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio - Postres de Mamá</title>
  <link rel="stylesheet" href="css/estiloInicio.css"> 
</head>
<body>
  <header class="header-con-imagen">
    <div class="barra-navegacion">
      <img class="logo" src="img/LogoPostres.png" alt="Postres de Mamá">
      <nav>
        <a href="vista/inicio.php">Inicio</a>
        <a href="#">Ubicación</a>
        <a href="#">Ocasión</a>
        <a href="#">Mi cuenta</a>
        <a href="controlador/logout.php">Cerrar Sesión</a>
      </nav>
    </div>

    <div class="carrusel">
      <img src="img/POSTRE1.jpg" alt="Postre 1" class="active">
      <img src="img/POSTRE3.jpg" alt="Postre 3">
      <img src="img/POSTRE4.jpg" alt="Postre 4">
    </div>
  </header>

  <div class="categorias">
    <button>Promociones</button>
    <button>Postres</button>
    <button>Tortas</button>
    <button>Galletería</button>
    <button>Comidas de sal</button>
    <button>Navidad</button>
  </div>

  <main class="productos">
    <div class="producto">
      <img src="img/postre7.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre8.jpg" alt="Producto 2">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre9.jpg" alt="Producto 3">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre10.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre11.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre12.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
  </main>
  <main class="productos">
    <div class="producto">
      <img src="img/postre7.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre8.jpg" alt="Producto 2">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre9.jpg" alt="Producto 3">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre10.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre11.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
    </div>
    <div class="producto">
      <img src="img/postre12.jpg" alt="Producto 1">
      <h3>Nombre del producto</h3>
      <p>$Precio producto</p>
      <button>Comprar ahora</button>
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
