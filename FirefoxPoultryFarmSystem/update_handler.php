<?php
if (isset($_POST["update"])){
    $userID = $_POST["id"];
    $updatedName = $_POST["username"];
    $updatedEmail = $_POST["email"];
    $updatedPassword = $_POST["password"];

    //connect to the database
    require_once "connection.php";

    //prapare the update query

    $updateQuery = "UPDATE `users` SET `jina`='$updatedName',`arafa`='$updatedEmail',`siri`='$updatedPassword' WHERE id='$userID'";

    //execution
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        header("location:users.php");
    }
    else{
        echo "Updating failed!";
    }
}