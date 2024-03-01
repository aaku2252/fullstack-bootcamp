<?php

//> Conditional operator 
// if else statement

$total_bill = 500;
if($total_bill>=5000){
    $discount= $total_bill*10/100;
    $final_bill = $total_bill-$discount;
    echo 'Final Bill : '.$final_bill;
}else if($total_bill>1000){
    $discount= $total_bill*5/100;
    $final_bill = $total_bill-$discount;
    echo 'Final Bill : '.$final_bill;

}else{
    
    echo 'Final Bill : '.$total_bill;
}


//>switch statement
$char = 'square';
switch ($char) {
    case 'circle':$ar = 3.14*2**2;
        echo 'Area of Circle:'.$ar;
        break; 
    case 'square':$ar =2**2;
        echo 'Area of square:'.$ar;
        break; 
    default:echo 'Select a Valid Choice.';
}


//> loops

//* while loop
$a=20;
while ($a<51){
    if($a%5==0){
        echo 'HI'.'<br/>';
    }else{
    echo $a.'<br/>';
    }
    $a++;
}


//* for loop
for ($i=1; $i<=5; $i++) {
    echo 'Hello'.$i.'<br/>';
}

//* do while loop
do{
    echo "Hello this is do while loop ".$a.'<br/>';
    $a++;
}while($a<=5);


//* forEach loop
$a = array(1,2,3,4,5 );
foreach ($a as $arr){
    echo $arr.'<br/>';
}

//> Continue in loop
$a = array(1,2,3,4,5 );
foreach ($a as $arr){
    if ($arr==3){
        continue;
    }
    echo $arr.'<br/>';
}



