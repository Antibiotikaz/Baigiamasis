<?php
include 'websitestyle.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="menu.css">

    <title></title>
  </head>
  <body>
    <img src="img/avatar.png" alt="">
<h3 class="vlg-nick"> User : <?php echo $_SESSION['user']; ?></h3>
<h3 class="vlg-nick" id="level"></h3>
<h3 class="vlg-nick" id="gold"></h3>
<div class="container">
  <div class="row">
    <div class="col-3">

    </div>
    <div class="col-3">
      <button type="button" name="button">  <a href="#">MarketPlace</a></button>

    </div>
    <div class="col-3">
      <button type="button" name="button">  <a href="#">Quests</a></button>
    </div>
    <div class="col-3">
      <button type="button" name="button">  <a href="#">Inventory</a></button>
    </div>
  </div>
</div>



  </body>
    <script src="scripts/village.js"></script>
</html>
