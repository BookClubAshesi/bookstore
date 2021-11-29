

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="checkout.css">

    <title>Checkout Page</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
        <div class="container-xxl">
          <!-- navbar brand / title -->
          <a class="navbar-brand" href="#">
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
    <div id="background"> 
      <div class="card col-5" id="payment-card" style="margin: 6% auto;">
        <div class="card-body">
      <form>
          <h2>Payment</h2>
          <br>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-5 pt-0">Payment method</legend>
          <div class="col-sm-10">
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cash" data-bs-whatever="@mdo">Cash</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#momo" data-bs-whatever="@fat">Mobile Money</button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#credit_card" data-bs-whatever="@getbootstrap">Credit Card</button>
              

              <!-- cash  -->
              <div class="modal fade" id="cash" tabindex="-1" aria-labelledby="momo" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Payment method: Cash</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Name:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Amount (book cost):</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Provide pick-up date:</label>
                          <input type="date" name="" id="">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Complete</button>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <!-- momo  -->
              <div class="modal fade" id="momo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Payment method: Momo</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Account holder:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Network:</label>
                          <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Mobile number:</label>
                          <input type="number" name="mobile_money" id="mobile_money">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Complete</button>
                    </div>
                  </div>
                </div>
              </div>
              
              
              
              <!-- credit card  -->
              <div class="modal fade" id="credit_card" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Payment method: Credit Card</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Card Number:</label>
                          <input type="text" class="form-control" id="card-number">
                        </div>
                        
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">Expiration date:</label>
                          <input type="date" name="expiration" id="expiration">
                        </div>

                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">CVV:</label>
                          <input type="password" name="cvv" id="cvv">
                        </div>

                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Complete</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="d-grip gap-1 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="landing.php">Finish</a>
              </div>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
      </form>
      </div>
      </div>
      </div>
    </div>
    </div>
  
  </body>
</html>