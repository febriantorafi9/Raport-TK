<?php  
	include "../koneksi.php";
	if (isset($_GET['noinduk_siswa'])) {
	$hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE noinduk_siswa='".$_GET['noinduk_siswa']."' ");

	if ($hapus) {
		header('location:siswa.php');
	}else{
		echo "Gagal Menghapus Data..";
	}
}
?>