<?php
session_start();
if (isset($_SESSION['email'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'chyeh');
    if (!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if (isset($logout_id)) {
        session_unset();
        session_destroy();
        header("location: index.php");
    } else {
        header("location: profile.php");
    }
} else {
    header("location: index.php");
}
