<?php
session_start();

var_dump($_SESSION['user']);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <script src="scripts/player.js"></script>
    <script src="scripts/gamemanager.js"></script>
    <script src="scripts/enemy.js"></script>
    <link rel="stylesheet" href="menu.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body class="game-body">
    
<div class="header">
  <h2>Greatest RPG game ever made</h2>
</div>
<div class="interface">
<a href="#" onclick="GameManager.setgameStart('Warrior')">
  <img src="img/warrior.jpg" alt="warrior">
  <div class="">
    <h3>Warrior</h3>
    <p>Warrior have higher health and stamina, however their strength also makes them slower and clumsier</p>
  </div>
</a>
<a href="#" onclick="GameManager.setgameStart('Archer')">
  <img src="img/archer.jpg" alt="archer">
  <div class="">
    <h3>Archer</h3>
    <p>Archers ar fast and have high stamina and speed witch makes up for their lack in trength and health</p>
  </div>
</a>
<a href="#" onclick="GameManager.setgameStart('Druid')">
  <img src="img/druid.jpg" alt="druid">
  <div class="">
    <h3>Druid</h3>
    <p>Druid is nature's child he is strong and have few magics including Bear Pet</p>
  </div>
</a>
</div>
<div class="Actions">

</div>
<div class="Arena">

</div>
<div class="Enemy">

</div>

<a href="index.php">Back to main menu</a>
  </body>

</html>
