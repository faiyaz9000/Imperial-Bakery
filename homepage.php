<?php
session_start();
require 'checkdb.php'
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#f1c40f">
    <div id ="main-part" style="background-color:#95a5a6">
        <center> 
            <h2 style="color:#34495e;"> Home page</h2>
            <h3> Welcome
            <?php
             echo $_SESSION['name'];
             
            ?> </h3>
            
            <img src="images/user.jpeg" class="user">
        </center>
        <h3  style="margin-left: 10px;" > Your order details are: </h3><br>
       <h3  style="margin-left: 10px;" > Uerrname: <?php  echo $_SESSION['name'];  ?></h3>
       <h3 style="margin-left: 10px;" > Mobile No: <?php  echo $_SESSION['number'];  ?></h3>
       <h3 style="margin-left: 10px;" > Your Email : <?php  echo $_SESSION['email'];  ?></h3>
       <h3 style="margin-left: 10px;" > Your Cake name : <?php  echo $_SESSION['cake'];  ?></h3>
       <h3 style="margin-left: 10px;" > Your Order place : <?php  echo $_SESSION['address'];  ?></h3>
       <h3 style="margin-left: 10px;" > Delivery Date : <?php  echo $_SESSION['dod'];  ?></h3>

        
<form action="homepage.php"  class="myform" method="post">
<center>
    <input  name="logout" type="submit" id="Logoutbtn" value="Log out"/>
</center>
</form>

<?php

if(isset($_POST['logout']))
{       
session_destroy();
header('location:login.php');
}

 ?>
  </div>
</body>
</html>