<?php 
include('connection.php');
$oid=$_GET['order_id'];
$q=mysqli_query($con,"delete from  property_booking_details where id='$oid' ");
if($q)
{
header('location:order.php');
}
?>