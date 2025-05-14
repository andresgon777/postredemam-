<?php
require_once 'modelo/conexion.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $ciudad = $_POST['ciudad'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $nacimiento = $_POST['nacimiento'];

    $hash = password_hash($contrasena, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (id_rol, nom_usuario, telefono_usuario, contraseña_usuario, correo_usuario, fecha_nac_usuario, ciudad)
            VALUES (2, :nombre, :telefono, :contrasena, :correo, :nacimiento, :ciudad)";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':contrasena', $hash);
    $stmt->bindParam(':correo', $correo);
    $stmt->bindParam(':nacimiento', $nacimiento);
    $stmt->bindParam(':ciudad', $ciudad);

    try {
        $stmt->execute();
        header("Location: login.php?registro=exitoso");
        exit();
    } catch (PDOException $e) {
        header("Location: register.php?error=1");
        exit();
    }
}
?>
