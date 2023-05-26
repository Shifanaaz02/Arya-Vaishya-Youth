<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>AV Admin Page</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js">
	</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <link rel="stylesheet" href=
  "https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet"
      type="text/css" href=
  "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link href="../assets/css/style.css" rel="stylesheet">
  <style>
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */ 
  background-color: rgb(0 0 0 / 50%) /* Black w/ opacity */
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
  .form {
  background: #ffffffab;
  padding: 40px;
  /* max-width: 600px; */
  /* margin: 40px auto; */
  /* border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3); */
}
.top-area {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.top-area:after {
  content: "";
  display: table;
  clear: both;
}
.top-area li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  transition: .5s ease;
  border-radius: 25px;
}
.top-area li a:hover {
  background: #f2751d;
  color: #ffffff;
}
.top-area .active a {
  background: #f2751d;
  color: #ffffff;
  border-radius: 25px;
}
 
.tab-content > div:last-child {
  display: none;
}
 
h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}
label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 2vw;
  color: rgb(0 0 0 / 71%);
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #f2751d;
}
label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}
label.highlight {
  color: #ffffff;
}
input, textarea {
  font-size: 22px;
    display: block;
    width: 80%;
    height: 100%;
    background: none;
    padding-left: 1vh;
    background-image: none;
    border: 1px solid #a0b3b0;
    color: #200000;
    border-radius: 25px;
    transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus, textarea:focus {
  outline: 0;
  border-color: #f2751d;
}
textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}
.label-field {
  position: relative;
  margin-bottom: 2vh;
}
.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}
.forgot {
  margin-top: -20px;
  text-align: right;
}
@media (max-width: 765px) {
    label {
      left: 0;
    }    }
    form .button{
  height: 5vh;
  text-align: center;
}
form .button input{
  height: 100%;
  width: 60%;
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
 .navbar{
  -webkit-box-shadow: 0px 0px 0px 0px;
    -moz-box-shadow: 0px 0px 0px 0px;
    box-shadow: 0px 0px 0px 0px;
 }
 .container1{
   display: flex;
   align-content: center;
 text-align: center;
 width: 100%;
 background-color: #fff;
 padding: 0px 40px;
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
    justify-content: space-around;
    margin: 20px 0 12px 0;
}


form .user-details .input-box{
  margin-bottom: 15px;
    padding: 1vw;
    width: calc(100% / 2 - 1vh);
}
form .input-box span.details{
 display: block;
 font-weight: 500;
 margin-bottom: 5px;
}
.user-details .input-box input{
 height: 45px;
 width: 95%;
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
  display: flex;
  justify-content: center;
  padding: 0vh;
  background-color: rgba(255, 255, 255, 0);
}
form .button input{
  height: 100%;
  width: 12vw;
  border-radius: 25px;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 700;
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
 }
 @media(max-width: 459px){
 .container1 .content .category{
   flex-direction: column;
 }
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
    border-radius: 25px;
    position: relative;
    min-width: 8.23em;
    text-decoration: none;
    font-family: var(--font);
    font-size: 1.25rem;
}

.button:before,
.button:after {
    width: 4em;
    height: 2.5em;
    position: absolute;
    content: "";
    display: inline-block;
    background: #dfdfdf;
    border-radius: 100%;
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
.button:hover{
    color: #fd4902;
}
.button:hover:before,
.button:hover:after {
    transform: none;
}
.area{
  display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}
@media(max-width: 459px){
 .area{
   flex-direction: column;
 }
}
.page-body-wrapper {
    min-height: calc(100vh - 60px);
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    flex-direction: row;
    padding-left: 0;
    padding-right: 0;
    padding-top: 60px;
}
@media screen and (max-width: 1080px) {
  .page-body-wrapper{
    position: relative;
   flex-direction: column !important;
 }
 .sidebar-offcanvas {
    position: relative !important;
    right: 0px;
    top: 0px;
    display: flex;
}
.sidebar{
  min-height: auto;
}
ul.nav{
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: wrap !important;
    justify-content: center !important;
    align-content: flex-start !important;
}
}
.w3-sidebar {
    height: 100%;
    background-color: #fff;
    position: relative!important;
    z-index: 1;
    overflow: auto;
    width: 25%;
    position: fixed;
}
@media screen and (max-width: 1090px ){
    .side{
        justify-content: space-evenly;
    display: flex;
    }
    .start{
        flex-direction: column;
    }
    .leftside{
         width: auto;
     }    


}
select{
  border: none;
    height: 5vh;
    border-radius: 5px;
    font-weight: 600;
}
option{
  font-weight: 600;
  border: none;
}
#table_detail .hidden_row {
			display: none;
		}

    .table-responsive{
      border-radius: 2vh;
    }
    .table thead {
    vertical-align: bottom;
      background-color: #fd3402c0;
    }
    .table-striped tbody tr:nth-of-type(odd) {
	 background-color: #ffffff;
}
</style>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center justify-content-between">

          <!-- Uncomment below if you prefer to use an image logo -->
          <a href="index.html" class="logo"><img src="../assets/img/logo.svg" alt="" class="img-fluid"></a>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="active" href="index.html">Home</a></li>
                  <li><a href="about-youth.html">About Youth</a></li>
                  <li><a href="events.html">Youth Activity</a></li>
                  <li><a href="donor.html">Active Donors</a></li>
                  <li><a href="donate.html">Donate</a></li>
                 
                  <li><a href="contact.html">Contact</a></li>
                  
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
    </div>
    <div id="login">   
      <h1 style="margin: 1vh 0 1vh 0; color: #000;">Log In</h1>
    </div>
  </div>  
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="function.js"></script>
                      </div>
                    
                    </div>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->

      </div>
  </header>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <div style="display: flex;" class="start">
      <nav class="sidebar sidebar-offcanvas leftside" id="sidebar" style="margin-top: 5vh;">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" onclick="openCity(event, 'Paris')" id="defaultOpen">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">User</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="openCity(event, 'London')" id="defaultOpen">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Donations</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="openCity(event, 'Delhi')" id="defaultOpen">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Support</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="openCity(event, 'Mumbai')" id="defaultOpen">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Active Donors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="openCity(event, 'Pune')" id="defaultOpen">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Photo Orders</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="openCity(event, 'Chennai')" id="defaultOpen">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Add Your Activity</span>
            </a>
          </li>
         
        </ul>
      </nav>
      </div>
      <!-- partial -->
      <div class="main-panel">
        

        <div id="Paris" class="tabcontent">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome Aamir</h3>
                    <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                  </div>
                  <div class="col-12 col-xl-4">
                   <div class="justify-content-end d-flex">
                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                      <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        <a class="dropdown-item" href="#">January - March</a>
                        <a class="dropdown-item" href="#">March - June</a>
                        <a class="dropdown-item" href="#">June - August</a>
                        <a class="dropdown-item" href="#">August - November</a>
                      </div>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
            
          
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Users List</p>
                    <div class="row">
                      <div class="col-12">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover" id="table_detail">
                            <thead>
                                <tr>
                                    <th>AV ID</th>
                                    <th>Name</th>						
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>DoB</th>
                                    
                                    <th>Designation</th>
  
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="showHideRow('hidden_row1');">
                                    <td>123</td>
                                    <td><a href="#"> Michael Holz</a></td>
                                    <td>987654321</td>                        
                                    <td>Pune</td>
                                    <td>03/02/2000</td>
                                    
                                    <td>Owner</td>
                                </tr>
                                <tr id="hidden_row1" class="hidden_row">
                                    <td>
                                    <h4>
                                      Active Blood Donor
                                    </h4>
                                    <p>Yes</p>
                                  </td>
                                  <td>
                                    <h4>
                                      No. of Family Members
                                    </h4>
                                    <p>5</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra1
                                    </h4>
                                    <p>ABCD</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra2
                                    </h4>
                                    <p>WXYZ</p>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_row2');">
                                    <td>234</td>
                                    <td><a href="#">Paula Wilson</a></td>
                                    <td>987654321</td>                       
                                    <td>Pune</td>
                                    <td>03/02/2000</td>
                                    
                                    <td>Owner</td>
                                </tr>
                                <tr id="hidden_row2" class="hidden_row">
                                  <td>
                                    <h4>
                                      Active Blood Donor
                                    </h4>
                                    <p>No</p>
                                  </td>
                                  <td>
                                    <h4>
                                      No. of Family Members
                                    </h4>
                                    <p>5</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra1
                                    </h4>
                                    <p>ABCD</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra2
                                    </h4>
                                    <p>WXYZ</p>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_row3');">
                                    <td>345</td>
                                    <td><a href="#">Antonio Moreno</a></td>
                                    <td>987654321</td>
                                    <td>Pune</td>
                                    <td>03/02/2000</td>
                                              
                                    <td>Owner</td>                       
                                </tr>
                                <tr id="hidden_row3" class="hidden_row">
                                  <td>
                                    <h4>
                                      Active Blood Donor
                                    </h4>
                                    <p>Yes</p>
                                  </td>
                                  <td>
                                    <h4>
                                      No. of Family Members
                                    </h4>
                                    <p>5</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra1
                                    </h4>
                                    <p>ABCD</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra2
                                    </h4>
                                    <p>WXYZ</p>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_row4');">
                                    <td>456</td>
                                    <td><a href="#">Mary Saveley</a></td>
                                    <td>987654321</td>
                                    <td>Pune</td>
                                    <td>03/02/2000</td>
                                    
                                    <td>Owner</td>
                                </tr>
                                <tr id="hidden_row4" class="hidden_row">
                                  <td>
                                    <h4>
                                      Active Blood Donor
                                    </h4>
                                    <p>Yes</p>
                                  </td>
                                  <td>
                                    <h4>
                                      No. of Family Members
                                    </h4>
                                    <p>5</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra1
                                    </h4>
                                    <p>ABCD</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra2
                                    </h4>
                                    <p>WXYZ</p>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_row5');">
                                    <td>567</td>
                                    <td><a href="#">Martin Sommer</a></td>
                                    <td>987654321</td>                        
                                    <td>Pune</td>
                                    <td>03/02/2000</td>
                                    
                                    <td>Owner</td>
                                </tr>
                                <tr id="hidden_row5" class="hidden_row">
                                  <td>
                                    <h4>
                                      Active Blood Donor
                                    </h4>
                                    <p>No</p>
                                  </td>
                                  <td>
                                    <h4>
                                      No. of Family Members
                                    </h4>
                                    <p>5</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra1
                                    </h4>
                                    <p>ABCD</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Gotra2
                                    </h4>
                                    <p>WXYZ</p>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_row6');">
                                  <td>567</td>
                                  <td><a href="#">Martin Sommer</a></td>
                                  <td>987654321</td>                        
                                  <td>Pune</td>
                                  <td>03/02/2000</td>
                                  
                                  <td>Owner</td>
                              </tr>
                              <tr id="hidden_row6" class="hidden_row">
                                <td>
                                  <h4>
                                    Active Blood Donor
                                  </h4>
                                  <p>No</p>
                                </td>
                                <td>
                                  <h4>
                                    No. of Family Members
                                  </h4>
                                  <p>5</p>
                                </td>
                                <td>
                                  <h4>
                                    Gotra1
                                  </h4>
                                  <p>ABCD</p>
                                </td>
                                <td>
                                  <h4>
                                    Gotra2
                                  </h4>
                                  <p>WXYZ</p>
                                </td>
                                <td>
                                  <img src="" height="30vh" width="30vw">
                                </td>
                                </td>
                              </tr>

                              <tr onclick="showHideRow('hidden_row7');">
                                <td>567</td>
                                <td><a href="#">Martin Sommer</a></td>
                                <td>987654321</td>                        
                                <td>Pune</td>
                                <td>03/02/2000</td>
                                
                                <td>Owner</td>
                            </tr>
                            <tr id="hidden_row7" class="hidden_row">
                              <td>
                                <h4>
                                  Active Blood Donor
                                </h4>
                                <p>No</p>
                              </td>
                              <td>
                                <h4>
                                  No. of Family Members
                                </h4>
                                <p>5</p>
                              </td>
                              <td>
                                <h4>
                                  Gotra1
                                </h4>
                                <p>ABCD</p>
                              </td>
                              <td>
                                <h4>
                                  Gotra2
                                </h4>
                                <p>WXYZ</p>
                              </td>
                              <td>
                                <img src="" height="30vh" width="30vw">
                              </td>
                              </td>
                            </tr>

                            <tr onclick="showHideRow('hidden_row8');">
                              <td>567</td>
                              <td><a href="#">Martin Sommer</a></td>
                              <td>987654321</td>                        
                              <td>Pune</td>
                              <td>03/02/2000</td>
                              
                              <td>Owner</td>
                          </tr>
                          <tr id="hidden_row8" class="hidden_row">
                            <td>
                              <h4>
                                Active Blood Donor
                              </h4>
                              <p>No</p>
                            </td>
                            <td>
                              <h4>
                                No. of Family Members
                              </h4>
                              <p>5</p>
                            </td>
                            <td>
                              <h4>
                                Gotra1
                              </h4>
                              <p>ABCD</p>
                            </td>
                            <td>
                              <h4>
                                Gotra2
                              </h4>
                              <p>WXYZ</p>
                            </td>
                            <td>
                              <img src="" height="30vh" width="30vw">
                            </td>
                            </td>
                          </tr>

                          <tr onclick="showHideRow('hidden_row9');">
                            <td>567</td>
                            <td><a href="#">Martin Sommer</a></td>
                            <td>987654321</td>                        
                            <td>Pune</td>
                            <td>03/02/2000</td>
                            
                            <td>Owner</td>
                        </tr>
                        <tr id="hidden_row9" class="hidden_row">
                          <td>
                            <h4>
                              Active Blood Donor
                            </h4>
                            <p>No</p>
                          </td>
                          <td>
                            <h4>
                              No. of Family Members
                            </h4>
                            <p>5</p>
                          </td>
                          <td>
                            <h4>
                              Gotra1
                            </h4>
                            <p>ABCD</p>
                          </td>
                          <td>
                            <h4>
                              Gotra2
                            </h4>
                            <p>WXYZ</p>
                          </td>
                          <td>
                            <img src="" height="30vh" width="30vw">
                          </td>
                          </td>
                        </tr>

                            </tbody>
                        </table>
                        
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      
    

        <div id="London" class="tabcontent">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="area">
                    <div class="wrapper">
                      <a class="button" href="#">
                        <button id="myBtn" class="button" style="border: none;">Approve</button>
                      </a>
                   </div>
                   <div class="wrapper">
                     <a class="button" href="#">
                       <button id="myBtn" class="button" style="border: none;">Donate</button>
                     </a>
                   </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
          
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title">Donors List</p>
                    <div class="row">
                      <div class="col-12">
                        <div class="table-responsive">
                          <table class="table table-striped table-hover" id="table_detail">
                            <thead>
                                <tr>
                                    <th>Donor ID</th>
                                    <th>Name</th>						
                                    <th>Donor Type</th>
                                    <th>Quantity</th>
                                    <th>AV ID</th>
                                    <th>Status</th>
                                    <th>Donated To</th>
  
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="showHideRow('hidden_rowa1');">
                                    <td>123</td>
                                    <td><a href="#"> Michael Holz</a></td>
                                    <td>Blood</td>                        
                                    <td>2</td>
                                    <td>567</td>
                                    <td>In Progress</td>
                                    <td><a href="#">Paula Wilson</a></td>
                                </tr>
                                <tr id="hidden_rowa1" class="hidden_row">
                                    <td>
                                    <h3>
                                      Description
                                    </h3>
                                    <p>Lorem Impsum Dolor</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Remaining portion Magnum de col
                                    </h4>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_rowa2');">
                                    <td>234</td>
                                    <td><a href="#">Paula Wilson</a></td>
                                    <td>Education</td>                       
                                    <td>6</td>
                                    <td>456</td>
                                    <td>Expired</td>
                                    <td><a href="#">Antonio Moreno</a></td>
                                </tr>
                                <tr id="hidden_rowa2" class="hidden_row">
                                    <td>
                                    <h3>
                                      Description
                                    </h3>
                                    <p>Lorem Impsum Dolor</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Remaining portion Magnum de col
                                    </h4>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_rowa3');">
                                    <td>345</td>
                                    <td><a href="#">Antonio Moreno</a></td>
                                    <td>Medical</td>
                                    <td>1200</td>
                                    <td>345</td>
                                    <td>Inactive</td>          
                                    <td><a href="#">Mary Saveley</a></td>                       
                                </tr>
                                <tr id="hidden_rowa3" class="hidden_row">
                                    <td>
                                    <h3>
                                      Description
                                    </h3>
                                    <p>Lorem Impsum Dolor</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Remaining portion Magnum de col
                                    </h4>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_rowa4');">
                                    <td>456</td>
                                    <td><a href="#">Mary Saveley</a></td>
                                    <td>Kirana</td>
                                    <td>800</td>
                                    <td>234</td>
                                    <td>Active</td>
                                    <td><a href="#">Martin Sommer</a></td>
                                </tr>
                                <tr id="hidden_rowa4" class="hidden_row">
                                    <td>
                                    <h3>
                                      Description
                                    </h3>
                                    <p>Lorem Impsum Dolor</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Remaining portion Magnum de col
                                    </h4>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                                <tr onclick="showHideRow('hidden_rowa5');">
                                    <td>567</td>
                                    <td><a href="#">Martin Sommer</a></td>
                                    <td>Blood</td>                        
                                    <td>4</td>
                                    <td>123</td>
                                    <td>Pending</td>
                                    <td><a href="#"> Michael Holz</a></td>
                                </tr>
                                <tr id="hidden_rowa5" class="hidden_row">
                                    <td>
                                    <h3>
                                      Description
                                    </h3>
                                    <p>Lorem Impsum Dolor</p>
                                  </td>
                                  <td>
                                    <h4>
                                      Remaining portion Magnum de col
                                    </h4>
                                  </td>
                                  <td>
                                    <img src="" height="30vh" width="30vw">
                                  </td>
                                  </td>
                                </tr>

                            </tbody>
                        </table>
                        
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>


      <div id="Mumbai" class="tabcontent">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="area">
                  <div class="wrapper">
                    <a class="button" href="#">
                      <button id="myBtn" class="button" style="border: none;">Approve</button>
                    </a>
                 </div>
                 <div class="wrapper">
                   <a class="button" href="#">
                     <button id="myBtn" class="button" style="border: none;">Add Donor</button>
                   </a>
                 </div>
                </div>
              </div>
            </div>
          </div>
          
        
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Donors List</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                  <th>#</th>
                                  <th>Name</th>						
                                  <th>Blood Group</th>
                                  <th>Address</th>
                                  <th>Mobile Number</th>

                              </tr>
                          </thead>
                          <tbody>

                              <?php
                              include_once '..\db.php'; 
                               $sr=0;
                               $sql = "SELECT name,Blood_grp,Address,mobile FROM register WHERE active_doner='Yes'";
                                $result = $conn-> query($sql);
                                if($result!==false && $result-> num_rows > 0){
                                while ($row = $result-> fetch_assoc()){
                                  $sr++;
                            ?>
                                 <tr>
                                    <td><?php echo $sr;?></td>
                                    <td><a href="#"><?php echo $row["name"];?></a></td>
                                    <td><?php echo $row["Blood_grp"];?></td>
                                    <td><?php echo $row["Address"];?></td>
                                    <td><?php echo $row["mobile"];?></td>
                                </tr>
                                <?php  } ?>
                                           
                          </tbody>
                         
                          </table>
                          <?php  } ?>
                        
                      
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
      


    <div id="Delhi" class="tabcontent">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="area">
                
               <div class="wrapper">
                 <a class="button" href="../support.php">
                   <button id="myBtn" class="button" style="border: none;">Add Support</button>
                 </a>
               </div>
              </div>
            </div>
          </div>
        </div>
        
      
        <div class="row">
          <div class="col-md-12  stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title">Support List</p>
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="padding-right: 0px !important;">Support Id</th>
                                <th>Support Asked by</th>						
                                <th>Support Type</th>
                                <th>Desciption</th>
                                <th>Quantity</th>
                                <th>Response</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="padding-right: 0px !important;">01</td>
                                <td><a href="#"> Michael Holz</a></td>
                                <td>Blood</td>                        
                                <td>Lorem Impsum D</td>
                                <td>5</td>
                                <td><b><select id="cars" name="cars">
                                  <option value="pending">pending</option>
                                  <option value="completed">completed</option>
                                  <option value="not possible">not possible</option>
                                  <option value="Partial">Partial</option>
                                </select></td>
                            </tr>
                            <tr>
                              <td style="padding-right: 0px !important;">02</td>
                                <td><a href="#">Paula Wilson</a></td>
                                <td>Kirana</td>                       
                                <td>Lorem Impsum D</td>
                                <td>9</td>
                                <td><b><select id="cars" name="cars">
    <option value="pending">pending</option>
    <option value="completed">completed</option>
    <option value="not possible">not possible</option>
    <option value="Partial">Partial</option>
  </select></td>
                            </tr>
                            <tr>
                              <td style="padding-right: 0px !important;">03</td>
                                <td><a href="#">Antonio Moreno</a></td>
                                <td>Educational</td>
                                <td>Lorem Impsum D</td>
                                <td>7</td>        
                                <td><b><select id="cars" name="cars">
    <option value="pending">pending</option>
    <option value="completed">completed</option>
    <option value="not possible">not possible</option>
    <option value="Partial">Partial</option>
  </select></td>                      
                            </tr>
                            <tr>
                              <td style="padding-right: 0px !important;">04</td>
                                <td><a href="#">Mary Saveley</a></td>
                                <td>Medical</td>
                                <td>Lorem Impsum D</td>
                                <td>8</td>
                                <td><b><select id="cars" name="cars">
    <option value="pending">pending</option>
    <option value="completed">completed</option>
    <option value="not possible">not possible</option>
    <option value="Partial">Partial</option>
  </select></td>
                            </tr>
                            <tr>
                              <td style="padding-right: 0px !important;">05</td>
                                <td><a href="#">Martin Sommer</a></td>
                                <td>Thing</td>                        
                                <td>Lorem Impsum D</td>
                                <td>9</td>
                                <td><b><select id="cars" name="cars">
    <option value="pending">pending</option>
    <option value="completed">completed</option>
    <option value="not possible">not possible</option>
    <option value="Partial">Partial</option>
  </select></td>  
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
                
              </div>
              
              </div>
              
            </div>
            
          </div>
          <div class="wrapper" style="float: right; justify-content: flex-end;">
            <a class="button" href="#">
              <button id="myBtn" class="button" style="border: none;         
              padding: 1vh 0.5vh; min-width: 5.23em;">Approve</button>
            </a>
         </div>
        </div>
    </div>
  </div>


  <div id="Pune" class="tabcontent">
    <div class="content-wrapper">
      <!-- <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="area">
              <div class="wrapper">
                <a class="button" href="#">
                  <button id="myBtn" class="button" style="border: none;">Approve</button>
                </a>
             </div>
             <div class="wrapper">
               <a class="button" href="#">
                 <button id="myBtn" class="button" style="border: none;">Add Donor</button>
               </a>
             </div>
            </div>
          </div>
        </div>
      </div> -->
      
    
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Photo Orders List</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                          <tr>
                              <th>Order ID</th>
                              <th>Order Type</th>						
                              <th>Order Date</th>
                              <th>Address</th>
                              <th>Mobile Number</th>

                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Photo</a></td>
                              <td>A+</td>                        
                              <td>Kalyani Nagar, Pune-411014</td>
                              <td>912345678</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>Logo</td>
                              <td>B+</td>                       
                              <td>Kalyani Nagar, Pune-411014</td>
                              <td>912345678</td>
                              
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Photo</td>
                              <td>O+</td>
                              <td>Kalyani Nagar, Pune-411014</td>
                              <td>912345678</td>          
                                                     
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>Photo</td>
                              <td>AB-</td>
                              <td>Kalyani Nagar, Pune-411014</td>
                              <td>912345678</td>
                              
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>Logo</td>
                              <td>O-</td>                        
                              <td>Kalyani Nagar, Pune-411014</td>
                              <td>912345678</td>
                              
                          </tr>
                      </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

<!-- 
  <div id="Chennai" class="tabcontent">
    <div class="content-wrapper">
      <div class="row">
      </div>
    
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title" style="color: #d03f07;
              margin-bottom: 1vh;
              text-transform: capitalize;
              font-size: 4vh;
              font-weight: 600;
              text-align: center;">Add Youth Activity</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <div class="container1">
                      <div class="content">
                        <form action="#">
                          <div class="user-details">
                           
                            <div class="input-box">
                              <span class="details">Event Name</span>
                              <input type="text" placeholder="Enter Event name" required>
                            </div>
                            <div class="input-box">
                              <span class="details">Enter Event Time</span>
                              <input type="time" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                              <span class="details">Date of Event</span>
                              <input type="date" placeholder="Enter Event Date" required>
                            </div>
                            
                            <div class="input-box">
                              <span class="details">Desciption</span>
                              <input type="text" placeholder="Enter Event Desciption" required>
                            </div>
                          <div class="input-box" style="display: flex;">
                              <span class="details">Add Event Photo</span>
                              <input type="file" required style="size: 3vw; border: 0;">
                            </div>
                          </div>
                          
                          <div class="button">
                            <input type="submit" value="Add Event">
                          </div>
                        
                        </form>
                      </div>
                    </div>
                  
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div> -->

<div id="Chennai" class="tabcontent">
    <div class="content-wrapper">
      <div class="row">
      </div>
    
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title" style="color: #d03f07;
              margin-bottom: 1vh;
              text-transform: capitalize;
              font-size: 4vh;
              font-weight: 600;
              text-align: center;">Add Youth Activity</p>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <div class="container1">
                      <div class="content">
                        <form action="youth_activity.php" method="post" enctype="multipart/form-data">
                          <div class="user-details">
                           
                            <div class="input-box">
                              <span class="details">Event Name</span>
                              <input type="text" name="name" placeholder="Enter Event name" required>
                            </div>
                            <div class="input-box">
                              <span class="details">Enter Event Time</span>
                              <input type="time" name="time" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                              <span class="details">Date of Event</span>
                              <input type="date" name="date" placeholder="Enter Event Date" required>
                            </div>
                            
                            <div class="input-box">
                              <span class="details">Desciption</span>
                              <input type="text" name="description" placeholder="Enter Event Desciption" required>
                            </div>
                          <div class="input-box" style="display: flex;">
                              <span class="details">Add Event Photo</span>
                              <input type="file" name="photo" required style="size: 3vw; border: 0;">
                            </div>
                          </div>
                          
                          <div class="button">
                            <input type="submit" name="submit" value="Add Event">
                          </div>
                        
                        </form>
                      </div>
                    </div>
                  
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
    	<script type="text/javascript">
        function showHideRow(row) {
          $("#" + row).toggle();
        }
      </script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/js/main.js"></script>../
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/dashboard1.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

