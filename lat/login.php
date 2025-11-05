
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

<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        header('Location: index.php');
        exit;
    }
    else {
        echo "<script>alert('Invalid username or password.');</script>";
    }
    
}

?>
<link rel="stylesheet" href="style.css">
<div class=base>
    <form method="post">
        <h2>Login Form</h2>
    <hr>
    <div class="container">
            <label for="uname"style ="margin-right:42px"><b>Username </b></label><b>:</b>
            <input type="text" placeholder="Enter Username" name="uname" required>
        </br>
            <label for="psw" style ="margin-right:46px"><b>Password  </b></label><b>:</b>
            <input type="password" placeholder="Enter Password" name="psw" required>
        </br>
        <button type="submit" name ="login">Login</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
        <span class="psw"> <a href="#">Forgot password?</a> <a href="register.php"> register </a></span>
    </div>
    </form>
</div>

