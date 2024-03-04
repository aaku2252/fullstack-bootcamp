<?php



class Student{
    public $a = 'Akash';

    //! private methods will not br accessible from outside of the class. We can not access it from object. It can only bve used fro in-side the class itself.
    private $b = 23;

    //!protected methods will not be accessible from outside of the class and will only be accessible from inside the class and the class which extends the current class.
    protected $c = '12th';



    function info(){
        echo 'The age of '.$this->a.' is '.$this->b.'years.';
    }
}

//* Public, Private, Protected
//* public keyword is used before variable in class to define that these variables are accessible by all functions  in the class.
//* Default is private.

$obj = new Student();
$obj->info();
echo $obj->a;



//> form validation using class
// <html>
// <body>
//     <form action="" method="post">
//         Username: <input type="text" name="username"/><br/>
//         PASSWORD: <input type="text" name="password"/><br/>
//         <input type="submit" name="submit">
//     </form>


//     <?php 
//     class User{

//         function login() {
//             if ($_SERVER['REQUEST_METHOD']=='POST'){

            
//             $name = $_POST['username'];
//             $password = $_POST['password'];
//             $uname = 'Akash';
//             $pwd = '123';

//             if ($name == $uname && $password == $pwd) {
//                 echo 'Login successful.';
//             }else{
//                 echo 'Login Unsuccessful.';

//             }
//         }
//         }
//     }

// $user1 = new User();


// $user1->login();




//     ?>
// </body>
// </html>


//> Inheritance in class
