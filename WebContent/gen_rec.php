<?php   

    session_start(); //session_start should on evrry page */
    // where we use session so session var can be acced globaly on any website

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con); //to check if the user is logged in   

    //var declaration
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gw_lenovo_db";         
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Required meta tags login -T-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grow-Wealth Generate Receipt</title>
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

         /* CSS */
        .button-73 {
          appearance: none;
          background-color: #FFFFFF;
          border-radius: 40em;
          border-style: none;
          box-shadow: #ADCFFF 0 -12px 6px inset;
          box-sizing: border-box;
          color: #000000;
          cursor: pointer;
          display: inline-block;
          font-family: -apple-system,sans-serif;
          font-size: 1.2rem;
          font-weight: 700;
          letter-spacing: -.24px;
          margin: 0;
          outline: none;
          padding: 0rem 0rem;
          quotes: auto;
          text-align: center;
          text-decoration: none;
          transition: all .15s;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
        }

        .button-73:hover {
          background-color: #FFC229;
          box-shadow: #FF6314 0 -6px 8px inset;
          transform: scale(1.125);
        }

        .button-73:active {
          transform: scale(1.025);
        }

        @media (min-width: 768px) {
          .button-73 {
            font-size: 1.45rem;
            padding: 0.5rem 0.5rem;
          }
        }
     </style>
     <link rel="stylesheet" type="text/css" href="assets/dist/style_buy_design_form.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js" ></script>

</head>

</head>

<body> 
  <!--======== C&P from second.html of Groovin================-->

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
            <li><a href="viewstock1.php"><b>Real-Time Stock Dashboard</b></a></li>
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
<!----------------------- End Header --------------------------------------->
  
  <main id="main">

<!--------------------- ======= Breadcrumbs ======= ------------------------------->
<div style="background-image: url(assets/about.jpg); background-size: cover; background-attachment: fixed; margin-top: 85px;">

    <section class="breadcrumbs" style="margin-bottom: 20px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color:olive"><b>Receipt</b></h2>
          <ol>
            <li><a href="https://www.animatedimages.org/cat-hands-81.htm"><img src="https://www.animatedimages.org/data/media/81/animated-hand-image-0075.gif" border="0" alt="animated-hand-image-0075" /></a></li>
            <li><a href="company_price.php"><b>Buy Stock</b></a></li>
            <li><a href="logout.php"><b>Log out</b></a></li>
          </ol>
        </div>
      </div>
    </section>
<!------------------------ End Breadcrumbs ---------------------------------->

<!--==================  IMPOTANT INNER PAGE ============================--->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!---------------------------------------->

    <div class="container-fluid" style="margin-top: 30px; margin-left: 30px; margin-right: 30px;">
      <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8">
           <!--transparent black container-->
           <div class="container" style="background-color: rgba(0,0,0,0.6); border-radius: 20px;">
              <br>
              <br>
                <h3 class="text" style="text-align: center; color: white; font-size: 25px; text-decoration: underline;">Receipt</h3>

               <div style="text-align: center;">
                  <h5 style="color: white;">
                  <a href="https://www.animatedimages.org/cat-arrows-111.htm"><img src="https://www.animatedimages.org/data/media/111/animated-arrow-image-0270.gif" border="0" alt="animated-arrow-image-0270" /></a>
                  <b style="font-size: 18px;" >Please Enter Correct Stock ID to generate receipt !!!</b></h5>
                </div>

                <hr style="color: white; height:5px;">
    
          
  <form id ="form-print" enctype="text/plain" class="form" method="GET" > 
          
          <!--1st label rowi-->
          <div class="row" style="margin-top: 15px;">
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 25px;"><b>Stock ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
              </label>
              
              <div class="col-md-4">
                <!--stock ID - from buy page name="stock_id" same as db column name-->
                  <input style="margin-top: 16px; font-size: 18px; color: black;" class="form-control" type="text" name="stock_id" value="<?php if(isset($_GET['stock_id'])){echo $_GET['stock_id'];} ?>" placeholder="Enter Stock ID"/>
              </div>
              
              <div class="col-md-4">
                    <button style="font-size: 20px; width: 100%; margin-top: 15px" class="button-73" role="button" type="submit" id="button"/>Generate Reciept</button>
              </div>
          </div>
        </form> <!--form closed-->
          <br><br>
          </div> <!--background back color transparent container-->
        
        <!------------>

          <br><br><br>

<div id="whatToPrint">

<!--background black color transparent container-->

