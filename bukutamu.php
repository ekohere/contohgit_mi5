<?php
	include('koneksi.php');
	if($_POST){
			$nama  =$_POST['nama'];
			$email =$_POST['email'];
			$pesan =$_POST['pesan'];
			
			$input=mysql_query("INSERT INTO tb_bukutamu (nama, email, pesan) VALUES('$nama', '$email', '$pesan')");
			if($input){
					echo '<script language="javascript">alert("Terima Kasih, pesan Anda telah terkirim");
					document.location="bukutamu.php";</script>';
			}else{
					echo '<p style="color:red">uppsss...! Query ke database gagal dilakukan!</p>';
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
    <div id="leftBlock">
      <h2>buku tamu</h2>
      <p><em>Silahkan isi buku tamu di bawah ini untuk meninggalkan pesan Anda!</em></p>
      <form action="" method="post">
      		<p>
        	<b>Nama Lengkap :</b><br/>
            <input type="text" name="nama" required />
            </p>
            <p>
            	<b>Email : </b><br/>
                <input type="email" name="email" required />
            </p>
            <p>
				<b>Pesan :</b><br/>
                <textarea name="pesan" rows="5" cols="50" required></textarea>
            </p>
            <p>
            	<input type="submit" name="go" value="Kirim"/>
                <input type="reset" name="del" value="Hapus"/>
            </p>
        </form>
        <br/>    
                             	
      
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
</body>
</html>