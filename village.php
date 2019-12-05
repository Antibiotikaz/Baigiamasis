<?php
include 'websitestyle.php';
include 'PHP/db.php';
include_once 'PHP/enemy.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>


    <title></title>
  </head>
  <body>
<img src="img/warrior.jpg" alt="">
    <h2> Username : <?php echo $_SESSION['username']; ?></h2>
    <h3>Stats</h3>
    <p class="stats">Class: <?php echo $_SESSION['class']; ?></p>
    <p class="stats">Health: <?php echo $_SESSION['health']; ?></p>
    <p class="stats">Level: <?php echo $_SESSION['level']; ?></p>
    <p class="stats">Exp: <?php echo $_SESSION['exp']; ?></p>
    <p class="stats">Damage: <?php echo $_SESSION['damage']; ?></p>
    <p class="stats">Gold: <?php echo $_SESSION['gold']; ?></p>

    <form class="" action="village.php" method="post">
      <button id="btn" type="submit" name="search">Search for an enemies</button>
    </form>
    <form class="" action="village.php" method="post">
      <button id="btn" type="submit" name="attack">Attack</button>
    </form>



  <?php
  include 'PHP/callEnemy.php';
  include 'PHP/attack.php';
   ?>



</html>
