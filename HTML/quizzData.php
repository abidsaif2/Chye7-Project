<?php
$conn = mysqli_connect('localhost', 'root', '', 'chyeh');
$errors = array('q1' => '', 'q2' => '', 'q3' => '', 'q4' => '', 'q5' => '', 'q6' => '', 'q7' => '', 'q8' => '', 'q9' => '', 'q10' => '', 'q11' => '', 'q12' => '');
$q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = $q9 = $q10 = $q11 = $q12 = '';
session_start();
$email = $_SESSION["email"];
if (!$conn) {
    echo 'connection error' . mysqli_connect_error();
}
if (empty($_POST['q1'])) {
    $errors['q1'] = 'q1 is required <br />';
} else {
    $q1 = $_POST['q1'];
}
if (empty($_POST['q2'])) {
    $errors['q2'] = 'q2 is required <br />';
} else {
    $q1 = $_POST['q2'];
}
if (empty($_POST['q3'])) {
    $errors['q3'] = 'q3 is required <br />';
} else {
    $q1 = $_POST['q3'];
}
if (empty($_POST['q4'])) {
    $errors['q4'] = 'q4 is required <br />';
} else {
    $q1 = $_POST['q4'];
}
if (empty($_POST['q5'])) {
    $errors['q5'] = 'q5 is required <br />';
} else {
    $q1 = $_POST['q5'];
}
if (empty($_POST['q6'])) {
    $errors['q6'] = 'q6 is required <br />';
} else {
    $q1 = $_POST['q6'];
}
if (empty($_POST['q7'])) {
    $errors['q7'] = 'q7 is required <br />';
} else {
    $q1 = $_POST['q7'];
}
if (empty($_POST['q8'])) {
    $errors['q8'] = 'q1 is required <br />';
} else {
    $q1 = $_POST['q8'];
}
if (empty($_POST['q9'])) {
    $errors['q9'] = 'q9 is required <br />';
} else {
    $q1 = $_POST['q9'];
}
if (empty($_POST['q10'])) {
    $errors['q10'] = 'q10 is required <br />';
} else {
    $q1 = $_POST['q10'];
}
if (empty($_POST['q11'])) {
    $errors['q11'] = 'q11 is required <br />';
} else {
    $q1 = $_POST['q11'];
}
if (empty($_POST['q12'])) {
    $errors['q12'] = 'q12 is required <br />';
} else {
    $q1 = $_POST['q12'];
}
if (!array_filter($errors)) {

    $sql1 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (1,'$email','$q1')";
    $sql2 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (2,'$email','$q2')";
    $sql3 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (3,'$email','$q3')";
    $sql4 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (4,'$email','$q4')";
    $sql5 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (5,'$email','$q5')";
    $sql6 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (6,'$email','$q6')";
    $sql7 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (7,'$email','$q7')";
    $sql8 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (8,'$email','$q8')";
    $sql9 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (9,'$email','$q9')";
    $sql10 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (10,'$email','$q10')";
    $sql11 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (11,'$email','$q11')";
    $sql12 = "INSERT INTO answers(questionID,userEmail,answer) VALUES (12,'$email','$q12')";
    if ((mysqli_query($conn, $sql1)) && (mysqli_query($conn, $sql2)) && (mysqli_query($conn, $sql3)) && (mysqli_query($conn, $sql4)) && (mysqli_query($conn, $sql5)) && (mysqli_query($conn, $sql6)) && (mysqli_query($conn, $sql7)) && (mysqli_query($conn, $sql8)) && (mysqli_query($conn, $sql9)) && (mysqli_query($conn, $sql10)) && (mysqli_query($conn, $sql11)) && (mysqli_query($conn, $sql12))) {
        include('matchig.php');
    } else {
        echo 'query error: ' . mysqli_error($conn);
    }
}
