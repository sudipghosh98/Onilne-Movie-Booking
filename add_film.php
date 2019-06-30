
<!DOCTYPE html>
<html>
<head>
	<title>Add Film</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">
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

<div class="container">
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Add Film</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
		<form class="text-center" style="color: #757575;" method="post" action="">

      <!-- Password -->
      <div class="md-form">
        <input type="text" name="name" placeholder="e.g. Gully Boy" required class="form-control">
        <label >Movie Name</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="poster" placeholder="https://www.youtube.com/watch?v=TbkJ5HhFXdg&list=RDSuc1cmJyb8E&index=5" required class="form-control">
        <label for="materialLoginFormEmail">Poster Link</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="text" name="trailer" placeholder="e.g.https://www.youtube.com/watch?v=TbkJ5HhFXdg&list=RDSuc1cmJyb8E&index=5" required class="form-control">
        <label >Trailer Link</label>
			</div>
			
			<div class="md-form">
        <input type="date" name="start" placeholder="e.g 29-01-2019" required class="form-control">
        <label for="materialLoginFormEmail">Start Date</label>
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="date" name="end" placeholder="e.g 29-01-2019" required class="form-control">
        <label >End Date</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="Director" placeholder="e.g. abc,xyz" required class="form-control">
        <label >Director</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="Producer" placeholder="e.g. abc,xyz" required class="form-control">
        <label >Producer</label>
			</div>

			<div class="md-form">
        <input type="text" name="Writter" placeholder="e.g. abc,xyz" required class="form-control">
        <label >Writter</label>
			</div>

			<div class="md-form">
        <input type="text" name="Starring" placeholder="e.g. abc,xyz" required class="form-control">
        <label >Starring</label>
			</div>

			<div class="md-form">
        <input type="text" name="Music" placeholder="e.g. abc,xyz" required class="form-control">
        <label >Music By</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="time" placeholder="e.g. 1 hour 20 minutes" required class="form-control">
        <label >Duration</label>
			</div>

      
			<input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit-btn" id="submit-btn">


      
    </form>
  </div>
</div>
</div>


<?php 
		require("connection.php");
		if(isset($_POST['submit-btn'])){
		$name=$_POST['name'];
		$poster=$_POST['poster'];
		$trailer=$_POST['trailer'];
		$start=$_POST['start'];
		$end=$_POST['end'];
		$Director=$_POST['Director'];
		$Producer=$_POST['Producer'];
		$Writter=$_POST['Writter'];
		$Starring=$_POST['Starring'];
		$Music=$_POST['Music'];
		$Duration=$_POST['time'];
		$query="insert into film (film_name, poster, trailer, start_date, end_date, Directed_by, Produced_by, Written_by, Starring, Music_by, Time) values ('".$name."','".$poster."','".$trailer."','".$start."','".$end."','".$Director."','".$Producer."','".$Writter."','".$Starring."','".$Music."','".$Duration."')";
		$result=mysqli_query($db,$query);
		if($result){
			echo "no error";
			echo "result";
		header("Refresh:1;URL=admin.php");
	}
	else{
			echo "sandip";
		header("Refresh:10;URL=add_film.php");
}
	}
 ?>

<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mdb.min.js"></script>
</body>
</html>