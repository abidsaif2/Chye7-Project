<?php
include('config.php');
session_start();
if (isset($_SESSION['email'])) {
    header("location: profile.php");
}
$errors = array('nomPrenom' => '', 'email' => '', 'motepass' => '', 'date' => '', 'gender' => '', 'img' => '');
$nomPrenom = $email = $motepass = $date = $gender = $img = '';

if (isset($_POST['fsignup'])) {

    if (empty(htmlspecialchars($_POST['fmail']))) {
        $errors['email'] = 'an email is required <br />';
    } else {
        $email = htmlspecialchars($_POST['fmail']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be a valid email address';
        }
    }
    if (empty(htmlspecialchars($_POST['fname']))) {
        $errors['nomPrenom'] = 'a name is required <br />';
    } else {
        $nomPrenom = htmlspecialchars($_POST['fname']);
        if (!preg_match('/^[a-zA-Z\s]+$/', $nomPrenom)) {
            $errors['nomPrenom'] = 'name must be lettres and spaces only';
        }
    }
    if (empty(htmlspecialchars($_POST['fmdp']))) {
        $errors['motepass'] = 'a password is required <br />';
    } else {
        $motepass = htmlspecialchars($_POST['fmdp']);
        if (strlen($motepass) < 9) {
            $errors['email'] = 'password must be at least 8 characters ';
        }
    }
    if (empty($_POST['gender'])) {
        $errors['gender'] = 'a gender is required <br />';
    } else {
        $gender = $_POST['gender'];
    }
    if (empty($_POST['fbirth'])) {
        $errors['date'] = 'a date is required <br />';
    } else {
        $date = $_POST['fbirth'];
    }
    $img = $_POST['fimg'];

    if (!array_filter($errors)) {
        $email = mysqli_real_escape_string($conn, $_POST['fmail']);
        $nomPrenom = mysqli_real_escape_string($conn, $_POST['fname']);

        $sql = "INSERT INTO compts(email,username,passwords,gender,datedenaissance,img) VALUES ('$email','$nomPrenom','$motepass','$gender','$date','$img')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $nomPrenom;
            $_SESSION["email"] = $email;
            $_SESSION["gender"] = $gender;
            header('Location: profile.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }
    }
}
