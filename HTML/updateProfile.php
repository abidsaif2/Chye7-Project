<?php

//general information
$errors = array('pwd' => '', 'email' => '', 'nomPrenom' => '', 'Image' => '', 'Headline' => '', 'Interests' => '', 'about' => '');
$newpwd = $newemail = $nomPrenom = $image = $Headline = $Interests = $about = '';
if (isset($_POST['submit'])) {

    if (!empty($_POST['username'])) {

        $nomPrenom = $_POST['username'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $nomPrenom)) {
            $errors['nomPrenom'] = 'name must be lettres and spaces only';
        } else {
            $sql = "UPDATE compts SET username='$nomPrenom' WHERE email='$email'";
            mysqli_query($conn, $sql);
        }
    }
    if (!empty($_POST['headline'])) {
        $Headline = $_POST['headline'];
        $sql = "UPDATE compts SET 	Headline='$Headline' WHERE email='$email'";
        mysqli_query($conn, $sql);
    }
    if (!empty($_POST['intrests'])) {
        $Interests = $_POST['intrests'];
        $sql = "UPDATE compts SET 	interests='$Interests' WHERE email='$email'";
        mysqli_query($conn, $sql);
    }
    if (!empty($_POST['about'])) {
        $about = $_POST['about'];
        $sql = "UPDATE compts SET 	about='$about' WHERE email='$email'";
        mysqli_query($conn, $sql);
    }

    //image
    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        // image file directory
        $bimage = basename($image);
        $target = "../images/" . $bimage;

        $sql = "UPDATE compts SET img='$bimage' WHERE email='$email'";
        mysqli_query($conn, $sql);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $errors['Image'] = "Failed to upload image";
        }
    }
}

if (isset($_POST['submit1'])) {
    if ((!empty($_POST['email'])) and (!empty($_POST['newEmail'])) and (!empty($_POST['cNewEmail']))) {
        $newpwd = $_POST['newEmail'];
        if (!filter_var($newemail, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be a valid email address';
        } else if ($_POST['email'] != $email) {
            $errors['email'] = 'email must be correct';
        } else if ($newemail != $_POST['cNewEmail']) {
            $errors['email'] = 'email must be correct';
        } else {
            $sql = "UPDATE compts SET email='$newemail' WHERE email='$email'";
            mysqli_query($conn, $sql);
            $_SESSION["email"] = $newemail;
            $email = $_SESSION["email"];
        }
    }
}
if (isset($_POST['submit2'])) {
    if ((!empty($_POST['PWD'])) and (!empty($_POST['newPWD'])) and (!empty($_POST['cNewPWD']))) {
        $newpwd = $_POST['newPWD'];
        $sql = "SELECT * FROM compts WHERE email='$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $PWD = $row['passwords'];
        if ($_POST['PWD'] != $PWD) {
            $errors['email'] = 'email must be correct';
        } else if ($newpwd != $_POST['cNewPWD']) {
            $errors['pwd'] = 'pwd must be correct';
        } else {
            $sql = "UPDATE compts SET passwords='$newpwd' WHERE email='$email'";
            mysqli_query($conn, $sql);
        }
    }
}
