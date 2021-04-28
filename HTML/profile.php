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
    $birthDate = $row["datedenaissance"];
    $birthDate = explode("-", $birthDate);
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[1], $birthDate[2], $birthDate[0]))) > date("md")
        ? ((date("Y") - $birthDate[0]) - 1)
        : (date("Y") - $birthDate[0]));
    ?>

    <header>
        <div id="nav-bar">
            <nav>
                <div class="icon">
                    <a href="logout.php?logout_id=<?php echo $row1['email']; ?>"><img src="../assets/Groupe 4.svg"></a>
                </div>
                <div class="bg">
                    <h1 class="title">My Profile</h1>
                </div>
                <div class="icon">
                    <img src="../assets/Icon awesome-user-edit.svg">

                </div>
            </nav>
        </div>


        <div id="main-info">
            <div class="img_place">
                <?php if (!empty($row["img"])) {
                    echo "<div style='background-image:url(../images/" . $row['img'] . "'); ></div>";
                } else { ?>
                    <img src="../assets/user.svg">
                <?php } ?>


            </div>


            <div class="bg1">
                <div class="name-age">
                    <div>
                        <?php echo strtoupper($row["username"]) . ', '; ?>
                    </div>
                    <div>

                        <?php echo $age; ?>'
                    </div>
                </div>
                <div class="headline">
                    <?php echo $row["Headline"]; ?>

                </div>
            </div>

            <div class="email">
                <?php echo $row["email"] ?>
            </div>

            <!--<div class="bg2">

                    <div class="chat_bg">
                        <div class="chat"><a href="logout.php?logout_id=<?php echo $row1['email']; ?>" class="logout">Logout</a></div>
                    </div>

                    <div class="chat_bg">
                        <div class="chat"><a href="PROFIL_MATCHING.php">l7ob</a></div>
                    </div>

                    <div class="quiz_bg">
                        <div class="quiz"><a href="quiz.html">Refaire le QUIZ</a></div>
                    </div>

                </div> -->
        </div>
        <div id="side-info">
            <div class="info">
                <div class="about">
                    <h2>About me:</h2>
                    </br>
                    <?php if (!empty($row["about"])) { ?>
                        <p>
                            <?php echo $row["about"];  ?>
                        </p>
                    <?php } else { ?>
                        <p>...</p>
                    <?php } ?>

                </div>
                </br>
                <div>
                    <h2>Interests:</h2>
                    </br>
                    <div class="interests">
                        <?php $interests = explode(',', $row['interests']);
                        foreach ($interests as $interest) { ?>
                            <div class="interst"><?php echo $interest; ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <footer>
        <div class="icon">
            <a href="quiz.html"><img src="../assets/229116-2000.svg"></a>
        </div>
        <div class="icon-like">
            <a href="PROFIL_MATCHING.php"><img src="../assets/like.svg"></a>
        </div>

    </footer>

</body>

</html>