<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Coffee Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-black">

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/CoffeeLogo.png" alt="logo" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Apps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="ml-auto">
            <a href="login.php" class="btn btn-outline-warning me-2">Log in</a>
            <a href="register.php" class="btn btn-warning text-white">Sign Up</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 col-md-12 text-white">
            <h1 class="mb-4">Start your day with a black coffee</h1>
            <p class="mb-4">Choose and taste delicious coffee from the best beans.</p>
            <a href="#" class="btn btn-warning mr-2">Order Now</a>
            <a href="#" class="btn btn-outline-warning">Learn About Us</a>
        </div>
    </div>
</div>

<!-- CAROUSEL -->
<div id="coffeeCarousel" class="carousel slide bg-transparent border border-warning mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container mt-2 mb-3">
                <h2 class="text-center text-white mb-4">Popular Now</h2> <!-- "Popular Now" Message -->
                <div class="row justify-content-center">
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
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="container mt-2 mb-3">
                <div class="row justify-content-center">
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
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#coffeeCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#coffeeCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
</body>
</html>
