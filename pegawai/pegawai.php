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
	<title>Halaman Data Pegawai</title>
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
	$select = mysqli_query($koneksi, "SELECT * FROM pegawai");
?>

<div class="container">
  <h2 style="text-align: center;">Data Pegawai</h2>
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
    <thead>
      <tr>
        <th>No</th>
        <th>NIP Pegawai</th>
        <th>Nama Pegawai</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Email</th>
		    <th>Tgl Masuk</th>
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
			<td>$hasil[nip_peg]</td>
			<td><a href ='../kelbel/kelbel.php?nip_peg=$hasil[nip_peg]'>$hasil[nama_peg]</a></td>
			<td>$hasil[jk_peg]</td>
			<td>$hasil[alamat_peg]</td>
			<td>$hasil[notelp_peg]</td>
			<td>$hasil[email_peg]</td>
			<td>$hasil[tglmasuk_peg]</td>
      <td>
        <a href ='edit.php?nip_peg=$hasil[nip_peg]'><button type='button' class='btn btn-info'>Edit</button></a>
        <br>
        <a href ='hapus.php?nip_peg=$hasil[nip_peg]'><button type='button' class='btn btn-danger'>Hapus</button></a>
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