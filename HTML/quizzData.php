<?php
include('config.php');
$errors = '';
$q = '';
session_start();
$email = $_SESSION["email"];
if (!$conn) {
    echo 'connection error' . mysqli_connect_error();
}
if (empty($_POST['fradio'])) {
    $errors = 'q is required <br />';
} else {
    $q = $_POST['fradio'];
    $id = $_POST['fid'];
}
if ($errors == '') {

    $sql = "INSERT INTO answers(questionID,userEmail,answer) VALUES ($id,'$email','$q')";
    mysqli_query($conn, $sql);
}
