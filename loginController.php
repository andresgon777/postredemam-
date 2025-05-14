<?php
require_once 'modelo/conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM usuario WHERE nom_usuario = :nombre";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($contrasena, $usuario['contraseña_usuario'])) {
            session_start();
            $_SESSION['usuario'] = $usuario['nom_usuario'];
            header("Location: inicio.php");
            exit();
        } else {
            header("Location: login.php?error=clave");
            exit();
        }
    } else {
        header("Location: login.php?error=usuario");
        exit();
    }
}
?>