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
	<title>Halaman Edit Data Siswa</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Form Edit Data Siswa</h2>
  <br>

  <?php  
	include "../koneksi.php";
	$sqledit = mysqli_query($koneksi, "SELECT * FROM siswa WHERE noinduk_siswa='$_GET[noinduk_siswa]'");
	$edit = mysqli_fetch_array($sqledit);
  ?>

  <a href="siswa.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpanedit.php" method="post">
    <div class="form-group">
      <label for="nis">No Induk Siswa :</label>
      <input type="number" class="form-control" id="nis" name="txtnis" value="<?php echo $edit['noinduk_siswa']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="nik">NIK Wali Murid :</label>
      <input type="number" class="form-control" id="nik" name="txtwalmur" value="<?php echo $edit['nik_walmur']; ?>">
    </div>
    <div class="form-group">
      <label for="nama">Nama Siswa :</label>
      <input type="text" class="form-control" id="nama" name="txtnama" value="<?php echo $edit['nama_siswa']; ?>">
    </div>
    <div class="form-group">
      <label for="jk">Jenis Kelamin :</label>
	  <select class="form-control" name="txtkelamin">
	  	<option value="<?php echo $edit['jenis_kelamin']; ?>"><?php echo $edit['jenis_kelamin']; ?></option>
	    <option>L</option>
	    <option>P</option>
	  </select>
    </div>
    <div class="form-group">
      <label for="lahir">Tgl Lahir :</label>
      <input type="date" class="form-control" id="lahir" name="txtllahir" value="<?php echo $edit['tgllahir']; ?>">
    </div>
    <div class="form-group">
      <label for="masuk">Tgl Masuk :</label>
      <input type="date" class="form-control" id="masuk" name="txtmasuk" value="<?php echo $edit['tgl_masuk']; ?>">
    </div>
    <div class="form-group">
      <label for="lulus">Tgl Lulus :</label>
      <input type="date" class="form-control" id="lulus" name="txtlulus" value="<?php echo $edit['tgl_lulus']; ?>">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat :</label>
      <textarea class="form-control" rows="5" name="txtalamat"><?php echo $edit['alamat']; ?></textarea>
    </div>
	<div class="form-group">
      <label for="anakke">Anak Ke :</label>
      <input type="number" class="form-control" id="anakke" name="txtanakke" value="<?php echo $edit['anakke']; ?>">
    </div>    
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</body>
</html>
