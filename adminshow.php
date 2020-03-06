<?php
session_start();
include_once 'checkdb.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="icon" href= "images/logo.png" type = "image/x-icon"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:lightgray" >
      <header>
    <div class="container-fluid text-center">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                    <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse_target">
                <a class="navbar-brand" href="index.html"><img class="logoimg" src="images/nav.png" style="height: 50px; width: 50px;"></a>
                <span class="navbar-text" id="nvtxt"><b>IMPERIAL BAKERY</b></span>
                <ul class="navbar-nav ml-auto">
                    <div class="btn btn-danger">
                        <li class="nav-item dropdown">
                        <a class="btn btn-danger" href="index.html">Home</a>
                        <a class="btn btn-danger" href="products.html">Our Products</a>
                        <a class="btn btn-danger" href="order.php">Order Cakes</a>
                        <a class="btn btn-danger" href="login.php"">Customer Login</a>
                        <a class="btn btn-danger" href="admin.php""> Admin</a>
                        <a class="btn btn-danger" href="about.html">About Us</a>
                        <a class="btn btn-danger" href="contact.html">Contact</a>

                        </li>
                    </div>
                    
                </ul>
            </div>
        </nav>
    </div>
    </header>
    <div id ="main-part" class="card-title text-center" style="font-size: 20px; padding-top:5%; background-color:#95a5a6; margin-top: 30px;">
        <center> 
            <h2 style="color:#34495e;">Admin Home page</h2>
            <h3> Welcome
            <?php
             echo $_SESSION['admin'];
             
            ?> </h3>
            <img src="images/user.jpeg" class="user">
           
 <br>  
<form action="adminshow.php"  class="myform" method="post">
<center>
    <input name="adminlogout" type="submit" id="Logoutbtn" value="Logout"/>
</center>

<?php

if(isset($_POST['adminlogout']))
{       
session_destroy();
header('location:admin.php');
}

?>
</form>
 </div>
<div  id ="main-pa" class="card-title text-center" style="width:600px  line-height:40px; margin-bottom:20px; margin-top:150px; background-color:#2980b9">
 <center> <h2>Users Order Records </h2></center>
<table align="center" border="2px" style="width:600px  line-height:40px; margin-bottom:20px; margin-top:20px;" >
          
                <tr>
                <th> Name </th>
                <th> Mobile no </th>
                <th> Email </th>
                <th> Cake </th>
                <th> Address </th>
                <th> Delivery Date </th>
                </tr>


<?php 
    $sql="select *  from ordercake;";

    $result = mysqli_query($con,$sql);

    $resultcheck =mysqli_num_rows($result);
    if($resultcheck > 0){

        while($row = mysqli_fetch_assoc($result)){
            
            echo "<tr>";
            echo "<td >".$row['name']."</td>";
            echo "<td>".$row['number']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['cake']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['dod']."</td>";
            echo "</tr>";

        }
    }
    ?>

</table>
</div>

    
<footer class=" page-footer font-small teal pt-4">
      <div class="text-center text-md-left">
            <div class="row">
            <div class="col-md-4 mt-md-0 mt-3">
            <h5 class="text-uppercase font-weight-bold ">Our Branches</h5>
          <ul>
              <li>Vashi</li>
              <li>Chembur</li>
              <li>Panvel</li>
              <li>Vasai</li>
              <li>Kalyan</li>
          </ul>
        
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-4 mb-md-0 mb-3">
        <h5 class="text-uppercase font-weight-bold">Main Branch</h5>
        <i>
            Visit Us at:<br>
            AIKTC<br>
            Sec 16, Khanda Gaon,<br>
            New Panvel,<br>
            Navi Mumbai-400706<br>
          
        </i>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
    <div class="col-md-4 mt-md-0 mt-3 ">
    <h5 class="text-uppercase font-weight-bold">Locate us</h5> 
    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
      <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
      <script>
      (function () 
      {
          var setting = {"height":224,"width":501,"zoom":16,"queryString":"AIKTC COLLEGE, Sector 16, Khanda Colony, Panvel, Navi Mumbai, Maharashtra, India","place_id":"ChIJefH7Njro5zsRbsXoUVCQsLs","satellite":false,"centerCoord":[19.000181955468083,73.1043535],"cid":"0xbbb0905051e8c56e","cityUrl":"/india/navi-mumbai-32471","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"57514"};
          var d = document;
          var s = d.createElement('script');
          s.src = 'https://1map.com/js/script-for-user.js?embed_id=57514';
          s.async = true;
          s.onload = function (e) {
            window.OneMap.initMap(setting)
          };
          var to = d.getElementsByTagName('script')[0];
          to.parentNode.insertBefore(s, to);
        })();
        </script>
        <a href="https://1map.com/map-embed?embed_id=57514">1map.com</a>
      </div>
        </div>
      </div>
     </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://www.imperialbakery.tk"> www.imperialbakery.tk</a>
    </div>
    </footer>

  
</body>
</html>