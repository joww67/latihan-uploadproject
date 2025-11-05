<?php

include 'koneksi.php';



$KodeMS = $_POST['KodeMS'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$Alamat = $_POST['Alamat'];

mysqli_query($koneksi, "insert into mahasiswa(KodeMS, Nama, Jurusan, Alamat) values('$KodeMS','$Nama','$Jurusan','$Alamat')");

header("location:index.php");
?>