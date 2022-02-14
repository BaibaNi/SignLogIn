<?php

if(isset($_POST["submit"])){

// Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

// Instantiate the SignupContr class
    include "../app/dbh.classes.php";
    include "../app/signup.classes.php";
    include "../app/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

// Running error handler and user signup
    $signup->signupUser();

// Going back to the front page
    header("location: ../index.php?error=none");
}