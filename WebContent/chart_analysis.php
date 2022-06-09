<?php   //view stock page
//since the user should sign up 1st then go to login so redirecting 
//this page to login.php

session_start(); //session_start should on evrry page */

// where we use session so session var can be acced globaly on any website

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con); //to check if the user is logged in  

  /*----------------------------------------------------------------------*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Required meta tags login -T-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grow-Wealth Chart</title>
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
            <li><a href="viewstock1.php"><b>Real-Time Stock Quotes</b></a></li>
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

    <section class="breadcrumbs" style="margin-bottom: 20px">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color:olive"><b>Stock-Trading Chart Analysis</b></h2>
          <ol>
            <li><a href="https://www.animatedimages.org/cat-hands-81.htm"><img src="https://www.animatedimages.org/data/media/81/animated-hand-image-0075.gif" border="0" alt="animated-hand-image-0075" /></a></li>
            <li><a href="company_price.php"><b>Buy Stocks</b></a></li>
            <li><a href="logout.php"><b>Log out</b></a></li>
          </ol>
        </div>
      </div>
    </section>
<!------------------------------- End Breadcrumbs ---------------------------------->

<!--==========================  IMPOTANT INNER PAGE =================================--->
  <div style="text-align: center;" >
    <h5 style="color: white;">
    <a href="https://www.animatedimages.org/cat-arrows-111.htm"><img src="https://www.animatedimages.org/data/media/111/animated-arrow-image-0270.gif" border="0" alt="animated-arrow-image-0270" /></a>
    To get more detailes about popular companies &nbsp;&nbsp;:- &nbsp;&nbsp;<a style="text-decoration: underline;" href="https://companiesmarketcap.com/usa/largest-companies-in-the-usa-by-market-cap/">Analyze Charts !!!</a></h5>
  </div>

  <!-- =====================Company Chart Section ===================== -->
    <section id="faq" class="faq section-bg" style="margin-top: 30px;">
      <div class="container">

        <div class="section-title">
          <p style="font-size: 18px"><b>Disclaimer</b> &nbsp;:-&nbsp; Stock investing requires analysis of financial data to find the company's true worth. The information shown here only informs about critical factors that you must look at before investing. Make sure you do your thorough stock analysis to make informed & calculated risk decisions.</p>
        </div>


        <div class="faq-list"> <!--shows list if items -->
          <ul>
            <li data-aos="fade-up"> <!--1st row-->
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1" 

              style="font-size: 25px"><b>Apple Inc.</b> - AAPL&nbsp;&nbsp;
              <img src="assets/company images/AAPL.webp">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                
                <p style="text-align: center;">
                  <b>Apple Inc. </b>is an American hardware and software developer and technology company that develops and sells computers, smartphones and consumer electronics as well as operating systems and application software. Apple also operates internet sales portals for music, films and software.
                </p>

                  <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/AAPL.png">
                
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed"
                style="font-size: 25px"><b>Meta (Facebook)</b> - FB&nbsp;&nbsp;
               <img src="assets/company images/FB.webp">
               <i class="bx bx-chevron-down icon-show"></i>
               <i class="bx bx-chevron-up icon-close"></i></a>
              
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p style="text-align: center;">
                  <b>Facebook Inc. </b>is an American company based in Menlo Park, California. The company owns the social network Facebook, the video and photo sharing app Instagram, the messenger WhatsApp and Oculus VR, the manufacturer of virtual reality hardware.
                </p>
                
                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/fb.png">

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed"
              style="font-size: 25px"><b>Amazon</b> - AMZN&nbsp;&nbsp;
              <img src="assets/company images/AMZN.webp">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  <b>Amazon.com, Inc. </b>is an American online retailer with a wide range of products. According to its own information, Amazon, as the market leader in Internet trade, has the world's largest selection of books, CDs and videos. Via the integrated sales platform Marketplace, private individuals or other companies can also offer new and used products as part of online trading. The Amazon Kindle is sold under its own brand as a reader for electronic books, the Amazon Fire HD tablet computer, the Fire TV set-top box, the Fire TV Stick HDMI stick and the Echo speech recognition system.
                </p>
                
                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/amzn.png">
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed"
              style="font-size: 25px"><b>Microsoft </b> - MSFT&nbsp;&nbsp;
              <img src="assets/company images/MSFT.webp">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Microsoft is an American company that develops and distributes software and services such as: a search engine (Bing), cloud solutions and the computer operating system Windows.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/msft.png">
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed"
              style="font-size: 25px"><b>PayPal  </b> - PYPL&nbsp;&nbsp;
              <img src="assets/company images/PYPL.webp">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  PayPal is the operator of an online payment service that can be used to pay medium and small amounts, for example when buying and selling online.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/pypl.png">

              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed"
              style="font-size: 25px"><b>Tesla  </b> - TSLA&nbsp;&nbsp;
              <img src="assets/company images/TSLA.webp">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  Tesla, Inc. is an American company that manufactures and sells electric cars, as well as power storage and photovoltaic systems. The company's goal is to “accelerate the transition to sustainable energy”. The company name is based on the physicist and inventor Nikola Tesla.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/tsla.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed"
              style="font-size: 25px"><b>Netflix  </b> - NFLX&nbsp;&nbsp;
              <img src="assets/company images/NFLX.webp">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list"aria-expanded="true">
                <p>
                  Netflix, Inc. is an American media company engaged in paid streaming and the production of films and series.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/nflx.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed"
              style="font-size: 25px"><b>Discovery  </b> - DISCA&nbsp;&nbsp;
              <img src="assets/company images/DISCA.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  As of January 2022 Discovery has a market cap of $13.53 Billion. This makes Discovery the world's 1302th most valuable company by market cap according to our data. The market capitalization, commonly called market cap, is the total market value of a publicly traded company's outstanding shares and is commonly used to mesure how much a company is worth
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/disca.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed"
              style="font-size: 25px"><b>Fox Corporation </b> - FOX&nbsp;&nbsp;
              <img src="assets/company images/FOX.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                 Fox Corporation or simply Fox is an American media company that primarily deals with TV channels, news broadcasts and sports broadcasts.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/fox.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed"
              style="font-size: 25px"><b>Meta (Facebook) </b> - FB&nbsp;&nbsp;
              <img src="assets/company images/FB.webp">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  Facebook Inc. is an American company based in Menlo Park, California. The company owns the social network Facebook, the video and photo sharing app Instagram, the messenger WhatsApp and Oculus VR, the manufacturer of virtual reality hardware.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/fb.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed"
              style="font-size: 25px"><b>JPMorgan Chase </b> - JPM&nbsp;&nbsp;
              <img src="assets/company images/JPM.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  As of January 2022 JPMorgan Chase has a market cap of $493.11 Billion. This makes JPMorgan Chase the world's 12th most valuable company by market cap according to our data. The market capitalization, commonly called market cap, is the total market value of a publicly traded company's outstanding shares and is commonly used to mesure how much a company is worth
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/jpm.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed"
              style="font-size: 25px"><b>Visa  </b> - V&nbsp;&nbsp;
              <img src="assets/company images/V.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  Visa Inc. is a stock corporation and, alongside Mastercard, one of the two major payment card companies and employed around 14,200 people in 2016. The VISA brand is a recursive acronym and stands for Visa International Service Association.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/v.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed"
              style="font-size: 25px"><b> Johnson & Johnson </b> - JNJ&nbsp;&nbsp;
              <img src="assets/company images/JNJ.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  Johnson & Johnson is a global American pharmaceutical and consumer goods company with headquarters in New Brunswick, New Jersey. The company is listed in the Dow Jones Industrial Average.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/jnj.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed"
              style="font-size: 25px"><b>NVIDIA </b> - NVDA&nbsp;&nbsp;
              <img src="assets/company images/NVDA.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  Nvidia Corporation is one of the largest developers of graphics processors and chipsets for personal computers and game consoles. The head office is in Santa Clara, California. NVIDIA Corporation does not have its own manufacturing facilities and therefore works according to the fabless principle.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/nvda.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed"
              style="font-size: 25px"><b>UnitedHealth </b> - UNH&nbsp;&nbsp;
              <img src="assets/company images/UNH.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  As of January 2022 UnitedHealth has a market cap of $464.57 Billion. This makes UnitedHealth the world's 14th most valuable company by market cap according to our data. The market capitalization, commonly called market cap, is the total market value of a publicly traded company's outstanding shares and is commonly used to mesure how much a company is worth.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/unh.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-16" class="collapsed"
              style="font-size: 25px"><b>Home Depot </b> - HD&nbsp;&nbsp;
              <img src="assets/company images/HD.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-16" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  The Home Depot, Inc is an American home improvement chain based in Atlanta. It operates 2,284 DIY stores (as of April 2018) in North America (USA, Canada, Mexico, Puerto Rico) and claims to be the largest DIY store chain in the world. The company has over 400,000 employees.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/hd.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-17" class="collapsed"
              style="font-size: 25px"><b>Walmart </b> - WMT&nbsp;&nbsp;
              <img src="assets/company images/WMT.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-17" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  Walmart Inc. is a global US retail group that dominates a large part of the US market. Walmart is number one in the Fortune Global 500 list of the top-selling companies in the world.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/wmt.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-18" class="collapsed"
              style="font-size: 25px"><b>Procter & Gamble </b> - PG&nbsp;&nbsp;
              <img src="assets/company images/PG.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-18" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                 The Procter & Gamble Company is an American consumer goods group with headquarters in Cincinnati, Ohio, which is represented in 70 countries.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/pg.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-19" class="collapsed"
              style="font-size: 25px"><b>Bank of America </b> - BAC&nbsp;&nbsp;
              <img src="assets/company images/BAC.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-19" class="collapse" data-bs-parent=".faq-list" aria-expanded="true">
                <p>
                  Bank of America Corporation is a major US bank headquartered in Charlotte, North Carolina. The company was at times the largest credit institution in the United States.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/bac.png">
                  
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-20" class="collapsed"
              style="font-size: 25px"><b>Visa  </b> - V&nbsp;&nbsp;
              <img src="assets/company images/V.png">
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-20" class="collapse" data-bs-parent=".faq-list" aria-expanded="true"  >
                <p>
                  Visa Inc. is a stock corporation and, alongside Mastercard, one of the two major payment card companies and employed around 14,200 people in 2016. The VISA brand is a recursive acronym and stands for Visa International Service Association.
                </p>

                <p style="color: #5C9F24; text-align: center;">
                    <b>- Chart Analysis -</b>
                  </p>
                  <img style="text-align: center;" src="assets/Company charts/v.png">
                  
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
 <!--================= End Frequently Asked Questions Section =======================-->
    
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">New & Insights</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
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
              <li><i class="bx bx-chevron-right"></i> Buy Stocks</li>
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