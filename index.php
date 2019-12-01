



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <title></title>
  </head>
  <body class="menu-body">

    <h1 class="index-header text-center mt-4"><a href="index.php ">Heroes Online</a></h1>

  <!-- <button type="submit" name="login" >Enter the Game</button> -->


<div class="container">
  <div class="row">
    <div class="col-3 ">

    </div>

    <form class="text-center col-6 mt-4" action="index.php" method="post" >
      <div class="form-group">
        <label >Username</label>
        <input type="text" class="form-control" name"username" required>
      </div>
      <button type="submit" class="btn btn-primary" name"submit">Login</button>
    </form>
    <?php
    echo $_POST['username'];

     ?>
  </div>
</div>





  </body>

</html>
