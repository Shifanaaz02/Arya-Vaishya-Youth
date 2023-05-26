<?php
session_start();
include_once 'db.php';
if (isset($_SESSION['AVID'])) {
  if (isset($_POST['Order_type'])) {
    $Order_type = $_POST['Order_type'];
    $mobile = $_POST['mobile'];
    $Address = $_POST['Address'];
    $Order_date = $_POST['Order_date'];
    $city = $_POST['city'];
    $Order_AVID = $_SESSION['AVID'];
    $sql = "INSERT INTO `orders` (`Order_type`, `mobile`, `Address`, `Order_date`, `city`, `Order_AVID`, `Status`) VALUES ('$Order_type', '$mobile', '$Address', '$Order_date', '$city', '$Order_AVID', 'Pending');";

    // Execute the query
    if ($conn->query($sql) == true) {
      // echo "Successfully inserted";

      // Flag for successful insertion
      echo "<script> alert('Submitted  Successfully...!')
          </script>";
    } else {
      echo "ERROR: $sql <br> $conn->error";
    }

    // Close the database connection
    $conn->close();
  }
}
else{
  echo "<script> alert('Do Login first...!')
        </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Photo Order</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: 'Poppins',sans-serif;
}
.reg{
 display: flex;
 justify-content: center;
 align-items: center;
 padding: 10px;
  background: url(assets/img/reg.back.jpg); /*linear-gradient(135deg, #fd3402e3, #ff8b1f); */
  background-repeat: no-repeat;
  background-size: cover;
  
}
.container1{
 max-width: 720px;
 width: 100%;
 background-color: #fff;
 padding: 25px 30px;
 border-radius: 15px;
 box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container1 .title{
 font-size: 25px;
 font-weight: 500;
 position: relative;
}
.container1 .title::before{
 content: "";
 position: absolute;
 left: 0;
 bottom: 0;
 height: 3px;
 width: 30px;
 border-radius: 5px;
 background: linear-gradient(135deg, #fffb00, #ff0000);
}
.content form .user-details{
 display: flex;
 flex-wrap: wrap;
 justify-content: space-between;
 margin: 20px 0 12px 0;
}
form .user-details .input-box{
 margin-bottom: 15px;
 width: calc(100% / 2 - 20px);
}
form .input-box span.details{
 display: block;
 font-weight: 500;
 margin-bottom: 5px;
}
.user-details .input-box input{
 height: 45px;
 width: 100%;
 outline: none;
 font-size: 16px;
 border-radius: 15px;
 padding-left: 15px;
 border: 1px solid #ccc;
 border-bottom-width: 2px;
 transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
 border-color: #ff0000;
}
form .gender-details .gender-title{
 font-size: 20px;
 font-weight: 500;
}
form .category{
  display: flex;
  width: 25%;
  margin: 2vh 0 ;
  justify-content: space-between;
}
form .category label{
  display: flex;
  align-items: center;
  cursor: pointer;
}
form .category label .dot{
 height: 18px;
 width: 18px;
 border-radius: 50%;
 margin-right: 10px;
 background: #d9d9d9;
 border: 5px solid transparent;
 transition: all 0.3s ease;
}
#dot-1:checked ~ .category label .one,
#dot-2:checked ~ .category label .two,
#dot-3:checked ~ .category label .three{
  background: #ff0000;
  border-color: #fffb00;
}
form input[type="radio"]{
  display: none;
}
form .button{
  height: 45px;
  text-align: center;
}
form .button input{
  height: 100%;
  width: 50%;
  border-radius: 25px;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  cursor: pointer;
  transition: all 0.3s ease;
  background: linear-gradient(135deg, #fd3402e3, #ff8b1f);
}
form .button input:hover{
 /* transform: scale(0.99); */
 background: linear-gradient(-135deg, #fd3402, #ff8513);
 }
@media(max-width: 584px){
.container1{
 max-width: 100%;
}
form .user-details .input-box{
   margin-bottom: 15px;
   width: 100%;
 }
 form .category{
   width: 100%;
 }
 .content form .user-details{
   max-height: 300px;
   overflow-y: scroll;
 }
 .user-details::-webkit-scrollbar{
   width: 5px;
 }
 .gotra{
   flex-direction: column;
   width: 100%;
 }
 }
 @media(max-width: 459px){
 .container1 .content .category{
   flex-direction: column;
 }
}
.gotra{
   display: flex;
   width: 100%;
   margin-bottom: 3vh !important;
   margin-top: 3vh;
}

</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo"><img src="assets/img/logo.svg" alt="" class="img-fluid"></a>
      
        <nav id="navbar" class="navbar">
          <ul>
              <li><a class="active" href="index.php">Home</a></li>
              <li><a href="about-youth.html">About Youth</a></li>
              <li><a href="events.php">Youth Activity</a></li>
              <li><a href="donor.html">Active Donors</a></li>
              <li><a href="donate.php">Donate</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                      <li><a href="#">Drop Down 1</a></li>
                      <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                          <ul>
                              <li><a href="#">Deep Drop Down 1</a></li>
                              <li><a href="#">Deep Drop Down 2</a></li>
                              <li><a href="#">Deep Drop Down 3</a></li>
                              <li><a href="#">Deep Drop Down 4</a></li>
                              <li><a href="#">Deep Drop Down 5</a></li>
                          </ul>
                      </li>
                      <li><a href="#">Drop Down 2</a></li>
                      <li><a href="#">Drop Down 3</a></li>
                      <li><a href="#">Drop Down 4</a></li>
                  </ul>
              </li> -->
              <li><a href="contact.html">Contact</a></li>
              <li><a href="#"><button id="myBtn" style="border: none;
                  background-color: white;
                  color: #935029; font-weight:500 ">Login/SignUp</button></a></li>
              <div id="myModal" class="modal">

                  <!-- Modal content -->
                  <div class="modal-content">
                    <span class="close" style="cursor: pointer;">&times;</span>
                    
<div class="form">

<ul class="top-area">
<li class="tab active" style="width: 100%;"><a href="#signup">Register</a></li>
<li class="tab" style="width: 100%;"><a href="#login">Log In</a></li>
</ul>

<div class="tab-content">
<div id="signup">   
  <h1 style="margin: 1vh 0 1vh 0; color: #000;">Register</h1>
  
  <form action="/" method="post">

  <div class="label-field">
    <label>
      Mobile Number<span class="req">*</span>
    </label>
    <input type="number" required autocomplete="off"/>
  </div>
  <div class="button">
    <input type="submit" value="Send OTP">
  </div>
  <a href="">resend OTP</a>
  <div class="label-field">
    <label>
      Enter OTP<span class="req">*</span>
    </label>
    <input type="password"required autocomplete="off"/>
  </div>
  
  <div class="button">
    <input type="submit" value="Register">
  </div>
  
  </form>

</div>

<div id="login">   
  <h1 style="margin: 1vh 0 1vh 0; color: #000;">Log In</h1>
  
  <form action="/" method="post">
  
    <div class="label-field" style="margin-bottom: 5vh;">
    <label>
      AV ID<span class="req">*</span>
    </label>
    <input type="text"required autocomplete="off"/>
  </div>
  
  <div class="label-field">
    <label>
      Password<span class="req">*</span>
    </label>
    <input type="password"required autocomplete="off"/>
  </div>
  
  <p class="forgot"><a href="#">Forgot Password?</a></p>
  
  <div class="button">
    <input type="submit" value="Login">
  </div>
  
  </form>

</div>

</div>  
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="function.js"></script>
                  </div>
                
                </div>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Photo Order</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Photo Order</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Gallery Section ======= -->
    <section id="reg" class="reg">
        <div class="container1">
            <div class="title">Photo Order</div>
            <div class="content">
              <form method="post">
                <div class="user-details">
                 
                  <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="mobile" placeholder="Enter your number" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="Address" placeholder="Enter your address" required>
                  </div>
                  <div class="input-box">
                    <span class="details">Date of Order</span>
                    <input type="date" name="Order_date" placeholder="Enter your DOB" required>
                  </div>
                  
                  <div class="input-box">
                    <span class="details">City</span>
                    <input type="text" name="city" placeholder="Enter your City" required>
                  </div>
                  <div class="gotra">
                    <div class="input-group mb-2" style="margin-right: 1vw;">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;">Order Type</label>
                        </div>
                        <select class="custom-select" name="Order_type" id="inputGroupSelect01" style="border-top-right-radius: 15px;
                        border-bottom-right-radius: 15px;">
                          <option selected>Choose...</option>
                          <option value="Photo">Photo</option>
                          <option value="Logo">Logo</option>
                          <option value="Three">Three</option>
                        </select>
                      </div>
                  
                  </div>
                  
                <!-- <div class="gender-details">
                  <input type="radio" name="gender" id="dot-1">
                  <input type="radio" name="gender" id="dot-2">
                  <span class="gender-title">Are you willing to place the order?</span>
                  <div class="category">
                    <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Yes</span>
                  </label>
                  <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">No</span>
                  </label>
                  </div>
                </div> -->
                </div>
                <div class="button">
                  <input type="submit" value="Place Order">
                </div>
                
              </form>
            </div>
          </div>
        
    </section><!-- End Gallery Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MeFamily</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MeFamily</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>