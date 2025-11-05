<!DOCTYPE html>
<html>
<head>
  <title>CRUD DATA SISWA</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <div class="full">  
    <fieldset>
      <legend>CRUD DATA SISWA SMA KRISTEN PETRA 1</legend>

      <h3>TAMBAH DATA SISWA</h3>
      <form method="post" action="tambah_aksi.php">
        <table>
          <tr>
            <td>KodeMS</td>
            <td><input type="text" name="KodeMS"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="Nama"></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td><input type="text" name="Jurusan"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" value="Submit"></td>
          </tr>
        </table>
      </form>

      <br>
      <a href="index.php">KEMBALI</a>
    
  </div>
  </fieldset>
</body>
</html>
