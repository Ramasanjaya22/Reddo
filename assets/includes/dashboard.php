<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <aside>
            <?php
            include('../../assets/includes/sidebar.php');
            ?>
        </aside>
        <!-- end of aside -->
        <main>
            <h1>Home</h1>
            <div class="insights">

                <div class="sales">
                    <span>
                        1
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Ambil buku favorit kamu secara offline ataupun Ebook dalam bentuk pdf</h3>
                        </div>
                    </div>
                </div>
                <!-- end of sales -->
                <div class="sales">
                    <span>
                        2
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Pilih berapa kali kamu focus time kamu dan tentukan juga break time. Kemudian klik Start
                                Focus</h3>
                        </div>
                    </div>

                </div>
                <!-- end of timer -->
                <div class="sales">
                    <span>
                        3
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>setelah 1 cycle pomodoro selesai, dapatkan point reward!</h3>
                        </div>
                    </div>

                </div>

            </div>
            <!-- end of insights -->
            <div class="recent-order">
                <div class="card mt-4">
                    <?php
                    include('../../assets/includes/pomodoro.php');
                    ?>
                </div>
            </div>

        </main>
        <!-- end of main -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey <b>User</b></p>
                        <small class="text-muted">User</small>
                    </div>
                    <div class="profile-photo">
                        <img src="../../assets/img/icon/profil.webp" alt="profile">
                    </div>
                </div>
            </div>
            <!-- end of top -->
            <div class="recent-updates">
                <h2>Bookmark kamu</h2>
                <div class="updates">
                    <div class="update">
                        <div class="message">
                            <input type="text" name="catetan" id="">
                            <button class="btn btn-primary " type="submit">save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of recent updates -->
            <div class="sales-analytics">
                <h2>History bacaan</h2>
                <div class="item">
                    <div class="icon">
                        <span class="material-symbols-sharp">
                            1
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Halaman 20</h3>
                            <small>last 24</small>
                        </div>
                    </div>
                </div>
                <!--  card2-->
                <div class="item">
                    <div class="icon">
                        <span class="material-symbols-sharp">
                            2
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Halaman 30</h3>
                            <small>last 24</small>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="icon">
                        <span class="material-symbols-sharp">
                            3
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3>Halaman 20</h3>
                            <small>last 24</small>
                        </div>
                    </div>
                </div>
                <!-- card3 -->
            </div>
        </div>
    </div>
    <script src="../../assets/js/dashboard.js"></script>
</body>

</html>