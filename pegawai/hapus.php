<?php  
	include "../koneksi.php";
	if (isset($_GET['nip_peg'])) {
	$hapus = mysqli_query($koneksi, "DELETE FROM pegawai WHERE nip_peg='".$_GET['nip_peg']."' ");

	if ($hapus) {
		header('location:pegawai.php');
	}else{
		echo "Gagal Menghapus Data..";
	}
}
?>