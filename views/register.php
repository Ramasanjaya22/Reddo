<?php

if (isset($_SESSION["user_id"])) {
  header("Location: dashboard/home.php");
}

if (isset($_POST["submit"])) {
  include 'config.php';

  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
    echo "<script>alert('{$email} - This email has already taken.');</script>";
  } else {
    $sql = "INSERT INTO users (name,username, email, password) VALUES ('{$name}','{$username}', '{$email}', '{$password}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      header("Location: login.php");
    } else {
      echo "<script>Error: " . $sql . mysqli_error($conn) . "</script>";
    }
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../assets/img/reddo-transparant.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <!-- login-register styling -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap" rel="stylesheet">

</head>

<body>

  <section class="boxmerah col-12 col-lg-6 mx-auto mt-2">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-3 col-lg-3 mx-auto ">
          <image src="../assets/img/reddo-transparant.png" width="150px" , height="150px"></image>
        </div>

        <div class="registacc">
          <div class="offset-2 ">
            <h3><b>REGISTER YOUR ACCOUNT</b></h3>
          </div>
        </div>

        <form action="" method="POST">
          <div class="nameuser">
            <div class="row g-3 ">
              <div class="offset-2 col-md-4">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="name" class="form-control" id="name" name="name" placeholder="your name">
              </div>
              <div class="col-md-4 ">
                <label for="inputUsername" class="form-label">Username</label>
                <input type="username" class="form-control" id="username" name="username" placeholder="username">
              </div>
            </div>

            <div>
              <div class="email1 ">
                <div class="offset-2 col-lg-8 mt-2">
                  <label for="inputEmail1" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="your email">
                </div>
              </div>

              <div class="password1 ">
                <div class="offset-2 col-lg-8">
                  <label for="inputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="password">
                </div>
              </div>
            </div>

            <div class="button">
              <div class=" d-grid gap-2 offset-2 col-lg-8 mt-5">
                <button class="btn btn-light" name="submit" type="submit"><b>Register Now</b></button>
              </div>
            </div>

            <div class="signwithgoogle">
              <div class=" d-grid gap-2 offset-2 col-lg-8 mt-3">
                <button class="btn btn-dark" type="button" id="login">
                  <image src="../assets/img/google.png" width="20px" height="20px"></image> Or Sign-in with google
                </button>
              </div>
            </div>
            <br>
            <br>
            <br>
          </div>
          <div class="haveacc">
            <h6>Have an account? <a href="./login.php" class="text-decoration-none">Sign in now!<masuk style="color:#3366cc">
                  </style>
            </h6>
        </form>


        <!--Bootstrap Bundle with Popper -->
        <script src="../assets/js/bootstrap.bundle.js"></script>
        <script src="../assets/js/firebase.js" type="module"></script>
</body>

</html>