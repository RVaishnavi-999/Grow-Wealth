<?php   

session_start(); //session_start should on evrry page */
// where we use session so session var can be acced globaly on any website

include("connection.php");
include("functions.php");

  $user_data = check_login($con); //to check if the user is logged in   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gw_lenovo_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$stock_id  = isset($_POST['stock_id']) ? $_POST['stock_id'] : '';
$company_stock    = isset($_POST['company_stock']) ? $_POST['company_stock'] : '';
$no_of_shares     = isset($_POST['no_of_shares']) ? $_POST['no_of_shares'] : '';
$current_price    = isset($_POST['current_price']) ? $_POST['current_price'] : '';
$a3_price         = isset($_POST['a3_price']) ? $_POST['a3_price'] : '';
$type_of_trade    = isset($_POST['type_of_trade']) ? $_POST['type_of_trade'] : '';
          
/*fetching values for dropdown from data base*/
$question = "SELECT * FROM `company_names`";

$result1 = mysqli_query($conn, $question);

?>

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

/* side fixed navigation bar */
.sidenav {
  margin-top: 8%;
  width: 295px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: transparent;
  /*overflow-x: hidden;*/ /*hides extra side scroll bar*/
}

.sidenav a {
	 
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* CSS */
.button-74 {
  background-color: #ffffff;
  border: 2px solid #422800;
  border-radius: 30px;
  box-shadow: #422800 4px 4px 0 0;
  color: #422800;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  font-size: 18px;
  padding: 0 18px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-74:hover {
  background-color: #ccff33;
}

.button-74:active {
  box-shadow: #422800 2px 2px 0 0;
  transform: translate(2px, 2px);
}

@media (min-width: 768px) {
  .button-74 {
    min-width: 120px;
    padding: 0 25px;
  }
}

</style>
 
<link rel="stylesheet" type="text/css" href="assets/dist/style_buy_design_form.css">

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
            <li><a href="viewstock1.php"><b>Real-Time Stock Dashboard</b></a></li>
            <li><a href="chart_analysis.php"><b>Chart Analysis</b></a></li>
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
<div style="background-image: url(assets/about.jpg); background-size: cover; background-attachment: fixed; margin-top: 85px;">

    <section class="breadcrumbs" style="margin-bottom: 20px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color:olive"><b>Buy your favorite Stock</b></h2>
          <ol>
            <li><a href="https://www.animatedimages.org/cat-hands-81.htm"><img src="https://www.animatedimages.org/data/media/81/animated-hand-image-0075.gif" border="0" alt="animated-hand-image-0075" /></a></li>
            <li><a href="cal_p_l.php"><b>Profit & Loss Calculator</b></a></li>
            <li><a href="gen_rec.php"><b>Generate Receipt</b></a></li>
            <li><a href="logout.php"><b>Log out</b></a></li>
          </ol>
        </div>
      </div>
    </section>
<!------------------------- End Breadcrumbs ------------------------------>

<!--==================  IMPOTANT INNER PAGE ===========================--->

<div class="sidenav">
		<script src="https://sheetdb.io/s/t/siumv01v954lp.js"></script>
</div>

<!-- pop up msg -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted, collect the data
      
      $company_stock = $_POST['company_stock'];
      $a3_price = $_POST['a3_price'];

      if(!empty($stock_id) && !empty($company_stock) && !empty($no_of_shares) && !empty($current_price) && !empty($a3_price) && !empty($type_of_trade))
      {

        $sql = "insert into buy_table (stock_id, company_stock, no_of_shares, current_price, a3_price, type_of_trade) values('$stock_id', '$company_stock', '$no_of_shares', '$current_price' ,'$a3_price', '$type_of_trade')";

          if ($conn->query($sql) === TRUE) 
          {
            echo "<script> swal('Hurrey', 'Purchased Successfully !!!', 'success');</script>";
          } 
          else 
          {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
      }
      else //if any field is empty
      {

        echo "<script> swal('Error', 'Please Enter some valid information!', 'warning');</script>";
      
      }    
  }

?>

    <!---------------------------------------->

    <div class="container-fluid" style="margin-top: 30px; margin-left: 150px; margin-right: 30px;">
      <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="container" style="background-color: rgba(0,0,0,0.6);">
              <br>
              <br>
                <h3 class="text" style="text-align: center; color: white; font-size: 25px; text-decoration: underline; padding-bottom: 10px;">-Purchase Stock-</h3>
                <div style="text-align: center;">
        <h6 style="color: white;">
        <a href="https://www.animatedimages.org/cat-arrows-111.htm"><img src="https://www.animatedimages.org/data/media/111/animated-arrow-image-0270.gif" border="0" alt="animated-arrow-image-0270" /></a>
        <b style="font-size: 20px; font-weight: normal;">Please Enter Correct details to purchase your favorite stock !!!</b></h6>
   </div>
                <hr style="color: white; height:5px;">
    
          
  <form class="form" action="" method="post" > 
          
          <!--1st label rowi-->
          <div class="row" style="margin-top: 15px;">

            <p style="color: white; font-size: 18px;"><a href="https://www.animatedimages.org/cat-arrows-111.htm"><img src="https://www.animatedimages.org/data/media/111/animated-arrow-image-0270.gif" border="0" alt="animated-arrow-image-0270" /></a>
            <b>Directions :</b> Please note the generated STOCK ID & Enter the same to generate the receipt.</p>
              
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 25px;"><b>Stock ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
              </label>
              <div class="col-md-8">
                <!--stock ID - Random number generator button different number for different stocks-->
                <!--button id="button to generate random number"-->
                  <button type="button" style="margin-top: 12px; font-size: 20px" class="button-73" role="button" id="button" onclick="getElementById('random-number').value=Math.floor(Math.random()*10000)">Click to generate Stock ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                          <input style="width: 255px;  height: 35px; border-radius: 6px; font-size: 17px; text-align: center; box-shadow: 10px 10px 8px #c9c8c3;" 
                           type="text" name="stock_id" id="random-number" value="" required="" />
                  </button>
              </div>
          </div>
        <!------------>

          <div class="row">
              <label class="label col-md-4 control-label" style="color: white; font-size: 18px;
                    margin-top: 30px;"><b>Company Stock Name &nbsp;&nbsp;:</b></label>
              <div class="col-md-8">


            <select style="margin-top: 30px; color: black; box-shadow: 10px 10px 8px #c9c8c3; border-radius: 15px;" class="form-control text" name="company_stock" required="">

                  <?php while($row1 = mysqli_fetch_array($result1)):;?>

                  <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

                  <?php endwhile;?>
                  <!--row[0] = column 1 and row[1] = column 2 in db-->

            </select>

             </div>
          </div>
        <!------------>

        <div class="row" style="margin-top: 25px;">
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 20px;"><b>Number of shares&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
              <div class="col-md-8">
                <input  style="margin-top: 15px; font-size: 18px; color: black; box-shadow: 10px 10px 8px #c9c8c3; border-radius: 15px;" 
                type="text" class="form-control" name="no_of_shares" id="a1_no_of_shares" placeholder="Please Enter Number" required="">
             </div>
          </div>
        <!------------>
        
        <div class="row" style="margin-top: 15px;">
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 25px;"><b>Current Stock Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
              <div class="col-md-8">
                <input  style="margin-top: 18px; color: black; box-shadow: 10px 10px 8px #c9c8c3; border-radius: 15px;" 
                type="text" class="form-control" name="current_price" id="a2_current_price" placeholder="Please Enter Current Stock Price Correctly" required="">
             </div>
          </div>

        <!------------>

        <div class="row" style="margin-top: 15px;">
              <label class="label col-md-4" style="color: white; font-size: 18px;
                    margin-top: 25px;"><b>Total Amount&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>

             <div class="col-md-8">
                  <!--The default value of type attributr for a button is submit, type="submit" ,  which self posts the form  and makes it look like a refresh. so to avoid page refreshing , here using type="button"-->
                  <button type="button" style="margin-top: 21px; height: 45px; font-size: 18px; padding-bottom: 3px; box-shadow: 10px 10px 8px #c9c8c3"class="button-74" role="button" onclick="cal_Total_amt()"><b>Calculate Total Amount</b></button>

                  <input style="width: 255px; margin-left: 5px; margin-top: 15px; height: 45px; font-size: 17px; text-align: center; box-shadow: 10px 10px 8px #c9c8c3; border-radius: 15px;" type="text" name="a3_price" id="a3_price" value="" required="" />

              </div>
          </div>
          
          <!--Calculating total amount using Javascript-->
          <script>
            cal_Total_amt = function()
            {
                var current_price = document.getElementById('a2_current_price').value;
                var num_of_shares = document.getElementById('a1_no_of_shares').value; 
                document.getElementById('a3_price').value = parseFloat(current_price)*parseInt(num_of_shares);

             }
         </script>

        <!------------>

        <div class="row" style="margin-top: 15px;">
              <label class="label col-md-4 control-label" style="color: white; font-size: 18px; margin-top: 25px;"><b>Type of trading&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
              <div class="col-md-8">
                  
               <select style="margin-top: 25px; color: black; box-shadow: 10px 10px 8px #c9c8c3; border-radius: 15px;" class="form-control text" name="type_of_trade" id="type_of_trade" required="">
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

        <div class="row" style="margin-top: 75px; margin-bottom: 75px;">
              <div class="col-md-2"></div>
                
                <!-- Buy button-->
                <!-- for design - class="button-73" is used-->
                <div class="col-sm-4">
                      <button style="font-size: 20px; width: 75%;" class="button-73" role="button" type="submit" value="submit"  name="submit"/>Buy
                      </button>
                </div>
          
                <!--RESET BUTTON-->
                <div class="col-sm-5">
                      <button style="font-size: 20px; width: 80%;" class="button-73" role="button" type="reset" value="Reset"  name="reset" id="button"/>Reset
                      </button>
                </div>
              <div class="col-md-1"></div>
          
            <div class="row" style="margin-top: 35px; margin-bottom: 65px;">
                <div class="col-md-4"></div>
                    <div class="col-md-5">
                      
                      <!--generate reciept link to gen_rec.php page-->

                      <a href="gen_rec.php" style="font-size: 20px; width: 80%;" class="button-73" id=button>Generate Reciept</a>
                    </div>
                <div class="col-md-3"></div>
            </div>
            <!------------>
        </div>
        </div> <!--background color container--> 

        
  </form>
      </div>
    </div>
    <div class="col-sm-2"></div>
  

</div>
</div>
</main>

<!-- End #main -->
<!-- ============================ Footer removed ======================== -->
  
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