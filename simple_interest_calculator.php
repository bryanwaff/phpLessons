<!--  to make this grab data from a HTML file to PHP -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Interest Calculator</title>
  </head>
  <body>
    <h1 class="text-center">Calculate your SI here</h1>

    <div class="container" style="width: 500px;">
        <form method="get" action="simple_interest_handler.php">
          <div class="mb-3">
              <label class="form-label">Principle</label>
              <input name="principle" type="text" class="form-control" placeholder="Enter principle" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label class="form-label">Rate</label>
              <input name="rate" type="text" class="form-control" placeholder="Enter Rate">
          </div>
          <div class="mb-3">
              <label class="form-label">Time</label>
              <input name="time" type="text" class="form-control" placeholder="Enter Time">
          </div>
          <button name="calculate" type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

