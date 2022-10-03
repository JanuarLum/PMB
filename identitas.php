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
        <form action="pilih_prodi.php" method="post">
            <div class="mb-3 mt-3">
                <label for="provinsi" class="form-label">Provinsi:</label>
                <select name="provinsi">
                    <option>Aceh</option>
                    <option>Sumatra Utara</option>
                </select><br>
                
                <label for="jenis_sekolah" class="form-label">Pilih Jenis Sekolah:</label>
                <select name="jenis_sekolah">
                    <option>SMA</option>
                    <option>SMK</option>
                </select><br>
                
                <label for="jurusan" class="form-label">Jurusan Sekolah (Cth: IPA, IPS):</label>
                <input type="text" class="form-control" id="jurusan" placeholder="Input Jurusan Sekolah" name="jurusan" />

                <label for="kota" class="form-label">Kabupaten / Kota:</label>
                <input type="text" class="form-control" id="kota" placeholder="Input Kabupaten / Kota" name="kota" />

                <label for="npsn" class="form-label">NPSN / Nama Sekolah:</label>
                <input type="text" class="form-control" id="npsn" placeholder="Input NPSN / Nama Sekolah" name="npsn" />

                <label for="lulus" class="form-label">Tahun Lulus:</label>
                <select name="lulus">
                    <option>2011</option>
                    <option>2012</option>
                </select><br>
            </div>
            <input type="submit" value="Simpan" name="proses">
        </form>
    </tbody>
</div>
<?php
    include "koneksi1.php";
    
    if(isset($_POST['proses'])) {
        $provinsi = $_POST['provinsi'];
        $jenis_sekolah = $_POST['jenis_sekolah'];
        $jurusan = $_POST['jurusan'];
        $kota = $_POST['kota'];
        $npsn = $_POST['npsn'];
        $lulus = $_POST['lulus'];
        $querySQL("INSERT INTO identitas (provinsi, jenis_sekolah, jurusan, kota, npsn, lulus) VALUES ('$provinsi', '$jenis_sekolah', '$kota', '$npsn', $lulus)");
        $execSQL = mysqli_query($koneksi,$querySQL);
    }    
?>
</body>
</html>