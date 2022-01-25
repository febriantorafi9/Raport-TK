<?php  
	include "../koneksi.php";
	if (isset($_GET['id_nilai_bulanan'])) {
	$hapus = mysqli_query($koneksi, "DELETE FROM nilai_bulanan WHERE id_nilai_bulanan='".$_GET['id_nilai_bulanan']."' ");

	if ($hapus) {
		header('location:nilaibulanan.php');
	}else{
		echo "Gagal Menghapus Data..";
	}
}
?>