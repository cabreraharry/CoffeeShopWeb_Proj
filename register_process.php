tu<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if (strlen($first_name) > 50 || strlen($last_name) > 50) {
        header("Location: register.php?error=First and last name should have max 50 characters");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: register.php?error=Invalid email address");
        exit;
    }

    if (!preg_match("/^[0-9]{11}$/", $mobile_number)) {
        header("Location: register.php?error=Mobile number should be 11 digits");
        exit;
    }

    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{11,}$/", $password)) {
        header("Location: register.php?error=Password should have at least 11 characters, one uppercase letter, one number, and one special character");
        exit;
    }

    if ($password !== $confirm_password) {
        header("Location: register.php?error=Passwords do not match");
        exit;
    }

    header("Location: login.php?success=Registration successful. Please log in.");
    exit;
}
?>