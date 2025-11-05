
<link rel="stylesheet" href="styles.css">

<?php

include 'koneksi.php';

$KodeMS = $_POST['KodeMS'];
$Nama = $_POST['Nama'];
$NIM = $_POST['NIM'];
$Jurusan = $_POST['Jurusan'];
$Alamat = $_POST['Alamat'];


mysqli_query($koneksi, "update mahasiswa set KodeMS = '$KodeMS', Nama='$Nama', Jurusan='$Jurusan', Alamat='$Alamat' where NIM='$NIM'");

header("location:index.php");
?>