
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mdb.min.css">



<!--	<link rel="stylesheet" type="text/css" href="style.css">-->
<?php 
		require ("connection.php");
		$id=$_GET['id'];
		$query="select * from film where film_id=".$id."";
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result))
{
	
	$id=$row[0]; 
        $name=$row[1];
         $poster=$row[2];  
          $trailer=$row[3]; 
           $start=$row[4]; 
           $end=$row[5]; 
            $Director=$row[6];
		$Producer=$row[7];
		$Writter=$row[8];
		$Starring=$row[9];
		$Music=$row[10];
		$Duration=$row[11];
       
        
    }
	 ?>
	
</head>
<body>
<div class="container">
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Edit Film</strong>
  </h5>

  <div class="card-body px-lg-5 pt-0">

		<form class="text-center" style="color: #757575;" method="post" action="">

      <div class="md-form">
        <input type="number" name="id" value="<?php echo $id; ?>" readonly class="form-control">
        <label for="materialLoginFormEmail">Movie Id</label>
      </div>

      <div class="md-form">
        <input type="text" name="movie_name" value="<?php echo $name; ?>" class="form-control">
        <label >Movie Name</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="movie_poster" value="<?php echo $poster; ?>" class="form-control">
        <label for="materialLoginFormEmail">Poster</label>
      </div>

      <div class="md-form">
        <input type="text" name="movie_trailer" value="<?php echo $trailer; ?>" class="form-control">
        <label >Trailer</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="movie_trailer" value="<?php echo $trailer; ?>" class="form-control">
        <label for="materialLoginFormEmail">Start Date</label>
      </div>

      <div class="md-form">
        <input type="date" name="movie_end" value="<?php echo $end; ?>" class="form-control">
        <label >End Date</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="Director" value="<?php echo $Director; ?>" class="form-control">
        <label >Director</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="Producer" value="<?php echo $Producer; ?>" class="form-control">
        <label >Producer</label>
			</div>

			<div class="md-form">
        <input type="text" name="Writter" value="<?php echo $Writter; ?>" class="form-control">
        <label >Writter</label>
			</div>

			<div class="md-form">
        <input type="text" name="Starring" value="<?php echo $Starring; ?>" class="form-control">
        <label >Starring</label>
			</div>

			<div class="md-form">
        <input type="text" name="Music" value="<?php echo $Music; ?>" class="form-control">
        <label >Music</label>
			</div>
			
			<div class="md-form">
        <input type="text" name="Duration" value="<?php echo $Duration; ?>" class="form-control">
        <label >Duration</label>
			</div>

      
			<input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit_button" id="submit-btn" value="Update">


      
    </form>
  </div>
</div>
</div>

<?php
	if(isset($_POST['submit_button'])){
		$id=$_POST['id'];
		$name=$_POST['movie_name'];
		$poster=$_POST['movie_poster'];
		$trailer=$_POST['movie_trailer'];
		$start=$_POST['movie_start'];
		$end=$_POST['movie_end'];

		  $Director=$_POST['Director'];
		$Producer=$_POST['Producer'];
		$Writter=$_POST['Writter'];
		$Starring=$_POST['Starring'];
		$Music=$_POST['Music'];
		$Duration=$_POST['Duration'];


		$a="update film set film_name='".$name."' , poster='".$poster."' , trailer='".$trailer."' , start_date='".$start."', end_date='".$end."', Directed_by='".$Director."',Produced_by='".$Producer."',Written_by='".$Writter."',Starring='".$Starring."',Music_by='".$Music."',Time='".$Duration."' where film_id=".$id."";
			$result=mysqli_query($db,$a);
			echo "<script>alert('Data Updated')</script>";
		echo "<script>location.href='admin.php';</script>";
	}
?>
</div>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mdb.min.js"></script>
</body>
</html>