<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['record'])) {
    
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    

    // Securely encrypt
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    // Insert in database
    $stmt = $conn->prepare("INSERT INTO users (mail, pass, lastname, firstname, created) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $mail, $hash, $lastname, $firstname);
    $stmt->execute();

    echo "Usuario registrado con contraseña segura.";
    header("Location: ./");

}
