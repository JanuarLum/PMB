<?php
$namaserver = "localhost";
$username = "root";
$password = "";
$namadb = "identitas";

$koneksi = mysqli_connect($namaserver, $username, $password, $namadb);

if (!$koneksi) {
    die ("Gagal melakukan koneksi ke database. " . mysqli_connect_error());
}
?>