<?php
require_once 'connection.php';
session_start();
 $loggedInUser = $_SESSION['loggedIn_user'];
  // var_dump($loggedInUser);
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>home page</title>
  
     
    
  </head>
  <body>
    <h2>Profile Page</h2>
    <h4>hello,youre logged in:<?= $loggedInUser['first_name'] ?> </h4>
    <h4>Name:<?= $loggedInUser['first_name'] ?> </h4>
    <h4>Building Name: <?= $loggedInUser['building_name'] ?> </h4>
    <h4>Street Address: <?= $loggedInUser['street_address'] ?> </h4>
    <h4>Phone Number: <?= $loggedInUser['phone_number'] ?> </h4>
    <h4>Email: <?= $loggedInUser['email'] ?> </h4>
   <h4>Qualification: <?= $loggedInUser['qualification'] ?> </h4>
    <h4>Hobbies: <?= $loggedInUser['Hobby'] ?> </h4>
    
    <br><br>
    <a href="change_password.php" class="float-end">Reset your password</a><br><br>
    <a href="sign-in.php">click here to sign out</a>
  </body>
  </html>
