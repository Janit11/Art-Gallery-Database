<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="style.css">
<head>
<body>
    <header>
        <nav>
            <div class="header">
                <ul>
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="#">Artists</a></li>
                    <li><a href="#">Art Works</a></li>
                    <li><a href="#">Museums</a></li>
                    <li><a href="#">Exhibitions</a></li>
                </ul>

                <div class ="header-right">
                    <form action="include/login.inc.php" method="post"> <!-- might cause problems --> 
                        <input type="text" name="mailuid" placeholder="Username...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                    </form>

                    <a href="signup.php">Signup</a>
                    <form action="include/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

</body>
</html>