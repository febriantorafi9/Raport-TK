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
	<title>Halaman Edit Data Nilai Bulanan</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Form Edit Data Nilai Bulanan</h2>
  <br>

  <?php  
	include "../koneksi.php";
	$nilai=mysqli_query($koneksi, "SELECT * FROM kriteria_nilai_bulanan");
  $siswa=mysqli_query($koneksi, "SELECT * FROM siswa");
	$sqledit = mysqli_query($koneksi, "SELECT * FROM nilai_bulanan WHERE id_nilai_bulanan='$_GET[id_nilai_bulanan]'");
	$edit = mysqli_fetch_array($sqledit);
  ?>

  <a href="nilaibulanan.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpanedit.php" method="post">
    <div class="form-group">
      <label for="rapot">ID Nilai Bulanan :</label>
      <input type="text" class="form-control" id="nis" name="txtbulanan" value="<?php echo $edit['id_nilai_bulanan']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="krit">Nama Kriteria : </label>
      <select class="form-control" id="krit" name="txtkrit">
        <option value="<?php echo $edit['id_kriteria_nilai_bulanan']; ?>"><?php echo $edit['id_kriteria_nilai_bulanan']; ?></option>
        <?php
          while ($m=mysqli_fetch_array($nilai)){
            echo"<option value=$m[nama_kriteria_bulanan]>$m[nama_kriteria_bulanan]</option>";
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="ambil">Tgl Ambil Nilai :</label>
      <input type="date" class="form-control" id="ambil" name="txtambil" value="<?php echo $edit['bulan_ambil_nilai']; ?>">
    </div>
    <div class="form-group">
      <label for="nis">No Induk Siswa : </label>
      <select class="form-control" id="nis" name="txtsiswa">
        <option value="<?php echo $edit['noinduk_siswa']; ?>"><?php echo $edit['noinduk_siswa']; ?></option>
        <?php
          while ($l=mysqli_fetch_array($siswa)){
            echo"<option value=$l[noinduk_siswa]>$l[noinduk_siswa]</option>";
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="nilai">Nilai :</label>
      <input type="number" class="form-control" id="nilai" name="txtnilai" value="<?php echo $edit['nilai']; ?>">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
</form>
</body>
</html>