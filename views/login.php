<?php
include 'config.php';
session_start();

if (isset($_POST["login"])) {
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));

  $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
  $result = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($result);

  if ($count > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["user_id"] = $row['id'];
    echo "<script>alert('Login Berhasil');</script>";
    header("Location: dashboard/home.php");
  } else {
    echo "<script>alert('Login Gagal silahkan coba lagi.');</script>";
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

  <!-- google -->
  <meta name="google-signin-scope" content="profile email">
  <meta name="google-signin-client_id" content="1018822594284-v2k1genulbhce2fpjs1iec4ofgb3mm66.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap" rel="stylesheet">
</head>

<body>

  <!--Box-->

  <section class="box col-12 col-lg-6 mx-auto mt-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mx-auto">
          <image src="../assets/img/reddo-transparant.png" class="img-fluid lg-w-100"></image>
        </div>
        <div class="sambutan">
          <div class="offset-2">
            <h6>Welcome Back</h6>
            <h4 style="color:#1A202C"><b>Login to your account</b></h4>
          </div>
        </div>



        <form action="" method="POST">

          <div class="email">
            <div class="offset-2 col-lg-8 mt-2">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control md-w-50" id="email" placeholder="Masukkan email kamu" autocomplete="off" required autofocus="on">
            </div>
          </div>

          <div class="password ">
            <div class="offset-2 col-lg-8">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
              <input class="mt-2" type="checkbox" onclick="myFunction()">Show Password
            </div>
          </div>
      </div>



      <div class="button">
        <div class=" d-grid gap-2 offset-2 col-lg-8 mt-4">
          <button class="btn btn-light" name="login" type="submit"><b>Login now</b></button>
        </div>
      </div>

      <div class="signwithgoogle">
        <div class=" d-grid gap-2 offset-2 col-lg-8 mt-3">
          <button class="btn btn-dark" type="button" id="login">
            <image src="../assets/img/google.png" width="20px" height="20px"></image> Or Sign-in with google
          </button>
        </div>
      </div>
      </p>
    </div>
    </div>
    </form>



    <br>
    <br>
    <br>
    </div>
    </div>
  </section>

  <div class="join">
    <h6>Dont have an account? <a href="./register.php" class="text-decoration-none"> Join free today!</a></h6>
  </div>
  </div>

  <!--Bootstrap Bundle with Popper -->
  <script src="../assets/js/bootstrap.bundle.js"></script>
  <!-- firebase sdk script -->
  <!-- <script src="../assets/js/firebase.js" type="module"></script> -->
  <!-- show password -->
  <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
  <!-- google -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <!-- <script>
    function onSignIn(googleUser) {
      // Useful data for your client-side scripts:
      var profile = googleUser.getBasicProfile();
      // console.log("ID: " + profile.getId()); // Don't send this directly to your server!
      // console.log('Full Name: ' + profile.getName());
      // console.log('Given Name: ' + profile.getGivenName());
      // console.log('Family Name: ' + profile.getFamilyName());
      // console.log("Image URL: " + profile.getImageUrl());
      // console.log("Email: " + profile.getEmail());

      // The ID token you need to pass to your backend:
      // var id_token = googleUser.getAuthResponse().id_token;
      // console.log("ID Token: " + id_token);

      var nama = profile.getName();
      var email = profile.getEmail();
      var img = profile.getImageUrl();

      $.ajax({
        url: "data.php",
        type: "post",
        data: {
          nama: nama,
          email: email,
          img: img
        },
        success: function(data) {
          $("#tampil").html(data);
        }
      })
    }
  </script> -->

</body>

</html>