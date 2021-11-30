<?php
if (isset($_COOKIE['islogged'])) {
    echo 'you are autorized';
} else {
    header('location: login.php');
}