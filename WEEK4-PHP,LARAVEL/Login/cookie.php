<html>

<body>
    <form action="" method="post">
        User Id: <input type="text" name="userid">
        Password: <input type="password" name="password">
        <input type="submit" value="submit" name="submit">
    </form>
</body>

</html>
<?php
$username = 'Akash';
$value = "Course";
setcookie($username, $value, time() + 86400, "/");



?>