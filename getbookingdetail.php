
<?php
session_start();
// print_r($_SESSION);
require ("connection.php");
//  echo $_SESSION['userid'];
$id=$_GET['id'];

?>
<html>
<head> 
	<title></title>
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
<br>
<br>
<br>
<?php 
    
    
    $query="select * from film where film_id=".$id."";
    // echo $id;
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result))
{
  
  $id=$row[0]; 
        $name=$row[1];
         $poster=$row[2];  
          $trailer=$row[3]; 
          $start=$row[4];
          $end=$row[5];
         
       ?>     
       <div class="upper" style="text-align: center;">
     <img src=" <?php echo $poster;    ?> " height="200px" width="300px">
            <br>
            <br>
            
            
          
       <strong><h3><?php  echo $name;    ?></h3></strong>     
       
          </span>  
           
       
     
   <?php
    }
   ?> 
</div>

<center>

<form action="" method="post">
<strong><label for="form-date">Enter the date</label></strong>	&nbsp&nbsp&nbsp
<input class="in" type="date" name="form-date" min="<?php echo $start;?>" max="<?php echo $end;?>">
  &nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp
 
 <strong> <label>Enter the time</label></strong>
  &nbsp&nbsp&nbsp
  <select class="in"  name="time">
  <option value="08:00">08:00</option>
  <option value="12:00">12:00</option>
  <option value="15:00">15:00</option>
  <option value="18:00">18:00</option>
<option value="21:00">21:00</option>
<option value="23:00">23:00</option>
</select>
  <strong><label>Choose the threatre </label></strong>&nbsp&nbsp&nbsp
<select name="theatre" class="in" >
<?php  
    $a="select * from theatre"; 
    $result=mysqli_query($db,$a); 
    while($row=mysqli_fetch_array($result))
{
  
  $tid=$row[0]; 
  $tname=$row[1]; 
        
        
    
?>
   &nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp&nbsp&nbsp&nbsp
<!--
<strong><label>Choose the threatre </label></strong>&nbsp&nbsp&nbsp
<select name="theatre" class="in" >
-->
  <option value="<?php echo $tid; ?>"><?php echo $tname; ?></option>
 

<?php  } ?>
    </select>
<br>
<br>
  <input type="submit" name="btn-sub" class="btn btn-primary">
  
</form>
</center>
<?php

   if(isset($_POST['btn-sub'])){ 
        $a=$_POST['time']; 
        $b=$id;
        $c=strtotime($_POST['form-date']);
        $tids=$_POST['theatre'];
        $d=$_POST['form-date'];
         $_SESSION['stime']=$a;
         $_SESSION['tid']=$tids;
           $_SESSION['sfilm']=$b;
            $_SESSION['sdate']=$d;
         
        echo $a." ".$b." ".$d."<br>";
        require('connection.php'); 
        
        $film_id="select start_date,end_date from film where film_id=".$b." ";
        $result_film_id=mysqli_query($db,$film_id);
       
        while ($row=mysqli_fetch_array($result_film_id)) {
          $s_date=strtotime($row[0]);
          $e_date=strtotime($row[1]);
        }
       if($s_date<$c and $e_date>$c){
        $exit="select count(*) from booking where date='".$d."' and time= '".$a."'and film=".$b." and theatre_id=".$tids."";

        $exit_film_id=mysqli_query($db,$exit);
        if(!$exit_film_id){
          echo "problem";
        }
         while ($row=mysqli_fetch_array($exit_film_id)) {
            echo $row[0];
            $found=$row[0];
       }

       if($found==0){
        $q="ram";
          $_SESSION['sid']=0;
        /*  $booking_id="insert into booking (user_name,date,time,film) values('".$q."','".$d."','".$a."',".$b.")";
          $result_booking_id=mysqli_query($db,$booking_id);
          $book_id="select booking_id from booking where date='".$d."' and time= '".$a."'and film=".$b."";
          $result_book_id=mysqli_query($db,$book_id);
          if(!$result_book_id){
          echo "big problem";
        }
          while ($row=mysqli_fetch_array($result_book_id)) {
            echo $row[0];
            $id=$row[0];

       }*/
       echo $id;
       $_SESSION['sid']=0;
      //  header("Refresh:1;URL=newbook1.php");
         echo "<script>location.href='seat_booking.php';</script>";
    /*    $a="insert into a(booking_id) values(".$id.")";
          $result_a=mysqli_query($db,$a);
          $b="insert into b(booking_id) values(".$id.")";
          $result_a=mysqli_query($db,$b);
          */
       }
       else{

            $a="select booking_id from booking where date='".$d."' and time= '".$a."'and film=".$b." and theatre_id=".$tids."";
             $b=mysqli_query($db,$a);
              while ($row=mysqli_fetch_array($b)) {
            echo $row[0];
            $id=$row[0];
          }
           echo $_SESSION['stime'];
           echo $_SESSION['sfilm'];
            echo $_SESSION['sdate'];

       
          $_SESSION['sid']=$id;
          echo $_SESSION['sid'];
          //    header("Refresh:1;URL=newbook1.php");
               echo "<script>location.href='seat_booking.php';</script>";

       }
    
    }
    else{
      echo "date does not match";
    //  header("Refresh:5;URL=pra.php");
       echo "<script>location.href='index.php';</script>";
    }
    
}

  ?>
</body>
</html>
