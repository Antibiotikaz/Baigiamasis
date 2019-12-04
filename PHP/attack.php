<?php

include 'PHP/db.php';


if (isset($_POST['attack'])) {
  $_SESSION['health'] = $_SESSION['health'] - $_SESSION['enemydamage'];
echo '<img src="img/'.strtolower($_SESSION["enemyType"]).'.jpg" ><div><h3 class="enemy-stats">'.$_SESSION["enemyType"].'</h3><p class="enemy-stats">Health:'.$_SESSION["enemyhealth"].'</p><p class="enemy-stats">Damage:'.$_SESSION["enemydamage"].'</p><p class="enemy-stats">Gold Drop: 0-100gold</p></div> ';
var_dump($_SESSION["health"]);

}


 ?>
