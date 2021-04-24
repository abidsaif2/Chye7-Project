<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chye7 - Find Your Soul</title>
    <link rel="stylesheet" href="../CSS/PROFIL_MATCHING.css">
    <?php include('matchig.php'); ?>
</head>

<body>

    <header>

        <div class="bg">
            <p class="title">CHYE7</p>
        </div>

    </header>
    <div id="main">
        <section1 class="section1">

        </section1>


        <section2 class="section2">

            <div class="bg_all">

                <div class="sec_place">
                    <?php matching($_SESSION["email"]) ?>
                    <div class="rounded_img_place"></div>
                    <div class="ano_name"><?php echo $username; ?></div>
                    <div class="comp_pour email"><?php echo $useremail; ?></div>
                    <div class="birth_date"><?php echo $userdate; ?></div>
                    <div class="btn_bg">
                        <div class="btn_txt">Continue</div>
                    </div>
                </div>




            </div>

        </section2>

    </div>

    <section class="sec3">
        <div class="btn_bg_2">
            <div class="btn_txt_2">Next Person</div>
        </div>
    </section>

    <footer>
        <div class="bg"></div>
    </footer>

</body>

</html>