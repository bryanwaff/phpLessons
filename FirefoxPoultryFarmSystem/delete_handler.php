<?php
if (isset($_GET["user_id"])){
    $receivedId = $_GET["user_id"];
    // to delete, connect to the database
    require_once "connection.php";

    //prepare the delete query
    $delQuery = "DELETE FROM `users` WHERE `id`=$receivedId";
    //complete the deletion using the mysqli query function
    $del = mysqli_query($connection, $delQuery);

    //check if the deletion was successful
    if (isset($del)){
        //redirect to users.php file to see if the user was actually deleted
        header("location:users.php?m=1");
    }
    else{
        echo "Deleting user failed";
    }
}