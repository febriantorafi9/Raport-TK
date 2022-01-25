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
	<title>Halaman Tambah Nilai Bulanan</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
    include "../koneksi.php";
    $nilaibul=mysqli_query($koneksi, "SELECT * FROM kriteria_nilai_bulanan");
    $siswa=mysqli_query($koneksi, "SELECT * FROM siswa");
?>
<div class="container">
  <h2>Form Input Data Nilai Bulanan</h2>
  <br>
  <a href="nilaibulanan.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpan.php" method="post">
    <div class="form-group">
      <label for="nilai">Id Nilai Bulanan :</label>
      <input type="text" class="form-control" id="id_nilai_bulanan" placeholder="Enter Id Nilai Bulanan" name="id_nilai_bulanan">
    </div>
    <div class="form-group">
      <label for="krit">Nama Kriteria : </label>
      <select class="form-control" id="id_kriteria_nilai_bulanan" name="id_kriteria_nilai_bulanan">
        <option value="">-- Pilih --</option>
        <?php
          while ($m=mysqli_fetch_array($nilaibul)){
            echo"<option value=$m[id_kriteria_nilai_bulanan]>$m[nama_kriteria_bulanan]</option>";
          }
        ?>
      </select>
    </div>
      <div class="form-group">
      <label for="ambil">Tgl Ambil Nilai :</label>
      <input type="date" class="form-control" id="bulan_ambil_nilai" name="bulan_ambil_nilai">
    </div>
    <div class="form-group">
      <label for="nis">No Induk Siswa : </label>
      <select class="form-control" id="noinduk_siswa" name="noinduk_siswa">
        <option value="">-- Pilih --</option>
        <?php
          while ($l=mysqli_fetch_array($siswa)){
            echo"<option value=$l[noinduk_siswa]>$l[noinduk_siswa]</option>";
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="nilai">Nilai :</label>
      <input type="number" class="form-control" id="nilai" name="nilai">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>
</body>
</html>