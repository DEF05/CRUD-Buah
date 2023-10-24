<?php 

  session_start();

  if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }

  require 'function.php';

   // tombol cari
   if(isset($_POST["cari"])) {
    $buah = cari($_POST["keyword"]);
  }

?>

<!doctype html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>UAS Pemrograman WEB</title>

</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Brand -->
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Belajar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="daftar_buah.php">Daftar Buah</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
          aria-haspopup="true" aria-expanded="false"> Menu
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="form_email.php">Hubungi Saya</a>
            <a class="dropdown-item" href="logout.php">Log Out</a>
          </div>
        </li>
        
      </ul>
    </div>
    </div>
  </nav>

  <div class="container">
    <!-- JUMBOTRON-->
    <div class="jumbotron gambar">
      <h1>BELAJAR JUMBOTRON</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad beatae sequi optio suscipit, 
        modi ipsa ducimus ex placeat similique nemo officia iste consequatur asperiores, 
        quibusdam ipsam architecto. Natus, quidem similique.</p>
      <p>
        <a class="btn btn-primary btn-lg" href="daftar_buah.php">Lihat Daftar</a>
      </p>
    </div>

    <!-- KOLOM -->
    <div class="kolom">
      <div class="row">
        <div class="col-md-4">
          <h4>KOLOM 1</h4>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Consequatur sint vitae doloribus ut aspernatur iure fugiat voluptates, 
          exercitationem quidem sit iste nisi vel rerum totam? Molestias earum veniam mollitia quod?
        </div>
  
        <div class="col-md-4">
          <h4>KOLOM 2</h4>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Consequatur sint vitae doloribus ut aspernatur iure fugiat voluptates, 
          exercitationem quidem sit iste nisi vel rerum totam? Molestias earum veniam mollitia quod?
        </div>
  
        <div class="col-md-4">
          <h4>KOLOM 3</h4>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Consequatur sint vitae doloribus ut aspernatur iure fugiat voluptates, 
          exercitationem quidem sit iste nisi vel rerum totam? Molestias earum veniam mollitia quod?
        </div>
      </div>
    </div>

  </div>
  
  <hr>
  
  <div class="container">   
    <!-- CARD -->
    <div class="row">
      <div class="col-sm-2">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <img src="assets/img/card-image-1.jpg" class="card-img-top" alt="image-1">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text.</p>
            <!-- <a href="#" class="btn btn-primary">Go There</a> -->
          </div>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <img src="assets/img/card-image-2.jpg" class="card-img-top" alt="image-2">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text.</p>
            <!-- <a href="#" class="btn btn-primary">Go There</a> -->
          </div>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <img src="assets/img/card-image-3.jpg" class="card-img-top" alt="image-3">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text.</p>
            <!-- <a href="#" class="btn btn-primary">Go There</a> -->
          </div>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <img src="assets/img/card-image-4.jpg" class="card-img-top" alt="image-4">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text.</p>
            <!-- <a href="#" class="btn btn-primary">Go There</a> -->
          </div>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <img src="assets/img/card-image-5.jpg" class="card-img-top" alt="image-5">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text.</p>
            <!-- <a href="#" class="btn btn-primary">Go There</a> -->
          </div>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="card">
          <div class="card-header">
            Header
          </div>
          <img src="assets/img/card-image-6.jpg" class="card-img-top" alt="image-6">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text.</p>
            <!-- <a href="#" class="btn btn-primary">Go There</a> -->
          </div>
        </div>
      </div>

    </div>

  </div>
  <hr>

  <!-- Footer -->
  <footer class="footer">
    <h6>ADDITIONAL INFORMATION</h6>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Consequatur sint vitae doloribus ut aspernatur iure fugiat voluptates.</p>
      
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Consequatur sint vitae doloribus ut aspernatur iure fugiat voluptates.</p>
    <h6>CONTACT</h6>
    
    <p>
      Bandung, Jawa Barat <br>
      info@myinfo.com<br>
      + 01 234 567 88<br>
      + 01 234 567 89<br>        
    </p>
    
    <p><center>&#169; Defri Pramana Putra | Privacy Policy | Terms of Service</p>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>