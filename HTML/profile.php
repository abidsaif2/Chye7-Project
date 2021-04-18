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
    $email = $_SESSION["email"];
    $sql = "SELECT * FROM compts WHERE email='$email'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    var_dump($row);
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
                    <div class="chat">Chat</div>
                </div>
                <br>
                <div class="quiz_bg">
                    <div class="quiz">Refaire le QUIZ</div>
                </div>

            </div>

        </div>
    </section>

</body>

</html>