<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="landingpage.css">

    <title>Store page</title>
      </head>
        <body>
          <nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
            <div class="container-xxl">
              <!-- navbar brand / title -->
              <a class="navbar-brand" href="landingpage.css">
                <span class="text-secondary fw-bold">
                  <i class="bi bi-book-half"></i>
                  Virtual Bookstore
                </span>
              </a>
              <!-- toggle button for mobile nav -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <!-- navbar links -->
              <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="storeview.php">Store</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="cartt.php">Cart</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="checkoutview.php">Checkout</a>
                  </li>
            
                  <li class="nav-item ms-2 d-none d-md-inline">
                    <a class="btn btn-secondary" href="loginview.php">Sign out</a>
                  </li>

                  
                  
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
              <div class="row">
                <div class="col order-1">
                  <div class="card" style="width: 18rem;">
                      <img src="https://jamesclear.com/wp-content/uploads/2016/08/AnythingYouWant-by-DerekSivers.jpg" class="card-img-top" alt="picture">
                      <div class="card-body">
                        <h5 class="card-title"><a href="aboutt.php">Anything You Want</a></h5>
                        <p class="card-text">Derek Sivers<br><i>Hardcover<br>Ghc39.99</i></p>
                        <a href="cartt.php" class="btn btn-primary">Add to cart</a>
                      </div>
                    </div>
                </div>
                <div class="col order-2"><div class="card" style="width: 18rem;">
                  <img src="https://jamesclear.com/wp-content/uploads/2016/08/Adapt-by-TimHarford.jpg" class="card-img-top" alt="picture">
                  <div class="card-body">
                    <h5 class="card-title"><a href="aboutt.php">Adapt</a></h5>
                    <p class="card-text">Tim Harford<br><i>eBook<br>Ghc19.99</i></p>
                    <a href="cartt.php" class="btn btn-primary">Add to cart</a>
                  </div>
                </div>
                </div>
                <div class="col order-3"><div class="card" style="width: 18rem;">
                  <img src="https://jamesclear.com/wp-content/uploads/2015/10/AreYouFullyCharged-by-TomRath.jpg" class="card-img-top" alt="picture">
                  <div class="card-body">
                    <h5 class="card-title"><a href="aboutt.php">Are You Fully Charged?</a></h5>
                    <p class="card-text">Tom Rath<br><i>eBook<br>Ghc29.99</i></p>
                    <a href="cartt.php" class="btn btn-primary">Add to cart</a>
                  </div>
                </div>
                </div>
              </div>
            </div>
     
        </body>
</html>