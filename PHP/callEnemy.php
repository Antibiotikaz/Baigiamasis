<?php
if (isset($_POST['search'])) {
  $enemy00 = new Enemy();
  $enemy00->setEnemyValue("Goblin", 50, 25, 1, rand(0,15), rand(5,20));
  $enemy01 = new Enemy();
  $enemy01->setEnemyValue("Troll", 100, 50, 2, rand(10,45),rand(10,30));
  $chooseEnemy = rand(0,1);

  switch ($chooseEnemy) {
    case 0:
      $enemy = $enemy00;
      break;
    case 1:
      $enemy = $enemy01;
      break;
  }
  echo '<img class="enemy-avatar" src="img/'.strtolower($enemy->enemyType).'.jpg" ><div><h3 class="enemy-stats">'.$enemy->enemyType.'</h3><p class="enemy-stats">Health <img src="img/health.png" alt="">'.$enemy->health.'</p><p class="enemy-stats">Damage <img src="img/sword.png" alt="">'.$enemy->damage.'</p><p class="enemy-stats">Gold Drop <img src="img/gold.png" alt=""> 0-100gold</p></div> ';
  $_SESSION['enemyType'] = $enemy->enemyType;
  $_SESSION['enemyhealth'] = $enemy->health;
  $_SESSION['enemydamage'] = $enemy->damage;
  $_SESSION['goldDrop'] = $enemy->goldDrop;
  $_SESSION['enemyExp'] = $enemy->enemyExp;


}




?>
