<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="cart.css">
    <script src="cart.js" async></script>

    <title>Cart page</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
        <div class="container-xxl">
          <!-- navbar brand / title -->
          <a class="navbar-brand" href="landingpage.html">
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

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Item</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>
              <img src="https://jamesclear.com/wp-content/uploads/2016/08/AnythingYouWant-by-DerekSivers.jpg" alt="eBook" width="100" height="100"><br> Anything You Want
            </td>
            <td>Ghc39.99</td>
            <td> 
              <input type="number" value="1"> 
              <button type="button" class="btn btn-danger">Remove</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>
              <img src="https://jamesclear.com/wp-content/uploads/2016/08/Adapt-by-TimHarford.jpg" alt="eBook" width="100" height="100"><br> Adapt
            </td>
            <td>Ghc19.99</td>
            <td>
              <input type="number" value="1"> 
              <button type="button" class="btn btn-danger">Remove</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>
              <img src="https://jamesclear.com/wp-content/uploads/2015/10/AreYouFullyCharged-by-TomRath.jpg" alt="eBook" width="100" height="100"><br> Are You Fully Charged?
            </td>
            <td>Ghc29.99</td>
            <td>
              <input type="number" value="1"> 
              <button type="button" class="btn btn-danger">Remove</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
      
      <div class="card col-2" id="total-card">
        <div class="card-body">
          <h3>Total</h3>
          <span>Ghc 89.97</span>
      </div>
        </div>
        <div class="card col-1" id="purchase">
          <a class="btn btn-primary" href="checkoutview.php">Purchase</a>
        </div>
  </body>
</html>