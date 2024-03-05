<html>
    <head>
        <title>Search Database</title>
        <style>
             body{
                background-color:beige;
            }
            table{
                border: 1px solid;
                margin:20px auto;
                background-color:aquamarine;
                padding: 10px;
                border-radius:20px;
            }
            td{
                padding: 5px;
            }
            form{
                width: fit-content;
                margin: auto;
            }
            input{
                margin:10px auto;
            }
        </style>
    </head>

<body>
    <form action="" method="post">

        UserId:<input type = 'text' name="userid"><br/>
        <input type="submit" name = 'search' value="search">

    </form>
</body>

</html>
<?php

include "connection.php";
if (isset($_POST['search'])){

$id = $_POST['userid'];

    $sql = "select userid,username,phone,email from userreg where userid = '$id' ";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){
echo "<table>";
echo "<tr>";
echo "<th>Userid</th>";
echo "<th>Username</th>";
echo "<th>Phone</th>";
echo "<th>Email</th>";
echo "</tr>";
echo "<tr>";
echo "<td>". $row['userid']."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['phone']."</td>";
echo "<td>".$row['email']."</td>";

echo "</tr>";

echo "</table>";
            
         

        }
    }else{
        echo "Sorry no result found.";
    }

}