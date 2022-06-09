<?php   //view stock page
//since the user should sign up 1st then go to login so redirecting 
//this page to login.php

session_start(); //session_start should on evrry page */

// where we use session so session var can be acced globaly on any website

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con); //to check if the user is logged in   
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Required meta tags login -T-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grow-Wealth STOCK DASHBOARD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin - v4.7.0
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!--Background color gradient for body-->
  <style> 
    body{
      background: #6A9113;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #141517, #6A9113);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #141517, #6A9113); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
     }
  </style>

</head>

<body> <!--======== C&P from second.html of Groovin================-->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- ============================= LOGO =================================-->
      <!-- Text as logo code-->
      <!-- <h1 class="logo"><a href="index.php">GW</a></h1> --> 
      <!-- to use an image as logo -->
      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid" width="150" height="300"></a>

<!-- ========================  NAVIGATION BAR =========================-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="https://www.animatedimages.org/cat-hands-81.htm"><img src="https://www.animatedimages.org/data/media/81/animated-hand-image-0075.gif" border="0" alt="animated-hand-image-0075" /></a></li>
            <li><a href="chart_analysis.php"><b>Historical - Chart Analysis</b></a></li>
            <li class="dropdown"><a href="#"><span>News & Insights</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="https://economictimes.indiatimes.com/markets">India-News</a></li>
                <li><a href="https://www.cnbc.com/world/?region=world">USA-News</a></li>
              </ul>
            </li> 
            <li><a class="nav-link scrollto" href="index.php">FAQ</a></li>
            <li><a class="nav-link scrollto" href="index.php">Contact</a></li>  
<!-- ========================================================== -->

<!-- ================= Back to Home page Button===================== -->        
      <li><a href="index.php"class="login"><img src="assets/img/back.png" alt="" class="img-fluid" width="70" height="50"></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!----------------------- End Header ------------------------------------------------>
  <main id="main">

<!--------------------- ======= Breadcrumbs ======= ------------------------------->

    <section class="breadcrumbs" style="margin-bottom: 30px">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color:olive"><b>Real-Time Stock Quotes</b></h2>
          <ol>
            <li><a href="https://www.animatedimages.org/cat-hands-81.htm"><img src="https://www.animatedimages.org/data/media/81/animated-hand-image-0075.gif" border="0" alt="animated-hand-image-0075" /></a></li>
            <li><a href="chart_analysis.php"><b>Chart Analysis</b></a></li>
            <li><a href="logout.php"><b>Log out</b></a></li>
          </ol>
        </div>
      </div>
    </section>
<!------------------------------- End Breadcrumbs ---------------------------------->

<!--==========================  IMPOTANT INNER PAGE =================================--->

    <h4 style="color: white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="https://www.animatedimages.org/cat-arrows-111.htm"><img src="https://www.animatedimages.org/data/media/111/animated-arrow-image-0270.gif" border="0" alt="animated-arrow-image-0270" /></a>Hello <?php echo $user_data['username']; ?>, Stay updated on trading world !!!</h4>

<!--Using Google api "sheet DB" software tool showing real time searchable, stock-quotes with beautiful design -->
    <div>
        <script src="https://sheetdb.io/s/t/jvp9orujxqat3.js"></script>
    </div>

    <p style="color: white" "padding-left: 90px">
          <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note :</b> To get more about detailes about specific companies <a href="chart_analysis.php" style="color: yellow" ><b>Click Here !!!</b></a></p>-->
    
    

  </main>
<!-- End #main -->

<!-- ============================ Footer ========================================== -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Grow Wealth</h3>
              <p>
                Banglore <br>
                Karnataka, India<br><br>
                <strong>Phone:</strong> +91 9988774455<br>
                <strong>Email:</strong> vkekuda@GrowWealth.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Home</li>
              <li><i class="bx bx-chevron-right"></i>About</li>
              <li><i class="bx bx-chevron-right"></i>Services</li>
              <li><i class="bx bx-chevron-right"></i>New & Insights</li>
              <li><i class="bx bx-chevron-right"></i>FAQ</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
        <!--  <li><i class="bx bx-chevron-right"></i> <a href="login.jsp">Account Creation</a></li>-->
              <li><i class="bx bx-chevron-right"></i> Study Real-Time Stock Dashboard</li>
              <li><i class="bx bx-chevron-right"></i> Analyze Market</li>
              <li><i class="bx bx-chevron-right"></i> New & Insights</li>
              <li><i class="bx bx-chevron-right"></i> Profit / Loss Simulator</li>
              <li><i class="bx bx-chevron-right"></i> Buy Stocks
            </ul>
          </div>

          <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>-->

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Grow Wealth</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        
        Designed by <a href="https://bootstrapmade.com/">GrowWealth Ltd.</a>
      </div>
    </div>
  </footer>
<!--================================== End Footer =============================================-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>