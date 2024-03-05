<html>
    <head>
        <title>DB Connection</title>
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
            input{
                display: block;
                margin: auto;
                background-color:blue;
                padding: 4px 8px;
                text-decoration: none;
            }
            h1{
                width: fit-content;
                margin:auto;
                color: blueviolet;
            }


        </style>
    </head>
    <body>
        <form action="" method="post">
        <input type="submit" name="submit" value="Show">
        </form>
        

<?php

include "connection.php";

if(isset($_POST['submit'])){
    $sel = "select * from userreg";
    $res = $con->query($sel);

    if($res->num_rows > 0){

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




        while($rows = $res->fetch_assoc()){

            echo "<tr>";
            echo "<td>".$rows['userid']."</td>";
            echo "<td>".$rows['username']."</td>";
            echo "<td>".$rows['phone']."</td>";
            echo "<td>".$rows['email']."</td>";
            echo "<td>".$rows['user_pwd']."</td>";
            echo "</tr>";
            
        };
        //closing the table tag here that was opened in html before starting of php code
        echo "</table>";
    }else{
        echo 'No result fetched';
    }
}
$con->close();
?>
    </body>
</html>