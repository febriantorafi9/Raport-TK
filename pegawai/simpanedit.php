<?php 
	include "../koneksi.php";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$update = mysqli_query($koneksi, "UPDATE pegawai SET nama_peg='$_POST[txtnama]',
															jk_peg='$_POST[txtkelamin]',
															alamat_peg='$_POST[txtalamat]',
															notelp_peg='$_POST[txttelp]',
															email_peg='$_POST[txtemail]',
															tglmasuk_peg='$_POST[txtmasuk]'
														   	WHERE nip_peg='$_POST[txtpeg]'");

		if ($update) {
			header('location:pegawai.php');
		}else{
			echo "Belum Dapat Mengupdate Data...";
		}
	}
?>