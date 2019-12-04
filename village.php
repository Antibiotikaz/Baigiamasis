<?php
include 'websitestyle.php';
include 'PHP/db.php';
include_once 'PHP/enemy.php';

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h2> Username : <?php echo $_SESSION['username']; ?></h2>
    <h3>Stats</h3>
    <p class="stats">Class: <?php echo $_SESSION['class']; ?></p>
    <p class="stats">Health: <?php echo $_SESSION['health']; ?></p>
    <p class="stats">Level: <?php echo $_SESSION['level']; ?></p>
    <p class="stats">Exp: <?php echo $_SESSION['exp']; ?></p>
    <p class="stats">Damage: <?php echo $_SESSION['damage']; ?></p>
    <p class="stats">Gold: <?php echo $_SESSION['gold']; ?></p>

    <form class="" action="village.php" method="post">
      <button type="submit" name="search">Search for an enemies</button>
    </form>


  </body>
  <?php
  include 'PHP/callEnemy.php';
  include 'PHP/attack.php';
   ?>



</html>
