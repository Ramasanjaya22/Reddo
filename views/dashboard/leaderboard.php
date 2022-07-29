<?php
include '../config.php';
session_start();
$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html>

<head>
    <?php include('../../assets/includes/head.php') ?>
    <link rel="icon" href="../../assets/img/reddo-transparant.png" type="image/x-icon">
    <title>Leaderboard</title>
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
            <h1>Leaderboard</h1>
            <?php
            include "../config.php";
            $data = [];
            $ambilData = mysqli_query($conn, "SELECT username,Image,poin FROM users ORDER BY poin DESC");
            while ($tampil = mysqli_fetch_assoc($ambilData)) {
                $data[] = $tampil;
            }
            $datauser = $data;

            ?>

            <table class="card bookmark-card">

                <thead>
                    <tr>
                        <td>#</td>
                        <td>Username</td>
                        <td>Profile picture</td>
                        <td>Reddo point</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($datauser as $datauser) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $datauser['username'] ?></td>
                            <td>
                                <?php
                                if ($datauser['Image'] == '') {
                                    echo '<img src="../../assets/img/icon/profil.webp"style="width:15%;
                        margin-right: auto;">';
                                } else {
                                    echo '<img src="../../assets/img/uploaded_img/' . $datauser['Image'] . '" style="width:15%;
                        margin-right: auto;">';
                                }
                                ?>
                            </td>
                            <td><img src="../../assets/img/icon/coin.png" style="width: 10%;"><?= $datauser['poin'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </main>
        <div class="right">
            <?php include('../../assets/includes/topprofile.php') ?>
            <!-- end of top -->
        </div>
        <script src="../../assets/js/dashboard.js"></script>
    </div>
</body>

</html>