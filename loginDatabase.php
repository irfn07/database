<?php

//menghubungkan ke koneksi.php
include 'koneksi.php';
//memeriksa apakah $_POST sudah diatur dan tidak bernilai NULL.
if (isset($_POST['proseslog'])){
    $query = "SELECT * FROM user WHERE username = '$_POST[username]' AND password = '$_POST[password]'";

    //menjalankan query sql pada  database mysql.
    $sql = mysqli_query($koneksi, $query);

    //mengembalikan jumlah baris dalam hasil query
    $cek = mysqli_num_rows($sql);

    // var_dump($sql);
    if ($cek > 0) {
        echo"<h1>login berhasil</h1>";
        //header (Location: read.php)
    }else{
        echo "<h1>login gagal</h1>";

    }
}
echo '<a href="form.php"><button>kembali</button></a>';