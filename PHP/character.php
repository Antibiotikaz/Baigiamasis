<?php

class Player {
  public $classType;
  public $health;
  public $damage;
  public $level;
  public $gold;


  public  function setValue($classType, $health, $damage, $level, $gold) {
    $this->classType = $classType;
    $this->health = $health;
    $this->damage = $damage;
    $this->level = $level;
    $this->gold = $gold;
  }

}




 ?>
