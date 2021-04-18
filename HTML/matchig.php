<?php
function matching($email)
{
    $conn = mysqli_connect('localhost', 'root', '', 'chyeh');
    if (!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }
    $mainUeser = array();
    $users = array();
    $usersAnswers = array();
    $sql = "SELECT answer FROM answers WHERE userEmail= $email";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($mainUeser, $row["answer"]);
        }
    }
    $sql = "SELECT email FROM compts WHERE email <> $email";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($users, $row["email"]);
        }
    }
    for ($x = 0; $x <= count($users); $x++) {
        $userx = $users[$x];
        $usersAnswers[$x] = 0;
        for ($y = 0; $y <= count($mainUeser); $y++) {
            $usery = $mainUeser[$y];
            $sql = "SELECT answer FROM answers WHERE questionID = $y AND userEmail =$userx and answer = $usery; ";
            $result = $conn->query($sql);

            if ($result->num_rows != 0) {
                $usersAnswers[$x]++;
            }
        }
    }
    $max = 0;
    for ($z = 1; $z <= count($usersAnswers); $z++) {
        if ($usersAnswers[$z] > $usersAnswers[$max]) {
            $max = $z;
        }
    }
    $userm = $users[$max];
    $sql = "SELECT username,datedenaissance,img FROM compts WHERE email = $userm";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $useremail = $userm;
            $usernam = $row["username"];
            $userdate = $row["datedenaissance"];
            $userimg = $row["img"];
        }
    }
}
