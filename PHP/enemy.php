<?php
$enemy;


class Enemy {
  public $enemyType;
  public $health;
  public $damage;
  public $level;
  public $goldDrop;


  public  function setEnemyValue($enemyType, $health, $damage, $level, $goldDrop) {
    $this->enemyType = $enemyType;
    $this->health = $health;
    $this->damage = $damage;
    $this->level = $level;
    $this->goldDrop = $goldDrop;
  }

}
 ?>
