<html>

<head>
    <title>Update Database</title>
    <style>
        body {
            background-color: aquamarine;
        }

        form {
            width: fit-content;
            margin: auto;
        }

        input {
            margin: 10px auto;
        }

        h1 {
            width: fit-content;
            margin: 10px auto;
        }

        table {
            border: 2px solid;
            padding: 10px;
            margin: auto;
            border-collapse: collapse;

        }

        th,
        td {
            border: 1px solid;
            padding: 8px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        User Id:<input type="text" name="userid"><br />
        Phone:<input type="text" name="phone"><br />
        <input type="submit" value="update" name=" update">
    </form>

</body>

</html>
<?php

include "connection.php";
if (isset($_POST['userid'])) {
    $userid = $_POST['userid'];
    $phone = $_POST['phone'];
    $sql = "update userreg set phone = '$phone' where userid = '$userid'";
    $res = $con->query($sql);
    if ($res == 1) {



        $sel = "select * from userreg";
        $resUpdate = $con->query($sel);

        if ($resUpdate->num_rows > 0) {

            // closing the php tag

            ?>
            <h1>User Data</h1>
            <table>

                <tr>

                    <th>User ID</th>
                    <th>Username</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>User_pwd</th>
                </tr>


                <?php




                while ($rows = $resUpdate->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $rows['userid'] . "</td>";
                    echo "<td>" . $rows['username'] . "</td>";
                    echo "<td>" . $rows['phone'] . "</td>";
                    echo "<td>" . $rows['email'] . "</td>";
                    echo "<td>" . $rows['user_pwd'] . "</td>";
                    echo "</tr>";

                }
                ;
                echo "</table>";
        }

    } else {
        echo "No record has been updated.";
    }
}

//>









//>



$con->close();


?>