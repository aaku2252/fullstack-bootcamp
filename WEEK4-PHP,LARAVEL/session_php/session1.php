<?php

echo 'start of session';
session_start();
$_SESSION['user'] = 'SS';
$_SESSION['logintime'] = time();
header('Location:session2.php');