<?php

//general information
$errors = array('pwd' => '', 'email' => '', 'nomPrenom' => '', 'Image' => '', 'Headline' => '', 'Interests' => '', 'about' => '');
$newpwd = $newemail = $nomPrenom = $image = $Headline = $Interests = $about = '';
if (isset($_POST['submit'])) {

    if (!empty(htmlspecialchars($_POST['username']))) {

        $nomPrenom = htmlspecialchars($_POST['username']);
        if (!preg_match('/^[a-zA-Z\s]+$/', $nomPrenom)) {
            $errors['nomPrenom'] = 'name must be lettres and spaces only';
        } else {
            $sql = "UPDATE compts SET username='$nomPrenom' WHERE email='$email'";
            mysqli_query($conn, $sql);
        }
    }
    if (!empty(htmlspecialchars($_POST['headline']))) {
        $Headline = htmlspecialchars($_POST['headline']);
        $sql = "UPDATE compts SET 	Headline='$Headline' WHERE email='$email'";
        mysqli_query($conn, $sql);
    }
    if (!empty(htmlspecialchars($_POST['intrests']))) {
        $Interests = htmlspecialchars($_POST['intrests']);
        $sql = "UPDATE compts SET 	interests='$Interests' WHERE email='$email'";
        mysqli_query($conn, $sql);
    }
    if (!empty(htmlspecialchars($_POST['about']))) {
        $about = htmlspecialchars($_POST['about']);
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

if (isset($_POST['submit2'])) {
    if ((!empty(htmlspecialchars($_POST['email']))) and (!empty(htmlspecialchars($_POST['PWD']))) and (!empty(htmlspecialchars($_POST['newPWD']))) and (!empty(htmlspecialchars($_POST['cNewPWD'])))) {
        if (htmlspecialchars($_POST['email']) != $email) {
            $errors['email'] = 'email must be correct';
        } else {
            $newpwd = htmlspecialchars($_POST['newPWD']);
            $sql = "SELECT * FROM compts WHERE email='$email'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $PWD = $row['passwords'];
            if (htmlspecialchars($_POST['PWD']) != $PWD) {
                $errors['email'] = 'email must be correct';
            } else if ($newpwd != htmlspecialchars($_POST['cNewPWD'])) {
                $errors['pwd'] = 'pwd must be correct';
            } else {
                $sql = "UPDATE compts SET passwords='$newpwd' WHERE email='$email'";
                mysqli_query($conn, $sql);
            }
        }
    }
}
