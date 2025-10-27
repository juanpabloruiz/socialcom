<?php
session_start();

// Cambiar datos para la conexión
$conexion = mysqli_connect('localhost', 'usuario', 'clave', 'basededatos');

// Configuración de caracteres
mysqli_set_charset($conexion, 'utf8');

// Mostrar errores sin es necesario
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
