<?php require ('connect.php');

	//create connection
    $con = new mysqli(servername, username, password, dbname);

    if($con->connect_error){
      echo "unsuccessful";
    }

	if (isset($_POST['submit'])){
		$title = $_POST['title'];
		$isbn = $_POST['isbn'];
		$author = $_POST['author'];
		$booktype = $_POST['booktype'];
        $price = $_POST['price'];
        


		$sql = "INSERT INTO `Book`(`title`,`isbn`,`author`,`booktype`,`price`) VALUES ('$title','$isbn','$author','$booktype','$price')";
        $result = $con->query($sql);
  
		if ($result) {
            header("location:storeview.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="adminupdate.css">

    <title>Admin Update Page</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light pt-5 pb-4">
        <div class="container-xxl">
            <!-- navbar brand / title -->
            <a class="navbar-brand" href="landingpage.html">
                <span class="text-secondary fw-bold">
                    <i class="bi bi-book-half"></i>
                    Admin dashboard
                </span>
            </a>
            <!-- toggle button for mobile nav -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
        </div>
    </nav>

    <div class="card col-5" id="login-card">
        <div class="card-body">
            <form class="row g-3" method= 'POST' action= "">
                <h1>Add new book</h1>
                <div class="row">
                    <div class="col-md-10">
                        <label for="title" class="form-label">Book title</label>
                        <input type="text" name = "title" class="form-control" id="title">
                    </div>
                    <div class="col-md-10">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" name ="isbn" class="form-control" id="isbn">
                    </div>
                </div>
                <div class="col-md-10">
                    <label for="inputAuthor" class="form-label">Author</label>
                    <input type="text" name ="author" class="form-control" id="inputAuthor">
                </div>
                <div class="col-md-10">
                    <label for="Hardcover" class="form-label">Book type</label>
                    <select id="eBook" name="booktype" class="form-select">
                        <option selected>Choose...</option>
                        <option>Hardcover</option>
                        <option>eBook</option>
                    </select>
                </div>
                <div class="col-md-10">
                    <label for="inputPrice" class="form-label">Price(Ghc)</label>
                    <input type="text" name="price" class="form-control" id="inputPrice">
                </div>
                <div class="d-grip gap-1 d-md-flex justify-content-md-end ">
                    <input type= "submit" class="btn btn-primary" name = "submit"></a>
                </div>
        </div>
        </label>
    </div>
    </div>
    </form>
    </div>
    </div>


</body>

</html>