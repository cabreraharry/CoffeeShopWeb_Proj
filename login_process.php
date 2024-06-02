<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION["user_id"] = $id;
            $_SESSION["email"] = $email;

            header("Location: index.php");
        } else {
            header("Location: login.php?error=Invalid credentials");
        }
    } else {
        header("Location: login.php?error=Invalid credentials");
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>
