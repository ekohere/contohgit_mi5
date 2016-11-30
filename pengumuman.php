<?php
	include('koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sekolah Harapan</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="topPan">
  <ul>
    <li><a href="index.php">Beranda</a></li>
    <li><a href="berita.php">Berita</a></li>
    <li><a href="pengumuman.php">Pengumuman</a></li>
    <li><a href="bukutamu.php">Buku Tamu</a></li>
  </ul>
</div>
<div id="bodyPan">
  <div id="leftPan">
    <div id="leftBlock">
      <h2>Pengumuman Terbaru</h2>
      <?php
	  $sql=mysql_query("SELECT * FROM tb_pengumuman ORDER BY tanggal DESC LIMIT 1") or die (mysql_error());
	  while($row=mysql_fetch_array($sql))
	  {
	  ?>
      <p><?php echo $row['isi'];?>...</p>
      
      <div style="clear:both"></div>
      <?php } ?>
    </div>
    <div id="footerPan">
      <ul>
        <li><a href="beranda.php">Beranda</a></li>
        <li><a href="berita.php">Berita</a></li>
        <li><a href="pengumuman.php">Pengumuman</a></li>
        <li><a href="bukutamu.php">Buku Tamu</a></li>
      </ul>
      <p>&copy; Sekolah Harapan. All Right Reserved. 2015.</p>
    </div>
<p>&nbsp;</p>
  </div>
</div>
</body>
</html>
