<?php
include 'PHP/db.php';
if (isset($_POST['buy'])) {
  if ($_SESSION['gold'] <= 0) {
    echo '<strong class="battlestasts">';
      echo "Insufficient Funds! Need more gold hero";
    echo "</strong>";
    $_SESSION['gold'] = 0;
    return;
  }
  switch ($_POST['market']) {
    case 'healthS':
    if ($_SESSION['gold'] < 25) {
      echo '<strong class="battlestasts">';
        echo "Insufficient Funds! Need more gold hero";
      echo "</strong>";
      return;
    }
    $_SESSION['health'] = $_SESSION['health'] +50;
    $_SESSION['gold'] = $_SESSION['gold'] -25;
    echo '<strong class="battlestasts">';
      echo "You just got small health potion and restored 50HP!";
    echo "</strong>";
      break;
      case 'healthL':
      if ($_SESSION['gold'] < 75) {
        echo '<strong class="battlestasts">';
          echo "Insufficient Funds! Need more gold hero";
        echo "</strong>";
        return;
      }
      $_SESSION['health'] = $_SESSION['health'] +150;
      $_SESSION['gold'] = $_SESSION['gold'] -75;
        echo '<strong class="battlestasts">';
          echo "You just got large health potion and restored 150HP!";
        echo "</strong>";
        break;


  }
  $_SESSION['gold'] = 0;
  $sql = "UPDATE player SET health = ?, gold = ? WHERE id=? ";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "ddd", $_SESSION['health'],$_SESSION['gold'],$_SESSION['usernameID'] );
    mysqli_stmt_execute($stmt);
    exit();



  }
}


 ?>
