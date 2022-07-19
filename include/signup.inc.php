<!-- Will run when the signup button is clicked:
contains error handlers and signs up users for the webite -->

<?php

if (isset($_POST['signup-submit'])) { //checking that the user has clicked the signup button
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordReenter = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordReenter)) {
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    }
}