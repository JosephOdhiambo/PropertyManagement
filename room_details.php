<!DOCTYPE html>
<html>
<head>
<title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

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
    .font-weight-bold {
        font-weight: bold;
    }
    .text-danger {
        color: #dc3545;
    }
    p {
        font-size: 10px;
        line-height: 1.3;
        margin-bottom: 1.0em;
    }
    a {
        text-decoration: none;
    }
    .card {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.1);
        border-radius: 6px;
        margin-top: 19px;
    }
    .card-header {
        font-size: 19px;
    }
    .list-group-item {
        font-size: 17px;
    }
    .list-group-item:hover {
        background-color: #f0f0f0;
    }
    .btn-lg {
        font-size: 17px;
        padding: 9px 18px;
        margin-top: 18px;
    }
</style>
</head>
<body>
<?php
    include('Menu Bar.php')
?>

<div class="container-fluid" style="margin-top: 2%;">
    <div class="row">
        <div class="col-sm-8">
            <?php 
                include('connection.php');
                $room_id=$_GET['room_id'];
                $sql=mysqli_query($con,"select * from rooms where room_id='$room_id' ");
                $res=mysqli_fetch_assoc($sql);
            ?>
            <h2 class="font-weight-bold"><?php echo $res['type']; ?></h2>
            <h3 class="text-danger"><?php echo $res['price']; ?></h3>
            <p class="text-justify"><?php echo $res['details']; ?></p>
            <div class="row">
                <h2 class="font-weight-bold">Amenities & Facilities</h2>
                <div class="col-sm-2">
                    <img src="image/icon/wifi.png" class="img-responsive" alt="wifi">
                </div>
                <div class="col-sm-10">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Sed sit amet felis nec urna maximus aliquet. 
                        Sed euismod, lorem eu rhoncus efficitur, urna neque lacinia lectus, 
                        non pretium urna tellus in sapien.
                    </p>
                    <a href="Login.php" class="btn btn-danger btn-lg">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header bg-primary text-white font-weight-bold">
                    Other Room Types
                </div>
                <ul class="list-group list-group-flush">
                    <?php
                        include('connection.php');
                        $sql1=mysqli_query($con,"select * from rooms");
                        while($result1= mysqli_fetch_assoc($sql1))
                        {
                            echo '<li class="list-group-item">';
                            echo '<a href="room_details.php?room_id=' . $result1['room_id'] . '">';
                            echo $result1['type'];
                            echo '</a></li>';
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>


<?php
    include('footer.php')
?>

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
