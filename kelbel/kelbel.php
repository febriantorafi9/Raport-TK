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
	<title>Halaman Data Kelompok Belajar</title>
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
  $nip = $_GET['nip_peg'];
	$select = mysqli_query($koneksi, "SELECT * FROM kel_belajar WHERE nip_peg=$nip");
?>
<div class="container">
  <h2 style="text-align: center;">Data Kelompok Belajar</h2>
  <br>
  <div class="col">
  <form class="form-inline">
  <a href="../pegawai/pegawai.php"><button type="button" class="btn btn-primary">Kembali</button></a>
  <nav class="navbar navbar-light bg-light">
    <input class="form-control mr-sm-2 float-right" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0 float-right" type="submit">Search</button>
  </nav>   
  </form>
  </div>  
  <br>          
  <table class="table table-hover" style="text-align: center;">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Nama Kelas</th>
        <th>Nama Pegawai</th>
        <th>Tahun Ajar</th>
        <th>Tingkat</th>
      </tr>
    </thead>
    <tbody>
      <?php
      	$no = 1;  
		while($hasil = mysqli_fetch_assoc($select)){
		echo "
		<tr>
			<td>$no</td>";

			$siswa = mysqli_query($koneksi,"SELECT * FROM siswa WHERE noinduk_siswa='$hasil[noinduk_siswa]'");
			$hasil1 = mysqli_fetch_array($siswa);

		echo "	
			<td><center>$hasil1[nama_siswa]</center></td>";

			$kelas = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_ruang_kelas='$hasil[id_ruang_kelas]'");
			$hasil2 = mysqli_fetch_array($kelas);

		echo "	
			<td><center>$hasil2[nama_ruang_kelas]</center></td>";

			$peg = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nip_peg='$hasil[nip_peg]'");
			$hasil3 = mysqli_fetch_array($peg);	
		
		echo "	
			<td><center>$hasil3[nama_peg]</center></td>";

			$tahun = mysqli_query($koneksi,"SELECT * FROM tahun_ajaran WHERE id_tahun_ajar='$hasil[id_tahun_ajar]'");
			$hasil4 = mysqli_fetch_array($tahun);

		echo "
			<td><center>$hasil4[tahun_ajar]</center></td>
			<td><center>$hasil[tingkat_tk]</center></td>
		</tr>";
		$no++;
		?>
		<?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>