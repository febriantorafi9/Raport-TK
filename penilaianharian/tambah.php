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
	<title>Halaman Tambah Penilaian Harian</title>
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
    $harian=mysqli_query($koneksi, "SELECT * FROM kriteria_nilai_harian");
    $siswa=mysqli_query($koneksi, "SELECT * FROM siswa");
?>
<div class="container">
  <h2>Form Input Data Penilaian Harian</h2>
  <br>
  <a href="nilaiharian.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpan.php" method="post">
    <div class="form-group">
      <label for="harian">ID Penilaian Harian :</label>
      <input type="text" class="form-control" id="harian" placeholder="Enter ID Penilaian Harian" name="txtharian">
    </div>
    <div class="form-group">
      <label for="ambil">Tanggal Ambil Nilai :</label>
      <input type="date" class="form-control" id="ambil" name="txtambil">
    </div>
    <div class="form-group">
      <label for="krit">Nama Kriteria : </label>
      <select class="form-control" id="krit" name="txtkrit">
        <option value="">-- Pilih --</option>
        <?php
          while ($m=mysqli_fetch_array($harian)){
            echo"<option value=$m[id_kriteria_harian]>$m[nama_kriteria_harian]</option>";
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="nis">No Induk Siswa : </label>
      <select class="form-control" id="nis" name="txtsiswa">
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
      <input type="number" class="form-control" id="nilai" placeholder="Enter Nilai" name="txtnilai">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>
</body>
</html>