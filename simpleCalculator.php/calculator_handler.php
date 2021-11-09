<?php
if(isset($_GET["calculate"])){
    $first = $_GET["firstNumber"];
    $second = $_GET["secondNumber"];

    //add the tow numbers and print answer

    $answer = $first + $second;

    echo "Your result is $answer";

}