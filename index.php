<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AVYouth Bootstrap Template - Index</title>
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

  <!-- =======================================================
  * Template Name: MeFamily - v4.7.0
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
   .modal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0 0 0 / 50%)
      /* Black w/ opacity */
  }

  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 4vh;
    border: none;
    border-radius: 25px;
    width: 500px;
  }
  

  
  .form-box {
            width: 440px;
            height: 420px;
            position: relative;
            margin: auto;
            background: #ffff;
            padding: 5px;
            overflow: hidden;
        }
  .button-box {
            width: 225px;
            margin: 30px auto;
            position: relative;
            box-shadow: 0 0 20px 9px #f05f261f;
            border-radius: 30px;
        }

        .toggle-btn {
            padding: 10px 25px;
            border: 0;
            cursor: pointer;
            outline: none;
            background: transparent;
            position: relative;
        }

        #btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 115px;
            height: 100%;
            background: #f2751d;
            border-radius: 30px;
            transition: .5s;
        }

        .input-grp {
            position: absolute;

            transition: .5s;
            top: 100px;
            width: 320px;
        }

        form input {
            width: 100%;
            padding: 10px 0;
            margin: 5px 0;
            border-top: 0;
            border-left: 0;
            border-right: 0;
            border-bottom: 1px solid rgb(104, 103, 103);
            outline: none;
            background: transparent;
            font-size: 20px;
            color: black;
        }

        input.submit {
          text-align: center;
          height: 100%;
          width: 60%;
          border-radius: 25px;
          border: none;
          padding: 1vh;
          color: #fff;
          font-weight: 600;
          letter-spacing: 1px;
          cursor: pointer;
          transition: all 0.3s ease;
          background: linear-gradient(135deg, #fd3402e3, #ff8b1f);      
        }
        button.button{
          text-align: center;
          height: 100%;
          width: 60%;
          border-radius: 25px;
          border: none;
          padding: 1vh;
          color: #fff;
          font-weight: 600;
          letter-spacing: 1px;
          cursor: pointer;
          transition: all 0.3s ease;
          background: linear-gradient(135deg, #fd3402e3, #ff8b1f);
        }
     
        #form1{
            left: 50px;
        }

        #login{
            left: 450px;
        }
        #formotp{
          margin-top:120px;
          left: 50px;
        }
        @media (max-width: 765px) {
    label {
      left: 0;
    }
  }
 
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/logo.svg" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about-youth.html">About Youth</a></li>
          <li><a href="events.php">Youth Activity</a></li>
          <li><a href="donor.php">Active Donors</a></li>
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
                        color: #935029; font-weight:500 ">Login/SignUp</button></a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close" style="cursor: pointer;" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

          <div class="form-box">
              <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Register</button>
                <button type="button" class="toggle-btn" onclick="form1()">Log In</button>
               
            </div>
            <div id="signup">
          
                      <form id="form1" class="input-grp" action="" method="post">
                <div>
                    <input type="number" name="mobile" id="mobile" maxlength="10" required autocomplete="off" placeholder="Mobile Number*" />
                </div>
                <span id="optstatus">
                <button class="button" type="submit" onclick="optstatus()" name="send_otp" id="regtr1" >Send OTP</button>
              </span>
            </form>
                <!-- <a href="" style="color: rgb(139, 40, 4); margin-left: -10px; ">resend OTP</a> -->
                     
                <form action="otp.php" id="formotp" class="input-grp" method="post" >
                    <div>
                        <input name="inotp" type="number" id="otp" required placeholder="Enter OTP*" />
                    </div>
                


                <button class="button" type="submit" name="register"  id="regtr" value="Register">Register</button>

            </form>

          
         
            <form id="login" class="input-grp" action="email_verification.php" method="post">

                  <input type="text" name="AVID2" placeholder=" AV ID*" required autocomplete="off" />
               
                  <input name="password2" type="password" id="myInput" placeholder=" Password*" required autocomplete="off" />
               
                  <input type="checkbox" onclick="ShowPassword()" style="margin-left: -160px;"><span style="color: rgb(139, 40, 4);margin-left: -145px;">Show Password</span>
                <p class="forgot"><a href="#" style="color: rgb(139, 40, 4);margin-left:175px;" id="myBtn2">Forgot Password?</a></p>

               
                  <button class="button" type="submit" value="Login">Login</button>
               

              </form>
            </div>

          <!-- <div class="form">

            <ul class="top-area">
              <li class="tab active" style="width: 100%;"><a href="#signup">Register</a></li>
              <li class="tab" style="width: 100%;"><a href="#login">Log In</a></li>
            </ul>

            <div class="tab-content">
              <div id="signup">
                <h1 style="margin: 1vh 0 1vh 0; color: #000;">Register</h1>

                <form id="form1" method="post">
                  <div class="label-field">
                    <label for="mobile">
                      Mobile Number<span class="req">*</span>
                    </label>
                    <input type="number" id="mobile" name="mobile" value="" maxlength="10" required>
                  </div>
                  <span id="optstatus">
                    <input class="button" type="submit" onclick="optstatus()" name="send_otp" id="regtr1" value="Send OTP">
                  </span>
                </form>

                <a href="">resend OTP</a> 
                <form action="otp.php" method="post">
                  <div class="label-field">
                    <label>
                      Enter OTP<span class="req">*</span>
                    </label>
                    <input name="inotp" type="number" id="otp" required>
                  </div>

                  <span>
                    <input name="register" class="button" type="submit" value="Register" id="regtr">
                  </span>
                </form>

              </div>


              <div id="login">
                <h1 style="margin: 1vh 0 1vh 0; color: #000;">Log In</h1>

                <form action="email_verification.php" method="post">

                  <div class="label-field" style="margin-bottom: 5vh;">
                    <label>
                      AV ID<span class="req">*</span>
                    </label>
                    <input name="AVID2" type="text" required autocomplete="off" />
                  </div>

                  <div class="label-field">
                    <label>
                      Password<span class="req">*</span>
                    </label>
                    <input name="password2" type="password" id="myInput">
                  </div>
                  <br>
                  <input type="checkbox" onclick="ShowPassword()">Show Password
