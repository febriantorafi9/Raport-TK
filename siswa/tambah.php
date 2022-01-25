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
	<title>Halaman Tambah Siswa</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Form Input Data Siswa</h2>
  <br>
  <a href="siswa.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpan.php" method="post">
    <div class="form-group">
      <label for="nis">No Induk Siswa :</label>
      <input type="number" class="form-control" id="nis" placeholder="Enter No Induk Siswa" name="txtnis">
    </div>
    <div class="form-group">
      <label for="nik">NIK Wali Murid :</label>
      <select class="form-control" id="nik" name="txtwalmur">
        <option value="">-- Pilih --</option>
        <?php 
          include "../koneksi.php";
          $sql=mysqli_query($koneksi, "SELECT * FROM walimurid");
        ?>
        <?php
          while ($r=mysqli_fetch_array($sql)){
            echo"<option value=$r[nik_walmur]>$r[nik_walmur]</option>";
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="nama">Nama Siswa :</label>
      <input type="text" class="form-control" id="nama" placeholder="Enter Nama Siswa" name="txtnama">
    </div>
    <div class="form-group">
      <label for="jk">Jenis Kelamin :</label>
  	  <select class="form-control" name="txtkelamin">
  	  	<option value="">-- Pilih --</option>
  	    <option>L</option>
  	    <option>P</option>
  	  </select>
    </div>
    <div class="form-group">
      <label for="lahir">Tgl Lahir :</label>
      <input type="date" class="form-control" id="lahir" name="txtllahir">
    </div>
    <div class="form-group">
      <label for="masuk">Tgl Masuk :</label>
      <input type="date" class="form-control" id="masuk" name="txtmasuk">
    </div>
    <div class="form-group">
      <label for="lulus">Tgl Lulus :</label>
      <input type="date" class="form-control" id="lulus" name="txtlulus">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat :</label>
      <textarea class="form-control" rows="5" name="txtalamat"></textarea>
    </div>
	<div class="form-group">
      <label for="anakke">Anak Ke :</label>
      <input type="number" class="form-control" id="anakke" placeholder="Enter Anak Ke" name="txtanakke">
    </div>    
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>
</body>
</html>

