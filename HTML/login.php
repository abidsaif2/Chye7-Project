<?php
include('config.php');
session_start();
if (isset($_SESSION['email'])) {
    header("location: profile.php");
}
$email = $password = "";
$email_err = $password_err = $login_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if email is empty
    if (empty(trim(htmlspecialchars($_POST["email"])))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim(htmlspecialchars($_POST["email"]));
    }

    // Check if password is empty
    if (empty(trim(htmlspecialchars($_POST["password"])))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim(htmlspecialchars($_POST["password"]));
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT email,username,passwords,img FROM compts WHERE email = ?";
        $sql1 = "SELECT gender FROM compts WHERE email = '$email'";
        $result = $conn->query($sql1);
        $row = $result->fetch_assoc();

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
            $param_email = $email;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if email exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt,  $email, $username, $hashed_password, $img);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (strcmp($password, $hashed_password) == 0) {
                            // Password is correct, so start a new session


                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["username"] = $username;
                            $_SESSION["email"] = $email;
                            $_SESSION["gender"] = $row['gender'];

                            // Redirect user to welcome page
                            header("location:profile.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid email or password.";
                            $password_err = "Invalid password.";
                        }
                    }
                } else {
                    // email doesn't exist, display a generic error message
                    $login_err = "Invalid email or password.";
                    $email_err = "Invalid email";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
}
