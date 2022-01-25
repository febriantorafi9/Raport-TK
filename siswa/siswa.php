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
	<title>Halaman Data Siswa</title>
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
	$sql = "SELECT s.noinduk_siswa,w.nik_walmur,s.nama_siswa,s.jenis_kelamin,s.tgllahir,s.tgl_masuk,s.tgl_lulus,s.alamat,s.anakke FROM siswa s JOIN walimurid w
		ON s.nik_walmur = w.nik_walmur";
	$select = mysqli_query($koneksi, $sql);

?>
<div class="container">
  <h2 style="text-align: center;">Data Siswa</h2>
  <br>
  <div class="col">
  <form class="form-inline" method="post" action="">
  <a href="tambah.php"><button type='button' class='btn btn-success mr-2'>+ Tambah</button></a>
  <a href="../dashboard.php"><button type="button" class="btn btn-primary">Kembali</button></a>
  <nav class="navbar navbar-light bg-light">
    <input class="form-control mr-sm-2 float-right" type="search" placeholder="Search" aria-label="Search" name="cari_data">
    <button class="btn btn-outline-success my-2 my-sm-0 float-right" type="submit"name="cari">Search</button>
  </nav>   
  </form>
  </div>  
  <br>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>No Induk Siswa</th>
        <th>Nama Wali Murid</th>
        <th>Nama Siswa</th>
        <th>Jenis Kelamin</th>
        <th>Tgl Lahir</th>
    		<th>Tgl Masuk</th>
    		<th>Tgl Lulus</th>
    		<th>Alamat</th>
    		<th>Anak Ke</th>
    		<th>Action</th>

      </tr>
    </thead>
    <tbody>
      <?php
      	$no = 1;  
		while($hasil = mysqli_fetch_array($select)){
		echo "
		<tr>
			<td>$no</td>
			<td>$hasil[noinduk_siswa]</td>";
			
			$walmur = mysqli_query($koneksi,"SELECT * FROM walimurid WHERE nik_walmur='$hasil[nik_walmur]'");
			$hasil1 = mysqli_fetch_array($walmur);

		echo "	
			<td>$hasil1[nama_walmur]</td>
			<td>$hasil[nama_siswa]</td>
			<td>$hasil[jenis_kelamin]</td>
			<td>$hasil[tgllahir]</td>
			<td>$hasil[tgl_masuk]</td>
			<td>$hasil[tgl_lulus]</td>
			<td>$hasil[alamat]</td>
			<td>$hasil[anakke]</td>
			<td>
				<a href ='edit.php?noinduk_siswa=$hasil[noinduk_siswa]'><button type='button' class='btn btn-info'>Edit</button></a> <br>
				<a href ='hapus.php?noinduk_siswa=$hasil[noinduk_siswa]'><button type='button' class='btn btn-danger'>Hapus</button></a>
			</td>
		</tr>";
		$no++;
		?>
		<?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>