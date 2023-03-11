<?php 
session_start();
error_reporting(1);
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head><!--Head Open  Here-->
  <title>Property Enquiry.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link href="css/style.css"rel="stylesheet"/>
  
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  .card-text {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
    text-overflow: ellipsis;
    text-align: justify;
  }

  .card-img-top {
    height: 40vw;
    object-fit: cover;
  }

  @media (min-width: 576px) {
    .card-img-top {
      height: 20vw;
    }
  }

  @media (min-width: 768px) {
    .card-img-top {
      height: 15vw;
    }
  }

  @media (min-width: 992px) {
    .card-img-top {
      height: 10vw;
    }
  }
</style>
</head> <!--Head Open  Here-->
<body>
  <?php
      include('Menu Bar.php')
  ?>
</div> <!--Room Info Start Here-->
<section id="hero" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1>Welcome to <span>PropertyEnquiry</span></h1>
    <h2>Streamline Your Property Inquiries with Our Efficient Property Enquiry System</h2>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
      <a href="https://www.youtube.com/watch?v=uySn1BZiWWs" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
    </div>
  </div>
</section><!-- End Hero -->

<div class="container text-center" style="background-color: #f7f7f7; padding: 30px;">
  <div class="row">
    <?php 
    $sql = mysqli_query($con,"SELECT * FROM properties");
    $apartments = '';
    $houses = '';
    while($r_res = mysqli_fetch_assoc($sql)) {
      if($r_res['Apartment/House'] == 'Apartment') {
        $apartments .= '<div class="col-md-4 mb-4">';
        $apartments .= '<div class="card h-100">';
        $apartments .= '<img src="image/rooms/'.$r_res['image'].'" class="card-img-top" alt="Image" id="img1">';
        $apartments .= '<div class="card-body">';
        $apartments .= '<h5 class="card-title text-danger">'.$r_res['type'].'</h5>';
        $apartments .= '<p class="card-text">'.substr($r_res['details'],0,80)."...".'</p>';
        $apartments .= '<a href="room_details.php?room_id='.$r_res['property_id'].'" class="btn btn-primary">View Details</a>';
        $apartments .= '</div></div></div>';
      } else {
        $houses .= '<div class="col-md-4 mb-4">';
        $houses .= '<div class="card h-100">';
        $houses .= '<img src="image/rooms/'.$r_res['image'].'" class="card-img-top" alt="Image" id="img1">';
        $houses .= '<div class="card-body">';
        $houses .= '<h5 class="card-title text-danger">'.$r_res['type'].'</h5>';
        $houses .= '<p class="card-text">'.substr($r_res['details'],0,80)."...".'</p>';
        $houses .= '<a href="room_details.php?room_id='.$r_res['property_id'].'" class="btn btn-primary">View Details</a>';
        $houses .= '</div></div></div>';
      }
    }
    ?>
    <div class="col-12 text-center mb-4">
      <h3>Apartments</h3>
    </div>
    <?php echo $apartments; ?>
    <div class="col-12 text-center mt-5 mb-4">
      <h3>Houses</h3>
    </div>
    <?php echo $houses; ?>
  </div>
</div>


<?php
  include('Footer.php')
?>
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