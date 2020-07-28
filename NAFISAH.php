<!DOCTYPE html>
<html>
<head>
	<title>NAFISAH RAHMAWATI</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<body>
	<style type="text/css">
		body{
			background: ;
			background-size: cover;
			color: white;
		}
		.nafisah{
			margin:100px;
			border-radius: 500px;
			font-size: 50px;
		}
		ul{
			
			float: center;
		}
		li{
			
			display: inline-block;
			padding: 10px;
		}
		#tombol{
			border-radius: 50px;
			background-color: chocolate;
		}
		.Hapus{
			font-size:30px;
			border-radius: 50px;
		}



	</style>
	<nav class="navbar fixed-top navbar-expand-lg navbar-danger bg-danger">
<ul>
	<li>PROFIL</li>
	<li>PORTOFOLIO</li>
	<li>KONTAK</li>
</ul>
</nav>

	<center>
	<div class="nafisah">
		<p>PROFIL</p>

	<div class="alert alert-success" role="alert">
			<P>NAFISAH RAHMAWATI</P>
	<img src="oke.jpg" style="border-radius: 50px;">
  <h4 class="alert-heading">Nama saya Nafisah Rahmawati , kenapa masuk jurusan ini karena usulan dari orang tu menginag perkembangan zaman jaamn sekarang banyak menggunakan teknologi</h4>
  <p>Nafisah Rahmawati (1900018213) :)</p>
  <hr>
  <p class="mb-0"></p>
</div>
	<table>
		<tr>
			<td><img src="annie-spratt-ncQ2sguVlgo-unsplash.jpg" width="200px" height="200px" style="border-radius: 0px;"></td>
		<td><img src="boxed-water-is-better-M6eWvLb2EYY-unsplash.jpg" width="200px" height="200px"style="border-radius: 0px;"></td>
			<td><img src="fahrul-azmi-5K549TS6F08-unsplash.jpg" width="200px" height="200px" style="border-radius: 0px;"></td>
		</tr>
		<tr>
			<td><img src="liubov-ilchuk-_6rR_iP06p4-unsplash.jpg" width="200px" height="200px" style="border-radius: 0px;"></td>
			<td><img src="peter-nicola-1V0ucpOq6D0-unsplash.jpg" width="200px" height="200px" style="border-radius: 0px;"></td>
			<td><img src="sean-pollock-PhYq704ffdA-unsplash.jpg" width="200px" height="200px" style="border-radius: 0px;"></td>
		</tr>
	</table>
	</div>
	</center>

	
  <center><p id="Portofolio" style="font-size: 50px;">PORTOFOLIO</p>
  <button id="tombol"><a href="SIMPAN.php" style="font-size: 30px;">SILAHKAN MENAMBAHKAN DATA DIRI ANDA DI DALAM PORTOFOLIO</a></button><br><br>
  <table border="0" width="100%">
  <tr>
    <th>Foto</th>
  </tr>
  <?php

  include "koneksi.php";
  
  $sql = $pdo->prepare("SELECT * FROM nafisah");
  $sql->execute(); 
  while($data = $sql->fetch()){ 
  	echo "<table>";
    echo "<tr>";
    echo "<td><img src='images/".$data['foto']."' width='250' height='300'></td>";
    echo "<td><button class=Hapus><a href='HAPUS.php?id=".$data['id']."'>Hapus</a></button></td>";
    echo "</tr>";
  }
  ?>
  </table>
  </center>


  <center>
<p style="font-size: 50px;">KONTAK</p>
<ul>
	<li><img src="1491579542-yumminkysocialmedia22_83078.png"></li>
	<li><img src="facebook_icon-icons.com_53612.png"></li>
	<li><a href="https://www.instagram.com/nafisahrhmwtii/"><img src="icons8-instagram-256.png"></a></li>
</ul>
</center>


	<nav class="navbar fixed-bottom navbar-expand-lg navbar-primary bg-primary">
		<center><p>COPYRIGHT &copy NAFISAH RAHMAWATI</p></center>
		</nav>
</body>
</html>