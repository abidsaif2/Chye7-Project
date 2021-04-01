<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../CSS/signUp.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php include('SignUp1.php'); ?>
</head>

<body>

    <header>
        <div class="bg">
            <div class="back_bg">
                <div class="back"><img src="../assets/back_arrow.png"></div>
            </div>
            <p class="title">CHYE7</p>
        </div>
    </header>


    <script>
        document.getElementById("img_place").addEventListener('click', function() {
            document.getElementsByClassName("upload_img")[0].click()
        });
    </script>

    <section class="sec1">
        <div class="bg1">
            <div class="bg2">
                <form action="SignUp.php" method="POST">
                    <div class="img_h">
                        <div class="img_place_holder">
                            <input type="file" class="upload_img" name="fimg" hidden>
                            <div id="img_place">
                                <img src="https://img.icons8.com/android/24/000000/upload.png">
                            </div>
                        </div>
                    </div>
                    <div class="form-div-txt">
                        <div>
                            <label for="fname"></label>
                            <input type="text" id="fname" placeholder="Nom & Prénom" name="fname">
                            <p><?php echo $errors['nomPrenom']; ?></p>
                        </div><br><br>

                        <div>
                            <label for="fmail"></label>
                            <input type="email" id="fmail" placeholder="Email" name="fmail">
                            <p><?php echo $errors['email']; ?></p>
                        </div><br><br>

                        <div>
                            <label for="fmdp"></label>
                            <input type="password" id="fmdp" placeholder="Mot de passe" name="fmdp">
                            <p><?php echo $errors['motepass']; ?></p>
                        </div><br><br>

                        <div>
                            <label for="fbirth"></label>
                            <input type="date" id="fbirth" placeholder="Date de naissance" name="fbirth">
                            <p><?php echo $errors['date']; ?></p>
                        </div><br><br>

                        <div class="radio_btn">
                            <input type="radio" id="fmale" name="gender" value="male">
                            <label for="male">M</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">F</label>
                        </div><br>
                        <p><?php echo $errors['gender']; ?></p>
                    </div>

                    <div class="sub_btn">
                        <input type="submit" class="btn" name="fsignup" type="submit" value="SignUp">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <footer>
            <span><img src="https://cdn.pixabay.com/photo/2016/11/01/03/05/contact-1787332_960_720.png" alt="image" style="width:2%">
                +216 41706470 | <img src="https://cdn2.iconfinder.com/data/icons/picons-essentials/71/location-512.png" alt="image" style="width:2%">
                ISAMM, Manouba </span>
            <br>
            <span>Created By Chmenka Team</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
        </footer>
    </footer>

</body>

</html>