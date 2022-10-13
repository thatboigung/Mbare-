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

<p style="color:#888;">cover photo</p>
<div class="cover-make">
<button><i class="fa fa-hamburger"></i> Add cover Photo</button>
</div>
<div class="details">
    <h3>Hire someone</h3>
    <div >
        <input type="text" name="title" id="title" placeholder="TITLE" style="width: 300px;"> 
    </div>
    <div>
        <select name="catefory" id="category" style="width: 300px;">
            <option value="cat">Select Category</option>
            <option value="apperal">Accounting</option>
            <option value="Electronics">Advertising&Marketting</option>
            <option value="Home/Garden">Sales&Retail</option>
            <option value="Transport">Business Operations</option>
            <option value="repair">Man-Power</option>
            <option value="HS">Labour</option>
            <option value="other">Other</option>
     
        </select>
        
    </div>
    <div>
        <div style="margin-bottom: 0;">
          <a href="#">#Location</a>  
        </div>
        <div style="display: grid;margin-left:10px ;margin-bottom:0 ;">
          <div style="margin-bottom: 0;margin-right:10px ;">
                <label for="shipping">
                    <i class="fa fa-briefcase"></i> Full Time
                </label><input type="radio" name="shipping" id="shipping">
            </div>
                  <div style="margin-bottom: 0;">
<label for="shipping">
    <i class="fa fa-handshake-simple"></i> Contract
</label>
                 <input type="radio" name="shipping" id="shipping">
                </div>
       
        </div>
    </div>
    <div >
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Description"></textarea>
    </div>
    <div>
        <button class="create-listing-btn" style="width: 100%;">
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