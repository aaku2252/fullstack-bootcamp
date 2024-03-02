<html lang="en">
<head>
    <title>Addition Form</title>
  
</head>
<body>
    <form action="" method="post">
        <label for="num1">Number 1</label>
        <input type="text" id="num1" name="num1"/>
        <br/>
        <label for="num2">Number 2</label>
        <input type="text" id="num2" name = "num2"/>
        <br/>
        
        <input type="submit" > 

    </form>
    
    
</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
       $a = $_POST['num1'];
       $b = $_POST['num2'];

       echo 'The addition value is :'.$a+$b;
    }



?>
