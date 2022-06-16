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
        </main>
        <div class="right">
            <?php include('../../assets/includes/topprofile.php') ?>
            <!-- end of top -->
        </div>
        <script src="../../assets/js/dashboard.js"></script>
    </div>
</body>

</html>