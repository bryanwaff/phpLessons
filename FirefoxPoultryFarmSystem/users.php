<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>List of Registered Users</title>
  </head>
  <body>
    <h1 class="text-center">Registered Users</h1>

    <table class="table table-dark table-borderless text-center">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">User Email</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php
            //DB connection
            require_once "connection.php";

            //prepare to select query
            $selectQuery = "SELECT * FROM users WHERE 1";
            $users = mysqli_query($connection, $selectQuery);

            foreach($users as $persons){
                $userNAME = $persons["jina"];
                $userMAIL = $persons["arafa"];
                $userPASS = $persons["siri"];
                $userID = $persons["id"];

                echo "
                <tr>
                    <td>$userNAME</td>
                    <td>$userMAIL</td>
                    <td><a class='btn btn-warning' href='update.php?user_name=$userNAME&user_email=$userMAIL&user_password=$userPASS&user_id=$userID'>Update</a></td>
                    <td><a class='btn btn-danger' href='delete.php?user_id=$userID'>Delete</a></td>
                 </tr>
                ";
            }?>

    </table>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

