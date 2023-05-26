<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Display Support</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }
       
        .inner-wrapper {
            position: relative;
            height: calc(100vh - 3.5rem);
            transition: transform 0.3s;
        }

        @media (min-width: 992px) {
            .sticky-navbar .inner-wrapper {
                height: calc(100vh - 3.5rem - 48px);
            }
        }

         .inner-main,
        .inner-sidebar {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            
            flex-direction: column;
          
        }

        /*.inner-sidebar {
            left: 0;
            width: 235px;
            border-right: 1px solid #cbd5e0;
            background-color: #fff;
            z-index: 1;
        }*/
 
         .inner-main {
            
            /* right: 0; */
            left: 200px; 
             /* left: 0; */
           width:70%;
        }   

        /* .inner-main-footer,
        .inner-main-header,
        .inner-sidebar-footer,
        .inner-sidebar-header {
            height: 3.5rem;
            border-bottom: 1px solid #cbd5e0;
            display: flex;
            align-items: center;
            padding: 0 1rem;
            flex-shrink: 0;
        } */

        .inner-main-body,
        .inner-sidebar-body {
            padding: 1rem;
            overflow-y: auto;
            position: relative;
            flex: 1 1 auto;
        }

        .inner-main-body .sticky-top,
        .inner-sidebar-body .sticky-top {
            z-index: 999;
        }

        .inner-main-footer,
        .inner-main-header {
            background-color: #fff;
        }

        .inner-main-footer,
        .inner-sidebar-footer {
            border-top: 1px solid #cbd5e0;
            border-bottom: 0;
            height: auto;
            min-height: 3.5rem;
        } */

        @media (max-width: 767.98px) {
            .inner-sidebar {
                left: -235px;
            }

            .inner-main {
                left: 0;
            }

            .inner-expand .main-body {
                overflow: hidden;
            }

            .inner-expand .inner-wrapper {
                transform: translate3d(235px, 0, 0);
            }
        }

        .nav .show>.nav-link.nav-link-faded,
        .nav-link.nav-link-faded.active,
        .nav-link.nav-link-faded:active,
        .nav-pills .nav-link.nav-link-faded.active,
        .navbar-nav .show>.nav-link.nav-link-faded {
            color: #3367b5;
            background-color: #c9d8f0;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #467bcb;
        }

        .nav-link.has-icon {
            display: flex;
            align-items: center;
        }

        .nav-link.active {
            color: #467bcb;
        }

        .nav-pills .nav-link {
            border-radius: .25rem;
        }

        .nav-link {
            color: #4a5568;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .button {
            height: 50px;
            text-align: center;
            /* margin-right: 10px; */
        }

        .button input {
            height: 80%;
            /* width: 20%; */
            width: 200px;
            border-radius: 25px;
            padding: 8px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #fd3402e3, #ff8b1f);
        }

        .button input:hover {
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #fd3402, #ff8513);
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
                    <h2>Category</h2>
                    <ol>
                        <li><a href="index.php">Support</a></li>
                        <li>Category</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Event List Section ======= -->
        <section>

            <div class="container1">
                <div class="main-body p-0">
                    <div class="inner-wrapper">
                       

                        <!-- Inner main -->
                        <div class="inner-main">
                         

                            <!-- Inner main body -->

                            <!-- Forum List -->
                            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                                <!-- <div class="card mb-2">
                                    <div class="card-body p-2 p-sm-3">
                                        <div class="media forum-item">
                                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                    class="mr-3 rounded-circle" width="50" alt="User" /></a>
                                            <div class="media-body">
                                                <h6><a href="#" data-toggle="collapse" data-target=".forum-content"
                                                        class="text-body">Realtime fetching data</a></h6>
                                                <p class="text-secondary">
                                                    lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum
                                                    dolor sit amet
                                                </p>
                                                <p class="text-muted"><a href="javascript:void(0)">drewdan</a> replied
                                                    <span class="text-secondary font-weight-bold">13 minutes ago</span>
                                                </p>
                                            </div>
                                            <div class="text-muted small text-center align-self-center">
                                                <span class="button">
                                                    <input type="submit" onclick="window.location.href='donate.php'"
                                                        name="donate" value="Donate Now">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <?php

                                
                                include_once 'db.php';                              
                                $sql = "SELECT Support_type,Description,Qty,Date FROM support";
                                
                                    $result = $conn-> query($sql);
                                    
                                    if($result!==false && $result-> num_rows > 0){
                                        
                                    while ($row = $result-> fetch_assoc()){
                                    
                                    ?>
                                <div class="card mb-2">
                                    <div class="card-body p-2 p-sm-3">
                                        <div class="media forum-item" style= "display: flex; float: left">
                                        
                                            <!-- <a href="#" data-toggle="collapse" data-target=".forum-content"><img
                                                    src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                    class="mr-3 rounded-circle" width="50" alt="User" /></a> -->
                                            <a href="#" data-toggle="collapse" data-target=".forum-content">
                                             
                                            <?php
                                                
                                                $Support_types = $row['Support_type'];
                                                    if ($Support_types == "blood") {
                                                    echo '<img  src="Images/blood.webp"
                                                    class="mr-3 rounded-circle" width="60" alt="User"/>';
                                                    } elseif ($Support_types == "Kirana") {
                                                    echo '<img  src="Images/kirana.jpg"
                                                        class="mr-3 rounded-circle" width="60" alt="User"/>';
                                                    } elseif ($Support_types == "Education") {
                                                    echo '<img  src="Images/education.jfif"
                                                        class="mr-3 rounded-circle" width="60" alt="User"/>';
                                                    } elseif ($Support_types == "Medicals") {
                                                    echo '<img  src="Images/medicine.jpg"
                                                        class="mr-3 rounded-circle" width="60" alt="User"/>';
                                                     } else {
                                                     echo '<img
                                                     src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                     class="mr-3 rounded-circle" width="60" alt="User" />' ;
                                                     }
                                            ?></a>
                                            <div class="media-body">
                                                <h6> <a href="#" data-toggle="collapse" data-target=".forum-content"
                                                        class="text-body">&ensp;Support_type: <?php echo $row["Support_type"];?></a></h6>
                                                <p class="text-secondary">&ensp;&nbsp;<?php echo $row["Description"];?>
                                                </p>
                                                <p class="text-muted" style= "margin-left:0px"; ><a href="javascript:void(0)">Qty: <?php echo $row["Qty"];?> </a>
                                                <span>&ensp;Help required till: <?php echo $row["Date"];?></span>
                                                    </p>
                                                    <span class="button" style="display: flex; float: right;margin-left:580px">
                                                    <input type="submit" onclick="window.location.href='donate.php'"
                                                        name="donate" value="Donate Now" > </span>
                                            
                                            <div class="text-muted small text-center align-self-center">
                                               
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                    }
                                }
                                ?>
                              
                                <ul class="pagination pagination-sm pagination-circle justify-content-center mb-0">
                                    <li class="page-item disabled">
                                        <span class="page-link has-icon"><i
                                                class="material-icons">chevron_left</i></span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                                    <li class="page-item active"><span class="page-link">2</span></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link has-icon" href="javascript:void(0)"><i
                                                class="material-icons">chevron_right</i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /Forum List -->


                            <!-- /Inner main body -->
                        </div>
                        <!-- /Inner main -->
                    </div>

                    <!-- New Thread Modal -->
                    <div class="modal fade" id="threadModal" tabindex="-1" role="dialog"
                        aria-labelledby="threadModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header d-flex align-items-center bg-primary text-white">
                                        <h6 class="modal-title mb-0" id="threadModalLabel">New Discussion</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="threadTitle">Title</label>
                                            <input type="text" class="form-control" id="threadTitle"
                                                placeholder="Enter title" autofocus="" />
                                        </div>
                                        <textarea class="form-control summernote" style="display: none;"></textarea>

                                        <div class="custom-file form-control-sm mt-3" style="max-width: 300px;">
                                            <input type="file" class="custom-file-input" id="customFile" multiple="" />
                                            <label class="custom-file-label" for="customFile">Attachment</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Event List Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Arya Vaishya Youth</h3>
            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
                placeat.</p>
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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