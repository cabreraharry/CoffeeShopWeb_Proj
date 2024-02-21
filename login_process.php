<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];


    if ($username === "admin" && $password === "password") {

        session_start();
        $_SESSION["username"] = $username;

        header("Location: index.php");
        exit;
    } else {

        header("Location: login.php?error=Invalid credentials");
        exit;
    }
}
?>