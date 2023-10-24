<?php

    // koneksi ke Database
    $conn = mysqli_connect("localhost","root", "", "uas_pweb");

    function query($query) {
        global $conn;
        
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $stok = htmlspecialchars($data["stok"]);

        $query = "INSERT INTO buah
        VALUES ('', '$nama', '$jenis', '$kategori', '$stok')";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM buah WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $kategori = htmlspecialchars($data["kategori"]);
        $stok = htmlspecialchars($data["stok"]);

        $query = "UPDATE buah SET
        nama = '$nama',
        jenis = '$jenis',
        kategori = '$kategori',
        stok = '$stok'

        WHERE id = $id
        ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM buah WHERE
        nama LIKE '%$keyword%' OR
        jenis LIKE '%$keyword%' OR
        kategori LIKE '%$keyword%' OR
        stok LIKE '%$keyword%'
        ";

        return query($query);
    }

    function registrasi($data) {
        global $conn;

        $username = stripslashes ($data["username"]);
        $pass = mysqli_real_escape_string($conn, $data["pass"]);
        $pass2 = mysqli_real_escape_string($conn, $data["pass2"]);

        // Cek Username
        $result = mysqli_query($conn, "SELECT username FROM users WHERE
            username = '$username'");

            if(mysqli_fetch_assoc($result)) {
                echo "<script>
                alert('Username sudah ada!');
            </script>";

            return false;
            }

        // Konfirmasi password
        if($pass !== $pass2) {
            echo "<script>
                alert('Password tidak sesuai!');
            </script>";

            return false;
        }

        // enkripsi Pass :
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        
        // tambah user baru ke DB :
        mysqli_query($conn, "INSERT INTO users VALUES 
        ('', '$username', '$pass')");

        return mysqli_affected_rows($conn);   
    }
    

?>