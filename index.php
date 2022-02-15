<style><?php include "signLoginStyle.css";

require_once "vendor/autoload.php";

session_start();
?></style>

<!doctype html>
<html lang="en">
<head>
    <title>Sign-up & Log-in</title>
</head>



<body>
<div class="header">
    <h1><b>SIGN-UP & LOG-IN</b></h1>
    <ul type="none">
        <?php if(isset($_SESSION["userid"])): ?>
            <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
            <li><a href="includes/logout.inc.php">LOGOUT</a></li>
        <?php else: ?>
            <li><a href="#">SIGN UP</a></li>
            <li><a href="#">LOGIN</a></li>
        <?php endif; ?>
    </ul>
</div>

<section style="width: 700px; margin: 0 auto;">
    <div style="display: flex">
        <div class="arrangeForms">
            <h4>SIGN UP</h4>
            <p>Sign up here, if you don't have an account yet.</p>
            <form action="includes/signup.inc.php" method="post">
                <input class="looks" type="text" name="uid" placeholder="Username">
                <input class="looks" type="password" name="pwd" placeholder="Password">
                <input class="looks" type="password" name="pwdRepeat" placeholder="Repeat Password">
                <input class="looks" type="text" name="email" placeholder="E-mail">
                <br>
                <button class="fancy" type="submit" name="submit">SIGN UP</button>
            </form>
        </div>
        <div class="arrangeForms">
            <h4>LOGIN</h4>
            <p>Have an account? Login here.</p>
            <form action="includes/login.inc.php" method="post">
                <input class="looks" type="text" name="uid" placeholder="Username">
                <input class="looks" type="password" name="pwd" placeholder="Password">
                <br>
                <button class="fancy" type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </div>
</section>


</body>
</html>
