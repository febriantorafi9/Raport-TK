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
	<title>Halaman Rekap Harian</title>
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
	$select = mysqli_query($koneksi, "CALL rekap_harian()");
?>
<div class="container">
  <h2 style="text-align: center;">Rekap Harian</h2> 
  <br>
  <a href="../dashboard.php"><button type="button" class="btn btn-primary">Kembali</button></a>
  <br>     
  <br>     
  <table class="table table-hover">
    <thead style="text-align: center;">
      <tr>
		<th>ID Penilaian</th>
		<th>No Induk Siswa</th>
		<th>Nama Siswa</th>
		<th>Nama Kriteria</th>
		<th>Tanggal Penilaian</th>
		<th>Nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php
		while($hasil = mysqli_fetch_array($select)){
		echo "
		<tr>
			<td><center>$hasil[id_nilai_harian]</center></td>
			<td><center>$hasil[noinduk_siswa]</center></td>
			<td><center>$hasil[nama_siswa]</center></td>
			<td><center>$hasil[nama_kriteria_harian]</center></td>
			<td><center>$hasil[tgl_ambil_nilai]</center></td>
			<td><center>$hasil[nilai]</center></td>
		</tr>";	
		?>
		<?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>
