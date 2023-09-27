<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<ul>
    <li><a href=""></a></li>
</ul>
<body>
<section>
    <h3>login form</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uname" id="">
        <input type="password" name="password" id="">
        <input type="submit"  value="submit">
    </form>
</section>
<section>
    <h3>Register form</h3>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uname" id="">
        <input type="text" name="email" id="">
        <input type="password" name="password" id="">
        <input type="password" name="repassword" id="">
        <input type="submit"  value="submit">
    </form>
</section>
</body>
</html>