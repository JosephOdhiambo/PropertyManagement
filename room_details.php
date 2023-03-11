<!DOCTYPE html>
<html>

<head>
    <title>PropertyEnquiry.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

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
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "property");

    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Get the property_id parameter from the URL
    $property_id = $_GET['room_id'];

    // Query the database for the details of the property with the given property_id
    $sql = "SELECT * FROM properties WHERE property_id = $property_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Output the details of the property
      $row = mysqli_fetch_assoc($result);
      echo '<div class="card mb-3">';
      echo '<img class="card-img-top" src="image/rooms/' . $row['image'] . '" alt="' . $row['type'] . '" style="max-height: 300px; object-fit: contain;">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $row['type'] . '</h5>';
      echo '<p class="card-text">' . $row['details'] . '</p>';
      echo '<table class="table table-bordered">';
      echo '<tbody>';
      echo '<tr>';
      echo '<td>Price</td>';
      echo '<td>$' . number_format($row['price']) . '</td>';
      echo '</tr>';
      echo '<tr>';
      echo '<td>Type</td>';
      echo '<td>' . $row['Apartment/House'] . '</td>';
      echo '</tr>';
      echo '</tbody>';
      echo '</table>';
      echo '</div>';
      echo '</div>';
    } else {
      echo "No property found.";
    }

    // Close database connection
    mysqli_close($conn);
  ?>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header bg-primary text-white font-weight-bold">
                        Other Property Types
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
            include('connection.php');
            $sql1=mysqli_query($con,"select * from properties");
            $apartments = array();
            $houses = array();
            while($result1= mysqli_fetch_assoc($sql1))
            {
                if ($result1['Apartment/House'] == 'Apartment') {
                    array_push($apartments, $result1);
                } else {
                    array_push($houses, $result1);
                }
            }
            ?>
                        <?php if (!empty($apartments)): ?>
                        <li class="list-group-item font-weight-bold">Apartments:</li>
                        <?php foreach ($apartments as $apartment): ?>
                        <li class="list-group-item">
                            <a href="room_details.php?room_id=<?php echo $apartment['property_id']; ?>">
                                <?php echo $apartment['type']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (!empty($houses)): ?>
                        <li class="list-group-item font-weight-bold">Houses:</li>
                        <?php foreach ($houses as $house): ?>
                        <li class="list-group-item">
                            <a href="room_details.php?room_id=<?php echo $house['property_id']; ?>">
                                <?php echo $house['type']; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
  <div class="col-sm-8">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="" allowfullscreen="" loading="lazy"></iframe>
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