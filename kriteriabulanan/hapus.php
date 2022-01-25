<?php  
	include "../koneksi.php";
	if (isset($_GET['id_kriteria_nilai_bulanan'])) {
	$hapus = mysqli_query($koneksi, "DELETE FROM kriteria_nilai_bulanan WHERE id_kriteria_nilai_bulanan='".$_GET['id_kriteria_nilai_bulanan']."' ");

	if ($hapus) {
		header('location:kritbulanan.php');
	}else{
		echo "Gagal Menghapus Data..";
	}
}
?>