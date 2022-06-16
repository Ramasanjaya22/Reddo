<?php
include '../config.php';
session_start();
$user_id = $_SESSION['user_id'];

if (isset($_POST['update_profile'])) {

    $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

    mysqli_query($conn, "UPDATE `users` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

    $old_pass = $_POST['old_pass'];
    $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
    $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
    $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

    if (!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)) {
        if ($update_pass != $old_pass) {
            $message[] = 'old password not matched!';
        } elseif ($new_pass != $confirm_pass) {
            $message[] = 'confirm password not matched!';
        } else {
            mysqli_query($conn, "UPDATE `users` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
            $message[] = 'password updated successfully!';
        }
    }
    $update_image = $_FILES['update_image']['name'];
    $update_image_size = $_FILES['update_image']['size'];
    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
    $update_image_folder = '../../assets/img/uploaded_img/' . $update_image;

    if (!empty($update_image)) {
        if ($update_image_size > 2000000) {
            $message[] = 'image is too large';
        } else {
            $image_update_query = mysqli_query($conn, "UPDATE `users` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
            if ($image_update_query) {
                move_uploaded_file($update_image_tmp_name, $update_image_folder);
            }
            $message[] = 'image updated succssfully!';
        }
    }
}
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

                <div class="profile-user" style="padding:1rem;text-align: center;align-items: center;">
                    <h1>Update Profile</h1>

                    <form action="" method="post" enctype="multipart/form-data">
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

                        <div style="display: flex; margin-top: 1rem;">
                            <div class="inputBox" style=" 
                        border-radius: var(--border-radius-1);
                        background: var(--color-light);
                        color: var(--color-dark);
                        margin-right: 4px;">
                                <span>username kamu :</span>
                                <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
                                <br>
                                <span>email kamu :</span>
                                <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
                                <br>
                                <span>update profil :</span>
                                <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
                            </div>

                            <div class="inputBox" style=" 
                        border-radius: var(--border-radius-1);
                        background: var(--color-light);
                        color: var(--color-dark);
                        padding-right: 0.5rem;">
                                <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
                                <span>password lama:</span>
                                <input type="password" name="update_pass" placeholder="enter previous password" class="box">
                                <br>
                                <span>password baru:</span>
                                <input type="password" name="new_pass" placeholder="enter new password" class="box">
                                <br>
                                <span>confirm password :</span>
                                <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
                                <br>
                            </div>
                        </div>



                        <div style="margin-top: 1rem;">
                            <button class="btn" type="submit" style="background: var(--color-primary);
                color: var(--color-white);
                padding: 1rem;
                border-radius: var(--border-radius-2);
                font-weight: 700;
                cursor: pointer;" value="update profile" name="update_profile">Update Profile</button>
                            <a href="home.php"><button class="btn" type="submit" style="background: var(--color-danger);
                color: var(--color-white);
                padding: 1rem;
                border-radius: var(--border-radius-2);
                font-weight: 700;
                cursor: pointer;" value="update profile" name="update_profile">Kembali</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- end of main -->


        <script src="../../assets/js/dashboard.js"></script>
    </div>
</body>

</html>