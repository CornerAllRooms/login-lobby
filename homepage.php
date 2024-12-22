<?php
session_start();
include("connect.php");
include("lobby.html");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lobby</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="orange.css">
</head>
<body>
<div style="text-align:left; padding:25%";>
        <p style="text-valign:top";>
      <p  style="font-size:20px; font-weight:bold;">


       Hello  <?php
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query ($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstname'].' '.$row['lastname'];
        }
       }
       ?>
        ,Welcome to the lobby.
        As our new Roomie we strive for your comfort,confidence and convenience
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>