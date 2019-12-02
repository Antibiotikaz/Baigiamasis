<?php
session_start();
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
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
  <a class="navbar-brand" href="index.php">Main menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="game.php">Character <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="village.php">Village</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forum.php">Forum</a>
      </li>

    </ul>
  </div>
</nav>

      </div>
    </div>

  </body>

</html>
