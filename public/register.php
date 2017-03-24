<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

</head>
<body>

    <form action="../app/account_creation.php" method="post">
        <div class = "form-group">

            <label for="username"> Please fill in a username:</label>
            <input name="username" type="text" id="username">

            <label for="password"> Please fill in a password::</label>
            <input name="password" type="text" id="password">

            <label for="email"> Please fill in your Email-adress</label>
            <input name="email" type="text" id="email">

            <input type="submit" value="Verzenden">
        </div>
    </form>
    <a href="login.php">Or do you want to login?</a>
</body>
</html>


