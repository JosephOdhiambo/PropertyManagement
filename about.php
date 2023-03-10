<?php 
session_start();
error_reporting(1);
include('connection.php');
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
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  padding: 16px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.row .col-sm-2 {
  margin-bottom: 20px;
}
</style>
</head>

<body>
  <?php
      include('Menu Bar.php')
  ?><br>
  <div class="container-fluid text-center">
    <div class="container">
      <div class="row content">
        <div class="col-sm-12 card">
          <h1>PropertyEnquiry.com</h1><br>
          <div style="text-align:center;">
    <p class="text-justify">Welcome to our PropertyEnquiry system! Our platform is designed to make your property search a hassle-free and seamless experience. Whether you're looking to buy, sell or rent a property, we've got you covered. Our system is powered by cutting-edge technology that allows us to provide accurate and up-to-date information on properties across different locations. At our PropertyEnquiry system, we are committed to delivering exceptional customer service and helping you find the property that suits your needs and budget. Our team of experts is always ready to answer any questions you may have about the properties listed on our platform, and to provide you with all the information you need to make an informed decision.</p>
    <p class="text-justify">We understand that buying, selling or renting a property can be a daunting task, but with our user-friendly system, you can browse through listings, view property details, and connect with property owners or real estate agents seamlessly. We strive to make your property search experience as easy as possible. Thank you for choosing our PropertyEnquiry system, and we look forward to helping you find your dream property!</p>

</div>
        </div>
      </div><br><br>
      <div class="row justify-content-center">
        <!--map Start Here-->
        <div class="col-sm-2" style="background-color:#27303b;height:80px;width:100px;">
          <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"
              width="60px;" height="50px;" style="margin-top:15px;"></a>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <iframe class="frame"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9012415990155!2d77.37085911440647!3d28.602739392180986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce57ca5ff4435%3A0x6de631b7a5bfdacb!2sUnion+Bank+Of+India!5e0!3m2!1sen!2sin!4v1555502551059!5m2!1sen!2sin"
                  width="550" height="300" frameborder="0" style="border:1" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <!--Map Close Here-->
        <div class="col-sm-2">
          <h4><b>Address</b></h4>
          <b>Sector,59 Thika Roada</b>
        </div>
        <div class="col-sm-2" style="background-color:#27303b;height:80px;width:100px;">
          <a href="#"><img src="image/icon/icon-02.png" width="60px;" height="50px;" style="margin-top:15px;"></a>
        </div>
        <div class="col-sm-2">
          <h4><b>Phone</b></h4>
          <b>(+254) 742 383459</b>
        </div>
        <div class="col-sm-2" style="background-color:#27303b;height:80px;width:100px;">
          <a href="#"><img src="image/icon/icon-03.png" width="60px;" height="50px;" style="margin-top:15px;"></a>
        </div>
        <div class="col-sm-2">
          <h4><b>Email-Id</b></h4>
          <b>kimanzi@gmail.com</b>
        </div>
      </div><br><br>

    </div>
  </div>
  <?php
  include('Footer.php')
?>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>