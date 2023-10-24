<?php

    session_start();

    if(!isset($_SESSION["login"])) {
      header("Location: login.php");
      exit;
    }
  
    require 'function.php';

// Cek tombol submit ditekan / tidak
    if(isset($_POST["submit"])) {

        // Cek data Error atau tidak
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil ditambah');
                    document.location.href = 'daftar_buah.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal ditambah!');
                document.location.href = 'tambah_data.php';
            </script>
        ";
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

  <title>Tambah data Buah</title>

</head>
<body>
    
    <div class="container"> 
        <div class="register">
            <h1>Tambah Data Buah</h1>
            <hr>
        </div>
        
        <div class="tambah_data">
            <a class="btn-tambah_data" href="daftar_buah.php">Kembali</a>
            <hr>
        </div>
        
        <form action="" method="post">
            <div class="box-register">
                <div class="row">
                    <div class="col-sm-6">
                        
                        <div class="form-group col-md-10">
                            <label for="nama">Buah :</label>
                            <input type="text" name="nama" id="nama" autocomplete="off" class="form-control" 
                            placeholder="Masukan Nama Buah" required>
                        </div>

                        <div class="form-group col-md-10">
                            <label for="jenis">Jenis Buah :</label>
                            <input type="text" class="form-control" name="jenis"  id="jenis" autocomplete="off" 
                            placeholder="Masukan Jenis Buah" required>
                        </div>
                    </div>
                
                    <div class="col-sm-6">     
                        <div class="form-group col-md-10">
                            <label for="kategori">Kategori :</label>
                            <select class="form-control" name="kategori" id="kategori">
                                <option selected>IMPOR</option>
                                <option>LOKAL</option>
                            </select>
                        </div>
                        
                        <div class="form-group col-md-10">
                            <label for="stok">Stok :</label>
                            <input type="text" class="form-control" name="stok"  id="stok" autocomplete="off" 
                            placeholder="Masukan Stok Buah" required> 
                        </div>  
                    </div> 
                    
                    <button class="btn btn-tambah" type="submit" name="submit">Tambah</button> 
                        
                </div>
            </div>
        </form>
    </div>

    <hr>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>