<?php 

session_start();

require 'function.php';

// cek cookie
if(isset($_COOKIE['no']) && isset($_COOKIE['key'])) {
    $no = $_COOKIE['no'];
    $key = $_COOKIE['key'];

    // ambil username
    $result = mysqli_query($conn, "SELECT username FROM users WHERE
    id = $no");

    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if($key === hash('sha512', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
    }
    
    // Cek tombol submit ditekan / tidak
    if(isset($_POST["login"])) {
        
        $username = $_POST["username"];
        $pass = $_POST["pass"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE 
        username = '$username'");

        // Cek username
        if(mysqli_num_rows($result) === 1) {

            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($pass, $row["pass"])) {

                //set session
                $_SESSION["login"] = true;

                // Cek Checkbox
                if (isset($_POST['remember'])) {

                    // buat Cookie
                    setcookie('no', $row['id'], time()+60*60*24*30);
                    setcookie('key', hash('sha512', $row['username']), time()+60*60*24*30);
                }

                header("Location: index.php");
                exit;
            }
        }

        $error = true;
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

  <title>Halaman Login</title>

</head>
<body>
    
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="assets/img/img-login.jpg" class="img-fluid" alt="Sample image">
            </div>
            
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        
                <form action="" method="post">
                    
                    <div class="divider d-flex align-items-center my-4">
                        <h1 class="fw-normal">Selamat datang di MyBuah</h1>
                    </div>
                    <h2 class="fw-normal">Login</h2>
                    <hr>
                    
                    <!-- Jika Username atau Password salah -->
                    <?php if( isset($error) ) : ?>
                        <script>
                            alert ('Username atau Password Salah');
                        </script>
                    <?php endif;?>

                    <!-- Username Input -->
                    <div class="form-login mb-4">
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" autocomplete="off" class="form-control"
                        placeholder="Masukan Username" value="" required>
                    </div>
                    
                    <!-- Password Input -->
                    <div class="form-login mb-3">
                        <label class="form-label" for="pass">Password :</label>
                        <input type="password" name="pass" id="pass" class="form-control" 
                        placeholder="Masukan password" value="" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>

                    <!-- Button Login / Register -->
                    <div class="login-register">
                        <button type="submit" name="login" class="btn-login btn-lg">Login</button>
                        <p>Belum memiliki akun? <a href="registrasi.php" class="link-danger">Daftar</a></p>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
        
    <!-- Footer -->
    <footer class="footer">
        <p><center>&#169; Defri Pramana Putra. All rights reserved.</p>
    </footer>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
