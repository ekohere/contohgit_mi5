<?php
	session_start();
	include('koneksi.php');
	
	$error='';
	if(isset($_POST['masuk'])){
		$nama=$_POST['nama'];
		$password=$_POST['password'];
		
		if($nama=='admin'&&$password=='harapan'){
			$_SESSION['login_user']=$nama;
			header("location:admin/index.php");
		}else{
			$error='username atau password salah';
		}
	}
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
    <h2>Pengumuman Terbaru</h2>
    <?php
	$sql=mysql_query("SELECT * FROM tb_pengumuman ORDER BY tanggal DESC LIMIT 1") or die (mysql_error());
	
	$row=mysql_fetch_array($sql);
	?>  
        
    <p><?php echo $row['isi'];
	?> </p>
    <div id="leftBlock">
      <h2>Berita Terbaru</h2>
      <?php
	  $sql=mysql_query("SELECT * FROM tb_berita ORDER BY tanggal DESC LIMIT 2") or die (mysql_error());
	  while($row=mysql_fetch_array($sql))
	  {
	  ?>
      
      <h3><?php echo $row['judul'];?></h3>
      <p><?php echo substr ($row['isi'],0,200);?>...</p>
      <div id="leftLink">
      
        <ul>
          <li><a href="#">selengkapnya</a></li>
        </ul>
      </div>
      
      <div style="clear:both"></div>
      <?php } ?>
      
    </div>
    <div id="rightPan">
      <form id="form1" name="form1" method="post" action="">
       <h2> Member Login</h2>
        <label>Nama</label><input name="nama" type="text" />
        <label>Password</label><input name="password" type="password" />
        <input name="masuk" type="submit" value="masuk" class="button" />
      </form>
      <p style="color:red;"><?php echo $error;?></p>
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
