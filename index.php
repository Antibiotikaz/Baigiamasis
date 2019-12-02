<?php
session_start();

 ?>



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
    <div class="col-4">

    </div>
    <div class="col-6">
      <form class="" action="index.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username" value="">
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </div>
</div>



<?php
if (empty($_POST['username'])) {
  echo "<p style='color:red; font-size:46px; text-align: center;'>Enter your username</p>";


} else {
  $_SESSION['user'] = $_POST['username'];
  echo "<p style='text-align:center;'>";
  echo $_POST['username']." ".'<a href="game.php ">Enter the game</a>';
  echo "</p>";
}

 ?>







  </body>

</html>
