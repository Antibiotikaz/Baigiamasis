<?php

include 'PHP/db.php';


if (isset($_POST['attack'])) {
if ($_SESSION['health'] <= 0) {
  $_SESSION['health'] = 0;
echo '<strong class="battlestasts">';
  echo "You are dead champ! Go back home!";
echo '</strong>';
  return;
}
  if ($_SESSION['health'] > 0) {
    while ($_SESSION['enemyhealth'] > 0) {
      $_SESSION['enemyhealth'] = $_SESSION['enemyhealth'] - $_SESSION['damage'];
      echo '<p class="battlestasts">';
      echo "You damaged enemy for"." ".$_SESSION['damage'].""."damage!<br>";
      echo "</p>";

      if ($_SESSION['enemyhealth'] <= 0) {
        $_SESSION['exp'] =   $_SESSION['exp'] + 50;
        $_SESSION['gold'] =   $_SESSION['gold'] + 15;
        echo '<strong class="battlestasts">';
        echo "You gained + 50 EXP + 15gold";
        echo '</strong>';
        echo "<br>";
        echo '<strong class="battlestasts">';
        echo "You won champ!";
        echo '</strong>';
        echo "<br>";
        if ($_SESSION['exp'] >= 100) {
          $_SESSION['level'] ++;
          $_SESSION['exp'] = 0;
          echo '<strong class="battlestasts">';
          echo "LEVEL UP!"." ".$_SESSION['level'];
          echo '</strong>';
        }
        echo '<img src="img/'.strtolower($_SESSION["enemyType"]).'.jpg" ><div><h3 class="enemy-stats">'.$_SESSION["enemyType"].'</h3><p class="enemy-stats">Health:0</p><p class="enemy-stats">Damage:'.$_SESSION["enemydamage"].'</p><p class="enemy-stats">Gold Drop: 0-100gold</p></div> ';

      }
    }


  }


$_SESSION['health'] = $_SESSION['health'] -$_SESSION['enemydamage'];
$sql = "UPDATE player SET health = ?, exp =?,  gold = ?, level =? WHERE id=? ";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "ddddd", $_SESSION['health'],$_SESSION['exp'] ,$_SESSION['gold'], $_SESSION['level'],$_SESSION['usernameID'] );
  mysqli_stmt_execute($stmt);
  exit();



}

}


 ?>
