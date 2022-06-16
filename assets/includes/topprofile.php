<div class="top">
    <button id="menu-btn">
        <span class="material-icons-sharp">
            menu
        </span>
    </button>
    <div class="theme-toggler">
        <span class="material-icons-sharp active">
            light_mode
        </span>
        <span class="material-icons-sharp">
            dark_mode
        </span>
    </div>

    <?php
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE id=$user_id") or die('query failed');
    if (mysqli_num_rows($select) > 0) {
        $fetch = mysqli_fetch_assoc($select);
    }
    ?>

    <div class="profile">
        <div class="info">
            <p>Hey <b><?php echo $fetch['name']; ?></b></p>
            <small class="text-muted">User</small>
        </div>
        <div class="profile-photo">
            <?php
            if ($fetch['Image'] == '') {
                echo '<img src="../../assets/img/icon/profil.webp">';
            } else {
                echo '<img src="../../assets/img/uploaded_img/' . $fetch['Image'] . '">';
            }
            ?>
        </div>
    </div>
</div>