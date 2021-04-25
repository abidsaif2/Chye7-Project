<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashbord</title>
    <link rel="stylesheet" href="../CSS/profile.css">
</head>

<body>
    <?php $conn = mysqli_connect('localhost', 'root', '', 'chyeh');
    if (!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location: login.php");
    }

    $email = $_SESSION["email"];
    $sql = "SELECT * FROM compts WHERE email='$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <?php
    $sql1 = mysqli_query($conn, "SELECT * FROM compts WHERE email = '$email'");
    if (mysqli_num_rows($sql1) > 0) {
        $row1 = mysqli_fetch_assoc($sql1);
    }
    ?>

    <header>
        <div class="bg">
            <div class="back_bg">
                <div id="arrow_btn"></div>
                <div class="back"><img src="../assets/back_arrow.png"></div>
            </div>
            <p class="title">CHYE7</p>
        </div>
    </header>

    <section>

        <div class="container">

            <div class="title1">Profil</div>

            <div class="img_place"></div>


            <div class="bg1">
                <table class="table">
                    <tr>
                        <th><?php echo $row["username"] ?></th>
                    </tr>

                    <tr>
                        <th><?php echo $row["email"] ?></th>
                    </tr>

                    <tr>
                        <th><?php echo $row["datedenaissance"] ?></th>
                    </tr>

                    <tr>
                        <th><?php echo $row["gender"] ?></th>
                    </tr>
                </table>
            </div>

            <div class="bg2">

                <div class="chat_bg">
                    <div class="chat"><a href="logout.php?logout_id=<?php echo $row1['email']; ?>" class="logout">Logout</a></div>
                </div>
                <div class="chat_bg">
                    <div class="chat"><a href="PROFIL_MATCHING.php">l7ob</a></div>
                </div>
                <br>
                <div class="quiz_bg">
                    <div class="quiz"><a href="quiz.html">Refaire le QUIZ</a></div>
                </div>

            </div>

        </div>
    </section>

</body>

</html>