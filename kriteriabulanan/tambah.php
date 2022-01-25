<?php
    session_start(); 
    if ( isset($_SESSION["login"]) == false) {
        header("location: ../login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Kriteria Bulanan</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Form Input Data Kriteria Bulanan</h2>
  <br>
  <a href="kritbulanan.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpan.php" method="post">
    <div class="form-group">
      <label for="id">ID Kriteria :</label>
      <input type="number" class="form-control" id="id" placeholder="Enter Id Kriteria" name="txtkrit">
    </div>
    <div class="form-group">
      <label for="nama">Nama Kriteria :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Nama Kriteria" name="txtnama">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>
</body>
</html>
