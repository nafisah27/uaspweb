<?php

include "koneksi.php";

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

$fotobaru = date('dmYHis').$foto;

$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){
  
  $sql = $pdo->prepare("INSERT INTO nafisah(foto) VALUES(:foto)");
  $sql->bindParam(':foto', $fotobaru);
  $sql->execute(); 
  if($sql){ 
    header("location: NAFISAH.php"); 
  }else{
  
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='SIMPAN.php'>Kembali Ke Form</a>";
  }
}else{
  
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='SIMPAN.php'>Kembali Ke Form</a>";
}
?>





