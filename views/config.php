<?php
    $conn = mysqli_connect("localhost", "root", "","test");

    if (!$conn) {
        echo "<script>alert('Connection failed.');</script>";
    }
