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
                        <div class="form-div">
                            <label for="fname">Username:</label>
                            <input type="text" id="fname" value="<?php echo $nomPrenom ?>" name="fname">
                            <p><?php echo $errors['nomPrenom']; ?></p>
                        </div>

                        <div class="form-div">
                            <label for="fmail">E-mail:</label>
                            <input type="email" id="fmail" value="<?php echo $email ?>" name="fmail">
                            <p><?php echo $errors['email']; ?></p>
                        </div>

                        <div class="form-div">
                            <label for="fmdp">Password:</label>
                            <input type="password" id="fmdp" value="<?php echo $motepass ?>" name="fmdp">
                            <p><?php echo $errors['motepass']; ?></p>
                        </div>

                        <div class="form-div">
                            <label for="fbirth">Date of Birth:</label>
                            <input type="date" id="fbirth" value="<?php echo $date ?>" name="fbirth">
                            <p><?php echo $errors['date']; ?></p>
                        </div>

                        <div class="radio_btn">
                            <div><label>Gender:</label></div>
                            <div class="radios-div">
                                <div>
                                    <input type="radio" id="fmale" name="gender" value="male">
                                    <label for="male">M</label>
                                </div>
                                <div>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female">F</label>
                                </div>
                            </div>
                            <div>
                                <p><?php echo $errors['gender']; ?></p>
                            </div>
                        </div>
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
    <script type="text/javascript" src="../js/SignUp.js"></script>

</body>

</html>