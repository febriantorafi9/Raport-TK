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
	<title>Halaman Edit Data Rapot Siswa</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Form Edit Data Rapot Siswa</h2>
  <br>

  <?php  
	include "../koneksi.php";
	$sqledit = mysqli_query($koneksi, "SELECT * FROM rapot WHERE id_rapot='$_GET[id_rapot]'");
	$edit = mysqli_fetch_array($sqledit);
  ?>

  <a href="rapot.php"><input type="submit" value="Kembali"></a>
  <br>
  <br>
  <form action="simpanedit.php" method="post">
    <div class="form-group">
      <label for="rapot">Id Rapot :</label>
      <input type="number" class="form-control" id="nis" name="txtrapot" value="<?php echo $edit['id_rapot']; ?>" readonly>
    </div>
    <div class="form-group">
      <label for="nis">No Induk Siswa : </label>
      <select class="form-control" id="nis" name="txtnis">
        <option value="<?php echo $edit['noinduk_siswa']; ?>"><?php echo $edit['noinduk_siswa']; ?></option>
        <?php
          while ($l=mysqli_fetch_array($siswa)){
            echo"<option value=$l[noinduk_siswa]>$l[noinduk_siswa]</option>";
          }
        ?>
      </select>
    </div>
    <div class="form-group">
      <label for="alamat">Cat Rapot :</label>
      <textarea class="form-control" rows="5" name="txtcat">
      <?php echo $edit['cat_rapor']; ?>		
      </textarea>
    </div>
    <div class="form-group">
      <label for="jk">Semester :</label>
      <select class="form-control" name="txtsemester">
        <option value="<?php echo $edit['semester']; ?>"><?php echo $edit['semester']; ?></option>
        <option>1 Ganjil</option>
        <option>1 Genap</option>
        <option>2 Ganjil</option>
        <option>2 Genap</option>
      </select>
    </div>
    <div class="form-group">
      <label for="nilai">Rekap :</label>
      <input type="number" class="form-control" id="nilai" name="txtnilai" value="<?php echo $edit['nilai']; ?>">
    </div>
    <button type="submit" class="btn btn-warning">Submit</button>
</form>
</body>
</html>
