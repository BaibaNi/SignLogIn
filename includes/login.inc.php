<?php

if(isset($_POST["submit"])){

// Grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

// Instantiate the SignupContr class
    include "../app/dbh.classes.php";
    include "../app/login.classes.php";
    include "../app/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);

// Running error handler and user signup
    $login->loginUser();

// Going back to the front page
    header("location: ../index.php?error=none");
}