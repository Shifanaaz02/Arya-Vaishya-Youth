<?php
session_start();
include_once 'db.php';
if (isset($_SESSION['AVID'])) {
  if (isset($_POST['Support_type'])) {
    $Support_type = $_POST['Support_type'];
    $Description = $_POST['Description'];
    $Qty = $_POST['Qty'];
    $Date = $_POST['Date'];
    $Support_AVID = $_SESSION['AVID'];
    $sql = "INSERT INTO `support` (`Support_type`, `Description`, `Qty`, `Date`, `Support_AVID`, `Response`) VALUES ('$Support_type', '$Description', '$Qty', '$Date', '$Support_AVID', 'Pending');";

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

  <title>Support - AVYouth</title>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    :root {
      --bg: #1a1e24;
      --color: #eee;
      --font: Montserrat, Roboto, Helvetica, Arial, sans-serif;
    }

    .wrapper {
      padding: 2vh 4vh;
      filter: url(#goo);
      text-align: center;
      display: flex;
      justify-content: center;
      align-content: center;
      flex-wrap: wrap;
      align-items: center;
    }

    .button {
      display: inline-block;
      text-align: center;
      background: #dfdfdf;
      color: var(--bg);
      font-weight: bold;
      padding: 2vh 0.5vh;
      line-height: 1;
      border-radius: 1em;
      position: relative;
      min-width: 8.23em;
      text-decoration: none;
      font-family: var(--font);
      font-size: 1.25rem;
    }

    .button:before,
    .button:after {
      width: 4.4em;
      height: 2.95em;
      position: absolute;
      content: "";
      display: inline-block;
      background: #dfdfdf;
      border-radius: 50%;
      transition: transform 0.4s ease;
      transform: scale(0);
      z-index: -1;

    }

    .button:before {
      top: -25%;
      left: 20%;
    }

    .button:after {
      bottom: -25%;
      right: 20%;
    }

    .button:hover {
      color: #fd4902;
    }

    .button:hover:before,
    .button:hover:after {
      transform: none;
    }

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
      width: 60%;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .content form .user-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 20px 0 12px 0;
    }

    form .user-details .input-box {
      margin-bottom: 15px;
      width: calc(100% / 2 - 20px);
    }

    form .input-box span.details {
      display: block;
      font-weight: 500;
      margin-bottom: 5px;
    }

    .user-details .input-box input {
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
    .user-details .input-box input:valid {
      border-color: #ff0000;
    }

    form .gender-details .gender-title {
      font-size: 20px;
      font-weight: 500;
    }

    form .category {
      display: flex;
      width: 25%;
      margin: 2vh 0;
      justify-content: space-between;
    }

    form .category label {
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    form .category label .dot {
      height: 18px;
      width: 18px;
      border-radius: 50%;
      margin-right: 10px;
      background: #d9d9d9;
      border: 5px solid transparent;
      transition: all 0.3s ease;
    }

    #dot-1:checked~.category label .one,
    #dot-2:checked~.category label .two,
    #dot-3:checked~.category label .three {
      background: #ff0000;
      border-color: #fffb00;
    }

    form input[type="radio"] {
      display: none;
    }

    form .button {
      height: 45px;
      text-align: center;
    }

    form .form-button input {
      height: 100%;
      width: 60%;
      border-radius: 25px;
      border: none;
      color: #fff;
      margin-top: 3vh;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 1px;
      cursor: pointer;
      transition: all 0.3s ease;
      background: linear-gradient(135deg, #fd3402e3, #ff8b1f);
    }

    form .button input:hover {
      /* transform: scale(0.99); */
      background: linear-gradient(-135deg, #fd3402, #ff8513);
    }

    @media(max-width: 584px) {
      form .user-details .input-box {
        margin-bottom: 15px;
        width: 100%;
      }

      form .category {
        width: 100%;
      }

      .content form .user-details {
        max-height: 300px;
        overflow-y: scroll;
      }

      .user-details::-webkit-scrollbar {
        width: 5px;
      }

      .gotra {
        flex-direction: column;
        width: 100%;
      }
    }

    .gotra {
      display: flex;
      width: 100%;
      margin-bottom: 3vh !important;
      margin-top: 3vh;
    }

    .swiper-wrapper {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      z-index: 1;
      position: relative;
    }

    .swiper-container {
      background: linear-gradient(270deg, rgba(247, 249, 255, 1) 0%, rgba(242, 246, 255, 1) 100%);
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
      width: 90%;
      position: relative;
      height: 100vh;
      max-height: 420px;
      border-radius: 10px;
    }

    .slider-image-wrapper {
      height: 200px;
      width: 100%;
      overflow: hidden;
    }

    .slider-item {
      width: 100%;
      height: 100%;
      border-radius: 10px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      flex-shrink: 0;
      opacity: 0;
      background: linear-gradient(270deg, rgba(255, 72, 0, 0.404) 0%, rgba(255, 230, 0, 0.589) 100%);
      cursor: grab;
    }

    .slider-item-content {
      padding: 32px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transition: 0.4s;
    }

    .slider-item-content>* {
      opacity: 0;
      transform: translateY(20px);
    }

    .swiper-slide-active .slider-item-content>* {
      transform: translateY(0px);
      opacity: 1;
    }

    .slider-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: 0.2s;
    }

    .swiper-pagination {
      position: absolute;
      left: 50%;
      bottom: 8px;
      transform: translatex(-50%);
      z-index: 1;
      width: auto !important;
    }

    .swiper-pagination-bullet {
      border-radius: 0;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      line-height: 30px;
      font-size: 12px;
      opacity: 1;
      background: rgba(255, 185, 0, 0.3);
      display: inline-block;
      margin-right: 8px;
      cursor: pointer;
      transition: all 0.2s;
    }

    .swiper-pagination-bullet-active {
      background: #ffb200;
      width: 20px;
      border-radius: 10px;
    }

    .slider-buttons {
      position: absolute;
      display: flex;
      top: 100%;
      justify-content: flex-end;
      width: 100%;
      padding-top: 8px;
    }

    .swiper-button-next,
    .swiper-button-prev {
      background-color: transparent;
      border: none;
      cursor: pointer;
      outline: none;
      color: #fff;
      position: relative;
      margin-left: 4px;
    }

    .swiper-button-next:before,
    .swiper-button-prev:before {
      content: '';
      position: absolute;
      background-color: #fff;
      height: 1px;
      width: 0;
      left: 0;
      bottom: -1px;
      transition: 0.2s;
    }

    .swiper-button-next:hover:before,
    .swiper-button-prev:hover:before {
      width: 100%;
    }

    .socials {
      position: fixed;
      top: 12px;
      right: 16px;
      display: flex;
      align-items: center;
    }

    .socials .social-link {
      display: inline-block;
      margin-left: 8px;
      color: #fff;
    }

    @media screen and (max-width: 520px) {

      .swiper-button-next:hover:before,
      .swiper-button-prev:hover:before {
        display: none;
      }
    }

    .container {
      display: flex;
    }

    .drow {
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      align-content: center;
      flex-wrap: wrap;
    }

    @media(max-width: 584px) {
      .container {
        display: flex;
        flex-direction: column;
      }

      .drow {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo"><img src="assets/img/logo.svg" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

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
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="function.js"></script>
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
      <div class="container" style="display: block;">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Support</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Support</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Story Intro Section ======= -->
    <section id="story-intro" class="story-intro" style="padding-bottom: 2vh;">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/support.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="fst-italic" style="margin-top: 9vh;
            margin-left: 3vh; font-weight: 600;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p style="margin-left: 3vh; margin-bottom: 6vh;">
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>


            <div class="wrapper">
              <a class="button" href="#"><button id="myBtn" class="button" style="border: none;">Request Support</button></a>
            </div>

            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <form method="post">
                  <div class="user-details">
                    <div class="input-group mb-2" style="display: flex;
                        justify-content: center; margin-bottom: 4vh !important;">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px; width: 20vw;">Support Type
                        </label>
                      </div>
                      <select class="custom-select" name="Support_type" id="inputGroupSelect01" style="border-top-right-radius: 15px;
            border-bottom-right-radius: 15px; width: 30vw;" required>
                        <option selected>Choose...</option>
                        <option value="Thing">Thing</option>
                        <option value="Blood">Blood</option>
                        <option value="Kirana">Kirana</option>
                        <option value="Education">Education</option>
                        <option value="Medicals">Medicals</option>
                      </select>
                    </div>
                    <div class="input-box">
                      <span class="details">Description</span>
                      <input type="text" name="Description" placeholder="Description of support" required>
                    </div>

                    <div class="input-box">
                      <span class="details">Quantity/Rupees</span>
                      <input type="number" name="Qty" placeholder="Enter Amount" required>
                    </div>

                    <div class="input-box">
                      <span class="details">Date</span>
                      <input type="date" name="Date" placeholder="Enter Donation date" required>
                    </div>
                  </div>
                  <!-- <div class="button">
                    <input type="submit" value="Donate">
                  </div> -->
                  <center>
                    <div class="form-button">
                      <input type="submit" value="Request Support">
                    </div>
                  </center>
                </form>
              </div>

            </div>

            <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" operator="atop" />
                </filter>
              </defs>
            </svg>
          </div>
        </div>

      </div>
    </section><!-- End Story Intro Section -->


    <!-- ======= Members Section ======= -->
    <section id="members" class="members">
      <h2 style="text-align: center; font-weight: 600;"> DONATIONS </h2>
      <div class="container" style="padding-top: 3vh;">

        <div class="drow">

          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="slider-item swiper-slide">
                <div class="slider-image-wrapper">
                  <img class="slider-image" src="https://images.unsplash.com/photo-1498307833015-e7b400441eb8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2600&q=80" alt="SliderImg">
                </div>
                <div class="slider-item-content">
                  <h1>Postcards From Italy</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
              </div>
              <div class="slider-item swiper-slide">
                <div class="slider-image-wrapper">
                  <img class="slider-image" src="https://images.unsplash.com/photo-1491900177661-4e1cd2d7cce2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" alt="SliderImg">
                </div>
                <div class="slider-item-content">
                  <h1>Bunker</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
              </div>
              <div class="slider-item swiper-slide">
                <div class="slider-image-wrapper">
                  <img class="slider-image" src="https://images.unsplash.com/photo-1482192505345-5655af888cc4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=2600&q=80" alt="SliderImg">
                </div>
                <div class="slider-item-content">
                  <h1>Small Mountain</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
              </div>
              <div class="slider-item swiper-slide">
                <div class="slider-image-wrapper">
                  <img class="slider-image" src="https://images.unsplash.com/photo-1564604761388-83eafc96f668?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=801.2.1&auto=format&fit=crop&w=2167&q=80" alt="SliderImg">
                </div>
                <div class="slider-item-content">
                  <h1>Walking On a Dream</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
              </div>
            </div>

            <div class="swiper-pagination"></div>
          </div>

        </div>

        <div class="drow">
          <div class="wrapper">
            <a class="button" href="donate.php"><button id="myBtn" class="button" style="border: none;">DONATE</button></a>
          </div>
        </div>

      </div>
    </section><!-- End Members Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container" style="display: block;">
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
        &copy; Copyright <strong><span>Easy Techs</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">Easy Techs</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 20,
      effect: 'fade',
      loop: true,
      speed: 300,
      mousewheel: {
        invert: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },
      // Navigation arrows  
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  </script>
</body>

</html>