
<?php

  session_start();

  $logged_in = isset($_SESSION ['id_number']);
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>About us - KARF | AGRI REVOLVING FUND</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Organic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
  />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);


    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
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
  <!-- <div class="banner-left-side" id="home">
    <div class="overlay"></div> -->
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

  <!-- about -->
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <!-- <h3 class="title text-center mb-2">About Us</h3> -->
      <h3 class="about-us">About Us</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Welcome to KARF Kenya, where our mission transcends conventional boundaries to embrace a vision of agricultural empowerment that is both bold and transformative.
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
              <br>
              Through our unique blend of financial interventions, capacity-building initiatives, and community engagement programs, we seek to catalyze a ripple effect of positive change that reverberates across generations. We envision a future where every determined farmer is equipped with the tools to adapt to a changing climate, embrace sustainable practices, and harness the latest technologies to enhance productivity and profitability.
            </p>
          </div>
        </div>
        <section class="mission-vision">
            <h3>Our Mission</h3>
            <p>
              To revolutionize Kenya's agricultural landscape, not only by offering financial solutions, but also by nurturing a culture of innovation, resilience, and inclusivity.
            </p>
            <h3>Our Vision</h3>
            <p>To promote small-holder farmers.</p>
            <h3>Motivation</h3>
            <p>Let's all Farm.</p>
          </section>
          <section class="team">
            <h2>Meet Our Team</h2>
            <p>Our dedicated team is passionate about agriculture and committed to supporting your success.  Here are some of our key members:</p>
            <div class="team-member">
              <img src="./images/WILSON.jpg" alt="Team Member 1">
              <h4>Wilson Mwangangi</h4>
              <p>C.E.O & Co-founder</p>
            </div>

            <div class="team-member">
                <img src="./images/PERSON 2.jpg" alt="Team Member 1">
                <h4>Morris Ngumbao</h4>
                <p>Founder & Director Economics</p>
            </div>

            <div class="team-member">
                <img src="./images/PERSON 3.jpg" alt="Team Member 1">
                <h4>Daniel Mainda</h4>
                <p>Director Economics</p>
            </div>

            <div class="team-member">
                <img src="./images/PERSON 4.jpg" alt="Team Member 1">
                <h4>Peter Onsomu</h4>
                <p>Director ICT</p>
            </div>

            <div class="team-member">
              <img src="./images/Christine Wangeci Ndiritu.jpg" alt="Team Member 1">
              <h4>Christine Wangeci</h4>
              <p>Director Horticultural &extension services</p>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!--//about -->

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

</body>

</html>