<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">

     <title>Donations AVYouth</title>
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

          :root {
               /* COLORS */
               --white: #e9e9e9;
               --gray: #333;
               --blue: #0367a6;
               --lightblue: #008997;
               /* RADII */
               --button-radius: 0.7rem;
               /* SIZES */
               --max-width: 758px;
               --max-height: 420px;
               font-size: 16px;
               font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
          }

          .don {
               align-items: center;
               background-color: var(--white);
               background: url(assets/img/back.jpg);
               background-attachment: fixed;
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
               display: grid;
               height: 78vh;
               place-items: center;
               align-content: space-evenly;
          }

          .form__title {
               font-weight: 300;
               margin: 0;
               margin-bottom: 1.25rem;
          }

          .link {
               color: var(--gray);
               font-size: 0.9rem;
               margin: 1.5rem 0;
               text-decoration: none;
          }

          .containerd {
               background-color: var(--white);
               border-radius: 25px;
               box-shadow: 0 0.9rem 1.7rem rgba(0, 0, 0, 0.25),
                    0 0.7rem 0.7rem rgba(0, 0, 0, 0.22);
               height: 68vh;
               max-width: var(--max-width);
               overflow: hidden;
               position: relative;
               width: 100%;
          }

          .containerd__form {
               height: 100%;
               position: absolute;
               top: 0;
               transition: all 0.6s ease-in-out;
          }

          .containerd--signin {
               left: 0;
               width: 50%;
               z-index: 2;
          }

          .containerd.right-panel-active .containerd--signin {
               transform: translateX(100%);
          }

          .containerd--signup {
               left: 0;
               opacity: 0;
               width: 50%;
               z-index: 1;
          }

          .containerd.right-panel-active .containerd--signup {
               animation: show 0.6s;
               opacity: 1;
               transform: translateX(100%);
               z-index: 5;
          }

          .containerd__overlay {
               height: 100%;
               left: 50%;
               overflow: hidden;
               position: absolute;
               top: 0;
               transition: transform 0.6s ease-in-out;
               width: 50%;
               z-index: 100;
          }

          .containerd.right-panel-active .containerd__overlay {
               transform: translateX(-100%);
          }

          .overlay {
               background-color: #c7c7c7;
               background-attachment: fixed;
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
               height: 100%;
               left: -100%;
               position: relative;
               transform: translateX(0);
               transition: transform 0.6s ease-in-out;
               width: 200%;
          }

          .containerd.right-panel-active .overlay {
               transform: translateX(50%);
          }

          .overlay__panel {
               align-items: center;
               display: flex;
               flex-direction: column;
               height: 100%;
               justify-content: center;
               position: absolute;
               text-align: center;
               top: 0;
               transform: translateX(0);
               transition: transform 0.6s ease-in-out;
               width: 50%;
          }

          .overlay--left {
               transform: translateX(-20%);
          }

          .containerd.right-panel-active .overlay--left {
               transform: translateX(0);
          }

          .overlay--right {
               right: 0;
               transform: translateX(0);
          }

          .containerd.right-panel-active .overlay--right {
               transform: translateX(20%);
          }

          .btn {
               background-color: var(--blue);
               background-image: linear-gradient(90deg, #fd3402e3 0%, #ff9e1f 74%);
               border-radius: 25px;
               color: var(--white);
               cursor: pointer;
               font-size: 0.8rem;
               font-weight: bold;
               letter-spacing: 0.1rem;
               padding: 0.9rem 4rem;
               text-transform: uppercase;
               transition: transform 80ms ease-in;
          }

          .form>.btn {
               margin-top: 1.5rem;
          }

          .btn:active {
               transform: scale(0.95);
          }

          .btn:focus {
               outline: none;
          }

          .form {
               background-color: var(--white);
               display: flex;
               align-items: center;
               justify-content: center;
               flex-direction: column;
               padding: 0rem 2rem;
               height: 100%;
               text-align: center;
          }

          .input {
               background-color: #fff;
               border: none;
               border-radius: 25px;
               padding: 0.6rem 0.9rem;
               margin: 0.3rem 0;
               width: 100%;
          }

          @keyframes show {

               0%,
               49.99% {
                    opacity: 0;
                    z-index: 1;
               }

               50%,
               100% {
                    opacity: 1;
                    z-index: 5;
               }
          }

          @media(max-width: 784px) {
               .mob {
                    display: flex;
                    flex-direction: column;
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
                                                            <input type="number" required autocomplete="off" />
                                                       </div>
                                                       <div class="button">
                                                            <input type="submit" value="Send OTP">
                                                       </div>
                                                       <a href="">resend OTP</a>
                                                       <div class="label-field">
                                                            <label>
                                                                 Enter OTP<span class="req">*</span>
                                                            </label>
                                                            <input type="password" required autocomplete="off" />
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
                                                            <input type="text" required autocomplete="off" />
                                                       </div>

                                                       <div class="label-field">
                                                            <label>
                                                                 Password<span class="req">*</span>
                                                            </label>
                                                            <input type="password" required autocomplete="off" />
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
               <div class="container">

                    <div class="d-flex justify-content-between align-items-center">
                         <h2>Donation</h2>
                         <ol>
                              <li><a href="index.php">Home</a></li>
                              <li>Donation</li>
                         </ol>
                    </div>

               </div>
          </section><!-- End Breadcrumbs -->
          <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <script>
               $(function() {

                    $('form').on('submit', function(e) {

                         e.preventDefault();

                         $.ajax({
                              type: 'post',
                              url: 'donate3.php',
                              // data: $('form').serialize(),
                              data: new FormData(this),
                              contentType: false,
                              processData: false,
                              success: function() {
                                   alert('Submitted  Successfully...!');
                                   $('form').trigger("reset");
                              }
                         });

                    });

               });
          </script>
          
          <!-- ======= Gallery Section ======= -->
          <section id="don" class="don" style="padding-top: 0px; padding-bottom: 0px;">
               <div class="containerd right-panel-active">
                    <!-- Sign Up -->
                    <div class="mob">
                         <div class="containerd__form containerd--signup">
                              <form method="post" action="donate3.php" class="form" id="form1">
                                   <h2 class="form__title">Money</h2>
                                   <!-- <input type="text" name="D_name2" placeholder="Donor Name" class="input" required /> -->
                                   <input type="number" name="Amount_Qty2" placeholder="Amount of Rupees" class="input" required />
                                   <input type="number" name="phone2" placeholder="Phone Number" class="input" required />
                                   <input type="text" name="Description2" placeholder="Description " class="input" required />
                                   <div class="input-group mb-2" style="margin-left: 1vw;">
                                        <div class="input-group-prepend">
                                             <label class="input-group-text" for="inputGroupSelect01" style="border-top-left-radius: 25px; border-bottom-left-radius: 25px;">Donate to</label>
                                        </div>
                                        <select class="custom-select" name="donated_to2" id="donate_selection_1" style="border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                                             <option selected value="NULL">Choose...</option>
                                             <option value="Arya Vaishya Youth">Arya Vaishya Youth</option>
                                             <option value="person">To particular person</option>
                                        </select>
                                   </div>
                                   <input class="hideme input" type="text" name="donated_to_name2" id="name_1" placeholder="Name of person to donate">
                                   <!-- <input type="text" name="name" placeholder="Name of person to donate" class="input"> -->
                                   <script>
                                        $('#donate_selection_1').change(function() {
                                             if ($(this).val() === "person") {
                                                  $('#name_1').show();
                                                  // $(this).val = $(('#name_1').val());
                                             } else
                                                  $('#name_1').hide();
                                        }).change();
                                   </script>
                                   <button type="submit" class="btn"> Donate</button>
                              </form>
                         </div>
                         <!-- Sign In -->
                         <div class="containerd__form containerd--signin">
                              <form method="post" action="donate3.php" class="form" id="form2" enctype="multipart/form-data">
                                   <h2 class="form__title">Others</h2>
                                   <!-- <input type="text" name="D_name" placeholder="Donor Name" class="input" required /> -->
                                   <div class="input-group mb-2" style="margin-left: 1vw;">
                                        <div class="input-group-prepend">
                                             <label class="input-group-text" for="inputGroupSelect01" style="border-top-left-radius: 25px; border-bottom-left-radius: 25px;">Thing Type</label>
                                        </div>
                                        <select class="custom-select" name="D_type" id="inputGroupSelect01" style="border-top-right-radius: 25px;
                                             border-bottom-right-radius: 25px;">
                                             <option selected value="NULL">Choose...</option>
                                             <option value="Blood">Blood</option>
                                             <option value="Kirana">Kirana</option>
                                             <option value="Education">Education</option>
                                             <option value="Medicals">Medicals</option>
                                             <option value="Others">Others</option>
                                        </select>
                                   </div>
                                   <input type="number" name="Amount_Qty" placeholder="Quantity" class="input" required />
                                   <input type="text" name="Description" placeholder="Description of Thing" class="input" required />
                                   <input type="number" name="phone" placeholder="Phone Number" class="input" required />
                                   <div class="input-group mb-2" style="margin-left: 1vw;">
                                        <div class="input-group-prepend">
                                             <label class="input-group-text" for="inputGroupSelect01" style="border-top-left-radius: 25px; border-bottom-left-radius: 25px;">Donate to</label>
                                        </div>
                                        <select class="custom-select" name="donated_to" id="donate_selection_2" style="border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                                             <option selected value="NULL">Choose...</option>
                                             <option value="person">To particular person</option>
                                             <option value="Arya Vaishya Youth">Arya Vaishya Youth</option>
                                        </select>
                                   </div>
                                   <input class="hideme input" type="text" name="donated_to_name" id="name_2" placeholder="Name of person to donate">
                                   <!-- <input class="hideme" type="text" name="name" id="name_2"> -->
                                   <script>
                                        $('#donate_selection_2').change(function() {
                                             if ($(this).val() === "person") {
                                                  $('#name_2').show();
                                                  // $(this).val = $(('#name_2').val());
                                             } else
                                                  $('#name_2').hide();
                                        }).change();
                                   </script>
                                   <p style="margin-bottom: 0px;">Photo of the image (if possible)</p>
                                   <input type="file" name="photo" id="photo" placeholder="" class="input" style="margin-top: 0px;" />


                                   <button type="submit" class="btn">Donate</button>
                              </form>
                         </div>
                    </div>
                    <!-- Overlay -->
                    <div class="containerd__overlay">
                         <div class="overlay">
                              <div class="overlay__panel overlay--left">
                                   <button class="btn" id="signIn" style="background-color: #e2e2e2; background-image: none; color: rgb(255, 0, 0);">Donate Things</button>
                              </div>
                              <div class="overlay__panel overlay--right">
                                   <button class="btn" id="signUp" style="background-color: #e2e2e2; background-image: none; color: rgb(255, 0, 0);">Donate Money</button>
                              </div>
                         </div>
                    </div>

               </div>

          </section><!-- End Gallery Section -->

     </main><!-- End #main -->

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
     <script>
          const signInBtn = document.getElementById("signIn");
          const signUpBtn = document.getElementById("signUp");
          const fistForm = document.getElementById("form1");
          const secondForm = document.getElementById("form2");
          const containerd = document.querySelector(".containerd");
          signInBtn.addEventListener("click", () => {
               containerd.classList.remove("right-panel-active");
          });
          signUpBtn.addEventListener("click", () => {
               containerd.classList.add("right-panel-active");
          });
          fistForm.addEventListener("submit", (e) => e.preventDefault());
          secondForm.addEventListener("submit", (e) => e.preventDefault());
     </script>
     <!-- Vendor JS Files -->
     <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
     <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
     <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
     <script src="assets/vendor/php-email-form/validate.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     


     <!-- Template Main JS File -->
     <script src="assets/js/main.js"></script>

</body>

</html>