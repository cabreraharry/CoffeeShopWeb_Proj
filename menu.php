<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - My Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-black" style="background-image: url('img/bg.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; background-attachment: fixed;">

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="img/CoffeeLogo.png" alt="logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="apps.php">Apps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <div class="ml-auto">
            <a href="login.html" class="btn btn-outline-warning me-2">Log in</a>
            <a href="register.html" class="btn btn-warning text-white">Sign Up</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card bg-dark text-white">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                        <img src="img/espresso.png" class="img-fluid" alt="Espresso">
                    </div>
                    <div class="ms-3">
                        <h5 class="card-title">Espresso Coffee</h5>
                        <p class="card-text">With Milk</p>
                        <p class="card-text">$5.2</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add more card elements -->
        <div class="col-lg-4">
            <div class="card bg-dark text-white">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                        <img src="img/americano.png" class="img-fluid" alt="Americano">
                    </div>
                    <div class="ms-3">
                        <h5 class="card-title">Americano Coffee</h5>
                        <p class="card-text">Regular</p>
                        <p class="card-text">$4.5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card bg-dark text-white">
                <div class="card-body d-flex align-items-center">
                    <div class="rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                        <img src="img/latte.png" class="img-fluid" alt="Latte">
                    </div>
                    <div class="ms-3">
                        <h5 class="card-title">Latte Coffee</h5>
                        <p class="card-text">With Foam</p>
                        <p class="card-text">$5.0</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Content Goes Here -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>
</html>
