<form method="post" action="register.php">
    <input type="email" name="email"><br/>
    <input type="password" name="password"><br/>
    <input type="submit" value="Register">
</form>
<?php
require_once 'db.php';
if (isset($_POST['email'], $_POST['password'])) {
    global $DBLink;
    $password= password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query="insert into users set email='".$_POST['email']."', pass='".$password."';";
    mysqli_query($DBLink, $query);
    echo 'Registration success';
}