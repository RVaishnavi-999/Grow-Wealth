<?php
session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'gw_lenovo_db');


$firstname    = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname     = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$dob          = isset($_POST['dob']) ? $_POST['dob'] : '';
$email        = isset($_POST['email']) ? $_POST['email'] : '';
$phonenumber  = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
$address      = isset($_POST['address']) ? $_POST['address'] : '';
$username     = isset($_POST['username']) ? $_POST['username'] : '';
$password     = isset($_POST['password']) ? $_POST['password'] : '';


  include("connection.php");
  include("functions.php");
?>


<!DOCTYPE html>         
<html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <!-- Required meta tags login -T-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Grow-Wealth Register</title>
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
  
  <!--bubble background css-->
  <link href="reg_log_style1.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

    <style>
        .error {color: #FF0000;} 
    </style> <!--error shows in red color-->
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
          <h2 style="color:olive"><b>Register Account</b></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Register Account Page</li>
            <li><a href="login.php">Login</a></li>
          </ol>
        </div>
      </div>
    </section>
<!---------------------------------- End Breadcrumbs ---------------------------------->

    <!--name field chanege as db column name-->
    <!--error message variables-->
    <?php

        $firstnameErr = $lastnameErr = $emailErr = $birthdateErr = $mobilenoErr = $usernameErr = $passwordErr = $addressErr = $checkboxErr = "";

        $firstname = $lastname = $email = $birthdate = $mobileno = $address = $username = $password = $checkbox = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

//----firstname code is working--------------------------------------------------------
		
		if (empty($_POST["firstname"])) {

            $firstnameErr = "Please enter a valid name";

        } else {

            $firstname = test_input($_POST["firstname"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {

            $firstnameErr = "Only letters and white space allowed";

            }

        }
//lastname code is working-----------------------------------------------------------
		
		if (empty($_POST["lastname"])) {

            $lastnameErr = "Please enter a valid name";

        } else {

            $lastname = test_input($_POST["lastname"]);

            // check if name only contains letters and whitespace

            if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {

            $lastnameErr = "Only letters and white space allowed";

            }

        }
		
// Date code is working------------------------------------------	
	
	if(empty($_POST['birthdate']))
  {
    $birthdateErr = "please select your birthdate from datepicker";
  }
 else
 {
	 $birthdate = $_POST['birthdate'];
 }
	

//email code is working

        if (empty($_POST["email"])) {

            $emailErr = "please enter valid Email address";

        } else {

            $email = test_input($_POST["email"]);

            // check if e-mail address is well-formed

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "The email address is incorrect";

            }
        }  
		
//mobile num code is working

	 if (empty($_POST["mobileno"])) {

            $mobilenoErr = "Please enter a valid mobileno";

        } else {

            $mobileno = test_input($_POST["mobileno"]);

       		if (!preg_match('/^[0-9]*$/',$mobileno)) {

            $mobilenoErr = "Only numeric values are allowed";
			}else {
            if(strlen($mobileno)!=10) {
				
				$mobilenoErr = "mobileno must contain 10 digits";
            }
			}
        }		

			   
// checking for address working---------------------------------------------
 
 if(isset($_POST['address'])){
	 
		if($_POST['address'] == ""){
			$addressErr = "please enter your address";
		}else{
			$address = test_input($_POST['address']);
			if(preg_match("/^.*(?=.*[0-9])(?=.*[\t])(?=.*[a-z-])(?=.*[A-Z]).*$/", $_POST["address"])){
				$addressErr = "house no start with atleast one number,Alphabetical chars, hyphens and spaces,Followed by one or multiple tabs or spaces,House number may, for the rest, exist of numbers and/or letters";
			} 
		}
	}		
    
        
//username code is working ----------------------------------------------------	
	
       if (isset($_POST['username'])) {
    if ($_POST['username'] == "") {

        $usernameErr = "Please choose a username.";
             
    }elseif(strlen($_POST['username']) < '6') {
        $usernameErr = "use at least 6 characters";
        
    }elseif(strlen($_POST['username']) > '30') {
        $usernameErr = "use maximum 30 characters";
       
    }else{
        $username = $_POST['username'];
      
    }
}
	
//password code is working ------------------------------------------------------
    if (empty($_POST["password"])) {

          $passwordErr = "please enter valid password";

         } else {

         $password = test_input($_POST["password"]);

     if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)
      $passwordErr = 'Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit</p>';
   }
   
//checkbox
      if(empty($_POST['checkbox']))
		{
		   $checkboxErr = "can't proceed as you didn't agree to the terms!";
		}
	  else
	    {
		   $checkbox = $_POST['checkbox'];
		}
//---------------------------------
		}
