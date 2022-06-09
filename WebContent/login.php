<?php          //login.php code

session_start();

  include("connection.php");
  include("functions.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Required meta tags login -T-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grow-Wealth Login</title>
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
  <!-- Bootstrap CSS --><!--buttons colors-->
    <link rel="stylesheet" href="assets/login_design/css_login/bootstrap.min.css">

 <!--bubble background css-->
  <link href="reg_log_style1.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
<!-- ==================login form============================ -->
	
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- ============================= LOGO =================================-->
      <!-- Text as logo code-->
      <!-- <h1 class="logo"><a href="index.php">GW</a></h1> --> 
      <!-- to use an image as logo -->
      <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid" width="150" height="300"></a>


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

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="color:olive"><b>Already have an account ?</b></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Login Page</li>
          </ol>
        </div>
      </div>
    </section>
<!---------------------------------- End Breadcrumbs ---------------------------------->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

      if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //something was posted
            //this code is for the  undefined index error
            $username     = isset($_POST['username']) ? $_POST['username'] : '';
            $password     = isset($_POST['password']) ? $_POST['password'] : '';
            
            // below 2 lines shows undefined index error when used
            //$username = $_POST['username'];
            //$password = $_POST['password'];


            if(!empty($username) && !empty($password) && !is_numeric($username))
            {

                //read from database
                $query = "select * from users where username = '$username' limit 1";
                $result = mysqli_query($con, $query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {

                        $user_data = mysqli_fetch_assoc($result);
                
                        if($user_data['password'] === $password)
                        {

                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("Location: viewstock1.php");
                            die;
                        }
                    }
                }   
                echo "<script> swal('Error', 'Wrong Username or  Password, Please register properly...', 'warning');</script>";
                /*echo "Error: " . $sql . "<br>" . $con->error;*/
            }else
            {
             
                echo "<script> swal('Error', 'wrong username or  password!!!', 'warning');</script>";
            }
        }

 ?>

	<div class="main-w3layouts wrapper">
		<h1>Log-in</h1> <!--heading-->
	    <div class="main-agileinfo">
		   <div class="agileits-top">
				
  
  <form action="" method = "post">
				
	     <!--name field changed-->
       <input class="text" type="text" name="username" placeholder="Username" required=""><br>
	
	     <input class="text" type="password" name="password" placeholder="Password" required=""><br>
	
       <!--log in button-->
			<input type="submit" value="LOG-IN">
    </form>

      <!--register.php linked-->
      <p>Create New Account <a href="register.php">Register Here!</a></p>
  
      </div>
     </div>
				
		
		<ul class="colorlib-bubbles"> <!-- bUBBLES ANIMATION USING LIST -->
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

    <script src="assets/login_design/js_login/jquery-3.3.1.min.js"></script>
    <script src="assets/login_design/js_login/popper.min.js"></script>
    <script src="assets/login_design/js_login/bootstrap.min.js"></script>
    <script src="assets/login_design/js_login/main.js"></script>

 </main><!-- ==============End #main ================-->

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
              <li><i class="bx bx-chevron-right"></i>Team</li>
              <li><i class="bx bx-chevron-right"></i>FAQ</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="login.php">Account Creation</a></li>
              <li><i class="bx bx-chevron-right"></i> Study Real-Time Stock Dashboard</li>
              <li><i class="bx bx-chevron-right"></i> Create Real-Time Watchlist</li>
              <li><i class="bx bx-chevron-right"></i> Analyze Market</li>
              <li><i class="bx bx-chevron-right"></i> New & Insights</li>
              <li><i class="bx bx-chevron-right"></i> Buy & Sell Stocks
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>