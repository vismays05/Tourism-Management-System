<?php 
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
  $userId = $_SESSION['userId'];
  $username = $_SESSION['username'];
}
else{
  $loggedin = false;
  $userId = 0;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Travel Devils</title>
<link rel="icon" href="images/logo.png">
<link rel="apple-touch-icon-precomposed" href="images/logo.png">
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- Custom CSS -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
<link href="css/style.css" rel="stylesheet">
<!-- Icons CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- Open sans Font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC:700" rel="stylesheet">
<!-- Responsive css -->
<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<header>
<div class="slide_menu_bg"></div>
<div class="slide_menu"><a href="#0" class="close"><i class="fa fa-times"></i></a>
<ul class="side-menu-list">
<li><a href="index.php">Home</a></li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="gallery.php">TRIP PHOTO GALLERY</a></li>
<li><a href="contact-us.php">Contact Us</a></li>
</ul>
</div>
<div class="container"><a href="index.php" class="brand"><img src="images/logo.png" alt=""></a>
<div class="nav-right">
<ul class="social">
<li><a href="#0"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@indiatraveldevils.in</a></li>
<li class="border_r"></li>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
</ul>
<ul class=" navbar-nav navbar-right">
	<?php if($loggedin){
          echo '<li class="dropdown" <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown" class="dropdown-toggle" style="padding:18px; color: #fff;"> Welcome ' .$username. ' <span class="caret"></a></li>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <ul class="drop-menu">
                <li><a style="color:#555;" href="profile.php">My Profile</a></li>
                <li><a style="color:#555;" href="booking.php">My Booking</a></li>
                <li><a style="color:#555;" href="change-password.php">Change Password</a></li>
                <li><a style="color:#555;" href="_logout.php">Logout</a></li>
                </ul>
              </div>';
        } else {?>
	<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signup/Login <span class="caret"></span></a>
<div class="dropdown-menu">
<div class="row">
<div class="col-md-3 col-sm-3">
	
	<ul class="drop-menu">
			<li><a data-toggle="modal" data-target="#signupModal">Signup</a></li>
			<li><a data-toggle="modal" data-target="#loginModal">Login</a></li>
			
	</ul>
</div>
</div>
</div>
</li>
<?php } ?>
<li>
<button id="menu_btn">Menu
<div><span></span><span></span><span></span></div>
</button>
</li>
</ul>
</div>
</div>
</header>
  <!-- Sign up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(249 128 27); padding: 1rem 2rem;">
            <h5 style="font-size: 2.25rem; font-weight: 600; padding-top: 8px;" class="modal-title" id="signupModal">SignUp Here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -24px!important;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="_handleSignup.php" method="post">
              <div class="form-row">
                <div class="form-group">
                  <b><label for="name">Name:</label></b>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name" required>
                </div>
              </div>
              <div class="form-group">
                  <b><label for="email">Email:</label></b>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
              </div>
              <div class="form-group">
                <b><label for="phone">Phone No:</label></b>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" required pattern="[0-9]{10}" maxlength="10">
                </div>
              <div class="form-group text-left my-2">
                  <b><label for="password">Password:</label></b>
                  <input class="form-control" id="password" name="password" placeholder="Enter Password" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <div class="form-group text-left my-2">
                  <b><label for="password1">Renter Password:</label></b>
                  <input class="form-control" id="cpassword" name="cpassword" placeholder="Renter Password" type="password" required data-toggle="password" minlength="4" maxlength="21">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <p class="mb-0 mt-1">Already have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginModal">Login here</a>.</p>
          </div>
        </div>
      </div>
    </div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(249 128 27); padding: 1rem 2rem;">
            <h5 style="font-size: 2.25rem; font-weight: 600; padding-top: 8px;" class="modal-title" id="loginModal">Login Here</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -24px!important;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="_handleLogin.php" method="post">
              <div class="form-group text-left my-2">
                  <b><label for="username">Email</label></b>
                  <input class="form-control" id="emailid" name="emailid" placeholder="Enter Your Email" type="text" required>
              </div>
              <div class="form-group text-left my-2">
                  <b><label for="password">Password</label></b>
                  <input class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter Your Password" type="password" required data-toggle="password">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <p class="mb-0 mt-1">Don't have an account? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signupModal">Sign up now</a>.</p>
          </div>
        </div>
      </div>
    </div>