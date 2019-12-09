<?php
include_once 'PHP/login.php';


 ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- Required meta tags-->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="Colorlib Templates">
     <meta name="author" content="Colorlib">
     <meta name="keywords" content="Colorlib Templates">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="menu.css">
     <<link href="https://fonts.googleapis.com/css?family=Fondamento&display=swap" rel="stylesheet">
     <!-- Jquery -->
     <script
       src="https://code.jquery.com/jquery-3.4.1.min.js"
       integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
       crossorigin="anonymous"></script>
     <!-- Title Page-->
     <title></title>

     <!-- Icons font CSS-->
     <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
     <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
     <!-- Font special for pages-->
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Vendor CSS-->
     <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

     <!-- Main CSS-->
     <link href="CSS/form.css" rel="stylesheet" media="all">
 </head>

 <body class="game-body">
   <div class="container text-center">
     <div class="row ">
       <div class="col-12">
          <h1 class="index-header">Heroes Online</h1>
       </div>

     </div>

   </div>

     <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
         <div class="wrapper wrapper--w780">
             <div class="card card-3">
                 <div class="card-heading"></div>
                 <div class="card-body">
                     <h2 class="title">Login Info</h2>
                     <form action="index.php" method="POST">
                         <div class="input-group">
                             <input class="input--style-3" type="text" placeholder="username" name="username">
                         </div>
                         <div class="input-group">
                             <input class="input--style-3" type="password" placeholder="password" name="password">
                         </div>
                         <div class="p-t-10">
                             <button class="btn btn--pill btn--green" type="submit" name="login">Login</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>

     <!-- Jquery JS-->
     <script src="vendor/jquery/jquery.min.js"></script>
     <!-- Vendor JS-->
     <script src="vendor/select2/select2.min.js"></script>
     <script src="vendor/datepicker/moment.min.js"></script>
     <script src="vendor/datepicker/daterangepicker.js"></script>

     <!-- Main JS-->
     <script src="scripts/global.js"></script>
     <!-- Mano asmeninis testas su AJAX -->

     <div class="container text-center">
       <form class="" action="index.php" method="post">
         <button id="reg" type="submit" name="reg" class="btn btn-primary"><a class="reg-btn" href="registration.php">Register</a></button>
       </form>

     </div>




 </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

 </html>
