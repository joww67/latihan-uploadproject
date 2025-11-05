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

<link rel="stylesheet" href="style.css">
<div class=base>
<form action="" method="post">
  <div class="container">

    <h1>register</h1>
    <p></p>
    <hr>
    
    <label for="username" style="margin-right:42px; margin-top:10px" ><b>username      </b></label><b>:</b>
    <input type="text" placeholder="Enter username" name="username" required>
    <br/>
    <label for="email"style="margin-right:71px"><b>email </b></label><b>:</b>
    <input type="email" placeholder="Enter email" name="email" required>
    <br/>
    <label for="psw" style ="margin-right:46px"><b>Password</b></label><b>:</b>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br/>

    <div class="clearfix">
        <button type="submit" name="register" class="register" style="margin-left:122px">register</button>
    </div>
    <div> Already have an account? <a href="login.php">Login here</a>.</div>
  </div>
</form>

</div>


<?php
include 'koneksi.php';
if(isset ($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "Registration successful. You can now <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
