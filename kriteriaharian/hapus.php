<?php  
	include "../koneksi.php";
	if (isset($_GET['id_kriteria_harian'])) {
	$hapus = mysqli_query($koneksi, "DELETE FROM kriteria_nilai_harian WHERE id_kriteria_harian='".$_GET['id_kriteria_harian']."' ");

	if ($hapus) {
		header('location:kritharian.php');
	}else{
		echo "Gagal Menghapus Data..";
	}
}
?>