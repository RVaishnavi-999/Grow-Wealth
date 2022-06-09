<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Required meta tags login -T-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grow-Wealth Buy</title>
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
	<title></title>
	<style>
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
</head>

<body style="background-image: url(assets/about.jpg); background-size: cover; background-attachment: fixed;">

<!--vvv imp to calculate profit/loss amount-->
<script src="assets/Cal_p_l_funtoion.js"></script> 

	<!--------------------- ======= Breadcrumbs ======= ------------------------------->
<div style="background-image: url(assets/about.jpg); background-size: cover; background-attachment: fixed;">

    <section class="breadcrumbs" style="margin-top: 0px">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color:olive"><b>Calculate Profit / Loss </b></h2>
          <ol>
            <li><a href="https://www.animatedimages.org/cat-hands-81.htm"><img src="https://www.animatedimages.org/data/media/81/animated-hand-image-0075.gif" border="0" alt="animated-hand-image-0075" /></a></li>
            <li><a href="company_price.php"><b>Buy</b></a></li>
            <li><a href="logout.php"><b>Log out</b></a></li>
          </ol>
        </div>
      </div>
    </section>
<!------------------------------- End Breadcrumbs ---------------------------------->

<div class="container-fluid" style="margin-top: 30px; margin-left: 30px; margin-right: 30px;">
      <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="container" style="background-color: rgba(0,0,0,0.6);">
              <br>
              <br>
                <h3 class="text" style="text-align: center; color: white; font-size: 25px; text-decoration: underline; padding-bottom: 10px;">Profit / Loss Simulator</h3>
                <hr style="color: white; height:5px;">

              <div class="row" style="margin-top: 15px;">
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 25px;"><b>Enter price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
              <div class="col-md-8">
                <input  style="margin-top: 18px; box-shadow: -1px 1px 30px 10px black; font-size: 18px; color: black;" 
                type="text" class="form-control" name="price" id="price" required="">
             </div>
          </div>

        <!------------>
        <div class="row" style="margin-top: 15px;">
              <label class="label col-md-4 control-label" style="color: white; font-size: 18px; margin-top: 25px;"><b>Type of trading&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
              <div class="col-md-8">
                  
               <select style="margin-top: 25px; box-shadow: -1px 1px 30px 10px black;" class="form-control text" name="type_of_trade" id="type_of_trade" required="">
                        <option>Select type of trading</option>
                        <option>1 Month</option>
                        <option>3 Months</option>
                        <option>6 Months</option>
                        <option>12 Months</option>
                        <option>Long Term</option>
                      </select>
             </div>
          </div>
        <!------------> 
        
        <div class="row" style="margin-top: 15px;">
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 35px;">
                    <b>Profit / Loss Amount&nbsp;&nbsp;:</b>
              </label>

              <div class="col-md-8" style="">
               
                  
                  <button name="calculate_profit_loss" id="calculate_profit_loss" role="button" style="margin-top: 18px; font-size: 20px; text-align: left; width:100%" class="button-73" onclick="cal_p_l()">Click Here :  
                  </button>
              </div>
          </div>

         <!-------------------------->
        <br><br>
        <!------------>

            </div> <!--container background color rgba(0,0,0,0.6);-->
        </div> <!--class="col-sm-8"-->
    </div> <!--class="row"-->
</div> <!--class="container-fluid"-->
<br>
<br>
<br>

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
        </div>
      </div>
    </div>

</body>
</html>





