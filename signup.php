<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign-up - KARF | AGRI REVOLVING FUND</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Organic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
  />
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>

<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box}
  
  /* Full-width input fields */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }
  
  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }
  
  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }
  
  button:hover {
    opacity:1;
  }
  
  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }
  
  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn, .signupbtn {
    float: left;
    width: 50%;
  }
  
  /* Add padding to container elements */
  .container {
    padding: 16px;
  }
  
  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }
  
  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
  }
  </style>
<body>


<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- header -->
    <div class="header-top">
      <!-- nav -->
      <nav>
        <div id="logo">
          <h1>
            <a href="signup.html"><img style="height: 80px;" src="./images/Karf Logo.png" alt="logo"></a>
          </h1>
        </div>
        <!-- <div class="sub-header position-relative">
        </div>
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
          <li class="active">
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="#about">About Us</a>
          </li>
          <li>
            <a href="#service">Services</a>
          </li>
          <li>
            <li>
              <a href="#gallery">Programs</a>
            </li>
            <li>
              <a href="#gallery">Membership</a>
            </li>
            <li>
              <a href="#blog">Blog</a>
            </li>
            <li>
              <a href="#contact">Contact Us</a>
            </li>
            <li>
              <a href="login.html" class="login-button">Login</a>
            </li>
        </ul> -->
      </nav>
      <!-- //nav -->
    </div>
    <!-- //header -->
  </div>
  <!-- //banner -->

  <form action="signup_process.php" method='post' style="border:1px solid #ccc">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  
      <label for="fname"><b>Username</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>
  
      <label for="mname"><b>Middle Name</b></label>
      <input type="text" placeholder="Enter Middle Name" name="mname" required>
  
      <label for="lname"><b>SurName</b></label>
      <input type="text" placeholder="Enter SurName" name="lname" required>
  
      <label for="phonenumber"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter Phone Number" name="phonenumber" required>
  
      <label for="id_number"><b>National ID</b></label>
      <input type="text" placeholder="Enter National ID" name="id_number" required>
  
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  
      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="psw-repeat" required>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>  



<!-- <form action="/action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
</form> -->



<!-- footer -->
<section class="footer-w3layouts-bottem py-lg-4 py-md-3 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
      <div class="row ">
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Address</h4>
          <div class="bottom-para ">
            <div class="footer-office-hour">
              <ul>
                <li class="mb-2">
                  <h6>Address</h6>
                </li>
                <li>
                  <p>Melbourne,south Brisbane,
                    <br>QLD 4101,Aurstralia.</p>
                </li>
              </ul>
              <ul>
                <li class="my-2">
                  <h6>Phone</h6>
                </li>
                <li>
                  <p>+ 1 (234) 567 8901</p>
                </li>
                <li class="my-2">
                  <h6>Email</h6>
                </li>
                <li>
                  <p>
                    <a href="mailto:info@example.com">info@example.com</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">Twitter Us</h4>
          <div class="footer-office-hour">
            <ul>
              <li>
                <p>sit amet consectetur adipiscing</p>
              </li>
              <li class="my-1">
                <p>
                  <a href="mailto:info@example.com">info@example.com</a>
                </p>
              </li>
              <li class="mb-3">
                <span class="font-italic">Posted 3 days ago.</span>
              </li>
              <li>
                <p>sit amet consectetur adipiscing</p>
              </li>
              <li class="my-1">
                <p>
                  <a href="mailto:info@example.com">info@example.com</a>
                </p>
              </li>
              <li>
                <span class="font-italic">Posted 3 days ago.</span>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-bottom-info col-lg-4 col-md-4 ">
          <h4 class="pb-lg-4 pb-md-3 pb-3 ">NewsLetter</h4>
          <div class="newsletter">
            <form action="#" method="post" class="d-flex">
              <input type="email" name="Your Email" class="form-control" placeholder="Your Email" required="">
              <button class="btn1">
                <span class="fa fa-envelope-o" aria-hidden="true"></span>
              </button>
            </form>
          </div>
          <div class="footer-office-hour mt-3">
            <p>vehicula velit sagittis vehicula. Duis posuere ex in mollis iaculis. Suspendisse tincidunt velit sagittis vehicula</p>
          </div>
        </div>
      </div>
      <!-- move icon -->
      <div class="text-center mt-lg-5 mt-md-4 mt-3">
        <a href="#home" class="move-top text-center mt-3">
          <span class="fa fa-arrow-up" aria-hidden="true"></span>
        </a>
      </div>
      <!--//move icon -->
    </div>
  </section>
  <!--footer-copy-right -->
  <footer class="bottem-wthree-footer text-center py-md-4 py-3">
    <p>
      © 2024 KARF REVOLVING FUND. All Rights Reserved | Design by
      <a href="https://www.karf.co.ke" target="_blank">KARF Developers</a>
    </p>
  </footer>
  <!--//footer-copy-right -->


<!-- jQuery js -->
<script src="plugins/jquery/jquery-1.11.3.min.js"></script>
<!-- bootstrap js -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery ui js -->
<script src="plugins/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- owl carousel js -->
<script src="plugins/owl.carousel-2/owl.carousel.min.js"></script>
<!-- jQuery appear -->
<script src="plugins/jquery-appear/jquery.appear.js"></script>
<!-- jQuery countTo -->
<script src="plugins/jquery-countTo/jquery.countTo.js"></script>
<!-- jQuery validation -->
<script src="plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- gmap.js helper -->
<script src="http://maps.google.com/maps/api/js"></script>
<!-- gmap.js -->
<script src="plugins/gmap.js"></script>
<!-- mixit up -->
<script src="plugins/jquery.mixitup.min.js"></script>

<!-- revolution slider js -->
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>

<!-- fancy box -->
<script src="plugins/fancyapps-fancyBox/source/jquery.fancybox.pack.js"></script>
<!-- type script -->
<script src="plugins/typed.js-master/dist/typed.min.js"></script>

<!-- theme custom js  -->
<script src="js/main.js"></script>

<!-- <script>
	// Function to toggle the menu on mobile view
	function toggleMenu() {
		var x = document.getElementById("menuItems");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
	}
</script> -->

<!-- <script>
    // Function to toggle the menu on mobile view
    function toggleMenu() {
        var x = document.getElementById("menuItems");
        if (x.classList.contains("responsive")) {
            x.classList.remove("responsive");
            console.log("Menu closed"); // Log message when menu is closed
        } else {
            x.classList.add("responsive");
            console.log("Menu opened"); // Log message when menu is opened
        }
        console.log(x.classList); // Log the classList of menuItems element
    }
</script> -->

<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
</script>

<script>
    // Get the modal
    var modal = document.getElementById('id01');
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
  addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
  }, false);


  function hideURLbar() {
    window.scrollTo(0, 1);
  }
</script>

</body>
</html>