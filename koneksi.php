<?php  

	$koneksi = mysqli_connect("localhost","root","","db_151911513006");

	if (!$koneksi) {
		echo 'Gagal terhubung';
	}


	function registrasi($data) {
    		global $koneksi;

            $username = strtolower(stripslashes($data["username"]));
            $email = strtolower(stripslashes($data["email"]));
            $password = mysqli_real_escape_string($koneksi, $data["password"]);
            $password1 = mysqli_real_escape_string($koneksi, $data["password1"]);
            $level = strtolower(stripslashes($data["level"]));

            // cek username sudah ada yang pakai atau tidak
            $User = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");

            if ( mysqli_fetch_array($User) == true ) {
                echo "<script>
                        alert('username yang diinputkan ada yang pakai!');
                    </script>";
                return false;
            }

            // cek ketersediaan email
            $Email = mysqli_query($koneksi, "SELECT email FROM users WHERE email = '$email'");

            if ( mysqli_fetch_assoc($Email) == true ) {
                echo "<script>
                        alert('Email yang dimasukkan sudah terpakai!');
                    </script>";
                return false;
            }

            // cek konfirmasi password
            if ( $password !== $password1 ) {
                echo "<script>
                        alert('Password tidak sama, mohon ulangi lagi!');
                    </script>";
                return false;
            }

            // enkripsi password
            $password = password_hash($password, PASSWORD_DEFAULT);

            // menambahkan user registrasi ke database
            mysqli_query($koneksi, "INSERT INTO users VALUES('', '$username', '$email', '$password','$level')");

            return mysqli_affected_rows($koneksi);
    }

//    function login($data){
     
    // menghubungkan php dengan koneksi database
//    global $koneksi;
     
//    function cari($data){
//        $siswa = "SELECT * FROM s.noinduk_siswa,w.nik_walmur,s.nama_siswa,s.jenis_kelamin,s.tgllahir,s.tgl_masuk,s.tgl_lulus,s.alamat,s.anakke FROM siswa s JOIN walimurid w
//        ON s.nik_walmur = w.nik_walmur WHERE noinduk_siswa LIKE '%$data%' OR 
//                    nama_siswa LIKE '%$data%' OR
//                    nik_walmur LIKE '%$data%' OR
//                    jenis_kelamin LIKE '%$data%' OR
//                    tgllahir LIKE '%$data%' OR
//                    tgl_masuk LIKE '%$data%' OR
//                    tgl_lulus LIKE '%$data%' OR
//                    alamat LIKE '%$data%' OR
//                    anakke LIKE '%$data%' OR
//                    ";
//        return mysqli_fetch_assoc($siswa);
//   }
?>


