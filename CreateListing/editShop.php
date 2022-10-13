<!DOCTYPE html>
<html lang="en">
<?php
include '../shared/head.php';
?>
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
    <?php include_once '../shared/aside.php';?>
    <div class="user">
        <a href="../Profile/profilehome.html"><i class="fa fa-user"></i> Profile</a>
    </div>
    
</div>
    <!-- ==== Aside Ends -===== -->
          <!-- main content start -->
    <div class="main-content">

<!-- Home Section Start -->
<section class="home section">

 <div class="make-form">
    <form action="#">

<p style="color:#888;">Edit Business Site</p>

<div class="details">
   
    <div >
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Describe your busienss..."></textarea>
    </div>
    <p style="color:#888;">Location</p>
    <div>
        <input type="text" name="location" placeholder="City">
    </div>
    <div>
        <input type="text" name="street_name" placeholder="street name">
    </div>
    <p style="color:#888;">...</p>

   
    <div>
        <button class="create-listing-btn" style="width: 100%;" name="done">
            Done
        </button>
    </div>

</div>


    </form>
</div>

</section>
<!-- Home Section Ends -->
  
    </div>
<!-- main content ends -->
<footer>
    <a href="#"> About</a> <a href="#">Support</a> <a href="#">2022</a>
    <p> <a href="#">Community</a> <a href="#">By Trapps</a></p>
    
     </footer>
</div>
    <!-- Main contaeiner Ends -->
    <!-- js Files -->
    <script src="js/script.js"></script>
</body>
</html>