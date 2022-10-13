<?php

session_start();

  function checkLogIn () {
    if (isset($_SESSION['users']))
          return true;
    else return false;      
 }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home||Mbare</title>
    <!-- Css file -->
   <?php
include 'css/style.php';
   ?>
    <link rel="stylesheet" href="css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- Main contaeiner start -->
<div class="main-container">
    <!-- ==== Aside Start -===== -->
    <div class="aside">
    <div class="logo">
        <a href="#"><span>M</span>bare<span style="font-size: 13px;"> Online</span></a>  
    </div>
    <div class="nav-tongler">
        <span></span>
    </div>
    <ul class="nav">
        <li><a href="index.php" class="active"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="Market/homemarket.php" class="<?php if($page=='market'){ echo 'active' ;} ?>"><i class="fa fa-search-dollar"></i> Market</a></li>
        <li><a href="Services/servicehome.php" class="<?php if($page=='service'){ echo 'active' ;} ?>"><i class="fa fa-seedling"></i> Services</a></li>
        <li><a href="Jobs/jobshome.php" class="<?php if($page=='jobs'){ echo 'active' ;} ?>"><i class="fa fa-briefcase"></i> Jobs</a></li>
        <li><a href="Anyalyse/analysehome.php" class="<?php if($page=='analyse'){ echo 'active' ;} ?>"><i class="fa fa-chart-bar"></i> Analyse</a></li>
    </ul>
   <?php if ($User=checkLogIn() === true) { ?>
    <div class="user">
        <a href="Profile/profilehome.php" class="<?php if($page=='home'){ echo 'active' ;} ?>"><i class="fa fa-user"></i> Profile</a>
    </div>
    <?php } ?>
</div>
    <!-- ==== Aside Ends -===== -->
          <!-- main content start -->
    <div class="main-content">

<!-- Home Section Start -->
<section class="home section">
<nav class="nav-section">

<div class="category"><span><i class="fa fa-list-dots " id="cate">
    <div class="category-nav" id="cates">
        <div class="heading">
            <h3>Categorys</h3> 
             
        </div>
        <p class="profile-p"> <i class="fa fa-hat-cowboy"></i> Apperel</p>  
        <p class="profile-p"> <i class="fa fa-headphones"></i> Electronics</p>  
        <p class="profile-p"><i class="fa fa-tools"></i>  Home / Garden</p>   
        <p class="profile-p">  <i class="fa fa-phone"></i> Gadgets</p>  
        <p class="profile-p">  <i class="fa fa-bowl-food"></i> Home goods</p>  
        <p class="profile-p"> <i class="fa fa-hotel"></i> Rentals</p>  
        <p class="profile-p"> <i class="fa fa-hand"></i> Hiring</p>  
        <p class="profile-p"> <i class="fa fa-file-excel"></i> Services</p>  
        <p class="profile-p"> <i class="fa fa-handshake-angle"></i> Jobs  </p> 
    </div>
</i></span></i> Category 
    <span style="margin-left:15px ;">|</span></div>
<div class="search-box">
<input type="text" class="search-txt" name="search" placeholder="What are you searching for..">
<a href="Otherfile/searchResults.php" class="search-btn">
<i class="fa fa-search"></i>
</a>
</div>
<div class="uer-signup">
    <?php
     if ($User=checkLogIn() === false) { ?>
      <div style="margin-right: -15px;">
    <a href="Otherfile/register.php"><i class="fa fa-user-circle " ></i><span> Join <span class="dev">OR</span> </span> <small class="free">.Its free</small></a>
</div>
<div>
    <a href="Otherfile/login.inc.php"><span>Signin<span class="dev">  |</span> </span> </a>
</div>
   <?php } else{?>
    <div>
    <a href="profile/profilehome.php"><span>Hi <?= $_SESSION['users']['username'] ?><span class="dev">  |</span> </span> </a>
</div>
<div>
    <a href="#"><i class="fa fa-message"></i> <small class="message">Messages <span class="dev">  |</span></small> </a>
</div>
<div>
    <a href="#"><i class="fa fa-circle-dollar-to-slot"></i> <small class="message"> Orders</small></a>
</div>
<div><small><a href="Otherfile/logout.php">logout</a></small></div>
<?php } ?>

