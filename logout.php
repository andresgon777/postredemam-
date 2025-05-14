<?php
session_start();        // Iniciar sesión para acceder a las variables
session_unset();        // Limpiar todas las variables de sesión
session_destroy();      // Destruir la sesión
header("Location: index.php"); // Redirigir al inicio
exit();
?>