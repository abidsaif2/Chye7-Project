<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../CSS/SignUp.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <?php include('SignUp1.php'); ?>
</head>
<body>
    <section>
        <div class="background">

            <div class="bg_lbara">
                <p class="title">Cheyh</p>
             </div>

                <div class="form_bg">

                          <form action="SignUp.php" method="POST">

                            <div class="top_form">
                                <div class="title_2">Create Account</div>
                                    <a class="quit" href="../HTML/index.php">
                                        <img src="../images/Icon ionic-ios-return-left.svg">
                                    </a> 
                            </div>

                            <div class="upload">
                                <input type="file" class="upload_img" name="fimg" hidden>
                                <div id="img_place">
                                    <img src="../images/Groupe 9.svg">
                                </div>
                                
                            </div>

                                    <div class="form_input">
                                        <label for="fname">Username:</label><br>
                                        <input type="text" id="fname" value="<?php echo $nomPrenom ?>" name="fname">
                                        <p><?php echo $errors['nomPrenom']; ?></p>
                                    </div>

                                    <div class="form_input">
                                        <label for="fmail">Email:</label><br>
                                        <input type="email" id="fmail" value="<?php echo $email ?>" name="fmail">
                                        <p><?php echo $errors['email']; ?></p>
                                    </div>

                                    <div class="form_input">
                                        <label for="fmdp">Password:</label><br>
                                        <input type="password" id="fmdp" value="<?php echo $motepass ?>" name="fmdp">
                                        <p><?php echo $errors['motepass']; ?></p>
                                    </div>

                                    <div class="form_input">
                                        <label for="fbirth">Date of birth:</label><br>
                                        <input type="date" id="fbirth" value="<?php echo $date ?>" name="fbirth">
                                        <p><?php echo $errors['date']; ?></p>
                                    </div>
                                    
                                    <div class="form_radio">
                                        <div class="radio">
                                            <input type="radio" id="fmale" name="gender" value="male">
                                            <label for="male">Male</label>
                                        </div>
                                        <div class="radio2">
                                            <input type="radio" id="female" name="gender" value="female">
                                            <label for="female">Female</label>
                                        </div>
                                    </div>

                                    <div class="last_container">
                                        <p class="login">Already Have <br>an account ? <br><a href="login.php">LOGIN IN ></a></p>

                                        <div class="sub_btn">
                                            <input type="submit" class="btn" name="fsignup" type="submit" value="SignUp">
                                        </div>
                                    </div>

                          </form>
                </div>
        </div>

        <script type="text/javascript" src="../js/SignUp.js"></script>

    </section>
</body>
</html>