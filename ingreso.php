<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ingreso'])) {
    
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    // Buscar usuario
    $sentencia = $conexion->prepare("SELECT clave FROM usuarios WHERE correo = ?");
    $sentencia->bind_param("s", $correo);
    $sentencia->execute();
    $sentencia->bind_result($hash);
    $sentencia->fetch();

    if ($hash && password_verify($clave, $hash)) {
        echo "Login correcto.";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }

}
