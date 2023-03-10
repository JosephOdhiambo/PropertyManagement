<?php 
if(isset($add))
{
    $rno = mysqli_real_escape_string($con, $_POST['rno']);
    $sql=mysqli_query($con,"select * from properties where property_no='$rno'");
    if(mysqli_num_rows($sql))
    {
        echo "This property is already added";    
    }       
    else
    {   
        $img=$_FILES['img']['name'];
        $type = mysqli_real_escape_string($con, $_POST['type']);
        $price = mysqli_real_escape_string($con, $_POST['price']);
        $details = mysqli_real_escape_string($con, $_POST['details']);
        $location = mysqli_real_escape_string($con, $_POST['location']);
        $property_type = mysqli_real_escape_string($con, $_POST['property_type']);
        mysqli_query($con,"insert into properties(property_no,type,price,details,image,`Apartment/House`,location) values('$rno','$type','$price','$details','$img','$property_type','$location')") or die(mysqli_error($con));   
        move_uploaded_file($_FILES['img']['tmp_name'],"../image/rooms/".$_FILES['img']['name']);
        echo "Property added successfully";
    }
}
?>


<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Property No</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Property Type</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<th>Apartment/House</th>
		<td>
			<select name="property_type" class="form-control">
				<option value="Apartment">Apartment</option>
				<option value="House">House</option>
			</select>
		</td>
	</tr>

	<tr>	
		<th>Location</th>
		<td><input type="text" name="location"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Property Details" name="add"/>
		</td>
	</tr>
</table> 
</form>
