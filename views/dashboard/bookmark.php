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
    <title>Bookmark</title>
</head>

<body> 
    <div class="container">
        <aside>
        </aside>
        <!-- end of aside -->
        <main>
            <h1>History Bacaan Kamu</h1>

            <?php
            include "../config.php";
            $data = [];
            
            $ambilData = mysqli_query($conn, "SELECT halaman,catatan FROM bookmark,users WHERE users.id = bookmark.id_user AND id=$user_id  ORDER BY id_bookmark ASC ");
            while ($tampil = mysqli_fetch_assoc($ambilData)) {
                $data[] = $tampil;
            }
            $bookmark = $data;
            ?>
            <table class="card bookmark-card">
            
        <thead>
            <tr>
                <td>#</td>
                <td>Halaman</td>
                <td>catatan</td>
                
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
                foreach ($bookmark as $bookmark) : ?>
            <tr>
                <td><?= $no++?></td>
                <td><?=$bookmark['halaman']?></td>
                <td><?=$bookmark['catatan']?></td>
                <!-- <td class="actions">
                    <a href="">update</a>
                    <a href="">delete</a>
                </td> -->
            </tr>
            <?php endforeach; ?>
        </tbody>
        
    </table>
        </main>

    <div class="right">

        <!-- end of top -->
    </div>

    <script src="../../assets/js/dashboard.js"></script>
    </div>
</body>

</html>