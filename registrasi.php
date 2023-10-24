<?php 
    require 'function.php';

// Cek tombol submit ditekan / tidak
    if(isset($_POST["register"])) {

        // Cek data Error atau tidak
        if(registrasi($_POST) > 0 ) {
            echo "
                <script>
                    alert('User baru berhasil Daftar');
                    document.location.href = 'login.php';
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
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
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Halaman Registrasi</title>

</head>
<body>

    <div class="container"> 
        <div class="register">
            <h1>Daftar disini!</h1>
        </div>

        <div class="register">
            <p>sudah mendaftar? <a href="login.php" class="link-masuk">Masuk</a></p>
        </div>

        <!-- CAROUSEL -->
        <div class="box-register">
            <div class="row">
                
                <div class="col-sm-6">      
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">        
                            <ol class="carousel-indicators">           
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>            
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>           
                            </ol>
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/carousel-image-1.jpg" class="d-block" alt="image-1">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Buah 1</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                      
                                <div class="carousel-item">
                                    <img src="assets/img/carousel-image-2.jpg" class="d-block" alt="image-2">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Buah 2</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                
                                <div class="carousel-item">
                                    <img src="assets/img/carousel-image-3.jpg" class="d-block" alt="image-3">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Buah 3</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                    </div>
                                </div>
                                    
                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                    
                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>   

                        </div>
                    </div>
                </div>
        
                <!-- FORM SIGN UP -->
                <div class="col-sm-6">
                    <form action="" method="post">
                        
                        <!-- Username Input -->
                        <div class="form-group col-md-12">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" autocomplete="off" class="form-control" 
                            placeholder="Masukan Username" required>
                        </div>

                        <!-- password Input -->
                        <div class="form-group col-md-12">
                            <label for="pass">Password :</label>
                            <input type="password" class="form-control" name="pass"  id="pass" autocomplete="off" 
                            placeholder="Masukan Password" required>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="pass2">Konfirmasi Password :</label>
                            <input type="password" class="form-control" name="pass2" id="pass2" 
                            placeholder="Ulang Password" required>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <button class="btn btn-daftar" type="submit" name="register">Daftar</button> 
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        
    </div>
    
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
