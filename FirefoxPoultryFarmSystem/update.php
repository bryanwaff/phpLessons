<?php
    if (isset($_GET["userID"])){
        $receivedName = $_GET["user_name"];
        $receivedEmail = $_GET["user_email"];
        $receivedPassword = $_GET["user_password"];
        $receivedID = $_GET["user_ID"];
    }
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
              <label class="form-label">Update Username</label>
              <input value="<?php echo $receivedID;?>" name="id" type="hidden" class="form-control">
              <input value="<?php echo $receivedName;?>" name="username" type="text" class="form-control" placeholder="Username" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label class="form-label">Update Email</label>
              <input value="<?php echo $receivedEmail;?>" name="email" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
              <label class="form-label">Update Password</label>
              <input value="<?php echo $receivedPassword;?>" name="password" type="text" class="form-control" placeholder="Password">
          </div>
          <button name="update" type="submit" class="btn btn-primary">Update</button>
          <button name="skip" class="btn btn-danger">Skip</button>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

