<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['in'])) {
    
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    // Search user
    $stmt = $conn->prepare("SELECT pass FROM users WHERE mail = ?");
    $stmt->bind_param("s", $mail);
    $stmt->execute();
    $stmt->bind_result($hash);
    $stmt->fetch();

    if ($hash && password_verify($pass, $hash)) {
        echo "Login Ok.";
    } else {
        echo "Dats Invalids";
    }

}
