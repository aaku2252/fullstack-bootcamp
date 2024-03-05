<?php
session_start();
echo 'hello';
if (isset($_SESSION['userid'])) {
    echo "Welcome" . $_SESSION['userid'];
    if (time() - $_SESSION['login_time'] > 10) {
        echo 'hello2';
        unset($_SESSION['userid']);
        session_destroy();
        header("location:login.php");

    }
} else {
    echo 'Login first';
}
$cookiename = "Leave";
$value = "home";
setcookie($cookiename, $value, time() + 10000, "/");
?>