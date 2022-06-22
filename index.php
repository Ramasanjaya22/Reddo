<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- logo title bar -->
  <link rel="icon" href="assets/img/reddo-transparant.png" type="image/x-icon">
  <title>Reddo Game-based Reading tracker</title>
  <!-- style -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/landing.css">


  <style>
    /* *{
      border: 1px solid red;
    }    */
  </style>
</head>

<body class="h-100 w-100 position-relative container-xxl">

  <header class="header mx-auto p-0">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a href="#">
        <img style="margin-right: 0.75rem; width: 75px;" src="assets/img/reddo-transparant.png" alt="logo" />
      </a>
      <!-- nav-mobile -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-white border-0">
            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
              <a class="modal-title" id="targetModalLabel">
                <img style="margin-top: 0.5rem;width: 75px;" src="assets/img/reddo-transparant.png" alt="logo" />
              </a>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
              <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#fitur">Fitur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tentang_kami.php" target="_blank">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://wa.link/vizf4y">Kontak</a>
                </li>
              </ul>
            </div>
            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
              <a href="views/login.php" class="btn btn-default btn-no-fill" type="submit" name="login">Log In</a>
              <a href="views/register.php" class="btn btn-fill text-white" name="register">Register</a>
            </div>
          </div>
        </div>
      </div>
      <!-- desktop nav -->
      <div class="collapse navbar-collapse" id="navbarTogglerDemo">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#fitur">Fitur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang_kami.php" target="_blank">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://wa.link/vizf4y">Kontak</a>
          </li>
        </ul>
        <div class="gap-3">
          <a href="views/login.php" class="btn btn-no-fill">Log In</a>
          <a href="views/register.php" class="btn btn-fill text-white">Register</a>
        </div>
      </div>

    </nav>
    <!-- end of nav -->

    <section id="home">
      <div class="mx-auto d-flex flex-lg-row flex-column hero">
        <!-- Left Column -->
        <div class="reveal left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
          <h1 class="title-text-big">Membaca Jadi Jauh Lebih Seru
            dengan REDDO</h1>
          <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
            <a href="views/login.php" class="reveal btn d-inline-flex mb-md-0 btn-try text-white">
              Daftar sekarang
            </a>
          </div>
        </div>
        <!-- Right Column -->
        <div class="reveal right-column text-center d-flex justify-content-center pe-0">
          <img id="img-fluid" class="h-auto mw-100" src="assets/img/ilustrasi-buku.png" alt="" />
        </div>
      </div>

    </section>
  </header>

  <section id="fitur" class="content mx-auto">
    <div class="d-flex flex-lg-row flex-column align-items-center">
      <!-- Left Column -->
      <div class="reveal img-hero text-center justify-content-center d-flex">
        <img id="hero" class="img-fluid border rounded-circle w-75" src="assets/img/ilustrasi-anak.png" alt="" />
      </div>

      <!-- Right Column -->
      <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
        <h2 class="reveal title-text">3 Fitur Utama dari REDDO</h2>
        <ul style="padding: 0; margin: 0">
          <li class="reveal list-unstyled" style="margin-bottom: 1rem;">
            <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                1
              </span>
              Reading Tracker
            </h4>
            <p class="text-caption">
              Dengan Reddo kamu bisa mentracking buku bacaan Favorit kamu<br class="d-sm-inline d-none" />
              secara mudah dan menyenangkan!
            </p>
          </li>
          <li class="reveal list-unstyled" style="margin-bottom: 1rem">
            <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                2
              </span>
              Perpustakaan Buku
            </h4>
            <p class="text-caption">
              Kamu bingung lagi mau baca apa?<br class="d-sm-inline d-none" />
              tenang aja, Reddo memiliki fitur untuk menampilkan halaman Perpustakaan untuk buat kamu yang lagi bingung mau baca apa. Jadi gausah searching" lagi nih
            </p>
          </li>
          <li class="reveal list-unstyled" style="margin-bottom: 3rem">
            <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
              <span class="circle text-white d-flex align-items-center justify-content-center">
                3
              </span>
              To do List ala Game RPG
            </h4>
            <p class="text-caption">
              Agar kamu tidak bosan hanya dengan bacaan buku aja,<br class="d-sm-inline d-none" />
              Reddo memiliki fitur Quest ala game Rpg sehingga setiap kamu selesai menyelesaikan task, kamu akan mendapatkan point yang nantinya digunakan untuk bersaing pada posisi LeaderBoard untuk memperebutkan peringkat teratas!
            </p>
          </li>
        </ul>

      </div>
    </div>
  </section>

  <footer class="footer mx-auto p-0">
    <div class="list-footer">
      <div class="row gap-md-0 gap-3">
        <div class="col-lg-4 col-md-6">
          <div class="">
            <div class="list-space">
              <img style="width: 75px;" src="assets/img/reddo-transparant.png" alt="logo" />
            </div>
            <nav class="list-unstyled">
              <li class="list-space">
                <a href="#home" class="list-menu">Home</a>
              </li>
              <li class="list-space">
                <a href="#fitur" class="list-menu">Fitur</a>
              </li>
              <li class="list-space">
                <a href="tentang_kami.php" class="list-menu">Tentang Kami</a>
              </li>
              <li class="list-space">
                <a href="https://wa.link/vizf4y" class="list-menu">Kontak</a>
              </li>
            </nav>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <h2 class="footer-text-title">Product</h2>
          <nav class="list-unstyled">
            <li class="list-space">
              <a href="index.php" class="list-menu">Reddo Reading Tracker</a>
            </li>
          </nav>
        </div>
        <div class="col-lg-4 col-md-6">
          <h2 class="footer-text-title">TE4M Dev</h2>
          <nav class="list-unstyled">
            <li class="list-space">
              <a href="" class="list-menu">Contact Us</a>
            </li>
          </nav>
        </div>
      </div>
    </div>

    <div class="border-color info-footer">
      <div class="">
        <hr class="hr" />
      </div>
      <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
        <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
          <p style="margin: 0">Copyright © 2022 TE4M REDDO | D3RPLA45 04 | Proyek Tingkat 1</p>
        </nav>
      </div>
    </div>
  </footer>

  <!-- reveal js -->
  <script src="assets/js/reveal.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
</body>

</html>