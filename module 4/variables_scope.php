<?php
// $x = 5; //global variable

// function localVariable(){
//     $y = 10; //local variable
//     // global $x;
//     // //echo $y;
//     // echo $y;
// }

// //echo $y;
// localVariable();

//Example 2 
$x = 5;
$y = 7;

function sum(){
    global $x, $y;
    $z = $x + $y;
}

sum()
echo $y;

function callCounter(){
    static $count = 0;
    $count++;
    echo "The value of count variable is: $count <br>";
}
callCountwe();
callCounter();
callCounter();
?>