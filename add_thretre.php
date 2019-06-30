
<!DOCTYPE html>
<html>
<head>
	<title>Add Film</title>
<!--	<link rel="stylesheet" type="text/css" href="style.css">-->
<?php 
		require("connection.php");
		if(isset($_POST['submit-btn'])){
		$name=$_POST['name'];
		$location=$_POST['location'];
		$tot=$_POST['tot'];
		
		$query="insert into theatre (Theatre_name, Location,  Total_seats) values ('".$name."','".$location."',
		".$tot.")";
		$result=mysqli_query($db,$query);
		if($result){
		header("Refresh:1;URL=admin.php");
	}
	else{

		header("Refresh:10;URL=add_thretre.php");
}
	}
 ?>
	<style type="text/css">
		
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 2%;
			font-weight: bolder;
			font-family: sans-serif;
		

		}
		header{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: flex-start;
			padding: 2%;
			font-weight: bolder;
			font-size: 23px;
			height: 100vpx;
			


		}
		.add_details{
			
			display: flex;
			flex-direction:column;
			justify-content: center;
			
		
			
			
			background-color:;
			font-size: 20px;
			border: 2px;
			border-color: black;
		}
		
		label{
			display: flex;
			justify-content: flex-start;
			align-items: center;
			font-size: 20px;
			font-weight: bolder;
			margin-top: 5px;
			margin-bottom: 3px;
			margin-left: 3px;

		}
		input{
			display: flex;
			padding: 5px;
			top-margin: 5px;
		}

		#submit-btn{
		display: flex;
			margin-top: 5px;
			padding: 4px;
			font-weight: bold;
			font-size: 22px;
			color: white;
			background-color: green;
			cursor: pointer;
			border-radius: 2px;
			border: none;

		}
	</style>
</head>
<body>

	<div class="add_details">
<header>Enter Details</header>
<form method="post" action="">
	<label> Name</label><input type="text" name="name" placeholder="e.g. Gully Boy"><br>
	<label> Location</label><input type="text" name="location" placeholder="Phagwara"><br>
	<label> Total Seats</label><input type="number" name="tot" placeholder="e.g. 120"><br>
	
	<input type="submit" name="submit-btn" id="submit-btn">
</form>

</div>
</body>
</html>