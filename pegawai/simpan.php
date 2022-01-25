<?php  
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$simpan = mysqli_query($koneksi, "INSERT INTO pegawai (nip_peg,nama_peg,jk_peg,alamat_peg,notelp_peg,email_peg,tglmasuk_peg)
			VALUES('$_POST[txtpeg]', '$_POST[txtnama]', '$_POST[txtkelamin]', '$_POST[txtalamat]', '$_POST[txttelp]', '$_POST[txtemail]', '$_POST[txtmasuk]')");

		if ($simpan) {
			header('location:pegawai.php');
		}else{
			echo "Belum Dapat Menambahkan Data..";
		}
	}
?>