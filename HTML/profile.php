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
    
    <header>
        <div class="bg">
            <div class="back_bg">
                <div id="arrow_btn"></div>
                <div class="back"><img src="../assets/back_arrow.png"></div>
            </div>
            <p class="title">CHYE7</p>
        </div>
    </header>
    
<?php

$conn = mysqli_connect('localhost', 'root', '', 'chyeh');
$req= "select * FROM compts";
$res= mysql_query($req);

?>
    <section>

        <div class="container">

        <div class="title1">Profil</div>

                 <div class="img_place"></div>


            <div class="bg1">
                <table class="table">
                    <?php while(mysql_fetch_array($res)) {?>
                    <tr>
                        <th><?php echo $ligne['username']; ?></th>
                    </tr>

                    <tr>
                        <th><?php echo $ligne['email']; ?></th>
                    </tr>

                    <tr>
                        <th><?php echo $ligne['datedenaissance']; ?></th>
                    </tr>

                    <tr>
                        <th><?php echo $ligne['gender']; ?></th>
                    </tr>
                    <?php } ?>
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