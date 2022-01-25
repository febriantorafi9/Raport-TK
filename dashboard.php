<?php
    session_start(); 
    if ( isset($_SESSION["login"]) == false) {
        header("location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  img {
    max-width: 100%;
    height: auto;
  }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">TK ABDI NUSA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="siswa/siswa.php">Siswa</a></li>
        <li><a href="pegawai/pegawai.php">Pegawai</a></li>
        <li><a href="rapot/rapot.php">Rapot</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Penilaian<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="penilaianharian/nilaiharian.php">Harian</a></li>
            <li><a href="bulanan/nilaibulanan.php">Bulanan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kriteria<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="kriteriaharian/kritharian.php">Harian</a></li>
            <li><a href="kriteriabulanan/kritbulanan.php">Bulanan</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Rekap<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="rekapharian/rekap_harian.php">Harian</a></li>
            <li><a href="rekapbulanan/rekap_bulanan.php">Bulanan</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2 style="text-align: center;"><b>Selamat Datang Di Web Taman Kanak-Kanak Abdi Nusa</b></h2>
  <br>
  <h4 style="text-align: center;">"Your <b>FUTURE</b> is created by you <b>TODAY</b>, not tomorrow."</h4>
  <br>  
  <p>
    <img src="img/poevrrnmbwvb7x7j6cvj.jpg">
  </p>
</div>
</body>
</html>