<?php  

$e=$_SESSION['semail'];
require ("connection.php");
		
$query="select password from admin where email='".$e."' ";
$result=mysqli_query($db,$query);
$f='';
while($row=mysqli_fetch_array($result))
{
    $f=$row[0];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
<center>
<form method="post">
	<br>
	<br>
	<br>
	<br>
	<br>
<label for="oldpassword">Old Password</label><br>
<input type="password" name="oldpassword" required><br>

<label for="newpass">New Password</label><br>
<input type="password" name="newpass" required><br>

<label for="conpass">Confirm Password</label><br>
<input type="password" name="conpass" required><br>

<input type="submit" class="btn btn-primary" name="submit">
</form>
</center>
<?php
if(isset($_POST['submit'])){
	//echo $f;
	echo $_POST['oldpassword'];
	echo $_POST['newpass'];
	echo $_POST['conpass'];

if($f!=$_POST['oldpassword']){
	echo $f;
	echo $_POST['oldpassword'];
echo "wrong old password";
}
if($_POST['newpass']!=$_POST['conpass']){
echo "plz enter correct confirm password";
}
if($f==$_POST['oldpassword'] && $_POST['newpass']==$_POST['conpass']){
	echo "password is sucessfully changed";
	$r=$_POST['newpass'];
	require('connection.php');
	$q="update admin set password='".$r."' where email='".$e."'  ";
	$result=mysqli_query($db,$q);
	echo $result;
}
}

?>
</body>
</html>







