<?php
include 'websitestyle.php';


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
    <!-- <script type="text/javascript">
      $(document).ready(function(){
        $("#button").click(function(){
          $("GoldBar").load("PHP/testas.php");
        });
      });
    </script> -->
  </head>
  <body>

    <strong>  Marketplace</strong>
    <div id="GoldBar">
      <strong>  Gold <?php echo $_SESSION['gold']; ?></strong>
    </div>
<!-- <p id="response" class="battlestasts">1</p> -->
    <br>
  <img src="img/market.jpg" alt="" class="market-img">
    <form class="" action="market.php" method="post">
      <select class="" name="market">
        <option value="healthS">Health Potion Small(25Gold)</option>
        <option value="healthL">Health Potion Large(75Gold)</option>
      </select>
      <button id="button-buy" name="buy">Buy</button>
    </form>

    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
<script>
  jQuery(document).ready(function(){
    jQuery('#button-buy').click(function(){

      let data = {
        market: jQuery('select[name="market"]').val()
      };

      jQuery.post('PHP/testas.php', data, function(response){
            jQuery("GoldBar").load("PHP/testas.php");

      });
    });
  });
</script>
<?php include 'PHP/market-health.php' ?>


  </body>

</html>
