<?php

include 'PHP/db.php';


if (isset($_POST['attack'])) {
$_SESSION['health'] = $_SESSION['health'] -$_SESSION['enemydamage'];
$sql = "UPDATE player SET health = ? WHERE id=? ";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "dd", $_SESSION['health'], $_SESSION['usernameID']);
  mysqli_stmt_execute($stmt);
  exit();
echo '<img src="img/'.strtolower($_SESSION["enemyType"]).'.jpg" ><div><h3 class="enemy-stats">'.$_SESSION["enemyType"].'</h3><p class="enemy-stats">Health:'.$_SESSION["enemyhealth"].'</p><p class="enemy-stats">Damage:'.$_SESSION["enemydamage"].'</p><p class="enemy-stats">Gold Drop: 0-100gold</p></div> ';
var_dump($_SESSION['health']);


}
}


 ?>
