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
	<title>Halaman Edit Data Pegawai</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Form Edit Data Pegawai</h2>
  <br>

  <?php  
	include "../koneksi.php";
	$sqledit = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip_peg='$_GET[nip_peg]'");
	$edit = mysqli_fetch_array($sqledit);
  ?>

  <a href="pegawai.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpanedit.php" method="post">
    <div class="form-group">
      <label for="nip">NIP Pegawai :</label>
      <input type="number" class="form-control" id="nip" name="txtpeg" value="<?php echo $edit['nip_peg']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="nama">Nama Pegawai :</label>
      <input type="text" class="form-control" id="nama" name="txtnama" value="<?php echo $edit['nama_peg']; ?>">
    </div>
    <div class="form-group">
      <label for="jk">Jenis Kelamin :</label>
  	  <select class="form-control" name="txtkelamin">
  	  	<option value="<?php echo $edit['jk_peg']; ?>"><?php echo $edit['jk_peg']; ?></option>
  	    <option>L</option>
  	    <option>P</option>
  	  </select>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat :</label>
      <textarea class="form-control" rows="5" name="txtalamat"><?php echo $edit['alamat_peg']; ?></textarea>
    </div>
    <div class="form-group">
      <label for="notelp">No Telp :</label>
      <input type="number" class="form-control" id="notelp" name="txttelp" value="<?php echo $edit['notelp_peg']; ?>">
    </div>    
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" class="form-control" id="email" name="txtemail" value="<?php echo $edit['email_peg']; ?>">
    </div>
    <div class="form-group">
      <label for="masuk">Tgl Masuk :</label>
      <input type="date" class="form-control" id="masuk" name="txtmasuk" value="<?php echo $edit['tglmasuk_peg']; ?>">
    </div>    
    <button type="submit" class="btn btn-warning">Submit</button>
</form>
</body>
</html>