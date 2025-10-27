<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registro'])) {
    
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    // Encriptar de forma segura
    $hash = password_hash($clave, PASSWORD_DEFAULT);

    // Insertar en la base de datos
    $sentencia = $conexion->prepare("INSERT INTO usuarios (apellido, nombre, correo, clave, creado) VALUES (?, ?, ?, ?, NOW())");
    $sentencia->bind_param("ssss", $apellido, $nombre, $correo, $hash);
    $sentencia->execute();

    echo "Usuario registrado con contraseña segura.";
    header("Location: ./");

}
