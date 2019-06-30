<!DOCTYPE html>
<html>
<head>
	
	<title>Theatre List</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>

</head>
<body>
<div id="theatre_list">
	<?php
		require("connection.php");
		
?>
<div class="container">
  <form  method="post">
  <h2>Theatre List</h2> <input type="submit" class="btn btn-danger btn-sm" name="delete_button" value="Delete Selected">
           <a href="add_thretre.php">  <input type="button" class="btn btn-success btn-sm" name="add_button12" value="Add Thretre"></a>
           
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Theatre Id</th>
        <th scope="col">Theatre Name</th>
        <th scope="col">Location</th>
        <th scope="col">Total Seats</th>
        <th scope="col">Delete </th>
         <th scope="col">Modify</th>
      </tr>
    </thead>
    <tbody>
    <?php 
 $a="select * from theatre "; 
    $result=mysqli_query($db,$a); 
    while($row=mysqli_fetch_array($result))
{
	
	$id=$row[0]; 
        $name=$row[1]; 
        $loc=$row[2];
        $seat=$row[3];
     ?>
   <tr>
   	<td scope="row">	<?php  echo $id; ?></td>
   		<td>	<?php  echo $name; ?></td>
   			<td>	<?php  echo $loc; ?></td>
   				<td>	<?php  echo $seat; ?></td>
   					<td>	<input type="checkbox" name="check_list[]" value="<?php echo $id;?>"></td>
   					<td>	<a href='modify_theatre.php?id=<?php echo $id ?>' class="btn btn-outline-primary waves-effect btn-sm" name="test">edit</a> </td>
   </tr>
<?php } ?>
    </tbody>
  </table>
  </form>
</div>
<?php 

if(isset($_POST['delete_button'])){
	if(!empty($_POST['check_list'])){
		foreach($_POST['check_list'] as $selected){
			$a="delete from theatre where theatre_id=".$selected."";
if(mysqli_query($db,$a)){
  echo "ram";
//	header("Refresh:1;URL=admin.php");
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

// if(isset($_POST['add_button12'])){
// echo "sandip";
//  // header("Refresh:1;URL=add_thretre.php");
// }

 ?>	



</div>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>