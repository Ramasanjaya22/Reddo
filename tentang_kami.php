<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- logo title bar -->
    <link rel="icon" href="assets/img/reddo-transparant.png" type="image/x-icon">
    <title>Tentang Kami</title>
    <!-- style -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/landing.css">


    <style>
        /* * {
            border: 1px solid red;
        } */
    </style>
</head>

<body class="h-100 w-100">

    <header class="container-xxl mx-auto p-0  position-relative header">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="#">
                <img style="margin-right: 0.75rem; width: 75px;" src="assets/img/reddo-transparant.png" alt="logo" />
            </a>
            <!-- btn-menu | responsive -->
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
                                <li class="nav-item ">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Fitur</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tentangkami" target="_blank">Tentang Kami</a>
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

            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#tentangkami" target="_blank">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://wa.link/vizf4y">Kontak</a>
                    </li>
                </ul>
                <div class="gap-3">
                    <a href="views/login.php" class="btn btn-default btn-no-fill">Log In</a>
                    <a href="views/register.php" class="btn btn-fill text-white">Register</a>
                </div>
            </div>

        </nav>
        <!-- end of nav -->

        <section id="tentangkami">
            <div class="reveal about-us container-xxl mx-auto p-0  position-relative">
                <div class="text-center title-text">
                    <h1 class="text-title">Tentang Kami</h1>

                </div>

                <div class="grid-padding text-center">
                    <div class="reveal row">
                        <div class="col-lg-4 column">
                            <div class="rounded-5 p-2" style="background:#593B9B;">
                                <img class="rounded-5 p-2" style="width: 100%;" src="assets/img/aboutUs/rama1.jpeg" alt="" />
                            </div>
                            <h3 class="title">Rama Sanjaya</h3>
                            <p class="caption">
                                NIM : 6706213021
                                <br>
                                Frontend Developer | UI Designer
                            </p>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="rounded-5 p-2" style="background:#593B9B;">
                                <img class="rounded-5 p-2" style="width: 95%;" src="assets/img/aboutUs/ihdazul1.jpeg" alt="" />
                            </div>
                            <h3 class="title">Ihdazul Aruna Syahriar</h3>
                            <p class="caption">
                                NIM : 6706213042<br />
                                Backend Developer
                            </p>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="rounded-5 p-2" style="background:#593B9B;">
                                <img class="rounded-5 p-2" style="width: 80%;" src="assets/img/aboutUs/thessa1.jpeg" alt="" />
                            </div>
                            <h3 class="title">Thessa Roxana</h3>
                            <p class="caption">
                                NIM : 6706213025<br />
                                Frontend Developer | UX Designer
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <footer class="reveal footer container-xxl mx-auto position-relative p-0">
        <div class="list-footer">
            <div class="row gap-md-0 gap-3">
                <div class="col-lg-4 col-md-6">
                    <div class="">
                        <div class="list-space">
                            <img style="width: 75px;" src="assets/img/reddo-transparant.png" alt="logo" />
                        </div>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Home</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Fitur</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Tentang Kami</a>
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
                            <a href="" class="list-menu">Reddo Reading Tracker</a>
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