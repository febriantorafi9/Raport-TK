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
	<title>Halaman Tambah Rapot Siswa</title>
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
    $siswa=mysqli_query($koneksi, "SELECT * FROM siswa");
?>
<div class="container">
  <h2>Form Input Data Rapot Siswa</h2>
  <br>
  <a href="rapot.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpan.php" method="post">
    <div class="form-group">
      <label for="rapot">Id Rapot :</label>
      <input type="number" class="form-control" id="nis" placeholder="Enter Id Rapot" name="txtrapot">
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
      <label for="cat">Cat Rapot :</label>
      <textarea class="form-control" rows="5" name="txtcat"></textarea>
    </div>
    <div class="form-group">
      <label for="semester">Semester :</label>
      <select class="form-control" name="txtsemester">
        <option value="">-- Pilih --</option>
        <option>1 Ganjil</option>
        <option>1 Genap</option>
        <option>2 Ganjil</option>
        <option>2 Genap</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nilai">Rekap :</label>
      <input type="number" class="form-control" id="nilai" placeholder="Enter Nilai" name="txtnilai">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
  </form>
</div>
</body>
</html>
