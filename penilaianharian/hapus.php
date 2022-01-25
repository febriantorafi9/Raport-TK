<?php  
	include "../koneksi.php";
	if (isset($_GET['id_nilai_harian'])) {
	$hapus = mysqli_query($koneksi, "DELETE FROM nilai_harian WHERE id_nilai_harian='".$_GET['id_nilai_harian']."' ");

	if ($hapus) {
		header('location:nilaiharian.php');
	}else{
		echo "Gagal Menghapus Data..";
	}
}
?>