</div>
</nav>
 <div class="main-item">
    <div class="cats">

        <div class="profile-p">Fashion</div>  
        <div class="profile-p">Electronics</div>  
        <div class="profile-p"> Food</div>  
       
        <div class="profile-p">  Gadgets</div>  
        <div class="profile-p">  Services</div>  
        <div class="profile-p">  Rentals</div>  
        <div class="profile-p">  Hiring</div>  
        <div class="profile-p">  wholesale  </div>  
         <div class="profile-p" style="background-color: #504e70;"></div>  
     </div>
    <div class="wrapper">
        <div class="box1 box">
            <h2 style="text-align: center;">Welcome On Board,Taps!</h2>
               
            <div class="item-cover-img" style="text-align: left;">
                <img src="images/home/pexels-andrea-piacquadio-3784391.jpg" alt="" style="width: 460px;height:330px">  
                  <div class="text">
                            <p>We are all about to make your shopping experiences more easy and making your offline life get going</p>
                        </div>         
            </div>
        
        </div>
        <div class="box2 box">
            <div class="heading">
                <h3>Top Sellers</h3>    
            </div>
            <div class="top-item">
               <div class="item-cover-img">
                        <img src="images/mumu (2).jpg" alt="">
                      
                    </div>  
                    <div class="info">
                        <h4>$ 56</h4>
                        <p>the best items here</p>
                        <button class="buy-btn">
                            Contact Supplier
                        </button>
                    </div>
            </div>
           
        
           
        </div>
        <div class="box box2">
            <div class="heading">
                <h3>Categorys</h3> 
                 
            </div>
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Apperel</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Consumer Electronics</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Home / Garden</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Freelance</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Gadgets</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Home goods</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Rentals</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Wholesale</p>  
            <p class="profile-p"> <i class="fa fa-arrow-alt-circle-left"></i> Jobs  </p>  
        </div>

      </div>
      <div class="heading">
<span style="width: 100%;"></span>
      </div>
<div class="wrapper-items">
    <div class="box-service-1 box"><div class="heading">
        Delivers To You <span style="width: 47%;"></span>
    </div></div>
    <div class=" box">Two</div>
    <div class="box3 box">Three</div>
    <div class="box4 box">Four</div>
    <div class="box5 box">Five</div>
    <div class="box-del box">Six</div>
    <div class="box5 box">Seven</div>
    <div class="box5 box">Eight</div>
</div>
<div class="heading">
  <span></span>
</div>
<div class="wrapper-items">
<div class=" box">One</div>
<div class=" box">Two</div>
<div class="box3 box">Three</div>
<div class="box4 box">Four</div>
<div class="box-cloth-1 box">Five</div>
<div class="box-del box">Six</div>

</div>

      <div class="heading">
      Wholesale <span></span>
    </div>
<div class="wrapper-items">
    <div class=" box">One</div>
    <div class=" box">Two</div>
    <div class="box3 box">Three</div>
    <div class="box4 box">Four</div>
    <div class="box5 box">Five</div>
    <div class="box5 box">Six</div>
    <div class="box5 box">Seven</div>
    <div class="box5 box">Eight</div>
</div>

<div class="heading">
    Apparel <span style="width: 100%;"></span>
</div>
<div class="wrapper-items">
<div class="box-cloth-1 box">One</div>
<div class="  box">
    <div class="heading">
        Markets
    </div>
</div>
<div class="box3 box">Three</div>
<div class="box4 box">Four</div>
<div class="box5 box">Five</div>
<div class="box5 box">Six</div>
<div class="box5 box">Seven</div>

</div>

<div class="heading">
    Gadgets<span ></span>
</div>
<div class="wrapper-items">
<div class=" box">One</div>
<div class=" box-service-1 box">Two</div>
<div class="box3 box">Three</div>
<div class="box4 box">Four</div>
<div class="box5 box">Five</div>


</div>
<div class="heading">
    Services . <span ></span>
</div>
<div class="wrapper-items">
<div class="   box">One</div>
<div class="box">Two</div>
<div class="box3 box">Three</div>
<div class="box4 box">Four</div>
</div>

<div class="heading">
    Trends<span style="width: 100%;" ></span>
</div>
<div class="wrapper">
    <div class="box1 box">One</div>
    <div class="box2 box">Two</div>

  </div>

    
 </div>
 <footer>
<a href="#"> About</a> <a href="#">Support</a> <a href="#">2022</a>
<p> <a href="#">Community</a> <a href="#">By Trapps</a></p>

 </footer>
</section>
<!-- Home Section Ends -->
  
    </div>
<!-- main content ends -->
</div>
    <!-- Main contaeiner Ends -->
    <!-- js Files -->
    <script src="js/scriptindex.js"></script>
</body>
</html>