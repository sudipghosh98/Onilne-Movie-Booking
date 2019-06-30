<?php
    session_start();
    
if(!isset($_SESSION['check'])){
  $_SESSION['check']=0;
  //echo "hello";
}

?>
<!DOCTYPE html>

<html lang="en">
<head>

  <title>Book tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item"><a href="index1.php
      " class="nav-link colo">Logout</a></li>
      <li class="nav-item"><button type="button" class="btn " data-toggle="modal" style="color: white;" data-target="#myModal1"><?php if($_SESSION['check']==1){ echo $_SESSION["name"]; }else{ echo "Login"; }?></button></li>
          
        </ul>
      </div>
    </div>
  </nav>


    <br>
<div class="container" >
<video class="video-fluid" autoplay loop muted >
        <source src="assets/Endgame.mp4" type="video/mp4" />
      </video>
<form method="post" action="movie_detail.php">
<?php 
		require ("connection.php");
$content = "";
		$query="select * from film ";
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result))
{
	
	 $id=$row[0]; 
        $name=$row[1];
         $poster=$row[2];  
       $trailer=$row[3]; 
         

       $content .= '<div class="col-md-4 mt-5">
            <div class="card card-cascade wider">
  <div class="view view-cascade overlay">
    <img  class="card-img-top" src="' . $row[2] . '" alt="Card image cap" height="200px" width="400px">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <div class="card-body card-body-cascade text-center">

    <h4 class="card-title"><strong>' . $row[1] . '</strong></h4>

    <a href="'.$row[3].'" target="_blank">
    
    <button type="button" value="' . $row[0] . '" name="but-name" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Watch Trailer</button></a>
    <button class="btn btn-info btn-sm" value="' . $row[0] . '" name="but-name" style="float:right;">Details</button>
  </div>
</div></div>';
          }

        $content .= '<div style="clear:both"></div>
  </div>';
       ?>     
    
     
    <div class="container">
    <div class="row">
      <?php echo $content;?>
      </div>
    </div>
  </div>
    
   </form> 
      
   <footer class="page-footer font-small special-color-dark pt-4 mt-5">

<div class="container">

  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>

</div>

<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="#"> MovieX</a>
</div>

</footer>
     
 
	
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mdb.min.js"></script>

</body>
</html>
