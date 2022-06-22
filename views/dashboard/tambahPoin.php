<?php
include '../config.php';
session_start();
$user_id = $_SESSION['user_id'];

function query($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

$poin = $_GET['poin'];

$poinUser = query("SELECT poin from `users` WHERE id = $user_id")[0]['poin'];

$poinUser += $poin;
mysqli_query($conn, "UPDATE `users` set poin = $poinUser WHERE id = $user_id");

header('Location: home.php');


echo "
<script>
alert('poin = " . $poin . " ');
</script>";
