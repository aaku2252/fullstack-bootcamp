<html>

<body>
    <form action="" method="post">
        UserID:<input type="text" name="userid"><br />
        <input type="submit" value="delete" name='delete'>
    </form>
</body>

</html>
<?php
include 'connection.php';


if (isset($_POST['delete'])) {

    $userid = $_POST['userid'];
    $delBtn = $_POST['delete'];

    $check = "select * from userreg where userid='$userid'";
    $checkres = $con->query($check);
    if ($checkres->num_rows == 1) {
        $del = "update userreg set phone = null where userid='$userid'";
        $res = $con->query($del);
        if ($res == 1) {
            echo 'one column has been deleted.';
        }

    } else {
        echo 'Please enter a valid userid.';
    }




}




?>