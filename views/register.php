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

  <section class="boxmerah  col-12 col-lg-6 mx-auto mt-2">
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

        <div class="nameuser">
          <form class="row g-3 ">
            <div class="offset-2 col-md-4">
              <label for="inputNama" class="form-label">Nama</label>
              <input type="Nama" class="form-control" id="inputNama">
            </div>
            <div class="col-md-4 ">
              <label for="inputUsername" class="form-label">Username</label>
              <input type="Username" class="form-control" id="inputUsername">
            </div>
          </form>

          <form>
            <div class="email1 ">
              <div class="offset-2 col-lg-8 mt-2">
                <label for="inputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail1">
              </div>
            </div>

            <div class="password1 ">
              <div class="offset-2 col-lg-8">
                <label for="inputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword1">
              </div>
            </div>
          </form>

          <div class="button">
            <div class=" d-grid gap-2 offset-2 col-lg-8 mt-5">
              <a href="dashboard/home.php" class="btn btn-light" type="button"><b>Register Now</b></a>
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
      </div>
  </section>

  <div class="haveacc">
    <h6>Have an account? <a href="./login.php" class="text-decoration-none">Sign in now!<masuk style="color:#3366cc">
          </style>
    </h6>
  </div>

  <!--Bootstrap Bundle with Popper -->
  <script src="../assets/js/bootstrap.bundle.js"></script>
  <script src="../assets/js/firebase.js" type="module"></script>
</body>

</html>