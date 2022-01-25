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
	<title>Halaman Kriteria Nilai Bulanan</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php  
	include '../koneksi.php';
	$sql = "SELECT * FROM kriteria_nilai_bulanan";
	$select = mysqli_query($koneksi, $sql);
?>
<div class="container">
  <h2 style="text-align: center;">Data Kriteria Nilai Bulanan</h2>
  <br>
  <a href="tambah.php"><button type='button' class='btn btn-success mr-2'>+ Tambah</button></a>
  <a href="../dashboard.php"><button type="button" class="btn btn-primary">Kembali</button></a>
  <br>
  <br>          
  <table class="table table-hover">
    <thead style="text-align: center;">
      <tr>
    		<th>ID Kriteria</th>
    		<th>Nama Kriteria</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php  
		while($hasil = mysqli_fetch_array($select)){
		echo "
		<tr>
			<td><center>$hasil[id_kriteria_nilai_bulanan]</center></td>
			<td><center>$hasil[nama_kriteria_bulanan]</center></td>
      <td><center>
        <a href ='edit.php?id_kriteria_nilai_bulanan=$hasil[id_kriteria_nilai_bulanan]'><button type='button' class='btn btn-info'>Edit</button></a> <br>
        <a href ='hapus.php?id_kriteria_nilai_bulanan=$hasil[id_kriteria_nilai_bulanan]'><button type='button' class='btn btn-danger'>Hapus</button></a>
      </center>
      </td>
		</tr>";
		?>
		<?php } ?>
    </tbody>
</body>
</html>
