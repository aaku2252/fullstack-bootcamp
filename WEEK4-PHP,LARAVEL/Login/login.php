<html>

<body>
    <form action="" method="post">
        UserID: <input type="text" name="userid"><br />
        Password: <input type="password" name="password"><br />
        <input type="submit" value="Login" name='login'>


    </form>
</body>

</html>

<?php

include "3.connection.php";
session_start();
if (isset($_POST['login'])) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $sql = "select userid,user_pwd from userreg where userid='$userid' and user_pwd='$password'";
    $result = $con->query($sql);
    if ($result->num_rows == 1) {
        $_SESSION['userid'] = $userid;
        $_SESSION['login_time'] = time();
        header("Location:home.php");
    } else {
        echo 'login failed';
    }
}

?>