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
        <form action="simpan-data.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap:</label>
                <input type="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Input Nama" name="nama_lengkap">
                <label for="HP" class="form-label">No. HP:</label>
                <input type="HP" class="form-control" id="HP" placeholder="Input HP" name="HP">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>
                <label for="kewarganegaraan" class="form-label">Kewarganegaraan:</label>
                <select name="kewarganegaraan">
                    <option>Indonesia</option>
                    <option>Amerika</option>
                </select><br>
                <label for="kelamin" class="form-label">Jenis Kelamin : </label>
                <input type="radio" name="kelamin" value="laki-laki"> Laki-laki
                <input type="radio" name="kelamin" values="perempuan"> Perempuan <br>
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Input Email" name="email">
                <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                <input type="temapt_lahir" class="form-control" id="tempat_lahir" placeholder="Input Tempat Lahir" name="tempat_lahir">
                <label for="no_ktp" class="form-label">NIK/No. KTP:</label>
                <input type="no_ktp" class="form-control" id="no_ktp" placeholder="Input NIK/No. KTP" name="no_ktp">
            </div>
            <input type="submit" value="Simpan" name="proses">
        </form>
    </tbody>
</div>

</body>
</html>