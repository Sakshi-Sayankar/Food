<?php
session_start();
?>

<html>

  <head>
    <title> About | Le Cafe' </title>
  </head>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
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

    <section class="aboutus" id="aboutus">

<div class="image">
   <img src="images/about-img.png" alt="">
</div>

<div class="content">
   <h3 class="title">Welcome to Le Cafe And Restaurant</h3>
   <p> Le Café is more than just a café. Playing with a fusion of Indian, Korean and British look and ambience food. We engage the customers to a wide variety of menu. Every item prepared at the cafe has its own signature recipe, as its crisp, fresh and prepared by expert chefs. The café only relies on fresh ingredients to prepare a dish, ensuring that it meets the brand's preset quality standards. </p>
   <div class="icons-container">
      <div class="icons">
         <img src="images/about-icon-1.png" alt="">
         <h3>quality food</h3>
      </div>
      <div class="icons">
         <img src="images/about-icon-2.png" alt="">
         <h3>food & drinks</h3>
      </div>
      <div class="icons">
         <img src="images/about-icon-3.png" alt="">
         <h3>expert chefs</h3>
      </div>
   </div>
</div>

</section>

<!-- about section ends -->
<style>
  .aboutus{
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap:2rem;
}

.aboutus .image{
  flex:1 1 41rem;
}

.aboutus .image img{
  width: 100%;
}

.aboutus .content{
  flex:1 1 41rem;
}

.aboutus .content .title{
  font-size: 4rem;
  color:var(--black);
}

.aboutus .content p{
  font-size: 1.7rem;
  color:var(--light-black);
  padding:1rem 0;
  line-height: 2;
}

.aboutus .content .icons-container{
  display: flex;
  flex-wrap: wrap;
  gap:2rem;
  margin-top: 3rem;
}

.aboutus .content .icons-container .icons{
  flex:1 1 16rem;
  text-align: center;
  background: var(--light-bg);
  padding:3rem 2rem;
}

.aboutus .content .icons-container .icons img{
  height: 5rem;
}

.aboutus .content .icons-container .icons h3{
  padding-top: 1rem;
  font-size: 2rem;
  color:var(--light-black);
  font-weight: normal;
}
</style>


   <div class="swiper-pagination"></div>

</div>

</section>
      </body>
</html>