<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - PMB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="navbar.css" rel="stylesheet">
  <link href="button.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .container-fluid {
      background-image: url(https://cms.sevima.com//uploads/bgaplikasi/864.jpg);
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      width: 100%; 
      height: 100%;
    }
    .container-fluid h2{
      background-color: RGBA(255, 255, 255, 0.3);
      backdrop-filter: blur(12px);
      color: #251B37;
      border-style: ridge;
    }
  </style>
</head>
<body> 
<?php 
    require_once "menu.php";
?>
<div class="container-fluid">
  <div class="container-flex p-5">
    <span class="p-5"></span>
    <h2 class="text-center p-2">Penerimaan Mahasiswa Baru</h2>
    <a href="daftar.php">
      <button class="button-35 mt-5" role="button">Daftar Sekarang</button>
    </a>
  </div>
</div> 
<?php 
    require_once "home.php";
?>
<script>
  dropdown.setValue('DC');
 
 // get the new data value
 dropdown.getValue(); // => "DC"
  
 // get the display value
 dropdown.getDisplayValue();
  var Dropdown = require('form-js').Dropdown;
  var dropdown = new Dropdown({
    el: document.getElementsByTagName('select')[0]
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="coba.js"></script>
</body>
</html>
