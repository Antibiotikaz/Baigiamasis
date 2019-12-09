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

    <div class="container pt-4">
      <div class="row">
        <div class="col-3 border border-primary">
          <img class="avatar pt-2" src="img/avatar.png" alt="">
              <h2 class="col-12"> Username : <?php echo $_SESSION['username']; ?></h2>
              <h3 class="col-12">Stats</h3>

        </div>
        <div class="col-9">

        </div>
        <div class="col-3 border border-primary">

          <p class=" stats ">Class <img src="img/class.png"><?php echo $_SESSION['class']; ?></p>
          <p class="stats ">Health <img src="img/health.png" alt=""> <?php echo $_SESSION['health']; ?></p>
          <p class="stats ">Level <img src="img/level-up.png" alt=""> <?php echo $_SESSION['level']; ?></p>
          <p class="stats ">Exp <img src="img/exp.png" alt="">  <?php echo $_SESSION['exp']; ?></p>
          <p class="stats ">Damage <img src="img/sword.png" alt=""> <?php echo $_SESSION['damage']; ?></p>

          <p class="stats ">Gold <img src="img/gold.png" alt=""> <?php echo $_SESSION['gold']; ?></p>

        </div>
          <div class="col-9">

          </div>
      </div>

    </div>

    <form class="mt-4 mb-4" action="village.php" method="post">
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
