
<!-- //! inlude this file in the phpbackend folder in htdoc folder in xampp folder in C drive.
//! It is mandatory to include this file there because the root for mysql database is that folder.Then we will call  -->

<html>
<head>
    <title>Registration page</title>
</head>
<body>
    <form action="" method="post">
        UserId:<input type="text" name = "userid"/><br/><br/>
        Full Name:<input type="text" name= "uname"/><br/><br/>
        Phone:<input type="text" name= "phone"/><br/><br/>
        Email:<input type="text" name= "email"/><br/><br/>
        Password:<input type="text" name= "user_pwd"/><br/><br/>
        <input type="submit" name = "submit">
    </form>

    <?php

    include "connection.php";



    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userid = $_POST['userid'];
        $name = $_POST['uname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $user_pwd = $_POST['user_pwd'];

        $sql = "insert into userreg values ('$userid', '$name', '$phone', '$email', '$user_pwd')";

         $res = $con->query($sql);
        if ($res==1) {
            echo "record inserted successfully.";
        }else{
            echo "record not inserted.";
        }
    }
    $con->close();
    ?>
</body>
</html>