<?php require ('connect.php');
 
  //create connection
  $con = new mysqli(servername, username, password, dbname);

  if($con->connect_error){
    echo "unsuccessful";
  }

  $error = "";
  $match = "";

 if(isset($_POST['create'])){
    $firstname=        $_POST['firstname'];
    $lastname=         $_POST['lastname'];
    $telephone=        $_POST['telephone'];
    $email=            $_POST['email']; 
    $password=         $_POST['password'];
    $confirmpassword=  $_POST['confirmpassword'];
  
    
    if (($password == $confirmpassword) && !(empty($firstname)||empty($lastname)||empty($telephone)||empty($email)||
        empty($password)||empty($confirmpassword))) {
        $sql = "INSERT INTO `Customer`(`fname`, `lname`, `telephone`, `email`, `password`) VALUES ('$firstname','$lastname','$telephone','$email','$password')";
        $result = $con->query($sql);
  
      if ($result) {
          header("location:loginview.php");
       } else {
          echo "Error: " . $sql . ":-" . mysqli_error($con);
       }
    } else {
        if (empty($password) &&  empty($confirmpassword)) {
          $match = "";
        } else {
          $match =  "passwords dont match";
        }
    }
 
   
     $result='';
     if (empty($firstname)||empty($lastname)||empty($telephone)||empty($email)||
     empty($password)||empty($confirmpassword)){
       $error="enter required fields!";
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
    <link rel="stylesheet" href="register.css">

    <title>Register Page</title>
  </head>
  <body>
    <div class="card col-4" id="login-card">
      <small style = "color:red"><?=$error ?></small><br>
      <small style = "color:red"><?=$match ?></small><br>
      <div class="card-body">
        <form class="row g-3" method= 'POST' action= "">
          <h1>Register</h1>
          <div class="row">
            <div class="col-md-6">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" name='firstname' class="form-control" id="firstname">
            </div>
            <div class="col-md-6">
              <label for="firstname" class="form-label">Last Name</label>
              <input type="text" name='lastname' class="form-control" id="lastname">
            </div>
          </div>
          <div class="col-md-12">
          <label for="tele1" class="form-label">Telephone</label>
          <input type="text" name= 'telephone' class="form-control" id="tele1">
        </div>
        <div class="col-md-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name ='email' class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" name='password' class="form-control" id="inputPassword4">
        </div> 
        <div class="col-md-6"> 
          <label for="inputPassword5" class="form-label">Confirm Password</label>
          <input type="password" name='confirmpassword'class="form-control" id="inputPassword5">
        </div>
        <div class="col-12" id="button1">
          <input type="submit" name='create' class="btn btn-primary" value = "Register">
          <p>Already have an account ? <a href="loginview.php">Log in</a></p> 
    
        </div>
            </label>
          </div>
        </div>
      </form>    
      </div>
    </div>
   

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