</br>
                  <p class="forgot"><a id="myBtn2">Forgot Password?</a></p>

                  <div class="button">
                    <input type="submit" value="Login">
                  </div>

                </form> 

              </div>-->

            </div>
          </div>
          <script>
                var x= document.getElementById("form1");
                var p= document.getElementById("formotp");
                var y= document.getElementById("login");
                var z= document.getElementById("btn");
        
                function form1(){
                    x.style.left = "-400px";
                    p.style.left = "-400px";
                    y.style.left = "50px";
                    z.style.left = "110px";
                }
                function formotp(){
                    x.style.left = "-400px";
                    p.style.left = "-400px";
                    y.style.left = "50px";
                    z.style.left = "110px";
                }
                function login(){
                    x.style.left = "50px";
                    p.style.left = "50px";
                    y.style.left = "450px";
                    z.style.left = "0px";
                }
            </script>
          <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script type="text/JavaScript">
            var area = document.getElementById('optstatus');
                var initbtn = document.getElementById('regtr1');
                function optstatus() {
                // console.log('Layout Clicked');
                var mobile = document.getElementById("mobile");
                var otp = document.getElementById("otp");
                var btn = document.getElementById("regtr1");
                if (mobile.value != '' && mobile.value.length == 10) {
                  $(function() {
                    $('#form1').on('submit', function(e) {
                      e.preventDefault();
                        $.ajax({
                          type: 'post',
                          url: 'sms.php',
                          data: $('form').serialize(),
                          success: console.log("Success")
                        });
                      });

                    });
                  var resentPassTime = 30;
                  var resetPassInterval = setInterval(() => {
                    if (resentPassTime > 0) {
                      area.innerHTML = '<span id="optstatus"><input type="button" onclick="optstatus()" value="Resend OTP in ' + resentPassTime + 's" id="regtr1" name="send_otp" disabled></span>';
                      resentPassTime = resentPassTime - 1;
                    } else {
                      area.innerHTML = '<span id="optstatus"><input type="button" onclick="optstatus()" value="Resend OTP" id="regtr1" name="send_otp"></span>';
                      clearInterval(resetPassInterval);
                    }
                  }, 1000);
                  initbtn.style.display = "none";
                } else {
                  alert("Kindly enter valid details!");
                }
              }
              </script>

          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
          <script src="function.js"></script>
        </div>

      </div>


      <div id="myModal2" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close" style="cursor: pointer;" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>

          <div class="form">

            <!-- <ul class="top-area">
              <li class="tab active" style="width: 100%;">Register</li>
              <li class="tab" style="width: 100%;"><a href="#login">Log In</a></li>
            </ul> -->

            <div>
              <div id="forgot-password">
                <h1 style="margin: 1vh 0 1vh 0; color: #000;">Forgot Password</h1>

                <form action="forgot_password.php" method="post">
                  <div class="label-field" style="margin-bottom: 5vh;">
                    <label>
                      AV ID<span class="req">*</span>
                    </label>
                    <input name="AVID3" type="text" required autocomplete="off" />
                  </div>

                  <div class="label-field">
                    <label>
                      New Password <span class="req">*</span>
                    </label>
                    <input name="password3" type="password" id="myInput" required autocomplete="off" />
                  </div>

                  <div class="label-field">
                    <label>
                      Confirm Password<span class="req">*</span>
                    </label>
                    <input name="password4" type="password" id="myInput" required autocomplete="off" />
                  </div>
                  <input type="checkbox" onclick="ShowPassword()" style="margin-left: -220px;"><span style="color: rgb(139, 40, 4);margin-left: -205px;">Show Password</span>
                  
                  <button class="button" type="submit" value="Change Password">Change Password</button>
                </form>



              </div>

            </div>
          </div>
          <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script type="text/JavaScript">
            var area = document.getElementById('optstatus');
                var initbtn = document.getElementById('regtr1');
                function optstatus() {
                // console.log('Layout Clicked');
                var mobile = document.getElementById("mobile");
                var otp = document.getElementById("otp");
                var btn = document.getElementById("regtr1");
                if (mobile.value != '' && mobile.value.length == 10) {
                  $(function() {
                    $('#form1').on('submit', function(e) {
                      e.preventDefault();
                        $.ajax({
                          type: 'post',
                          url: 'sms.php',
                          data: $('form').serialize(),
                          success: console.log("Success")
                        });
                      });

                    });
                  var resentPassTime = 30;
                  var resetPassInterval = setInterval(() => {
                    if (resentPassTime > 0) {
                      area.innerHTML = '<span id="optstatus"><input type="button" onclick="optstatus()" value="Resend OTP in ' + resentPassTime + 's" id="regtr1" name="send_otp" disabled></span>';
                      resentPassTime = resentPassTime - 1;
                    } else {
                      area.innerHTML = '<span id="optstatus"><input type="button" onclick="optstatus()" value="Resend OTP" id="regtr1" name="send_otp"></span>';
                      clearInterval(resetPassInterval);
                    }
                  }, 1000);
                  initbtn.style.display = "none";
                } else {
                  alert("Kindly enter valid details!");
                }
              }
              </script>
        </div>

      </div>

    </div>
  </header>
  <!-- End Header -->

  <script>

  </script>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" 
        style="background-position: center;
        background-repeat: no-repeat;
        height: 80vh;
        background-size: contain;
        background-image: url(assets/img/slide/slied-1.png);">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" 
        style="background-position: center;
        background-repeat: no-repeat;
        height: 80vh;
        background-size: contain;
        background-image: url(assets/img/slide/slide-2.png)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" 
        style="background-position: center;
        background-repeat: no-repeat;
        height: 80vh;
        background-image: url(assets/img/slide/slide-3.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= My & Family Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Membership & Benifits</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
            quidem hic quas.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
              id est laborum.
            </p>
            <div class="button" style="display: flex; justify-content: center;">
              <a href="about-youth.html">
                <input class="submit" value="Learn More">
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End My & Family Section -->

    <section class="about" style="padding-top: 0vh;">
      <div class="container">

        <div class="section-title">
          <h2>Social Work of Youth</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
            quidem hic quas.</p>
        </div>
        <div class="button" style="display: flex;
              justify-content: center;"><a href="work.html">
            <input class="submit" value="See Work">
          </a>
        </div>
      </div>
    </section>

    <section class="about" style="padding-top: 0vh;">
      <div class="container">

        <div class="section-title">
          <h2>Ask For Support</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
            quidem hic quas.</p>
        </div>
        <div class="button" style="display: flex;
            justify-content: center;"><a href="support.php">
            <input class="submit" value="Support">
          </a>
        </div>
      </div>
    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-cash-coin"></i></div>
            <h4 class="title"><a href="">Economical Help</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-droplet-fill"></i></div>
            <h4 class="title"><a href="">Blood Bank</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-book"></i></div>
            <h4 class="title"><a href="">Educational Help</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bandaid-fill"></i></div>
            <h4 class="title"><a href="">Medical Help</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-command"></i></div>
            <h4 class="title"><a href="">Festivals</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-diagram-3"></i></div>
            <h4 class="title"><a href="">Kirana for Poor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section>
    <!-- End Features Section -->

    <!-- ======= Recent Photos Section ======= -->
    <section id="recent-photos" class="recent-photos">
      <div class="container">

        <div class="section-title">
          <h2>Recent Photos</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
            quidem hic quas.</p>
        </div>

        <div class="recent-photos-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-1.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-1.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-2.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-2.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-3.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-3.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-4.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-4.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-5.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-5.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-6.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-6.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-7.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-7.jpg" class="img-fluid" alt=""></a>
            </div>
            <div class="swiper-slide">
              <a href="assets/img/recent-photos/recent-photos-8.jpg" class="glightbox"><img src="assets/img/recent-photos/recent-photos-8.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    <!-- End Recent Photos Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Arya Vaishya Youth</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Arya Vaishya Youth</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by <a href="http://www.easytechs.in/">Easy Tehs</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");
    var modal2 = document.getElementById("myModal2");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    var btn2 = document.getElementById("myBtn2");

    // Get the <span> element that closes the modal


    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";

    }
    btn2.onclick = function() {
      modal2.style.display = "block";

    }

    // When the user clicks on <span> (x), close the modal

    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //   if (event.target == modal) {
    //     modal.style.display = "none";
    //   }
    // }

    $('.form').find('input, textarea').on('keyup blur focus', function(e) {

      var $this = $(this),
        label = $this.prev('label');

      if (e.type === 'keyup') {
        if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
      } else if (e.type === 'blur') {
        if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.removeClass('highlight');
        }
      } else if (e.type === 'focus') {

        if ($this.val() === '') {
          label.removeClass('highlight');
        } else if ($this.val() !== '') {
          label.addClass('highlight');
        }
      }

    });

    $('.tab a').on('click', function(e) {

      e.preventDefault();

      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');

      target = $(this).attr('href');

      $('.tab-content > div').not(target).hide();

      $(target).fadeIn(600);

    });

    
  </script>
  <script>
    function ShowPassword() {
      var x = document.getElementById("myInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>

</html>