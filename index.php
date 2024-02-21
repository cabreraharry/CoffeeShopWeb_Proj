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
  
  <!-- NAVIGATION BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
      <!-- LOGIN & SIGN UP BUTTONS -->
  <div class="top-buttons">
    <button type="button" class="btn btn-outline-warning" style="margin-right: 8px;" onclick="window.location.href='login.php'">Log in</button>
    <button type="button" class="btn btn-warning text-white" onclick="window.location.href='register.php'">Sign Up</button>
  </div>

  <!-- Logo -->
  <div>
    <a class="navbar-brand" href="index.php">
      <img class="d-inline-block align-top" height="100" width="100" src="img/CoffeeLogo.png" alt="logo">
    </a>
  </div>
      <!-- navbar links -->
      <div class="container">
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="/login.php">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="/login.php">Menu</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="/login.php">Apps</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-light" href="/login.php">Contact</a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>

  <!-- INTRO MESSAGE -->
  <div class="container mt-5 text-white">
      <h1><strong>Start your day with a black coffee</strong></h1>
      <p>choose and taste delicious coffee from the best beans.</p>
      <button type="button" class="btn btn-warning text-white" style="margin-right: 8px;" onclick="window.location.href='login.php'">Order Now</button>
      <button type="button" class="btn btn-outline-warning text-white" onclick="window.location.href='login.php'">Learn About Us</button>
  </div>

<!-- CAROUSEL -->
<div id="coffeeCarousel" class="carousel m-5 slide bg-transparent border border-warning mt-5" data-bs-ride="false"z>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container mt-2 mb-3 ">
        
        <!-- "Popular Now" Message -->
        <div class="row justify-content-center">
          <h2 class="text-center text-white">Popular Now</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <div class="card d-flex bg-dark">
              <img src="img/espresso.png" class="card-img-left rounded-circle" alt="Espresso">
              <div class="card-body text-white">
                <h5 class="card-title">Espresso Coffee</h5>
                <p class="card-text text-secondary">With Milk</p>
                <p class="card-text text-warning">$5.2</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card d-flex bg-dark">
              <img src="img/espresso.png" class="card-img-left rounded-circle" alt="Espresso">
              <div class="card-body text-white">
                <h5 class="card-title">Black Coffee</h5>
                <p class="card-text text-secondary">With Milk</p>
                <p class="card-text text-warning">$5.2</p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card d-flex bg-dark"> 
              <img src="img/espresso.png" class="card-img-left rounded-circle" alt="Espresso">
              <div class="card-body text-white">
                <h5 class="card-title">Black Coffee</h5>
                <p class="card-text text-secondary">With Milk</p>
                <p class="card-text text-warning">$5.2</p>
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