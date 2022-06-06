<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../../assets/includes/head.php') ?>
    <link rel="icon" href="../../assets/img/reddo-transparant.png" type="image/x-icon">
    <title>Library</title>
</head>

<body class="container">
    <aside>
        <?php
        include('../../assets/includes/sidebar.php');
        ?>
    </aside>
    <!-- end of aside -->
    <main>
        <h1>Library</h1>
        <div class="insights">
            <div class="sales">
                <h2>
                    1
                </h2>
                <div class="middle">
                    <div class="left">
                        <h3> Untuk menggunakan fitur library, kamu bisa lakukan pencarian dengan mengetikkannya pada kolom dibawah</h3>
                    </div>
                </div>
            </div>
            <!-- end of sales -->
            <div class="sales">
                <h2>
                    2
                </h2>
                <div class="middle">
                    <div class="left">
                        <h3>Setelah itu bisa klik Search 🔎 untuk mencari buku kamu</h3>
                    </div>
                </div>

            </div>
            <!-- end of timer -->
            <div class="sales">
                <h2>
                    3
                </h2>
                <div class="middle">
                    <div class="left">
                        <h3>Selanjutnya pilih Buku yang ingin kamu baca, kamu juga bisa menambahkan buku kedalam buku favoritmu 💜</h3>
                    </div>
                </div>

            </div>

        </div>
        <!-- end of insights -->
        <div class="recent-order">

            <?php
            include('../../assets/includes/cariBuku.php');
            ?>

        </div>

    </main>
    <!-- end of main -->
    <div class="right">
        <?php include('../../assets/includes/topprofile.php') ?>
        <!-- end of top -->
    </div>
    <script src="../../assets/js/dashboard.js"></script>

</body>

</html>