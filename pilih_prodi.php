<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
</head>
<body>
    <?php    
        require_once "menu.php";
    ?>

<div class="container-fluid mt-3">
<a href="index.php" class="button mt-3 mb-3">Kembali</a>
  <h3>Pendaftaran</h3>
    <tbody>
        <form action="index.php" method="post">
            <div class="mb-3 mt-3">
                <label for="pilih_prodi" class="form-label">Pilih Prodi:</label>
                <select name="pilih_prodi">
                    <option>S1 - Akuntansi</option>
                    <option>S1 - Arsitektur</option>
                    <option>S1 - Desain Komunikasi Visual</option>
                    <option>S1 - Desain Produk</option>
                    <option>S1 - Ilmu Komunikasi</option>
                    <option>S1 - Informatika</option>
                    <option>S1 - Manajemen</option>
                    <option>S1 - Psikologi</option>
                    <option>S1 - Sistem Informasi</option>
                    <option>S1 - Teknik Sipil</option>
                </select><br>
            </div>
            <input type="submit" value="Simpan" name="proses" href="index.php">
        </form>
    </tbody>
</div>
<?php
    include "koneksi2.php";
    
    if(isset($_POST['proses'])) {
        $pilih_prodi = $_POST['pilih_prodi'];
        $querySQL = "INSERT INTO program_studi (pilih_prodi) VALUES ('$pilih_prodi)";
        $execSQL = mysqli_query($koneksi,$querySQL);
    }    
?>
</body>
</html>
