<?php

include 'koneksi.php';
$NIM = $_GET['id'];

mysqli_query($koneksi, "delete from mahasiswa where NIM='$NIM'");

header("location:index.php");
?>