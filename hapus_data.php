<?php 

session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';

// ambil data di URL
$id = $_GET["id"];
    
if( hapus($id) > 0 ) {
    echo "
    <script>
    alert('Data Berhasil dihapus');
    document.location.href = 'daftar_buah.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal dihapus!');
    document.location.href = 'daftar_buah.php';
    </script>
    ";
}

?>