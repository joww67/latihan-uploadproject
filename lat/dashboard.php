<link rel="stylesheet" href="styles.css">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">sekolah hama internasional(SHI)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=dashboard.php> enrollment</a>
      </li>
      
    <form class="form-inline my-2 my-lg-0" style= "margin-left: 230px;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 400px; text-align: center;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="login.php">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Login</button>
    </form>
        <form class="form-inline my-2 my-lg-0" action="register.php">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">register</button>
    </form>


  </div>
</nav>
<div class="full">
    <br />
    <br />
    <table border ='1'>
        <tr>
            <th>NIM</th>
            <th>KodeMS</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
    <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['KodeMS']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Jurusan']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['NIM']; ?>">UPDATE</a>
                    <a href="hapus.php?id=<?php echo $d['NIM']; ?>">DELETE</a>
                </td>
            </tr>
            <?php 
        }

        ?>
    </table>
    <br />
    <a href='tambah.php'>
        + TAMBAH DATA SISWA
    </a>


    </div>
