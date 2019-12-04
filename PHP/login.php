<form class="" action="index.php" method="post">
  <label for="">Username</label>
  <input type="text" name="username" value="" required>
  <br>
  <label for="">Password</label>
  <input type="password" name="password" value="" required>
  <br>
  <button type="submit" name="login">Login</button>

</form>


<?php

if (isset($_POST['login'])) {
 require 'PHP/db.php';
 $username = $_POST['username'];
 $password = $_POST['password'];

if (empty($username) ||empty ($password)) {
  header("Location: index.php?error=emptyfield");
  exit();
}
else {
  $sql = "SELECT * FROM player WHERE username=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: index.php?error=sqlerror");
    exit();
  }
  else
   {
  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  if ($row = mysqli_fetch_assoc($result) ) {
    $passwordCheck = password_verify($password, $row['password']);
    if ($passwordCheck == false) {
      header("Location: index.php?error=wrongpassword");
      exit();
    }
    elseif ($passwordCheck == true) {
        session_start();
        $_SESSION['usernameID'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['gold'] = $row['gold'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['exp'] = $row['exp'];
        $_SESSION['class'] = $row['class'];
        $_SESSION['health'] = $row['health'];
        $_SESSION['damage'] = $row['damage'];
        header("Location: game.php?login=succes");
        exit();
    }else {
      header("Location: index.php?error=wrongpassword");
      exit();
    }
  }
   else
  {
    header("Location: index.php?error=noUser");
    exit();
  }

  }
}
}

 ?>
