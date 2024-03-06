<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Register</h2>
                    <form action="register_process.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name" maxlength="50" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="last_name" class="form-control" placeholder="Last Name" maxlength="50" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number" pattern="[0-9]{11}" title="Mobile number should be 11 digits" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d!@#$%^&*()_+]{11,}$" title="Password should have at least 11 characters, one uppercase letter, one number, and one special character" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block">Register</button>
                    </form>
                    <p class="mt-3 text-center">Already have an account? <a href="login.php">Login here</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>
</html>
