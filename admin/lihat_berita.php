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
    <h2>Berita Sekolah</h2>
    <a href="tambah_berita.php">Tambah Berita</a>
    <table border="1">
    	<tr>
        	<th>No</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
        
        <?php
		$no=1;
		$sql=mysql_query("Select * from tb_berita ORDER BY Tanggal Desc") or die (mysql_error());
		while($row=mysql_fetch_array($sql)){
			?>
            	<tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['judul']; ?></td>
                <td><?php echo $row['tanggal']; ?></td>
                <td><?php echo $row['penulis']; ?></td>
                <td><a href="edit_berita.php">Edit</a>
                	<a href="hapus_berita.php">Hapus</a>
                	
                </td>
                </tr>
		<?php } ?>
    </table>
    
</body>
</html>