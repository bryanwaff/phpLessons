<!--  to make this grab data from a HTML file to PHP -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <h1 class="text-center">User Registration</h1>

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
              <label class="form-label">Passowrd</label>
              <input name="password" type="text" class="form-control" placeholder="Password">
          </div>
          <button name="register" type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

