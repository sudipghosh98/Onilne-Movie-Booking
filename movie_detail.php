<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<style type="text/css">
	
	.colo
{
	color: white;
}
	.seconddiv
	{

		height: 100px;
		width: 300px;
		background-color: gray;
	}
  th{
    float: right;
  }
</style>
</head>


<body>

    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index1.php">Your Ticket</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index1.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Admin Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Profile </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal2">Sign Up</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal1">Login In</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
require ("connection.php");
$id=$_POST['but-name'];
// echo $id;   
$query="select * from film where film_id='".$id."'";
 $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result))
{
        $ide=$row[0];
        $name=$row[1];
         $poster=$row[2];  
       $trailer=$row[3]; 
         $director=$row[6];
         $Produced=$row[7];
         $Written=$row[8];
         $Starring=$row[9];
         $Music=$row[10];
         $time=$row[11];

  

?>





<div class="container">
  <iframe class="mt-2" width="100%" height="550px" src="<?php echo $trailer;  ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<div style="width: 1000px; padding: 10px;">
 <div style="float: left; width: 300px;  height: 300px;" class="mt-5"><img src="<?php echo $poster ?>" width=300px; height=300px; ></div>
 <div style="float: left;  width: 500px; height: 500px;">
 <br><br> <center><h3>Movie : <?php echo $name;   ?></h3></center><br><br>
  
   <table class="tab" style="margin-left: 50px;">

      <tr>
        <th><h5>Directed By: </h5></th>
    <td ><h5>  <?php  echo $director;  ?> </h5></td>
      </tr>

<tr></tr>
       <tr>
        <th><h5>Produced By: </h5></th>
    <td ><h5>  <?php  echo $Produced;  ?> </h5></td>
      </tr>


       <tr>
        <th><h5> By: </h5></th>
    <td ><h5>  <?php  echo $Written;  ?> </h5></td>
      </tr>


       <tr>
        <th><h5>Starring: </h5></th>
    <td ><h5>  <?php  echo $Starring;  ?> </h5></td>
      </tr>


       <tr>
        <th><h5>Music By: </h5></th>
    <td ><h5>  <?php  echo $Music;  ?> </h5></td>
      </tr>

          <tr>
        <th><h5>Running time: </h5></th>
    <td ><h5>  <?php  echo $time;  ?> </h5></td>
      </tr>


     

   </table>



 </div>
 <div style="float: left; width: 180px; height: 300px;"><br><br>
 	<br>
 	<br><span><a href='getbookingdetail.php?id=<?php  echo $id; ?>' ><button class="btn btn-primary" name="book" style="float: right;" > Book Ticket</button></a></span></div>
    <?php 
    if(isset($_POST['book']))
     echo "zxcv"; ?>
 <br style="clear: left;" />
</div>
	</div>
<?php } ?>
</body>
</html>