<?php
 if (isset($_POST["register"])){
     $userName = $_POST["username"];
     $userMail = $_POST["email"];
     $userPassword = $_POST["password"];

     //connect to DB
     require_once "connection.php";

     //notify
     $notify = "Swal.fire({
          title: 'Error!',
          text: 'Do you want to continue',
          icon: 'error',
          confirmButtonText: 'Cool'
        })";


     //insert users to DB
     $insertQuery = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) VALUES (null,'$userName','$userMail','$userPassword')";



     //validate to register
     $validate = "select * from users where arafa = '$userMail'";

     $result = mysqli_query($connection, $validate);

     $return = mysqli_num_rows($result);

     if ($return == 1){
         //echo "Email already taken!";
         //header('location:users.php');
         header('location:register.php?m=1');
     }
     //check if saved
     else {
         //save to DB
         $save = mysqli_query($connection, $insertQuery);
         //echo "Registration successfully!";
         //echo "swal({  title: "Good job!", text: "You clicked the button!",  icon: "success",})";
         //header('location:login.php');
     }
 }
