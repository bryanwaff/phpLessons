<?php
if(isset($_GET["calculate"])){
    $P = $_GET["principle"];
    $R = $_GET["rate"];
    $T = $_GET["time"];


    $I = ($P * $R * $T)/100;

    echo "Your interest is $I";

}