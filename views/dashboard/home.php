<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../../assets/includes/head.php') ?>
    <link rel="icon" href="../../assets/img/reddo-transparant.png" type="image/x-icon">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <!-- aside -->
        <aside>
            <?php
            include('../../assets/includes/sidebar.php');
            ?>
        </aside>
        <!-- end of aside -->

        <!--main  -->
        <main>
            <h1>Home</h1>
            <div class="insights">
                <div class="card-insights">
                    <h2>
                        1
                    </h2>
                    <div class="middle">
                        <div class="left">
                            <h3>Ambil buku favorit kamu secara offline ataupun Ebook dalam bentuk pdf</h3>
                        </div>
                    </div>
                </div>
                <div class="card-insights">
                    <h2>
                        2
                    </h2>
                    <div class="middle">
                        <div class="left">
                            <h3>Pilih berapa kali focus time (dalam menit) dan tentukan juga break timenya. Kemudian klik Start
                                Focus!</h3>
                        </div>
                    </div>

                </div>
                <div class="card-insights">
                    <h2>
                        3
                    </h2>
                    <div class="middle">
                        <div class="left">
                            <h3>Setelah 1 cycle pomodoro selesai, dapatkanlah point reward!🎁🎁</h3>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end of insights -->

            <div class="content-1">

                <?php
                include('../../assets/includes/pomodoro.php');
                ?>

            </div>

        </main>
        <!-- end of main -->
        <div class="right">
            <?php include('../../assets/includes/topprofile.php') ?>
            <!-- end of top -->
            <div class="bookmark">
                <h2>Bookmark kamu</h2>
                <div class="updates">
                    <input type="text" name="" id="" placeholder="halaman terakhir bacaan">
                    <textarea name="w3review" rows="5" cols="35" placeholder="masukkan catatan kamu disini" wrap="hard"></textarea>
                    <button class="btn" type="submit">save</button>

                </div>
            </div>
            <!-- end of recent updates -->
            <div class="card-insights-analytics">
                <h2>History bacaan</h2>
                <div class="item">
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
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

</body>

</html>