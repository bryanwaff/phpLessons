<?php
//POST Method exposes the data entered in a form on a link
if (isset($_GET["register"])){
    $username = $_GET["username"];
    $email = $_GET["email"];
    $password = $_GET["password"];

    echo "Hi $username, your email is $email and you password is $password.";
}

//GET on the other side hides the data entered in a form

if (isset($_POST["register"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    echo "Hi $username, your email is $email and you password is $password.";
}