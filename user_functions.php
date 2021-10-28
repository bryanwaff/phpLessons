<?php
function motto(){
    echo "Hi there, this is our motto";
    echo "<br>";
}
//call Motto function
motto();

function additional(){
    $x = 30;
    $y = 20;
    $z = $x + $y;
    echo "Your Answer is $z";
    echo "<br>";
}

//call additional function
additional();

function avg($x,$y,$z){
    $average = ($x + $y + $z) / 3;
    echo "You Average is $average";
    echo "<br>";
}

//fucnction call
avg(40,90,36);

// Function to calculate interest
function simple_interest($p,$r,$t){
    $interest = ($p * $r * $t)/100;
    echo "Your interest at the end of loan period will be Ksh. $interest";
    echo "<br>";
}

//function call
simple_interest(200000,1.9,1);