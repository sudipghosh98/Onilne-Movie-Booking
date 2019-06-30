
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">

<?php 
		require ("connection.php");
		$id=$_GET['id'];
		$query="select * from theatre where theatre_id=".$id."";
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result))
{
	
	
        $name=$row[1];
         $location=$row[2];  
          $tot=$row[3]; 
       
       
        
    }
	 ?>
</head>
<body>

<div class="container">
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Edit Theatre</strong>
  </h5>

  <div class="card-body px-lg-5 pt-0">

		<form class="text-center" style="color: #757575;" method="post" action="">

      <div class="md-form">
        <input type="number" name="id" readonly="" value="<?php  echo $id; ?>" class="form-control">
        <label >Theatre Id</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="name" value="<?php  echo $name; ?>" class="form-control">
        <label for="materialLoginFormEmail">Theatre Name</label>
      </div>

      <div class="md-form">
        <input type="text" name="location" value="<?php  echo $location; ?>" class="form-control">
        <label >Location</label>
			</div>
			
			<div class="md-form">
        <input type="number" name="reg" value="<?php  echo $tot; ?>" class="form-control">
        <label for="materialLoginFormEmail">Total Seats</label>
      </div>

      
		

      
			<input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit-btn" id="submit-btn" value="Update">
    </form>
  </div>
</div>
</div>
<?php
	if(isset($_POST['submit-btn'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$loc=$_POST['location'];
		$tot=$_POST['reg'];
	
		$a="update theatre set Theatre_name='".$name."' , Location='".$loc."' , Total_seats='".$tot."'  where theatre_id=".$id."";
			$result=mysqli_query($db,$a);
			if($result){
				echo "<script>alert('Data Updated')</script>";
						header("Refresh:1;URL=admin.php");
			}
			else{
				echo "<script>alert('Please try again')</script>";
							header("Refresh:1;URL=modify_theatre.php");
			}
	}
?>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mdb.min.js"></script>
</body>
</html>