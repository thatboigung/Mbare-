<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home||Mbare</title>
    <!-- Css file -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- Main contaeiner start -->
<div class="main-container">
    <!-- ==== Aside Start -===== -->
    <?php 
    $page ='profile';
include_once '../shared/aside.php';
?>
    <!-- ==== Aside Ends -===== -->
          <!-- main content start -->
    <div class="main-content">

<!-- Home Section Start -->
<section class="home section">
<?php include_once '../shared/nav.php';?>
 <div class="main-item">
   
    <div class="wrapper">
        <div class="box1 box" style="display:grid;grid-template-columns: 50px auto;column-gap: 10px;width: 100%;">
            <div class="profiles" style="margin-top: 20px;">
                 
            <p class="icons"><img src="../images/icons/icons8-facebook-48.png"  alt="facebook"> 
            
                </p>
                <p class="icons"><img src="../images/icons/icons8-instagram-48.png"  alt="facebook"> 
                    
                     </p>
                    <p class="icons"><img src="../images/icons/icons8-twitter-48.png"  alt="facebook"> 
                
                        </p>
                        <p class="icons"><img src="../images/icons/icons8-whatsapp-48.png"  alt="facebook"> 
                           
                             </p> 
                             <p class="icons"><img src="../images/icons/icons8-google-48.png"  alt="facebook"> 
                                
                                  </p>  
                                  
                        <button class="create-listing-btn" style="width: 200px;"> Advertise On yor accounts</button>         
            </div>
            <div class="about-prof">
<h3>About</h3>
<p class="welcome" style="width:450px">We are all about to make your shopping experiences more easy 
    and making your offline life get going</p>
    <span><a href="#">Edit</a></span>
 
            </div>
        
                                        
        </div>
        <div class="box2 box">
            <p><small>Membership username: Taps00320123_0932</small></p>
            <p class="profile-p"> Hi, There Taps!</p>
            <div style="display: flex;">
                <img src="../images/NicePng_user-png_730154.png" alt="prof-imge" class="profile-img">
                <div class="change-det">
                   <p> Update Your profile</p> 
                   <p><a href="#">Change Photo</a></p>
                   <p><a href="#">Change Email</a></p>
                   <p><a href="#">Chnage Phone</a></p>
                </div>
                
                
            </div>
            <p class="profile-p" style="padding: 12px;">Hope Your day be Going well!</p>
            <p>mapfumotapuwa18@gmail.com</p>
            <p>0718553963</p>
            <p>Sold           :12</p>
            <button class="create-listing-btn" id="create-listing"> Create Listing</button>
            <button class="create-listing-btn" id="create-listing"> Manage Listings</button>
            <div class="create-type" id="create-type">
                <h3></h3>
                <p><a href="../CreateListing/saleitem.php">Sell Item</a></p>
                <p><a href="../CreateListing/createService.php">Offer Service</a></p>
                <p><a href="../CreateListing/createjob.php">Hire Someone</a></p>
                <h3></h3>
            </div>
   
        </div>

      </div>
      <div class="heading">
<span style="width: 100%;"></span>
      </div>
      <div class="heading">
       Your Listings <span style="width: 47%;"></span>
    </div>
<div class="wrapper-items">
    <div class=" box">
</div>
    <div class=" box">Two</div>
    <div class=" box-service-1 box3 box">Three</div>
    <div class="box4 box">Four</div>
    <div class="box5 box">Five</div>
    <div class="box-del box">Six</div>
    <div class="box5 box">Seven</div>
    <div class="box5 box">Eight</div>
        <div class=" box">One</div>
    <div class=" box">Two</div>
    <div class="box3 box">Three</div>
    <div class="box4 box">Four</div>
    <div class="box5 box">Five</div>
    <div class="box5 box">Six</div>
    <div class="box5 box">Seven</div>
    <div class="box5 box">Eight</div>
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
    <script src="../js/script.js"></script>
</body>
</html>