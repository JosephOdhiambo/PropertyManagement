<?php 
include('connection.php');
extract($_REQUEST);
if(isset($send))
{
mysqli_query($con,"insert into feedback values('','$n','$e','$mob','$msg')");	
$msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<footer class="bg-dark py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="row mb-4">
          <div class="col-md-12">
            <img src="logo/logo2.png" alt="logo" width="200px" height="50px">
          </div>
          <div class="col-md-12">
            <p class="text-white mt-3">Experience hassle-free apartment management with our comprehensive software
              solution. From managing tenant leases to tracking maintenance requests, our platform simplifies the
              day-to-day operations of property management. Streamline your processes and optimize your workflow with
              our intuitive and user-friendly system</p>
          </div>
          <div class="col-md-12">
            <div class="d-flex justify-content-center">
              <?php include('Social ican.php'); ?>
            </div>
          </div>
          <div class="col-md-12">
            <a href="about.php" class="btn btn-danger mt-3 mx-auto d-block">Read More..</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <h3 class="text-warning">Contact Us</h3>
        <p class="text-white"><strong>Address:</strong> Sector,59 Thika Road</p>
        <p class="text-white"><strong>Email-Id:</strong> kimanzi@gmail.com</p>
        <p class="text-white"><strong>Contact Us:</strong> (+254) 742 383459</p>
      </div>
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">Feedback</div>
          <div class="panel-body">
            <?php echo @$msg; ?>
            <form method="post">
              <div class="form-group">
                <input type="text" name="n" class="form-control" placeholder="Enter Your Name" required>
              </div>
              <div class="form-group">
                <input type="Email" name="e" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="Number" name="mob" class="form-control" placeholder="Mobile Number" required>
              </div>
              <div class="form-group">
                <textarea type="Text" name="msg" class="form-control" placeholder="Type Your Massage"
                  required></textarea>
              </div>
              <input type="submit" value="send" name="send" class="btn btn-primary btn-block" required>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-white py-3">
    <p class="text-center mb-0">Developed By Patrick Kimanzi| All Rights Reserved 2023</p>
  </div>
</footer>

<style>
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  p {
    text-align: justify;
  }
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">