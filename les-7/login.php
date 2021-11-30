<?php
if (isset($_COOKIE['islogged'])) {
    header('location: index2.php');
}
if (isset($_POST['email'], $_POST['password'])) {
    require_once 'db.php';
    global $DBLink;
    $result = mysqli_query($DBLink, "SELECT * FROM users where email='" . $_POST['email'] . "'");
    $result = mysqli_fetch_assoc($result);
    if (password_verify($_POST['password'], $result['pass'])) {
        setcookie('islogged', '1');
        header('location: index2.php');
        die("1");
    }
    echo 'Incorrect login/password';
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="login.php">
    <input type="email" name="email"></br>
    <input type="password" name="password"></br>
    <input type="submit" value="Login"></br>
</form>
</body>
</html>