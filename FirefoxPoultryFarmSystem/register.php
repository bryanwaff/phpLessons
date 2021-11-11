<!--  to make this grab data from a HTML file to PHP -->

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

    <title>Firefox Poultry Farm</title>
  </head>
  <body>
    <h1 class="text-center">Welcome to Firefox</h1>
    <h2 class="text-center">Register Here</h2>

    <div class="container" style="width: 500px;">
        <!-- Method GET exposes the data entered on the url while Method POST doesn't 
                Go for POST -->
        <form method="post" action="register_handler.php">
          <div class="mb-3">
              <label class="form-label">Username</label>
              <input name="username" type="text" class="form-control" placeholder="Username" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label class="form-label">Email</label>
              <input name="email" type="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
              <label class="form-label">Password</label>
              <input name="password" type="text" class="form-control" placeholder="Password">
          </div>
          <button name="register" type="submit" class="btn btn-success">Register</button>
          <a href="login.php" class="btn btn-primary">View Users</a>
        <a href="login.php" style="text-decoration: none;">Login Instead</a>
        </form>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

