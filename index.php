<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home - PMB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="navbar.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body> 
<?php 
    require_once "menu.php";
?>
<div class="container-fluid mt-3">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p>
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