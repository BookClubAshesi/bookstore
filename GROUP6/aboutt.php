<?php require ('connect.php');

	//create connection
    $con = new mysqli(servername, username, password, dbname);

    if($con->connect_error){
      echo "unsuccessful";
    }

    if (isset($_POST['submit'])){
        $reviewid = $_POST['reviewid'];
        $customerid = $_POST['customerid'];
		$post = $_POST['post'];


		$sql = "INSERT INTO `Reviews`(`reviewid`,`customerid`,`post`) VALUES ('$reviewid','$customerid','$post')";
        $result = $con->query($sql);
  
		if ($result) {
            header("location:aboutt.php");
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($con);
         }
        }

?>


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

    

    <title>About Page</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
        <div class="container-xxl"  method='POST' action= "loginview.php">
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
      <div class="container">
        <div class="row">
          <div class="col">
                <div class="card mb-3" style="max-width: 700px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="https://jamesclear.com/wp-content/uploads/2016/08/AnythingYouWant-by-DerekSivers.jpg" class="img-fluid rounded-start" alt="picture">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">Anything You Want</h5>
                        <p class="card-text">Writer and entrepreneur Derek Sivers reveals what he learned in scaling his business from 0 to 20+ million in revenue. In this one-hour engaging read, you’ll learn a bunch of unconventional principles that will help you rethink the way you approach your life, work, and business.</p>
                        <a href="cartt.php" class="btn btn-primary">Add to cart</a>
                      </div>
                    </div>
                  </div>
                </div>
                <section id="reviews" class="bg-light mt-5" value="$post">
                  <div class="container-lg">
                    <div class="text-center">
                    <form method ="POST" action="">
                      <h2>Reviews</h2>
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Kindly provide your review below.</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      <div class="col-12" id="button1">
                      <input type="submit" class= "btn btn-primary my-2" name="Submit"></a>
                      </div>
                    </div>

  </body>
</html>