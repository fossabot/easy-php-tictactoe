<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TicTacToe</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row" style="padding-top: 20%;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
          <form action="game.php" method="post">
            <div class="form-group">
              <label for="name1">Name Spieler 1</label>
              <input class="form-control" type="text" name="name1" id='name1'>
            </div>
            <div class="form-group">
              <label for="name2">Name Spieler 2</label>
              <input class="form-control" type="text" name="name2" id='name2'>
            </div>
            <input class="form-control btn btn-primary" type="submit" name="Senden" value="Senden">
          </form>
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
  </body>
</html>
