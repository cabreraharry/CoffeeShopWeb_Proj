<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-black">

    <div class="register-container">
        <h2 class="text-white">Register</h2>
        <form action="register_process.php" method="post">
            <input type="text" name="first_name" class="form-control" placeholder="First Name" maxlength="50" required><br>
            <input type="text" name="last_name" class="form-control" placeholder="Last Name" maxlength="50" required><br>
            <input type="email" name="email" class="form-control" placeholder="Email Address" required><br>
            <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" pattern="[0-9]{11}" title="Mobile number should be 11 digits" required><br>
            <input type="password" name="password" class="form-control" placeholder="Password" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{11,}$" title="Password should have at least 11 characters, one uppercase letter, one number, and one special character" required><br>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required><br>
            <button type="submit" class="btn btn-warning">Register</button>
        </form>
        <p class="text-white">Already have an account? <a href="login.php">Login here</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>

</html>
