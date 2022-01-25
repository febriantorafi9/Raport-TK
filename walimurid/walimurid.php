<?php  
    session_start();
    if ( isset($_SESSION["login"] == false)) {
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Data Wali Murid</title>
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
	$sql = "SELECT * FROM walimurid";
	$select = mysqli_query($koneksi, $sql);
?>
<div class="container">
  <h2 style="text-align: center;">Data Wali Murid</h2>
  <br>
  <a href="../dashboard.php"><button type="button" class="btn btn-primary">Kembali</button></a>
  <br>
  <br>          
  <table class="table table-hover">
    <thead style="text-align: center;">
      <tr>
        <th>No</th>
		<th>NIK</th>
		<th>Nama Wali Murid</th>
		<th>Pekerjaan</th>
      </tr>
    </thead>
    <tbody>
      <?php
		$no = 1;
		while($hasil = mysqli_fetch_array($select)){
		echo "
		<tr>
			<td><center>$no</center></td>
			<td><center>$hasil[nik_walmur]</center></td>
			<td><center>$hasil[nama_walmur]</center></td>
			<td><center>$hasil[pekerjaan_walmur]</center></td>
		</tr>";
		$no++;
		?>
		<?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>