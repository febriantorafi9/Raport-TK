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
	<title>Halaman Data Rapot Siswa</title>
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
	$rapot = "SELECT r.id_rapot,s.noinduk_siswa,r.cat_rapor,r.semester,r.nilai FROM rapot r JOIN siswa s
	ON r.noinduk_siswa = s.noinduk_siswa";
	$select = mysqli_query($koneksi, $rapot);


?>
<div class="container">
  <h2 style="text-align: center;">Data Rapot</h2>
  <br>
  <div class="col">
  <form class="form-inline">
  <a href="tambah.php"><button type='button' class='btn btn-success mr-2'>+ Tambah</button></a>
  <a href="../dashboard.php"><button type="button" class="btn btn-primary">Kembali</button></a>
  <nav class="navbar navbar-light bg-light">
    <input class="form-control mr-sm-2 float-right" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0 float-right" type="submit">Search</button>
  </nav>   
  </form>
  </div>     
  <br>
  <table class="table table-hover">
    <thead style="text-align: center;">
      <tr>
        <th>No</th>
    		<th>Id Rapot</th>
    		<th>Nama Siswa</th>
    		<th>Cat Rapot</th>
        <th>Semester</th>
        <th>Rekap</th>
    		<th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
		$no = 1;
		while($hasil = mysqli_fetch_array($select)){
		echo "
		<tr>
			<td><center>$no</center></td>
			<td><center>$hasil[id_rapot]</center></td>";

			$siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE noinduk_siswa='$hasil[noinduk_siswa]'");
			$hasil2 = mysqli_fetch_array($siswa);

		echo "
			<td><center>$hasil2[nama_siswa]</center></td>
			<td><center>$hasil[cat_rapor]</center></td>
      <td><center>$hasil[semester]</center></td>
      <td><center>$hasil[nilai]</center></td>
			<td>
				<a href ='edit.php?id_rapot=$hasil[id_rapot]'><button type='button' class='btn btn-info'>Edit</button></a> <br>
				<a href ='hapus.php?id_rapot=$hasil[id_rapot]'><button type='button' class='btn btn-danger'>Hapus</button></a>
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