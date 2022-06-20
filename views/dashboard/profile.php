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
    <title>Profil</title>
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
            <h1 style="text-align: center;">Profile</h1>
            <div class="card">

                <?php
                $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id=$user_id") or die('query failed');
                if (mysqli_num_rows($select) > 0) {
                    $fetch = mysqli_fetch_assoc($select);
                }
                ?>

                <div class="profile-user" style="padding:1rem;
                        text-align: center;align-items: center;">
                    <h1>Hi! <?php echo $fetch['name']; ?></h1>
                    <div class="photo-profile">
                        <?php
                        if ($fetch['Image'] == '') {
                            echo '<img src="../../assets/img/icon/profil.webp"style="width:50%;margin-left: auto;
                        margin-right: auto;">';
                        } else {
                            echo '<img src="../../assets/img/uploaded_img/' . $fetch['Image'] . '" style="width:50%;margin-left: auto;
                        margin-right: auto;">';
                        }
                        ?>
                    </div>
                    <div class="card">
                        <h3>Username Kamu : <?php echo $fetch['username']; ?></h3>
                        <h3>email: <?php echo $fetch['email']; ?></h3>
                    </div>

                    <a href="update_profile.php"><button class="btn" type="submit" style="background: var(--color-primary);
                color: var(--color-white);
                padding: 1rem;
                border-radius: var(--border-radius-2);
                font-weight: 700;
                cursor: pointer;">Update Profile</button></a>
                </div>
            </div>
        </main>
        <!-- end of main -->
        <div class="right">
            <?php include('../../assets/includes/topprofile.php') ?>
            <!-- end of top -->
        </div>

        <script src="../../assets/js/dashboard.js"></script>
    </div>
</body>

</html>