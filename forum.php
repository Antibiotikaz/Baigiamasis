<?php
session_start();
include 'PHP/character.php';
echo "This page is under maintance";

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="game.php">Back to game</a>

    <?php
    echo $_SESSION['damage'];

     ?>
  </body>
</html>
