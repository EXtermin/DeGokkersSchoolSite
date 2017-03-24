<?php
require ('../app/database.php');





if (isset($_GET['email']) && filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) )
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $message = 'Thanks for you register!';
    $sql = "INSERT INTO useraccounts (email, password, username) VALUES ('$email', '$password', '$username')";
    $database->query($sql);
    header("location:../app/login.php?message=$message");
}
else
{
    $message = 'Deze mail is niet beschikbaar of bestaat niet...';
    header("location:../public/register.php?message=$message");
}


?>