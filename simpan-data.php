<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="navbar.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
    require_once "menu.php";
    include "koneksi.php";
    if(isset($_POST['proses'])) {
        $nama_lengkap = $_POST['nama_lengkap'];
        $no_hp = $_POST['HP'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $kewarganegaraan = $_POST['kewarganegaraan'];
        $kelamin = $_POST['kelamin'];
        $email = $_POST['email'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $no_ktp = $_POST['no_ktp'];
        $querySQL = "INSERT INTO pendaftaran (nama_lengkap, no_hp, tanggal_lahir, kewarganegaraan, kelamin, email, tempat_lahir, no_ktp) VALUES ($nama_lengkap, $no_hp, $tanggal_lahir, $kewarganegaraan, $kelamin, $email, $tempat_lahir, $no_ktp)";
        $execSQL = mysqli_query($koneksi,$querySQL);
    }    
?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-sm-12">
            <p>
                <?php
                if ($execSQL) {
                    $lastId = mysqli_insert_id($koneksi);
                    echo "Data dengan ID $lastId berhasil di input ke dalam database";
                }
                else {
                    echo "Data tidak berhasil di input ke dalam database";
                }
                ?>
            </p>
        </div>
    </div>
</div>
</body>
</html>