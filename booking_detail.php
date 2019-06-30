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
			<th scope="col">Receipt Id</th>
			<th scope="col">User Id</th>
            <th scope="col">User Name</th>
			<th scope="col">Number of Seats</th>
			<th scope="col">Seats</th>
			<th scope="col">Date</th>
			<th scope="col">Status</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		 $a="select r.receipt_id,r.user_id,u.User_Name,r.NO_of_Seats,r.Seats,r.Date,r.Status from receipt r JOIN user u ON r.user_id=u.user_id";
    $result=mysqli_query($db,$a); 
    while($row=mysqli_fetch_array($result))
{
	
		$rid=$row[0]; 
        $id=$row[1]; 
        $uname=$row[2];
        $nseat=$row[3]; 
        $seat=$row[4]; 
        $date=$row[5]; 
        $status=$row[6]; 
    
        //echo $nam." ".$pass."<br>";
      
    ?>
	<tr>		
		<td scope="row"><?php  echo $rid;  ?></td>
		<td><?php  echo $id;  ?></td>
        <td><?php  echo $uname;  ?></td>
		<td><?php  echo $nseat;  ?></td>
		<td><?php  echo $seat;  ?></td>
		<td><?php  echo $date;  ?></td>
		<td><span class="badge badge-success"><?php  echo $status;  ?></span></td>
		


	</tr>
<?php } ?>
	</tbody>

</table>

</div>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


