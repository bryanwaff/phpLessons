<?php
if (isset($_GET["user_id"])){
    $receivedId = $_GET["user_id"];
    // to delete, connect to the database
    require_once "connection.php";

    //prepare the delete query
    $deleteQuery = "delete from users where id=$receivedID";
    //complete the deletion using the mysqli query function
    $delete = mysqli_query($connectiom, $deleteQuery);

    //check if the deletion was successful
    if (isset($delete)){
        //redirect to users.php file to see if the user was actually deleted
        header("location:users.php");
    }
    else{
        echo "Deleting user failed";
    }
}