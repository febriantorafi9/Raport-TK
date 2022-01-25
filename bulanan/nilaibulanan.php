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
	<title>Halaman Data Nilai Bulanan</title>
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
	$sql = "SELECT nb.id_nilai_bulanan,kr.id_kriteria_nilai_bulanan,s.noinduk_siswa,nb.bulan_ambil_nilai,nb.nilai
	FROM nilai_bulanan nb 
	JOIN kriteria_nilai_bulanan kr ON nb.id_kriteria_nilai_bulanan = kr.id_kriteria_nilai_bulanan
	JOIN siswa s ON nb.noinduk_siswa = s.noinduk_siswa";
	$select = mysqli_query($koneksi, $sql);
?>
</body>
<div class="container">
  <h2 style="text-align: center;">Data Penilaian Bulanan</h2>
  <br>
  <a href="tambah.php"><button type='button' class='btn btn-success'>+ Tambah</button></a>
  <a href="../dashboard.php"><button type="button" class="btn btn-primary">Kembali</button></a>
  <br>
  <br>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Kriteria Bulanan</th>
        <th>Nama Siswa</th>
        <th>Tanggal Ambil Nilai</th>
        <th>Nilai</th>
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
			<td>$hasil[id_nilai_bulanan]</td>";	

			$krit = mysqli_query($koneksi,"SELECT * FROM kriteria_nilai_bulanan WHERE id_kriteria_nilai_bulanan='$hasil[id_kriteria_nilai_bulanan]'");
			$hasil1 = mysqli_fetch_array($krit);

		echo "
			<td>$hasil1[nama_kriteria_bulanan]</td>";

			$siswa = mysqli_query($koneksi,"SELECT * FROM siswa WHERE noinduk_siswa='$hasil[noinduk_siswa]'");
			$hasil2 = mysqli_fetch_array($siswa);

		echo "
			<td>$hasil2[nama_siswa]</td>
			<td>$hasil[bulan_ambil_nilai]</td>
			<td>$hasil[nilai]</td>
			<td>
				<a href ='edit.php?id_nilai_bulanan=$hasil[id_nilai_bulanan]'><button type='button' class='btn btn-info'>Edit</button></a> <br>
				<a href ='hapus.php?id_nilai_bulanan=$hasil[id_nilai_bulanan]'><button type='button' class='btn btn-danger'>Hapus</button></a>
			</td>
		</tr>";
		$no++;
		?>
		<?php } ?>
	</tbody>
  </table>
</div>
</html>