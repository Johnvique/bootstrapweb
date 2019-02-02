<!DOCTYPE html>
<html>
<head>
  <title>YFA</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
  <style type="text/css">
    body{
      background-color: #CCCCCC;
    }
.nav-link{
  color: #000000;
}
  </style>
</head>
<body>
  <?php
include 'nav.php';
  ?>

<div class="container" style="margin-top: 1em">
   <div class="row">
    <div class="col-md-6">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgs/xy.jpg" alt="First slide" style="height: 360px">
      <div class="carousel-caption d-none d-md-block">
    <h4></h4>
    <div class="card text-center"><p style="color: black"><i><strong>{Welcome to YFA!!}</strong></i></p></div>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/d.jpg" alt="Second slide"  style="height: 360px">
      <div class="carousel-caption d-none d-md-block">
    <h4></h4>
    <div class="card text-center"><p style="color: blue"><strong><i>...YFA embraces good agricultural practices...</i></strong></p></div>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imgs/MM.jpg" alt="Third slide"  style="height: 360px">
      <div class="carousel-caption d-none d-md-block">
    <h4></h4>
    <div class="card text-center"><p style="color: red"><i><strong>Improvised Irrigation System at YFAcom.</strong></i></p></div>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
     </div>
  </div>
    <div class="col-md-6">
        <div class="row">
          <div class="col-md-1">
            
          </div>
          <div class="col-md-10">
            <div class="card">
              <div class="card-header text-center text-success bg-default">
                <h3><strong><i>SIGN IN</i></strong></h3></div>
                <div class="card-body">
                  <form method="post" action="">
                <div class="form-group">
                  <label for="user" >Username:</label>
                  <input type="text" class="form-control" name="uname" id="user" placeholder="...Username" required="">
                </div>
                <div class="form-group">
                  <label for="pass" >Password:</label>
                  <input type="password" class="form-control" name="pword" id="pass" placeholder="...Password" required="">
                </div>
                <button type="submit" class="btn btn-success">Login</button>
                <br>
                <p class="message">You are not a member? <a href="Register.php">Register</a></p>
            </form>
                </div>
            </div>
          </div>
          <div class="col-md-1">
            
          </div>
        </div>
      </div>




<footer class="fixed-bottom"  style="background-color: #009834;margin-top: 10px;">
  <div class="row">
    <div class="col-md-4">
      <div class="container">
        <h5 style="color: #FFFFFF"><u>Social</u></h5>
        <li class="fa fa-facebook">
            <a href="https://YFA-OYUGIS/" class="text-blue">
            <span style="color: blue">Facebook</span>
            </a>
          </li>
          <li class="fa fa-twitter">
            <a href="https:///YFA-OYUGIS/" class="text-blue">
            <span style="color: blue">Twitter</span>
            </a>
          </li>
          <li class="fa fa-instagram">
            <a href="https://YFA-OYUGIS/" class="text-blue">
            <span style="color: blue">Gmail</span>
            </a>
          </li>


      </div>
      
    </div>

    <div class="col-md-4">
      <div class="container">
       <h5 style="color: #FFFFFF"><u>Important</u></h5>
         <li><a href="About us.html"><span style="color: #000000">About Us</a></li>
        <li><a href="Services.html"><span style="color: #000000">Services</a></li>
        <li><a href="Membership.html"><span style="color: #000000">Membership</a></li>
      </div>
      
    </div>

    <div class="col-md-4">
      <div class="container" style="margin-left: 7em">
        <h5 style="color: #FFFFFF"><u>Terms</u></h5>
        <li><a href="conditions.html"><span style="color: #000000">Conditions</span></a></li>
        <li><a href="FAQs.html"><span style="color: #000000">FAQs</span></a></li>
        <li><a href="silc_policy.html"><span style="color: #000000">SILC policy</span></a></li>
      </div>
      
    </div>
  </div>
<hr style="margin: 0px;padding: 0px">
<div class="copy-right text-center"style="background-color:#006E4B;">
  YFA| &copy;2016-2018 | All Rights Reserved
</div>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
</body>
</html>