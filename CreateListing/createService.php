<!DOCTYPE html>
<html lang="en">
<?php
include '../shared/head.php';
?>
<body>
    <!-- Main contaeiner start -->
<div class="main-container">
    <!-- ==== Aside Start -===== -->
    <?php include_once '../shared/aside.php';?>
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
    <h3>Make a Job Today</h3>
    <div >
        <input type="text" name="title" id="title" placeholder="TITLE" style="width: 160px;"> <input type="number" name="min-price" id="quantity" class="number" placeholder="$ min-Price">
    </div>
    <div>
        <select name="catefory" id="category">
            <option value="cat">Select Category</option>
            <option value="apperal">Rental</option>
            <option value="Electronics">Entertainment</option>
            
            <option value="Transport">Transportation</option>
            <option value="repair">Repair</option>
            <option value="HS">House Keeping</option>
            <option value="other">Other</option>
     
        </select>
        <input type="number" name="max-price" id="price" class="number"  placeholder="$ max-Price">
    </div>
    <div>
        <div style="margin-bottom: 0;">
          <a href="#">#Location</a>  
        </div>
        <div style="display: grid;margin-left:10px ;margin-bottom:0 ;">
            <small><i class="fa fa-handshake"></i> On Spot</small>
            <div style="margin-bottom: 0;">
                 <div style="margin-bottom: 0;margin-right:10px ;">
                <label for="shipping">
                    Yes
                </label><input type="radio" name="shipping" id="shipping">
            </div>
            <div style="margin-bottom: 0;">
<label for="shipping">No</label>
                 <input type="radio" name="shipping" id="shipping">
                </div>
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