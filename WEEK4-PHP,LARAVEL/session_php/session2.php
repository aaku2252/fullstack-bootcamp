<?php
session_start();
echo $_SESSION['user'];
if (time() - $_SESSION['logintime'] >= 10) {
    unset($_SESSION['user']);
    session_destroy();
    header('Location:session3.php');
}