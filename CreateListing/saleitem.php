<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeJobs||Mbare</title>
    <!-- Css file -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skins/color-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
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
    <h3>Make Your Sale Today</h3>
    <div >
        <input type="text" name="title" id="title" placeholder="TITLE" style="width: 160px;"> <input type="number" name="quantity" id="quantity" class="number" placeholder="quantity">
    </div>
    <div>
        <select name="catefory" id="category">
            <option value="cat">Select Category</option>
            <option value="apperal">Fashion</option>
            <option value="Electronics">Electronic</option>
            <option value="Home/Garden">Home&Garden</option>
            <option value="Gadgets">Tech</option>
            <option value="Housing">Housing</option>
            <option value="Cosmetics">Health&Beauty</option>
            <option value="Food">Grocery</option>
            <option value="Butchery">Butchery</option>
            <option value="Gaming">Gaming Cosoles</option>
        </select>
        <input type="number" name="price" id="price" class="number"  placeholder="$ Price">
    </div>
    <div>
        <div style="margin-bottom: 0;">
          <a href="#">#Location</a>  
        </div>
        <div style="display: grid;margin-left:10px ;margin-bottom:0 ;">
            <small><i class="fa fa-ship"></i> Shipping</small>
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