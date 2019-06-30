
<?php 
require('connection.php');
 
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
  <script src="js/jquery.min.js"></script>
</head>

<body>

<div class="container">

<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">User ID</th>
			<th scope="col">User Name</th>
			<th scope="col">Password</th>
			<th scope="col">Email</th>
			<th scope="col">Contact Number</th>
			<th scope="col">Address</th>
			<th scope="col">Pin Code</th>
		</tr>
	</thead>
	<tbody>
		<?php
		 $a="select * from user";
    $result=mysqli_query($db,$a); 
    while($row=mysqli_fetch_array($result))
{
	
		$id=$row[0]; 
        $nam=$row[1]; 
        $pass=$row[2]; 
        $email=$row[3]; 
        $no=$row[4]; 
        $address=$row[5]; 
        $pin=$row[6]; 
        //echo $nam." ".$pass."<br>";
        
    
    ?>
	<tr>		
		<td scope="row"><?php  echo $id;  ?></td>
		<td><?php  echo $nam;  ?></td>
		<td><?php  echo $pass;  ?></td>
		<td><?php  echo $email;  ?></td>
		<td><?php  echo $no;  ?></td>
		<td><?php  echo $address;  ?></td>
		<td><?php  echo $pin;  ?></td>


	</tr>
<?php } ?>
	</tbody>

</table>

</div>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


