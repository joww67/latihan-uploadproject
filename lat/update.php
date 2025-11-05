<!DOCTYPE html>
<html>
<head>
    <title>CRUD SISWA</title>
</head>
<body>
<h2> CRUD DATA SISWA SMA KRISTEN PETRA 1</h2>
<br />
<a href="index.php"> KEMBALI</a>
<br />
<br />
<h3>UPDATE DATA SISWA</h3>
<link rel="stylesheet" href="styles.css">



<?php 
include 'koneksi.php';
$NIM = $_GET['id'];
$data = mysqli_query($koneksi,"select * from mahasiswa where NIM='$NIM'");
while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="ubah.php">
        <table>
            <tr>            
                <td>KodeMS</td>
                <td>
                    <input type="hidden" name="NIM" value="<?php echo $d['NIM']; ?>">
                    <input type="text" name="KodeMS" value="<?php echo $d['KodeMS']; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" value="<?php echo $d['Nama']; ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat" value="<?php echo $d['Alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
                <input type="hidden" name="NIM" value="<?php echo $d['NIM']; ?>">`
            </tr>
        </table>
    </form>
    <?php 
}