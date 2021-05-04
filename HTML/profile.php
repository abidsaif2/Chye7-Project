<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashbord</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/profile.css">
</head>

<body>
    <?php
    include('config.php');
    session_start();
    if (!isset($_SESSION['email'])) {
        header("location: login.php");
    }
    $email = $_SESSION["email"];
    include('updateProfile.php');
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
                <div class="icon" data-bs-toggle="modal" href="#modal">
                    <img src="../assets/Icon awesome-user-edit.svg">

                </div>
            </nav>
        </div>


        <div id="main-info">
            <div class="img_place">
                <?php if (!empty($row["img"])) {
                    echo "<div style='background-image:url(../images/" . $row['img'] . ")'; ></div>";
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
                        <?php if (!empty($row["interests"])) {
                            $interests = explode(',', $row['interests']);
                            foreach ($interests as $interest) { ?>
                                <div class="interst"><?php echo $interest; ?></div>
                            <?php }
                        } else { ?>
                            <p>...</p>
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
            <a data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="../assets/like.svg"></a>
        </div>

    </footer>


    <!-- update Page -->
    <!-- First modal dialog -->
    <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateForm1" name="updateForm1" method="POST" action="profile.php" enctype="multipart/form-data">
                        <div>
                            <label>Profile Image:</label>
                            <input type="file" name="image" class="inputIMG">
                        </div>
                        <div>
                            <label>UserName:</label>
                            <input type="text" name="username" class="inputTxt txt">
                        </div>
                        <div>
                            <label>Headline:</label>
                            <textarea id="headline" rows="2" name="headline" placeholder="" class="inputTxt"></textarea>
                        </div>
                        <div>
                            <label>Interests:</label>
                            <textarea id="intrests" rows="3" name="intrests" placeholder="the interests should be separated by comma (,)" class="inputTxt"></textarea>
                        </div>
                        <div>
                            <label>About:</label>
                            <textarea id="aboutme" rows="4" name="about" placeholder="" class="inputTxt"></textarea>
                        </div>
                        <div>
                            <input type="submit" id="submit" name="submit" value="Save changes" class="inputSubmit">
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <!-- Toogle to second dialog -->
                    <button class="btn btn-primary" data-bs-target="#modal2" data-bs-toggle="modal" data-bs-dismiss="modal">Change email & password</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Second modal dialog -->
    <div class="modal fade" id="modal2" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modalWith">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal2" aria-label="Close"></button>
                </div>
                <div class="modal-body modalForm">
                    <div class="form-div1">
                        <form id="updateForm2" name="updateForm2" method="POST" action="profile.php">
                            <div>
                                <label>E-mail:</label>
                                <input type="email" name="email" class="inputTxt txt">
                            </div>
                            <div>
                                <label>New E-mail:</label>
                                <input type="email" name="newEmail" class="inputTxt txt">
                            </div>
                            <div>
                                <label>Confirm New E-mail:</label>
                                <input type="email" name="cNewEmail" class="inputTxt txt">
                            </div>
                            <div>
                                <input type="submit" id="submit1" name="submit1" value="Save E-mail" class="inputSubmit">
                            </div>

                        </form>
                    </div>
                    <div class="form-div2">
                        <form id="updateForm3" name="updateForm3" method="POST" action="profile.php">
                            <div>
                                <label>Password:</label>
                                <input type="password" name="PWD" class="inputTxt txt">
                            </div>
                            <div>
                                <label>New Password:</label>
                                <input type="password" name="newPWD" class="inputTxt txt">
                            </div>
                            <div>
                                <label>Confirm New Password:</label>
                                <input type="password" name="cNewPWD" class="inputTxt txt">
                            </div>
                            <div>
                                <input type="submit" id="submit2" name="submit2" value="Save password" class="inputSubmit">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Toogle to first dialog, `data-bs-dismiss` attribute can be omitted - clicking on link will close dialog anyway -->
                    <a class="btn btn-primary" href="#modal" data-bs-toggle="modal" data-bs-dismiss="modal">Change general information</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    include('PROFIL_MATCHING.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>