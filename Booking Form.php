<?php
include('connection.php');

// Select distinct room types from the properties table
$sql = "SELECT DISTINCT `type`, `Apartment/House` FROM `properties` ORDER BY `Apartment/House`, `type`";
$result = $con->query($sql);

// Build the select box options grouped by type and Apartment/House
$options = '';
$current_title = '';
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if ($current_title != $row['Apartment/House']) {
      $options .= '<optgroup label="' . $row['Apartment/House'] . '">';
      $current_title = $row['Apartment/House'];
    }
    $options .= '<option>' . $row["type"] . '</option>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Hotel.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
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
</head>

<body>
  <?php 
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from property_booking_details where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from property_booking_details where email='$email' and room_type='$room_type' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>You have already booked this room</h1>";    
  }
  else
  {

   $sql="insert into property_booking_details(name,email,phone,address,city,state,zip,contry,room_type,Occupancy,check_in_date,check_in_time,check_out_date) 
  values('$name','$email','$phone','$address','$city','$state','$zip','$country',
  '$room_type','$Occupancy','$cdate','$ctime','$codate')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>You have Successfully booked this room</h1><h2><a href='order.php'>View </a></h2>"; 
   }
  }
}
?>
  <div class="container-fluid text-center" id="primary">
    <!--Primary Id-->
    <h1>[ BOOKING Form ]</h1><br>
    <div class="container">
      <div class="row">
        <?php echo @$msg; ?>
        <!--Form Containe Start Here-->
        <form class="form-horizontal" method="post">
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4">
                  <h4> Name :</h4>
                </div>
                <div class="col-sm-8">
                  <input type="text" value="<?php echo $result['name']; ?>" class="form-control" name="name"
                    placeholder="Enter Your Frist Name" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4">
                  <h4>Email :</h4>
                </div>
                <div class="col-sm-8">
                  <input type="email" value="<?php echo $result['email']; ?>" class="form-control" name="email"
                    placeholder="Enter Your Email-Id" required />
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4">
                  <h4>Mobile :</h4>
                </div>
                <div class="col-sm-8">
                  <input type="number" value="<?php echo $result['mobile']; ?>" class="form-control" name="phone"
                    placeholder="Type Your Phone Number" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4">
                  <h4>Address :</h4>
                </div>
                <div class="col-sm-8">
                  <textarea name="address" class="form-control"
                    placeholder="Enter Your Address"><?php echo $result['address'];  ?></textarea>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4">
                  <h4>Country</h4>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="<?php echo $result['country']; ?>" name="city"
                    placeholder="Enter Your City Name" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4">
                  <h4></h4>
                </div>
                <div class="col-sm-8">
                  <input type="hidden" name="state" class="form-control" placeholder="Enter Your State Name" required>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-4">
                  <h4></h4>
                </div>
                <div class="col-sm-8">
                  <input type="hidden" name="zip" class="form-control" placeholder="Enter Your Zip Code" required>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5">
                  <h4>Property Type:</h4>
                </div>
                <div class="col-sm-7">
                  <select class="form-control" name="room_type" required>
                  <?php echo $options; ?>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5">
                  <h4>Property Viewing Date :</h4>
                </div>
                <div class="col-sm-7">
                  <input type="date" name="cdate" class="form-control" required>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5">
                  <h4>Date of Appointment:</h4>
                </div>
                <div class="col-sm-7">
                  <input type="time" name="ctime" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5">
                  <h4>Date of Purchase :</h4>
                </div>
                <div class="col-sm-7">
                  <input type="date" name="codate" class="form-control" required>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <label class="control-label col-sm-5">
                  <h4 id="top">Bedrooms :</h4>
                </label>
                <div class="col-sm-7">
                  <div class="radio-inline"><input type="radio" value="single" name="Occupancy" required>Single</div>
                  <div class="radio-inline"><input type="radio" value="twin" name="Occupancy" required>Twin</div>
                  <div class="radio-inline"><input type="radio" value="dubble" name="Occupancy" required>Dubble</div>
                </div>
              </div>
            </div>
            <input type="submit" value="submit" name="savedata" class="btn btn-danger" required />
          </div>
        </form><br>
      </div>
    </div>
  </div>
  </div>
  <?php
include('Footer.php')
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