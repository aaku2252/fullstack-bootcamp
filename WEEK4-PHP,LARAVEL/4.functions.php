//> Error handling
$a = 10;
$b = 0;

try{
    $c = $a/$b;
    echo $c;
}catch(DivisionByZeroError $e){
    echo 'Error:'.$e->getMessage();
}


