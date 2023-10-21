<?php
session_start();
?>
<html>
  <head>
    <title> Home | Le Cafe And Restaurant' </title>
  </head>
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <link rel="stylesheet"  href ="css/index.css">
  <link rel="stylesheet" type = "text/css" href="css/aboutus.css">
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };
      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Le Cafe'</a>
        </div>
        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>
<?php
if(isset($_SESSION['login_user1'])){
?>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {
  ?>
<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>  
            </ul>
            </li>
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

   <!-- <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/LogoImage.jpg"></div>
        <div class="col-xs-5 line"><hr></div>
    </div>    -->
    <section class="Home" id="Home">
      <div class="row">
        <div class="content">
          <h3> Fresh Coffee in the morning</h3>
          <a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a>
        </div>
        <div class="images">
          <img src="images/home-img-1.png" class="main-home-image">
        </div>

      </div>
     <!-- <div class="image-slider">
        <img src="images/home-img-1.png" alt="">
        <img src="images/home-img-2.png" alt="">
        <img src="images/home-img-3.png" alt="">
      </div>-->
    </section>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@200&display=swap');

      .Home{
  min-height: 100vh;
  padding-top: 12rem;
  background: url("./images/10.jpg") no-repeat;
  background-position: center;
  background-size: cover;
}
.Home .row{
  display: flex;
  align-items: right;
  flex-wrap: wrap;
  gap: 1.5rem;
}
.Home .row .content{
  flex:  1 1 42rem;
  padding-top: 10rem;
  text-align: center;
}
.Home .row .images img{
  height: 35rem;
  animation: float 4s linear infinite;
}
@keyframes float {
  0%, 100%{
    transform: translateY(0rem);
  }
  50%{
    transform: translateY(-7rem);
  }
}
.Home .row .content h3 {
  font-size: 6.5rem;
  text-transform: uppercase;
  color:#fcf8e3;
  font-family: popins;
}
.Home .image-slider img {
  height: 9rem;
  margin: 0.5rem;
  cursor: pointer;
  margin-top: 5rem;
}
.Home .image-slider img:hover {
  transform: translateY(-2rem);
}
    </style>
    <nav>
      <a href="#Home">Home</a>
    </nav>  
</body>
</html>