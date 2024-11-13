<?php
$host = "localhost";
$user = "root";
$past = "";
$db_name = "inv";

$koneksi = mysqli_connect($host, $user, $past, $db_name);

if(!$koneksi){
    die("koneksi gagal:". mysqli_connect_error());
}