<?php
include '../config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:../login.php');
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../../assets/includes/head.php') ?>
    <link rel="icon" href="../../assets/img/reddo-transparant.png" type="image/x-icon">
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
            <div class="small-card-1">
                <h2>
                    1
                </h2>
                <div class="middle">
                    <div class="left">
                        <h3>Ambil buku favorit kamu secara offline ataupun Ebook dalam bentuk pdf</h3>
                    </div>
                </div>
            </div>
            <div class="small-card-2">
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
            <div class="small-card-3">
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

        <!-- check data bookmark di db -->


        <div class="bookmark">
            <h2>Bookmark kamu</h2>
            <div class="updates">
                <input type="text" name="halaman" placeholder="halaman terakhir bacaan">
                <textarea name="w3review" rows="5" cols="35" placeholder="masukkan catatan kamu disini" wrap="hard" name="catatan"></textarea>
                <button class="btn" type="submit" value="Create">save</button>
            </div>
        </div>
        <!-- end of bookmark -->


        <?php
        include "../config.php";

        $ambilData = mysqli_query($conn, "SELECT * FROM bookmark");
        $data = [];
        while ($tampil = mysqli_fetch_assoc($ambilData)) {
            $data[] = $tampil;
        }
        $bookmark = $data;
        ?>
        <div class="sales-analytics">
            <h2>History bacaan</h2>
            <?php $no = 1;
            foreach ($bookmark as $bookmark) : ?>
                <div class="item">
                    <div class="number_history">
                        <span>
                            <?= $no++ ?>
                        </span>
                    </div>
                    <div class="right">
                        <div class="info">
                            <h3><?= $bookmark['halaman'] ?></h3>
                            <small><?= $bookmark['catatan'] ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
    <script src="../../assets/js/dashboard.js"></script>
    </div>
</body>

</html>