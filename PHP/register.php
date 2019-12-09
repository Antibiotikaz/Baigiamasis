
<?php
//REGISTER
if (isset($_POST['register'])) {
  require 'PHP/db.php';


  $username = $_POST['username'];
  $password = $_POST['password'];
  $class = $_POST['class'];


if (empty($username) || empty($password)) {
header("Location: registration.php?error=emptyfields%user=".$username);
exit();
}  else {
$sql = "SELECT username FROM player WHERE username=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: registration.php?error=sqlerror");
  exit();
} else {
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultCheck = mysqli_stmt_num_rows($stmt);
  if ($resultCheck > 0) {
    header("Location: registration.php?error=usertaken");
    exit();
  }
  else {
    $sql = "INSERT INTO player (username, password, class, level, gold, health, damage, exp) VALUES (?, ?, ?, 1, 10, 100, 5, 0)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: registration.php?error=sqlerror");
      exit();
    } else {
      $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
      mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPwd, $class);
      mysqli_stmt_execute($stmt);
      header("Location: index.php?register=succes");
      exit();
    }
  }
}
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
}




 ?>
