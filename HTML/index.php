<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chye7</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <?php include('login.php'); ?>
</head>

<body>
    <header style="z-index: 10;">

        <nav>
            <div class="chye7">
                <h1>CHYEH</h1>
            </div>
            <div class="nav-btns">
                <div>
                    <a href="SignUp.php">
                        Sign UP
                    </a>
                </div>
                <div>
                    <a class="login-a" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Login
                    </a>
                </div>
            </div>
        </nav>

    </header>
    <main>


        <div class="bestmatch">
            <div class="img-div1">
                <div class="bestmatch-img">

                </div>
                <div class="bestmatch-img-background">

                </div>
            </div>
            <div class="bestmatch-txt">
                <div class="txt">
                    <div>
                        <h1>Your Best Match</h1>
                    </div>
                    <div>
                        <p style="color:#810000 ;"> We introduce CHYEH, your ultimate guide to find the love of your
                            life.
                            Tired of looking around to find your best match ? Tired of being single and feeling alone
                            all
                            day-long ?
                            What if we told you that your best match is a fellow orendian too ? Wouldn't you be excited
                            to
                            know
                            who exactly of your team-mates is your soulmate ?
                            Subscribe now and take our free Quizz in order to find out whith whom you match best ! </p>
                    </div>
                    <div class="btn-div">
                        <a href="SignUp.php" id="start" class="btn btn-start bt1">Sign Up</a>
                    </div>

                </div>
            </div>
        </div>


        <div class="what-we-do ">
            <div class="what-we-do-txt">
                <div class="txt2">
                    <h1> What We Do</h1>
                    <p> We create meaningful connections <br> that spark hearts and inspire people <br> to share
                        themselves
                        authentically <br> and enthusiastically.</p>
                </div>
            </div>
            <div class="what-we-do-img">

            </div>
        </div>

        <div class="us">
            <div class="made-txt">
                <h4>Made By</h4>
            </div>
            <div class="box-area">
                <div>
                    <div class="single-box saif">
                    </div>
                    <div>Saif Abid</div>
                </div>
                <div>
                    <div class="single-box zayneb">

                    </div>
                    <div>
                        Zayneb Jalled
                    </div>
                </div>
                <div>
                    <div class="single-box ayoub">

                    </div>
                    <div>
                        Mohamed Ayoub Jouini
                    </div>
                </div>

            </div>
        </div>

    </main>

    <footer>
        <span><img src="https://cdn.pixabay.com/photo/2016/11/01/03/05/contact-1787332_960_720.png" alt="image" style="width:2%">
            +216 41706470 | <img src="https://cdn2.iconfinder.com/data/icons/picons-essentials/71/location-512.png" alt="image" style="width:2%">
            ISAMM, Manouba </span>
        <br>
        <span>Created By Chmenka Team</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

    <!--log in -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content box">
                <div class="modal-body">
                    <form action="index.php" method="POST">
                        <a class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <img src="https://image.flaticon.com/icons/png/512/51/51468.png" alt="image" class="del">
                        </a>

                        <svg width="90" height="90" viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g filter="url(#filter0_d)">
                                <rect x="4" width="140" height="140" fill="url(#pattern0)" />
                            </g>
                            <defs>
                                <filter id="filter0_d" x="0" y="0" width="148" height="148" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                                </filter>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0" transform="scale(0.015625)" />
                                </pattern>
                                <image id="image0" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAAEU0lEQVR4nO3b3YtVVRjH8U/myFAz0EBB0ThTM00W5FzYi2bWhQZFUeZFEdq1iglhVph5Ed31Dxh20YWUdZt1E1FhYZTZK6TmKEUURkkajlakThfrHPbLnEY9e++1Tzpf2LA35+zn+a2113rWO9NMc0FzUQQfM3ELFmIORjAbvbik8Z8TOIYfcQD78DE+x8kIGkunByvwFsYx0eZ1DNuxvGGz47kOL+G49hP9X9c4NmO4TMFlVYHZeBGP4OIWvx/AR/iicf89jgpFn1AV+nCNkIk3406tE3sKb2ADfipJf9vMwnNaf/Ev8TQGCtgfxDP4qoX9cWxEVwH7hRgUAlVa1Gmh3t9dgb9FDduncz4/E0pNVJbhj5yQXbgtgu8FQqLTvo/ioQi+wWqhaWo6P4E1mBFLQMPXWvyZ0nESq6p2/Kxszu/B3KqdTsEo9uY0ra/K2eqcox24rCpn50AfPpTo+rkKJ8tki/12dFfhqE26sU3Q+HzZxodlA94OnZX4NKXHoVmyEXePzij20dgkG+3rDHjRGZDt4a2pV058Xpck/lNx2/naGZFE/dPi9PA6ii2Sr/9mzVqi0ytb9xfVKyc+j8kOac9rWgW2R1P322IJKci1+K5xjRYx1CU7hzdYWFoc1ks0/6ZAJixIGRorRVochoSEF86EJ1NGXilLXSRGlZAJL6cMrC1TXSRuxCFJGn4XJljPmg9SL99TtrpIFMqEsdSLc6pQF4mzrg75dYFDuLJxfxV+qUggoQle3rh/TRCa5nos1f4YZK6wOtXkMJbgm6leOibJtd42HZ8t6Q7Xiha/H0z9Xta1P+/kghrhmVzKzMw9j0sWIXuEElEVzWI/IQy989wr9EovbdP+Tbg/9XwYD5/ppXQQvKFNx51A232C91Mv3VeVuorJJ/5XUyQ+HwPS3d+R0qVVzyjew+WN58PCOuWUkT/NOknObS1bXcWU0hWenzLwQ5nqKqa0wVB+OBx92blNShsOE9bgm8Y2FZYWhyFhY1XhCRFCr6yZAd8WNfZ/pEd2UnRJvXLqYbMkA96pWUstDMsuh99Vr5x6SPfVv9Z6+9t5zWzZJvGpeuXUw0ZJBvyNW+uVE58uYWW4mQkHcUWtimpgSNiH18yEXTp343JlcWqpbKvwrvYnKqqgW5hUOYUXqnKySnZ+7RPJsLNOomyTa5LfKDmGeVU6PAOtNkquq9rpKtnq8BeeEH+r7OMmb5VdGUvAg7KBcQK7cXsE3/OFQJz2fQQPRPCdYQA7c0KaAfKOCvzNE2ap0qWv2SqVeorkXOgSOkutzgXtFlab+wvY72/YyG+PnxCm7Deo8cBEmn68avLXaV57hY1XK7FYOBrTJ9TlGZLjMosb/9licnBL1/WtuDpKys6RYdUdmjouDNOHoqWmAD3C2t/bih2bGxd2pq9QUe8zxsHJLmEQtVBYbRoRqkyfkKjm1z0inALbL8zt7RTiyD8RNE4zzYXKv/KLzVlbtiSKAAAAAElFTkSuQmCC" />
                            </defs>
                        </svg>

                        <input type="email" placeholder="E-mail" name="email" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                        <input type="password" placeholder="Password" name="password">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        <input type="submit" value="Log in">

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>