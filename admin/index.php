<?php
include('../koneksi.php');
session_start();

if(!isset($_SESSION['login_user'])){
	session_destroy();
	header('Location:index.php');
}
?>

<html>
<head>
<title>Halaman Admin Sekolah Harapan </title>
<link href="../style/style-admin.css" rel="stylesheet" type="text/css"  />
</head>

<body>
<div id="profile">
<div id="welcome">
<b>Halaman Admin Website Sekolah Harapan</b><br />
Selamat Datang : <i><?php echo $_SESSION['login_user']; ?> </i>
</div>
<div id="menu">
	<a href="lihat_berita.php">Berita</a>
    <a href="lihat_pengumuman.php">Pengumuman</a>
	<a href="lihat_bukutamu.php">Buku Tamu</a>
    <a href="logout.php">Log Out</a>
    </div>
    </div>
</body>
</html>