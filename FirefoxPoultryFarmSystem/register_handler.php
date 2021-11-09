<?php
 if (isset($_POST["register"])){
     $userName = $_POST["username"];
     $userMail = $_POST["email"];
     $userPassword = $_POST["password"];

     //connect to DB
     require_once "connection.php";

     //insert users to DB
     $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$userName','$userMail','$userPassword')";

     //save to DB
     $save = mysqli_query($connection, $insertQuery);

     //check if saved
     if (isset($save)){
         echo "Registration successfully!";
     }
     else
     {
         echo "Registration Failed!";
     }
 }
