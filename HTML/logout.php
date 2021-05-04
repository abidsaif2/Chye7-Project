<?php
include('config.php');
session_start();
if (isset($_SESSION['email'])) {
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
