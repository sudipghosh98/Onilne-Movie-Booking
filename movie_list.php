<?php



  
?>
<!DOCTYPE html>
<html>
<head>

	
	<title>Movie List</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
	
</head>
<body>
 
<div id="movie_list">
	<?php
		require("connection.php");
		
?>
<div >
  <form  method="post">
  <h2>Movie List</h2> <input type="submit" class="btn btn-danger btn-sm" name="delete_button" value="Delete Selected">
                    <a href="add_film.php" > <input type="button" class="btn btn-success btn-sm" name="add_button" value="Add Movie"></a>
                    <center>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Movie Id</th>
        <th scope="col">Movie Name</th>
        <th scope="col">End Date</th>
        <th scope="col">Poster</th>
        <th scope="col">Delete</th>
        <th scope="col">Modify</th>
      </tr>
    </thead>
    <tbody>
    <?php 
 $a="select * from film"; 
    $result=mysqli_query($db,$a); 
    while($row=mysqli_fetch_array($result))
{
	
	$id=$row[0]; 
        $film_name=$row[1]; 
        $start_date=$row[4];
        $end_date=$row[5];
     ?>
   <tr>
   	<td scope="row">	<?php  echo $id; ?></td>
   		<td>	<?php  echo $film_name; ?></td>
   			<td>	<?php  echo $end_date; ?></td>
   				<td>	<?php   ?></td>
   					<td>	<input type="checkbox" name="check_list[]" value="<?php echo $id;?>"></td>

            <td>  <a href='modify_film.php?id=<?php echo $id ?>' class="btn btn-outline-primary waves-effect btn-sm" name="test">edit</a> </td>
   </tr>
   <?php } ?>
    </tbody>
  </table>
  </form>
</div>
</div>
</center>
<?php 
if(isset($_POST['delete_button'])){
	if(!empty($_POST['check_list'])){
		foreach($_POST['check_list'] as $selected){
			$a="delete from film where film_id=".$selected."";
if(mysqli_query($db,$a)){

   echo "<script>location.href='admin.php';</script>";
}
else{
	echo "not deleted";
}

//echo $selected;
		}
}
else{
  echo "<script>alert('Please selected the record you want to delete');</script>";
 }
}
// if(isset($_POST['add_button'])){

//  // header("Refresh:1;URL=add_film.php");
//    echo "<script>location.href='add_film.php';</script>";
// }
 ?>	



<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>