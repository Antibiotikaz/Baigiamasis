<?php
if (isset($_POST['search'])) {
  $enemy00 = new Enemy();
  $enemy00->setEnemyValue("Goblin", 50, 25, 1, 2);
  $enemy01 = new Enemy();
  $enemy01->setEnemyValue("Troll", 100, 50, 2, 5);
  $chooseEnemy = rand(0,1);

  switch ($chooseEnemy) {
    case 0:
      $enemy = $enemy00;
      break;
    case 1:
      $enemy = $enemy01;
      break;
  }
  echo '<img src="img/'.strtolower($enemy->enemyType).'.jpg" ><div><h3 class="enemy-stats">'.$enemy->enemyType.'</h3><p class="enemy-stats">Health:'.$enemy->health.'</p><p class="enemy-stats">Damage:'.$enemy->damage.'</p><p class="enemy-stats">Gold Drop: 0-100gold</p></div> ';
  echo '<form class="" action="village.php" method="post">
    <button type="submit" name="attack">Attack</button>
  </form>';
  $_SESSION['enemyType'] = $enemy->enemyType;
  $_SESSION['enemyhealth'] = $enemy->health;
  $_SESSION['enemydamage'] = $enemy->damage;


}




?>
