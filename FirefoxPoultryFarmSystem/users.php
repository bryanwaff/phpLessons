<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>List of Registered Users</title>
  </head>
  <body>
    <a class='m-2 btn btn-danger' href='register.php?'>Logout</a>
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
                $userName = $persons["jina"];
                $userEmail = $persons["arafa"];
                $userPassword = $persons["siri"];
                $userId = $persons["id"];

                echo "
                <tr>
                    <td>$userName</td>
                    <td>$userEmail</td>
                    <td><a class='btn btn-warning' href='update.php?user_name=$userName&user_email=$userEmail&user_password=$userPassword&user_id=$userId'>Update</a></td>
                    <td><a  href='delete_handler.php?user_id=$userId' class='btn btn-danger del-btn'>Delete</a></td>
                 </tr>
                ";
            }?>

    </table>
    <?php
    if(isset($_GET['m'])){ ?>
    <div class="flash-data" data-flashdata="<?php echo $_GET['m'];?>"></div>
    <?php } ?>

    <script>
        $('.del-btn').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'Are you sure to delete?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;

                }
            })
        })

        const flashdata = $('.flash-data').data('flashdata')
        if(flashdata){
            swal.fire({
                type : 'success',
                title : 'Record Deleted',
                text : 'Record has been deleted'
            })
        }
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

