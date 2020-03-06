    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order | Imperial Bakery</title>
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
<body>
  <div class="order">
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

  <div class="order" class="colorbody container-fluid">
    <br>
    
  <div class="row">
      <div class="col-sm-3">
        <div class="card-group" id="cardor">
      <div class="card">
        <div class="view overlay">
          <img class="card-img-top" src="images/order1.jpg" alt="Card image cap">
          
        </div>
        <div class="card-body">
      <h5 class="card-title text-center" style="font-size: 20px;"><b>Dutch Galaxy Cake</b></h5>
          <p class="card-text"> This has a light, springy cocoa sponge with a chocolate dairy-free buttercream icing. To make this cake extra special, a personalised piped message, egg-free sprinkles and sugar decorations can be added to the cake.</p>
        </div>
        </div>
        </div>
      </div>
      
      <div class="col-sm-6 form-body">
          <div class="form-header">
            <br>
              <h2 class="text-center"><b>Order your Cakes</b></h2>
              
          </div>

          <form action="order.php" name="form"  method="post" class="contact-form">

              <div class="form-group row">
                  <label for="name" class="col-sm-3 col-form-label"><b>Name</b></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control user-input" name="name" placeholder="Name" required>
                  </div>
              </div>

              <div class="form-group row">
                  <label for="number" class="col-sm-3 col-form-label"><b>Mobile</b></label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control user-input" name="number" placeholder="Mobile Number" required>
                  </div>
              </div>


              <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label"><b>Email</b></label>
                  <div class="col-sm-9">
                      <input type="email" class="form-control user-input" name="email" placeholder="Email Id" required>
                          
                  </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label"><b>Address</b></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control user-input" name="address" placeholder="Address" required>
                </div>
            </div>

              <div class="form-group row">
                  <label for="cake" class="col-sm-3 col-form-label"><b>Order Cake</b></label>
                  <div class="col-sm-9">
                      <select class="form-control user-input" name="cake" id="cake" required>
                          <option value="" disabled selected>Choose a cake</option>
                          <option>Dutch Truffle Cake - Rs 800</option>
                          <option>Chocolate chips Cake - Rs 800</option>
                          <option>Chocolate oreo Cake Rs - 800</option>
                          <option>Choco Creme Wonder Cake - Rs 800</option>
                          <option>Rainbow-Pie Cake - Rs 500</option>
                          <option>Superheroes Cake - Rs 500</option>
                          <option>Custom Photo Cake - Rs 500</option>
                          <option>Blueberry Cheese Cake - Rs 500</option>
                          <option>Chocolate Fudge Cake - Rs 500</option>
                          <option>Choco-Icecream Cake - Rs 500</option>
                          <option>Choco Fuse Cake - Rs 500</option>
                          <option>Hazelnut Cheese Cake - Rs 800</option>
                          <option>Strawberry Cake - Rs 350</option>
                          <option>Mixed fruit Cake - Rs 350</option>
                          <option>Plain Hazelnut Cake - Rs 350</option>
                          <option>Coffee Walnut Cake - Rs 350</option>

                      </select>
                  </div>
              </div>

              <div class="form-group row">
                <label for="quantity" class="col-sm-3 col-form-label"><b>Password</b></label>
                <div class="col-sm-9">
                    <input type="password" class="form-control user-input" name="password" placeholder="Enter your password" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="quantity" class="col-sm-3 col-form-label"><b>Confirm Password</b></label>
                <div class="col-sm-9">
                    <input type="password" class="form-control user-input" name="cpassword" placeholder="Enter your confirm password" required>
                </div>
            </div>

              <div class="form-group row">
                <label for="dob" class="col-sm-3 col-form-label"><b>Delivery</b></label>
                <div class="col-sm-9">
                    <input type="date" class="form-control user-input" name="dod" id="dod" required>
                </div>
            </div> 

              <div class="place-btn">
                  <input type="submit" class="btn btn-lg btn-block btn-primary" name="place-btn"  value="Place your order">
              </div>
              <br>
           <?php
session_start();
require 'checkdb.php';

     if(isset($_POST['place-btn']))
     {
        //  echo '<script type="text/javascript"> alert("Sign up button is click")</script>';
        $username = $_POST['name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $cake = $_POST['cake'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $delivery = $_POST['dod'];

        if($password===$cpassword)
        {
            $query = "Select * from ordercake where email='$email'";
            $query_run= mysqli_query($con,$query);
            
            if(mysqli_num_rows($query_run)>0)
            {
                //for same username
          echo '<script type="text/javascript"> alert("Same username exists. try another name")</script>';
                
            }
            else
            {
             $query = "insert into ordercake values('$username','$number','$email','$address','$cake','$password','$delivery')";
             $query_run = mysqli_query($con,$query);

            if($query_run)
            {
          echo '<script type="text/javascript"> alert("Thankyou, You are successfully registered and your order is placed...")</script>';
                
            }
            else
            {
          echo '<script type="text/javascript"> alert("Error")</script>';
              }
                        
            }


        }
        else
        {
            echo '<script type="text/javascript"> alert("Please enter correct credentials")    </script>';
        }
     }

?>


          </form>
      </div>
      <div class="col-sm-3">
          <div class="card-group" id="cardor">
        <div class="card">
          <div class="view overlay">
            <img class="card-img-top" src="images/order2.jpeg" alt="Card image cap">
            
          </div>
          <div class="card-body">
        <h5 class="card-title text-center" style="font-size: 20px;"><b>Vegan Chocolate Layer Cake</b></h5>
            <p class="card-text">A great alternative to our regular chocolate cake, our vegan chocolate cakes have quickly become popular with both our vegan and non-vegan customers.</p>
          </div>
          </div>
          </div>
        </div>
  </div>
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
              Navi Mumbai-400706
              
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
    </div>
  </body>
  </html>