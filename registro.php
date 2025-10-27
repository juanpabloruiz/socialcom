<?php

include('conn.php');

if (isset($_POST['registro'])) {
    
    $shopname = $_POST['shopname'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    mysqli_query($conn, "INSERT INTO (shopname, lastname, firstname, mail, pass, created) VALUES ('$shopname', '$lastname', '$firstname', '$mail', '$pass', NOW())");
    header("Location: ./");
}
