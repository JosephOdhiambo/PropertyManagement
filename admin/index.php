<?php 
session_start();
error_reporting(1);
require('../connection.php');
extract($_REQUEST);
if(isset($login))
{
	if($eid=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($con,"select * from admin where username='$eid' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['admin_logged_in']=$eid;	
		header('location:dashboard.php');	
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";	
		}	
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>PropertyEnquiry.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="../css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
  /* Card styling */
.card {
  border-radius: 0;
  border: none;
}

.card-body {
  padding: 2rem;
}

.card-title {
  margin-bottom: 1.5rem;
}

.card-img-top {
  object-fit: cover;
  object-position: center;
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.fit-image {
  object-fit: cover;
  /* Change this property to "contain" if you want the whole image to be visible */
  width: 200px;
  height: 200px;
}

/* Media queries */
@media only screen and (max-width: 575px) {
  /* For screens smaller than 576px */
  .fit-image {
    width: 100%;
    height: auto;
  }
  
  .card-img-top {
    width: 100%;
    height: auto;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
  
  .card-title {
    font-size: 1.2rem;
  }
  
  .card-body {
    padding: 1rem;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  /* For screens between 576px and 767px */
  .fit-image {
    width: 100%;
    height: auto;
  }
  
  .card-img-top {
    width: 100%;
    height: auto;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
  
  .card-title {
    font-size: 1.5rem;
  }
  
  .card-body {
    padding: 1rem;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  /* For screens between 768px and 991px */
  .card-img-top {
    width: 100%;
    height: auto;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
  
  .card-body {
    padding: 1.5rem;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  /* For screens between 992px and 1199px */
  .card-img-top {
    width: 200px;
    height: 200px;
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
  }
}

@media only screen and (min-width: 1200px) {
  /* For screens larger than 1199px */
  .card-img-top {
    width: 250px;
    height: 250px;
    margin-top: 2rem;
    margin-bottom: 2rem;
  }
}
  
  </style>
</head>

<body>
  <?php
include('Menu Bar.php');
	?>
  <div class="container-fluid">
    <!-- Primary Id-->
    <div class="container">
      <div class="row"><br>
        <div class="col-sm-4"></div>
        <div class="col-sm-4 text-center">
          <div class="card shadow">
            <div class="card-body">
              <h1 class="card-title">
                <b>
                  <font style="font-family: 'Libre Baskerville', serif;">Admin Login ?</font>
                </b>
              </h1>
              <img src="../image/clipart/user.png" alt="Bird" class="card-img-top fit-image">
              <?php echo @$error;?>
              <form action="#" method="post"><br>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="eid" placeholder="Email Id" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="pass" placeholder="Password" required>
                </div>
                <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"
                  required>
              </form>
            </div>
          </div>
        </div>

      </div><br>
    </div>
  </div>
  <?php
include('../Footer.php');
?>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>