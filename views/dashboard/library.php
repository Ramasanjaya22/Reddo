<!DOCTYPE html>
<html>

<head>
    <?php include('../../assets/includes/head.php') ?>
    <link rel="icon" href="../../assets/img/reddo-transparant.png" type="image/x-icon">
    <title>Library</title>
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
            <h1>Library</h1>
            <div class="card">
                <div class="library">
                    <?php
                    include('../../assets/includes/cariBuku.php') ?>
                </div>
            </div>
        </main>




        <!-- end of main -->
        <div class="right">
            <?php include('../../assets/includes/topprofile.php') ?>
        </div>
    </div>
    <script src="../../assets/js/dashboard.js"></script>

</body>

</html>