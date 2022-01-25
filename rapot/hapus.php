<?php  
	include "../koneksi.php";
	if (isset($_GET['id_rapot'])) {
	$hapus = mysqli_query($koneksi, "DELETE FROM rapot WHERE id_rapot='".$_GET['id_rapot']."' ");

	if ($hapus) {
		header('location:rapot.php');
	}else{
		echo "Gagal Menghapus Data..";
	}
}
?>