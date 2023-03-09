<?php 
session_start();
error_reporting(1);
if($_SESSION['create_account_logged_in']!="")
{
header('location:Booking Form.php');
}
error_reporting(1);
require('connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($con,"select * from create_account where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['create_account_logged_in']=$eid;  
    header('location:Booking Form.php'); 
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
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
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

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
  </style>
</head>

<body>
  <?php
include('Menu Bar.php')
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
                  <font style="font-family: 'Libre Baskerville', serif;">User Login ?</font>
                </b>
              </h1>
              <img src="image/clipart/login-user-icon.png" alt="Bird" class="card-img-top fit-image">
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
                <div class="form-group forget">
                  <a href="Forgot account.php">Forget Account</a>&nbsp; <b>|</b>&nbsp;
                  <a href="Registation form.php">Create an Account</a>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div><br>
    </div>
  </div>
  <?php
include('Footer.php')
?>
</body>

</html>