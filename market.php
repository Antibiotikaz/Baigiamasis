<?php
include 'websitestyle.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <title></title>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#bbz").click(function(){
          $("test").load("PHP/testas.php");
        });
      });
    </script>
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
      <button  type="submit" name="buy">Buy</button>
    </form>

<div id="test">
  <p>Test text</p>
</div>

<button id="bbz" type="button" name="button">Test</button>

<?php include 'PHP/market-health.php'; ?>
  </body>

</html>
