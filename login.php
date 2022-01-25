<?php

    session_start(); 
    if ( isset($_SESSION["login"]) == true) {
        header("location: dashboard.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <style>
        body {
        margin: 0;
        padding: 0;
        background: url(img/b36c9d8cfbf14a9f2e03a8e3f1bba106.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: sans-serif;
        }

        .fash {
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            width: 270px;
            box-shadow: 0 0 10px 5px black;
        }

        .ava img {
        	font-size: 50px;
        	background: #bdc3c7;
        	width: 80px;
        	height: 80px;
        	line-height: 80px;
        	text-align: center;
        	position: fixed;
        	left: 50%;
        	top: 0;
        	transform: translate(-50%, -50%);
        	border-radius: 50%;
        	color: #2c3e50;
        }

        .fash h3 {
        	text-align: center;
        	color: white;
        	padding-top: 10px;
        	letter-spacing: 5px;
        }

        .box-login {
        	display: flex;
        	justify-content: space-between;
        	margin-bottom: 15px;
        	border-bottom: 2px solid white;
        	padding: 8px 0;
        }

        .box-login i {
        	font-size: 20px;
        	color: white;
        }

        .box-login input {
        	width: 100%;
        	padding: 0 10px;
        	background: none;
        	border: none;
        	outline: none;
        	color: white;
        	font-size: 18px;
        }

        .box-login input::placeholder {
        	color: white;
        }

        .btn-login {
        	width: 100%;
        	background: none;
        	padding: 15px;
        	border: 1px solid white;
        	font-size: 18px;
        	letter-spacing: 5px;
        	color: white;
        	cursor: pointer;
        	transition: 0.3s;
        }

        .btn-login:hover {
        	background: rgb(0, 0, 0, 0.8);
        }

        .bottom {
        	display: flex;
        	justify-content: space-between;
        	margin: 10px;
        }

        .bottom a {
        	color: white;
        	font-size: 14px;
        	text-decoration: none; 
        }

        .bottom a:hover {
        	text-decoration: underline;
        }
    </style>
</head>
<body>

<?php 
/*
    require "koneksi.php";
    if ( isset($_SESSION["login"])) {
        header("location: dashboard.php");
        exit;
    }

    if ( isset($_POST["login"]) ) {
    // menangkap data yang dikirim dari form login
    $email = $_POST['email'];
    $password = $_POST['password'];
     
     
    // menyeleksi data user dengan username dan password yang sesuai
    $login = mysqli_query($koneksi,"SELECT * FROM users where email='$email' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
     
    // cek apakah username dan password di temukan pada database
    if($cek > 0){
     
        $data = mysqli_fetch_assoc($login);
     
        // cek jika user login sebagai admin
        if($data['level']=="admin"){
     
            // buat session login dan username
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "admin";
            // alihkan ke halaman dashboard admin
            header("location:dashboard.php");
     
        // cek jika user login sebagai pegawai
        }else if($data['level']=="pegawai"){
            // buat session login dan username
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "pegawai";
            // alihkan ke halaman dashboard pegawai
            header("location:dashboard.php");

        }
        $error = true;
    }
    }
*/

    require "koneksi.php"; 

    if ( isset($_POST["login"]) ) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $result = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email'");

            // cek email yang diinput user ada tidak di database?
            if ( mysqli_num_rows($result) === 1 ) {

                // kalau email terdaftar, ganti sekarang cek password
                $row = mysqli_fetch_assoc($result);
                if ( password_verify($password, $row["password"]) ) {
                    // set session
                    $_SESSION["login"] = true;
                    
                    header("location: dashboard.php");
                    exit;
                }
            }
            $error = true;
    }

?>

	<div class="fash">
		<form method="post" action="">
		<div class="ava">
			<img src="img/images.jpg">
		</div>

		<br>
		<h3>Login TK Abdi Nusa</h3>

        <?php if (isset($error)) : ?>
           <p class="text-center" style="color: white; text-align: center;">Email & password salah</p>
        <?php endif; ?>

		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="text" placeholder="Email" name="email">
		</div>

		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="Password" name="password">
		</div>

		<button type="submit" class="btn-login" name="login">
			Login
		</button>

		<div class="bottom">
			<a href="register.php">Registrasi</a>
			<a href="#">Forgot Password</a>
		</div>
        </form>
	</div>
</body>
</html>