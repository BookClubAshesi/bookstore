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

    <title>Landing Page</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
        <div class="container-xxl">
          <!-- navbar brand / title -->
          <a class="navbar-brand" href="landingpage.css">
            <span class="text-secondary fw-bold">
              <i class="bi bi-book-half"></i>
              Virtual  Bookstore
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

      <section id="intro">
        <div class="container-lg">
          <div class="row g-4 justify-content-center align-items-center">
            <div class="col-md-5 text-center text-md-start">
              <h1>
                <div class="display-2">Welcome to</div>
                <div class="display-5 text-muted">The Virtual Bookstore</div>
              </h1>
              <p class="lead my-4 text-muted">Get access to 100+ variety of online and hardcopy books at the most convenient prices! Connect with other readers and share your wonderful reviews.</p>
        
            </div>
          <div class="col-md-5 text-center d-none d-md-block">
         
              <span class="tt" data-bs-placement="bottom" title="Net Ninja Pro book cover">
                <img src="https://cdn.shopify.com/s/files/1/0473/4369/8069/products/BW-OCEAN-2_11c03ac3-44e2-489e-a4bf-a38cc91fde10_1000x.png?v=1615464938" class="img-fluid img-cus" alt="ebook">
              </span>
            </div>
          </div>
        </div>
      </section>



        <!-- recommended -->
  <section id="recommended" class="bg-light mt-5">
    <div class="container-lg">
      <div class="text-center">
        <h2>Recommended for you</h2>
        <p class="lead text-muted">Based on top reviewed books</p>
      </div>
      <div class="row my-5 g-0 align-items-center justify-content-center">
        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0">
            <div class="card-body text-center py-4">
              <div class="card" style="width: 18rem;">
                <img src="https://s26162.pcdn.co/wp-content/uploads/2018/12/educated.jpg" class="card-img-top" alt="ebook">
                <div class="card-body">
                  <h5 class="card-title">Educated</h5>
                  <p class="card-text">Tara Westover <br> <i>Ghc29.99</i></p>
                </div>
              </div>
              <a href="cartt.php" class="btn btn-outline-primary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>

        <div class="col-9 col-lg-4">
          <div class="card border-primary border-2">
            <div class="card-body text-center py-5">
              <div class="card" style="width: 24rem;">
                <img src="https://s26162.pcdn.co/wp-content/uploads/2018/12/A10Lv5SzTL.jpg" class="card-img-top" alt="ebook">
                <div class="card-body">
                  <h5 class="card-title">Frankenstein in Baghdad</h5>
                  <p class="card-text">Ahmed Saadawi<br> <i>Ghc39.99</i></p>
                </div>
              </div>
              <p class="card-text mx-5 text-muted d-none d-lg-block"></p>
              <a href="cartt.php" class="btn btn-outline-primary btn-lg mt-3">
                Buy Now
              </a>
            </div>
          </div>
        </div>

        <div class="col-8 col-lg-4 col-xl-3">
          <div class="card border-0">
            <div class="card-body text-center py-4">
              <div class="card" style="width: 18rem;">
                <img src="https://s26162.pcdn.co/wp-content/uploads/2018/12/9781911344926.jpg" class="card-img-top" alt="ebook">
                <div class="card-body">
                  <h5 class="card-title">Insomnia</h5>
                  <p class="card-text">Marina Benjamin <br> <i>Ghc49.99</i></p>
                </div>
              </div>
              <a href="cartt.php" class="btn btn-outline-primary btn-lg mt-3"> 
                Buy Now
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="bg-light">
    <div class="container">
      <div class="text-center">
        <h2>Stay in The Loop by Reading More Books</h2>
        <p class="lead">Click on the view all books to see all the amazing books we have in store for you</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="text-muted my-4">Get access to 100+ variety of online and hardcopy books at the most convenient prices! Connect with other readers and share your wonderful reviews.</p>
        </p>

          <a class="btn btn-primary" href="storeview.php">View All Books</a>
        </div>
      </div>
    </div>
  </section>


  <footer class="footer-main p-2 d-flex justify-content-center flex-column mt-4 bg-light">
    <p>
      Email : support@bookclub.com <br>
      1 University Avenue,Berekuso
    </p>
    <div>
      <i class="fab fa-instagram me-3"></i>
      <i class="fab fa-linkedin-in"></i>
    </div>
  </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>