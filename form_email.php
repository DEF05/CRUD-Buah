<?php 
  session_start();

  if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }
  
require 'function.php';

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
        
        <title>Hubungi Kami</title>        
    </head>
<body> 

    <div class="container"> 
        <div class="register">
            <h1>Hubungi Disini</h1>
        </div>
        <hr>
        <div class="register">
            <p>Batal ? <a href="login.php" class="link-danger">kembali</a></p>
        </div>
        
        <div class="box-register">
            
            <form action="email.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Username Input -->
                        <div class="form-group col-md-12">
                            <label for="name">Nama :</label>
                            <input type="text" name="name" id="name" autocomplete="off" class="form-control" 
                            placeholder="Masukan Nama" required>
                            <!-- Email Input -->
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email">E-mail :</label>
                            <input type="email" class="form-control" name="email"  id="email" autocomplete="off" 
                            placeholder="Masukan E-mail" required>
                        </div>

                        <div class="form-group col-md-60">
                            <button class="btn btn-tambah" type="submit" name="send">Kirim</button>
                        </div>
                    </div>    


                    <div class="col-sm-6">
                        <div class="form-group col-md-12">
                            <label for="subject">Subject :</label>
                            <input type="text" name="subject" id="subject" autocomplete="off" class="form-control" 
                            placeholder="Masukan subject" required>
                        </div>

                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" cols="52  " rows="10" placeholder=" Tulis Pesan.."></textarea>
                        </div>
                    </div> 

                </div>
            </form>
        </div>
    </div>

</body>
</html>