<div id="receipt" class="container" style="background-color: rgba(0,0,0,0.6); border-radius: 20px;">
          
          <?php
                  /*conn to db*/
                  $conn = mysqli_connect("localhost", "root", "", "gw_lenovo_db");

                  /*if get stock_id then run the query*/
                  if (isset($_GET['stock_id'])) 
                  {
                    $stock_id = $_GET['stock_id'];
                    $query = "select * from buy_table where stock_id='$stock_id' ";
                    $query_run = mysqli_query($conn, $query);

                    /*if the record exists or not*/
                    if (mysqli_num_rows($query_run) > 0) 
                    {
                      foreach ($query_run as $row) 
                      {
                        
                        ?>

                        <h6 style="text-align: center;" class="animate__animated animate__fadeInDown"><br><br><img src="assets/img/FotoJet.png" width="350" height="75"></h6>
                        <h5 style="color: white; text-align: center; text-shadow: 2px 2px green;">Virtual Trading Platform</h5>
                        <hr style="color: white; height: 8px">
          
        <div class="section-title">
          <br>
          <p style="font-size: 18px; color: white;"><b>Disclaimer</b> &nbsp;:-&nbsp; In Virtual trading Platform : Stock investing requires analysis of financial data to find the company's true worth. The information given here are only for learning purposes, which only informs about critical factors that you must look at before investing. Make sure you do your thorough stock analysis to make informed & calculated risk decisions.</p>
        </div>

          <div class="row" style="margin-top: 5px;">
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 45px;"><b>Stock ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
              </label>
              
              <div class="col-md-8">
                <!--stock ID - from buy page name="stock_id" same as db column name-->
                  <input style="margin-top: 45px; font-size: 18px; font-weight: bold;" class="form-control" type="text" id="stock_id" name="stock_id" value="<?= $row['stock_id']; ?>" placeholder="Enter Stock ID"/>
              </div>
          </div>
                         
          <div class="row">
                
                <label class="label col-md-4 control-label" style="color: white; font-size: 18px; margin-top: 25px;"><b>Company Stock&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
                </label>
              
              <div class="col-md-8">
                <div class="form-group">
                  
                   <input type="text" value="<?= $row['company_stock']; ?>"  placeholder="Company Stock" name="company_stock" id="company_stock" style="margin-top: 28px; font-weight: bold; font-size: 18px;" class="form-control">
                </div>
             </div>
          </div>
        <!------------>

        <div class="row" style="margin-top: 15px;">
              
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 15px;"><b>No. of shares&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
              </label>
              
              <div class="col-md-8">
                <div class="form-group">
                  <input  style="margin-top: 16px; font-size: 18px; font-weight: bold;" 
                  type="text" value="<?= $row['no_of_shares']; ?>" class="form-control" placeholder="Number of shares" name="no_of_shares" id="no_of_shares">
              </div>
             </div>
          </div>
        
        <!------------>
        
        <div class="row" style="margin-top: 15px;">
              
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 20px;"><b>Total Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
              </label>
              
              <div class="col-md-8">
                <div class="form-group">

                  <input  style="margin-top: 16px; font-size: 18px; font-weight: bold;"
                  type="text" value="<?= $row['a3_price']; ?>" class="form-control" placeholder="Price at the time of buying" name="a3_price" id="price">
              </div>
             </div>
          </div>
        
        <!------------>

        <div class="row">
              
              <label class="label col-md-4 control-label" style="color: white; font-size: 18px;
                    margin-top: 25px;"><b>Type of trading&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
              </label>

              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" value="<?= $row['type_of_trade']; ?>" placeholder="Trading type" style="margin-top: 25px; font-size: 18px; font-weight: bold;" class="form-control text" name="type_of_trade" id="type_of_trade">
                </div>
             </div>
          </div>

          <div class="section-title" style="margin-top: 50px">
            <br>
            <p style="font-size: 18px; color: white;"><b>* * * * Thank You * * * *</b></p>
         </div> 
          <br>
</div> <!--background color container-->


                        <?php
                      }
                    }
                    else
                    {
                      echo "<script> swal('Error', 'No records found', 'warning');</script>";
                      
                    }
                  }
                ?>
         
         <div class="row" style="margin-top: 75px; margin-bottom: 75px;">
              <div class="col-md-4"></div>
               
                <!--Download pdf BUTTON-->
                <div class="col-sm-4">
                    

                  <button id="download" style="font-size: 20px; width: 100%;" class="button-73"/><a style="color: black;" href="javascript:generatePDF()" id="downloadButton">Download as PDF</a>
                  </button> 
                     
                     
</div> <!--id="whatToPrint" closing-->

                </div>
              <div class="col-md-4"></div>
        </div>
      </div>
    </div>
    <div class="col-sm-2"></div>
</div>
</div>
</div>
</main>

<!-- End #main -->

<!--pdf generator javascript -->
<script>
        async function generatePDF() {
            document.getElementById("downloadButton").innerHTML = "Currently downloading, please wait";

            //Downloading
            var downloading = document.getElementById("whatToPrint");
            //initialize jspdf framework
            var doc = new jsPDF('l0', 'pt');
            
            doc.setTextColor(255,255,255);
            //doc.setFont("times");
            doc.text(20, 40, 'Note : Grow Wealth is a leaning platform.');
            

            await html2canvas(downloading, {
                width: 1000
            }).then((canvas) => {
                //Canvas (convert to PNG)                          (x,y,width, hgt)
                doc.addImage(canvas.toDataURL("image/png"), 'PNG', 65, 5, 800, 700);
                
            })

            doc.save("Document.pdf");

            //End of downloading

            document.getElementById("downloadButton").innerHTML = "Click to download";
        }
    </script>
    
<!--
HTML + CSS -> PNG (html2canvas)
PNG -> Add to PDF (jsPDF)
Download PDF (jsPDF)
-->

<!-- ====================== Footer ========================================== -->
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
              <li><i class="bx bx-chevron-right"></i> Study Real-Time Stock Dashboard</li>
              <li><i class="bx bx-chevron-right"></i> Analyze Market</li>
              <li><i class="bx bx-chevron-right"></i> New & Insights</li>
              <li><i class="bx bx-chevron-right"></i> Profit / Loss Simulator</li>
              <li><i class="bx bx-chevron-right"></i> Buy Stocks</li>
            </ul>
          </div>
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