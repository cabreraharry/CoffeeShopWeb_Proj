<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<body class="bg-black">

    <div class="login-container">
        <h2 class="text-white">Login</h2>
        <form action="login_process.php" method="post">
            <input type="text" name="username" class="form-control" placeholder="Username" required><br>
            <input type="password" name="password" class="form-control" placeholder="Password" required><br>
            <button type="submit" class="btn btn-warning">Login</button>
        </form>
        <p class="text-white">Don't have an account? <a href="register.php">Sign up here</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>
</html>
