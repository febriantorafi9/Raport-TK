<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Register</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
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

        .registrasi {
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

        .registrasi h3 {
        	text-align: center;
        	color: white;
        	padding-top: 10px;
        	letter-spacing: 5px;
        }

        .box-registrasi {
        	display: flex;
        	justify-content: space-between;
        	margin-bottom: 15px;
        	border-bottom: 2px solid white;
        	padding: 8px 0;
        }

        .box-registrasi i {
        	font-size: 20px;
        	color: white;
        }

        .box-registrasi input {
        	width: 100%;
        	padding: 0 10px;
        	background: none;
        	border: none;
        	outline: none;
        	color: white;
        	font-size: 18px;
        }

        .box-registrasi label {
            font-size: 20px;
            color: white;
        }

        .box-registrasi label {
            width: 50%;
        }

        .box-registrasi input::placeholder {
        	color: white;
        }

        .btn-registrasi {
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

        .btn-registrasi:hover {
        	background: rgb(0, 0, 0, 0.8);
        }

        .bottom {
            display: flex;
            justify-content: space-between;
            margin: 10px;
        }

        .bottom a {
            color: white;
            font-size: 15px;
            text-decoration: none; 
            text-align: center;
            padding-top: 10px;
        }

        .bottom a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
        <?php  
            require 'koneksi.php';
            if ( isset($_POST["register"]) ) {
                if ( registrasi($_POST) > 0 ) {
                    echo "<script>
                            alert('Data berhasil di registrasikan!');
                        </script>";
                } else {
                    echo mysqli_error($koneksi);
                }
            }
/*            if (isset($_POST['register'])) {
                
                $nama = strtolower(stripslashes($_POST['nama']));
                $email = strtolower(stripslashes($_POST['email']));
                $password1 = mysqli_real_escape_string($_POST['password']);
                $password2 = mysqli_real_escape_string($_POST['repeatpassword']);
                
                if ($password == $password2) {
                    mysqli_query("INSERT INTO user VALUES ('','$nama', '$email', '$password')");
                    echo "<div class='alert alert-danger'> Registrasi Berhasil </div>";
                    echo "<meta http-equiv='refresh' content='1,5;url=login2.php'>";
                }elseif ($password1 !== $password2) {
                    echo "<div class='alert alert-danger'> Password Tidak Cocok </div>";
                    echo "<meta http-equiv='refresh' content='1;url=register.php'>";
                }
            }
*/
        ?>
	<div class="registrasi">

        <form method="post">
        <div class="ava">
            <img src="img/images.jpg">
        </div>
		
        <br>
		<h3>Register TK Abdi Nusa</h3>

        <div class="box-registrasi">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="username" name="username">
        </div>

		<div class="box-registrasi">
			<i class="fas fa-envelope"></i>
			<input type="text" placeholder="Email" name="email">
		</div>

		<div class="box-registrasi">
			<i class="fas fa-lock"></i>
			<input type="password" placeholder="Password" name="password">
		</div>

        <div class="box-registrasi">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Repeat Password" name="password1">
        </div>

        <div class="box-registrasi">
            <label for="jk">Level</label>
            <select class="form-control" name="level">
                <option value="">-- Pilih --</option>
                <option>Admin</option>
                <option>Pegawai</option>
            </select>
        </div>

		<button type="submit" class="btn-registrasi" name="register">
			Register
		</button>

        <div class="bottom">
            <a href="login.php">Login</a>
            <a href="#">Reset</a>
        </div>
        </form>

	</div>
</body>
</html>