//---------------------------------		
	   function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

        }
		

    ?>

<!-- =================Registration Form ======== -->

<div class="main-w3layouts wrapper">
		<h1>Sign Up</h1> <!--heading-->
		<div class="main-agileinfo">
			<div class="agileits-top">
				
    <!--action="#"-->
    <form action="" method="post">

    <p><span class="error">* required field</span></p><br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

        <!-- =====================FIRSTNAME=====================-->
        <input type="text" name="firstname" placeholder="firstname">
        <span class="error">* <?php echo $firstnameErr;?></span>
        <br><br>
        <!--$firstnameErr is error message variable-->
		
		    <!-- =====================LAST NAME=====================-->
        <input type="text" name="lastname" placeholder="lastname">
        <span class="error">* <?php echo $lastnameErr;?></span>
        <br><br>
  
        <!-- =====================DATE OF BIRTH=====================-->
        <!--name="birthdate"-->
        <input type="Date" id="date" class="detail form-control" name="dob" style="background-color:transparent; color: white; width: 95%"/>
	      <span class='error'>*<?php echo $birthdateErr?></span>
        <br><br>
       
		   <!-- =====================EMAIL=====================-->
       <input type="text" name="email" placeholder="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
		
		    <!-- =====================MOBILE NUMBER=====name = "mobileno"================-->
        <input type="text" name="phonenumber" placeholder="mobileno">
        <span class="error">* <?php echo $mobilenoErr;?></span>
        <br><br>
		

        <!-- =====================ADDRESS====================-->
        <input type="text" id="address" name="address" placeholder="Address">
        <span class="error">* <?php echo $addressErr;?></span>
        <br><br>

  		  <!-- =====================USER NAME=====================-->
        <input type="text" name="username" placeholder="username">
        <span class="error">* <?php echo $usernameErr;?></span>
        <br><br>
		
        <!-- =====================PASSWORD=====================-->
        <input type="text" name="password" placeholder="password">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>
		
        <!-- =====================CHECK BOX=====================-->
        <div class="wthree-text">
						<label class="anim">
							 <input type="checkbox" id="checkbox" class="checkbox">
							 <span>I Agree To The Terms & Conditions</span>
							 <span class="error">* <?php echo $checkboxErr;?></span>
						</label>
					<div class="clear"> </div>
					
          <!-- =====================REGISTER BUTTON / SIGN UP=====================-->
          <input type="submit" value="SIGNUP">
		
				
        <!-- =====================LOGIN.PHP page linked=====================-->
        <p>Already a member? <a href="login.php"> Login Here!</a></p>
			</div>
	
<!--sweet alert CDN ======= Vai : code-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    //something was posted, collect the data
      $username = $_POST['username'];
      $password = $_POST['password'];

      if(!empty($firstname) && !empty($lastname) && !empty($dob) && !empty($email) && !empty($phonenumber) && !empty($address) && !empty($username) && !empty($password) && !is_numeric($username))
      {

        //save to database
        $user_id = random_num(20);
        $query = "insert into users (firstname, lastname, dob, email, phonenumber, address, username, password) values('$firstname', '$lastname', '$dob', '$email', '$phonenumber', '$address', '$username', '$password')";

          if ($con->query($query) === TRUE) 
          {
              
              echo "<script> swal('Successfully Registered!', 'Please login to enjoy trading!', 'success');</script>";
           
          } 
          else 
          {
            /*error showing on the screen*/
            echo "<script>alert('Error')</script>";   
            echo "Error: " . $query . "<br>" . $con->error;
          }
      }
      else //if username or password or any field is empty
      {
        echo "<script>swal('Please enter some valid information!')</script>";

      }
    }
?>

	</form>	
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

  <script src="assets/script.js"></script>
    <script src="assets/login_design/js_login/jquery-3.3.1.min.js"></script>
    <script src="assets/login_design/js_login/popper.min.js"></script>
    <script src="assets/login_design/js_login/bootstrap.min.js"></script>
    <script src="assets/login_design/js_login/main.js"></script>

  </form>
	
  </main><!-- End #main -->
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
            <h4>Useful Info</h4>
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



  