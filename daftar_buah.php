<?php 

  session_start();

  if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }
  
  require 'function.php';

  // Pagination
  // konfigurasi
  $jumlah_tampil = 5;
  $seluruh_data = count(query("SELECT * FROM buah"));
  $jumlah_page = ceil($seluruh_data / $jumlah_tampil);
  $page = (isset($_GET["page"]) ) ? $_GET["page"] : 1 ;
  $awal_data = ($jumlah_tampil * $page) - $jumlah_tampil;
  
  $buah = query("SELECT * FROM buah ORDER BY nama, jenis ASC LIMIT $awal_data, $jumlah_tampil");
  
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

  <title>Halaman Admin</title>

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
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item active">
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
    <div class="daftar-buah">
      <h1>Daftar Buah</h1>
    </div>

    <div class="tambah_data">
      <a class="btn-tambah_data" href="tambah_data.php">Tambah Data</a>
    </div>
    
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>No.</th>
          <th>Aksi</th>
          <th>Buah</th>
          <th>Jenis</th>
          <th>Kategori</th>
          <th>Stok</th>
        </tr>
      </thead>
      
      <tbody>
        <?php $i = 1; ?>
        <?php foreach($buah as $row): ?>
          
        <tr>
          <td> <?= $i; ?></td>

          <td class="col-2 ">
            <a class="pen" href="ubah_data.php?id=<?= $row["id"]; ?>">&#x270E;</a>
            <a class="fa" href="hapus_data.php?id= <?= $row["id"]; ?>">&#xf014;</a>
          </td>
          
          <td class="td-l"><?= $row["nama"]; ?></td>
          <td class="td-l"><?= $row["jenis"]; ?></td>
          <td><?= $row["kategori"]; ?></td>
          <td><?= $row["stok"]; ?></td>
        </tr>
        
        <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>

    <!-- page -->
    <nav aria-label="Page">
      <ul class="pagination">
        
        <?php if($page >1): ?>
          <li class="page-item">
            <a class="page-link" href="?page=<?= $page - 1; ?>"> &laquo; </a>
          </li>
          <?php else : ?>
            <li class="page-item disabled">
              <span class="page-link"> &laquo; </span>
            </li>
        <?php endif ?>
        
        <?php for ($i = 1; $i <= $jumlah_page; $i++) : ?>
          <?php if($i == $page) : ?>
            <li class="page-item active">
              <a class="page-link" href="?page=<?= $i; ?>"> <?= $i; ?> </a>
            </li>
            <?php else : ?>
              <li class="page-item">
                <a class="page-link" href="?page=<?= $i; ?>"> <?= $i; ?> </a>
              </li>
          <?php endif ?>
        <?php endfor; ?>
        
        <?php if($page < $jumlah_page): ?>
          <li class="page-item">
            <a class="page-link" href="?page=<?= $page + 1; ?>"> &raquo; </a>
          </li>
          <?php else : ?>
            <li class="page-item disabled">
              <span class="page-link"> &raquo; </span>
            </li>      
        <?php endif ?>
      </ul>
    </nav>
    
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
