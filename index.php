<?php

require_once "vendor/autoload.php";

session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Sign-up & Log-in</title>
</head>

<h1><b>SIGN-IN & LOG-IN</b></h1>

<header>
    <nav>
        <div>
            <ul>
                <?php if(isset($_SESSION["userid"])): ?>
                    <li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li>
                    <li><a href="includes/logout.inc.php">LOGOUT</a></li>
                <?php else: ?>
                    <li><a href="#">SIGN UP</a></li>
                    <li><a href="#">LOGIN</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<body>
<div>
    <div>
        <h4>SIGN UP</h4>
        <p>Sign up here, if you don't have an account yet.</p>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdRepeat" placeholder="Repeat Password">
            <input type="text" name="email" placeholder="E-mail">
            <br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </div>
    <div>
        <h4>LOGIN</h4>
        <p>Login here, if you already have an account.</p>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>
    </div>
</div>


</body>
</html>
