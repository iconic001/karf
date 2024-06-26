
<?php

  session_start();

  $logged_in = isset($_SESSION ['id_number']);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Home - KARF | AGRI REVOLVING FUND</title>
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

<body>
  <!-- //banner -->
  <div class="banner-left-side" id="home">
    <div class="overlay"></div>
    <!-- header -->
    <div class="header-top">
      <!-- nav -->
      <nav>
        <div id="logo">
          <h1>
            <a href="index.php"><img style="height: 80px;" src="./images/Karf Logo.png" alt="logo"></a>
          </h1>
        </div>
        <div class="sub-header position-relative">
        </div>
        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
          <li class="active">
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="aboutus.php">About Us</a>
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

            <?php if (!$logged_in): ?>
              <li>
              <a href="login.php" class="login-button">Login</a>
            </li>
            <?php endif; ?>
            
        </ul>
      </nav>
      <!-- //nav -->
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="main-banner text-center">
      <div class="container">
        <div class="banner-right-txt">
          <h5 class="mb-sm-3 mb-2" style="z-index: 1;">Revolutionizing the Agricultural Landscape</h5> <!-- Adjust z-index to make text appear above -->
          <h4 style="z-index: 1;"> Agri-Revolving Fund </h4> <!-- Adjust z-index to make text appear above -->
        </div>
        <div class="slide-info-txt" style="z-index: 1;">
          <p style="z-index: 1;">Welcome to KARF Kenya, where our mission transcends conventional boundaries to embrace a vision of agricultural empowerment that is both bold and transformative.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- //banner -->
  <!-- about -->
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">About Us</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>
          Welcome to KARF Kenya, where our mission transcends conventional boundaries to embrace a vision of agricultural empowerment that is both bold and transformative.
        </p>
      </div>
      <div class="row">
        <div class="col-lg-5 video-info-img text-center position-relative">
          <div class="abut-img-w3l">
            <img src="./images/extention services.jpg" alt="" class="img-fluid">
          </div>
          <div class="abut-img-two">
            <img src="images/bb2.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-7 left-abut-txt ">
          <div class="about-right-grid">
            <h2 class="mb-3">Check out our Vision</h2>
            <p>
              We are committed to unlocking the full potential of every individual, particularly those who have long been overlooked. Our aim is to empower smallholder farmers, youth groups, women groups, or aspiring agricultural entrepreneurs with the knowledge, resources, and opportunities they need to thrive.
              Through our unique blend of financial interventions, capacity-building initiatives, and community engagement programs, we seek to catalyze a ripple effect of positive change that reverberates across generations. We envision a future where every determined farmer is equipped with the tools to adapt to a changing climate, embrace sustainable practices, and harness the latest technologies to enhance productivity and profitability.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//about -->
  <!-- store-info -->
  <section class="store-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7 store-details">
          <h4 class="mb-3">Agri Information</h4>
          <h6 class="mb-2">Since:2024</h6>
          <p>Through our unique blend of financial interventions, capacity-building initiatives, and community engagement programs, we seek to catalyze a ripple effect of positive change that reverberates across generations. We envision a future where every determined farmer is equipped with the tools to adapt to a changing climate, embrace sustainable practices, and harness the latest technologies to enhance productivity and profitability</p>
          <div class="view-buttn mt-md-4 mt-3">
            <a href="aboutus.html">Read More</a>
          </div>
        </div>

        <div class="col-lg-5 store-image-right">
          <img src="./images/b1.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!--//store-info -->
  <!-- service -->
  <section class="service py-lg-4 py-md-4 py-sm-3 py-3" id="service">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Services</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="./images/credit services.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
                Credit Services
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="./images/financial planning.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
                Financial Planning
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="./images/investment advisory.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
                Investment Advisory
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="./images/technology solutions.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
                Agri Technologies
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="./images/market research.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
                Market Research
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 ser-icon text-center my-3">
          <div class="grid-wthree-service">
            <img src="./images/extention services.jpg" alt="news image" class="img-fluid">
            <div class="ser-text-wthree mt-3">
              <h4>
                Extention Services
              </h4>
              <p class="mt-2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</p>
              <a href="#" class="btn btn-primary mt-3">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//service -->
  <!-- vegetable-info -->
  <!-- <section class="veg-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7">
          <img src="images/bb4.jpg" alt="news image" class="img-fluid">
        </div>
        <div class="col-lg-5 veg-list-text">
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-lg-2 py-1 w3three-veg-org">
              <h6>$ 3.50</h6>
              <h5 class="my-2">BeetRoot</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
              <img src="images/v1.jpg" alt="news image" class="img-fluid">
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-2 py-1 w3three-veg-org">
              <h6>$ 2.75</h6>
              <h5 class="my-2">Tomato</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
              <img src="images/v2.jpg" alt="news image" class="img-fluid">
            </div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-2 py-1 w3three-veg-org">
              <h6>$ 5.20</h6>
              <h5 class="my-2">Carrot</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
              <img src="images/v3.jpg" alt="news image" class="img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7 col-7 text-right py-2 py-1 w3three-veg-org">
              <h6>$ 3.00</h6>
              <h5 class="my-2">Berries</h5>
              <p>consectetuer adip sit amet</p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-5 p-0">
              <img src="images/v4.jpg" alt="news image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--//vegetable-info -->
  <!-- gallery -->
  <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Gallery </h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="row gallery-info">
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal1">
              <img src="images/g1.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal2">
              <img src="images/bb2.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal3">
              <img src="images/bb3.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal4">
              <img src="images/g2.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal5">
              <img src="images/g3.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 gallery-img-grid my-3">
          <div class="gallery-grids">
            <a href="#gal6">
              <img src="images/g4.jpg" alt="news image" class="img-fluid">
            </a>
          </div>
        </div>
      </div>
      <!-- popup-->
      <div id="gal1" class="popup-effect">
        <div class="popup">
          <img src="images/g1.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal2" class="popup-effect">
        <div class="popup">
          <img src="images/bb2.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal3" class="popup-effect">
        <div class="popup">
          <img src="images/bb3.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal4" class="popup-effect">
        <div class="popup">
          <img src="images/g2.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal5" class="popup-effect">
        <div class="popup">
          <img src="images/g3.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal6" class="popup-effect">
        <div class="popup">
          <img src="images/g4.jpg" alt="Popup Image" class="img-fluid">
          <a class="close" href="#gallery">×</a>
        </div>
      </div>
      <!-- //popup -->
    </div>
  </section>
  <!--//gallery -->
  <!-- blog -->
  <section class="blog py-lg-5 py-md-4 py-sm-3 py-3" id="blog">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Blog</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="row">
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <img src="images/bb2.jpg" class="img-fluid" alt="">
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>JUL</li>
                  <li>15</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Health Benefits of a Raw Food </a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">12/4/2019</a>
                </li>
                <li>
                  <a href="#">3 Tags</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <img src="images/bb3.jpg" class="img-fluid" alt="">
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>JUL</li>
                  <li>15</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Health Benefits of a Raw Food </a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">12/4/2019</a>
                </li>
                <li>
                  <a href="#">3 Tags</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="blog-wthree-color col-lg-4 position-relative my-3">
          <div class="w3ls-post-img">
            <img src="images/g4.jpg" class="img-fluid" alt="">
            <div class="blog-info">
              <a href="#about">
                <ul>
                  <li>JUL</li>
                  <li>15</li>
                </ul>
              </a>
            </div>
          </div>
          <div class="blog-txt-info">
            <h4 class="mb-2">
              <a href="#about">Health Benefits of a Raw Food </a>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
            <div class="news-date-list pt-2">
              <ul>
                <li class="mr-1">
                  <a href="#">12/4/2019</a>
                </li>
                <li>
                  <a href="#">3 Tags</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//blog -->
  <section>
    <div class="container-fulid">
      <div class="address_mail_footer_grids">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
      </div>
    </div>
  </section>
  <!-- contact -->
  <section class="contact py-lg-4 py-md-4 py-sm-3 py-3" id="contact">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Get In Touch</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum
        </p>
      </div>
      <div class="contact-form">
        <form action="#" method="post">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="First Name" required="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Last Name" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Phone" required="">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="email" class="form-control" placeholder="Email" required="">
            </div>
          </div>
          <div class="form-group contact-forms">
            <textarea class="form-control" placeholder="Meassage" required=""></textarea>
          </div>
          <button type="submit" class="btn sent-butnn btn-lg">Send</button>
        </form>
      </div>
    </div>
  </section>
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