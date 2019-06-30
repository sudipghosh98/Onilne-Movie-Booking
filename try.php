<?php
session_start();
$_SESSION['check'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
</head>

<body>
  <!--Navbar -->
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
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
            <a class="nav-link" href="#">Admin Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Profile </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="#">Sign Up</a>
              <a class="dropdown-item" href="#">Login In</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row-fluid">
    <?php 
		require ("connection.php");

		$query="select * from film ";
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result))
    {
	
	    $id=$row[0]; 
      $name=$row[1];
      $poster=$row[2];  
      $trailer=$row[3]; 
    ?>

<div class="card bg-dark text-white" id="con" style="display: inline-flex;">
    	<img class="card-img-top" src="<?php echo $poster;    ?> " alt="Card image" style="width:300px;height: 200px;">
      <div class="card-body text-center">
        <h4 class="card-title"><?php  echo $name;?></h4>
        <p class="card-text">Some more text to increase the height</p>

        <button type="button" value="<?php  echo $id;?>" name="but-name" class="btn btn-warning"  data-toggle="modal" data-target="#myModal">Watch Trailer</button>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button class="btn btn-info"   value="<?php  echo $id;      ?>" name="but-name" >Details</button>
       

<?php
    }
?>
      
    </div>
  </div>


  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>