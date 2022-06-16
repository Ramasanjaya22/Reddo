<?php
include '../config.php';
session_start();
$user_id = $_SESSION['user_id'];

?>

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
        <div>
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