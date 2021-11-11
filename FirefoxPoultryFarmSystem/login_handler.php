<?php

if (isset($_POST["login"])) {
    $userMail = $_POST["email"];
    $userPassword = $_POST["password"];

    //connect to DB
    require_once "connection.php";

    //Lookup to login
    $validate = "select * from users where arafa = '$userMail' && siri='$userPassword'";

    $result = mysqli_query($connection, $validate);

    $return = mysqli_num_rows($result);

    if ($return == 1){
    header('location:users.php');
    }
    else{
        //echo 'Incorrect Username or Password';
        header('location:login.php');
    }
}