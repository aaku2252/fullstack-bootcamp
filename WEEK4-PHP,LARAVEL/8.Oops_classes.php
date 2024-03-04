class User{
    function __construct($name){
        $this->name = $name;
    }
    protected function intro(){
        echo 'User name is : '.$this->name;
    }
}
class User2 extends User{
    function nameIntro(){
        $this->intro();
    }
    
}

$user_new = new User2('Akash');

echo $user_new->nameIntro();
class User {
    function __construct($name) {
        $this->name = $name;
    }
}
class User2 extends User{
    function __construct( $password) {
        $this->name = 'Akash';
        $this->password = $password;
    }
}

$obj = new User2('123');
echo $obj->name;



//>static method
class Counter {
    public static $count = 0;

    public static function increment() {
        self::$count++;
    }
}

Counter::$count=35;
echo Counter::$count; // Outputs: 1
