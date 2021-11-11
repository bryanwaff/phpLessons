<?php
    if (isset($_GET["user_id"])) {
        $rID = $_GET["user_id"];
        $rName = $_GET["user_name"];
        $rEmail = $_GET["user_email"];
        $rPassword = $_GET["user_password"];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Users</title>
  </head>
  <body>
    <h1 class="text-center">Update Details</h1>

    <div class="container" style="width: 500px;">
        <!-- Method GET exposes the data entered on the url while Method POST doesn't 
                Go for POST -->
        <form method="post" action="update_handler.php">
          <div class="mb-3">
              <input type="hidden" value="<?php echo $rID;?>">
              <label class="form-label">Update Username</label>
              <input value="<?php echo $rName?>" name="username" type="text" class="form-control" placeholder="Username" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label class="form-label">Update Email</label>
              <input value="<?php echo $rEmail?>" name="email" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
              <label class="form-label">Update Password</label>
              <input value="<?php echo $rPassword;?>" name="password" type="text" class="form-control" placeholder="Password">
          </div>
            <?php
            }
            ?>

            <a href="users.php" class="btn btn-success">Back</a>
            <button name="btn_update" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

