<?php
include 'websitestyle.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <strong>  Marketplace</strong>
    <strong>  Gold <?php echo $_SESSION['gold']; ?></strong>
    <br>
  <img src="img/market.jpg" alt="" class="market-img">
    <form class="" action="market.php" method="post">
      <select class="" name="market">
        <option value="healthS">Health Potion Small(25Gold)</option>
        <option value="healthL">Health Potion Large(75Gold)</option>
      </select>
      <button type="submit" name="buy">Buy</button>
    </form>
<?php include 'PHP/market-health.php'; ?>
  </body>
</html>
