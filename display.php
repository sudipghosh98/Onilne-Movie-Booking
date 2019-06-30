<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require('connection.php'); // establish the connection to database
    $a="select * from user"; //helps to collect the data for the database
    $result=mysqli_query($db,$a); //it helps to collect the data record wise one by one
    while($row=mysqli_fetch_array($result))//these loops help to bring one by one record in row wise
{
	
	$nam=$row[0]; //it has the value of first column of the table i.e. user
        $pass=$row[1]; //it has the value of second column of the table i.e. password
        echo $nam." ".$pass."<br>";
        
    }
	//echo $id."<br>";
	//echo $nam."<br>";
?>
    
    



<body>

</body>
</html>