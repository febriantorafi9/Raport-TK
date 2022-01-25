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
	<title>Halaman Edit Data Kriteria Harian</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Form Edit Data Kriteria Harian</h2>
  <br>

  <?php  
	include "../koneksi.php";
	$sqledit = mysqli_query($koneksi, "SELECT * FROM kriteria_nilai_harian WHERE id_kriteria_harian='$_GET[id_kriteria_harian]'");
	$edit = mysqli_fetch_array($sqledit);
  ?>

  <a href="kritharian.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpanedit.php" method="post">
    <div class="form-group">
      <label for="rapot">ID Kriteria :</label>
      <input type="number" class="form-control" id="nis" name="txtkrit" value="<?php echo $edit['id_kriteria_harian']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="nis">Nama Kriteria :</label>
      <input type="text" class="form-control" id="nik" name="txtnama" value="<?php echo $edit['nama_kriteria_harian']; ?>">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
</form>
</body>
</html>
