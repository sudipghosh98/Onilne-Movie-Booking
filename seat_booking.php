<?php
 session_start();
	require('connection.php'); 
       
	$id=$_SESSION['sid'];
	$a=$_SESSION['stime'];
	$b=$_SESSION['sfilm'];
	$c=$_SESSION['sdate'];
		$d=$_SESSION['tid'];
	$count1=0;
	$a1='';
	$a2='';
	$a3='';
	$a4='';
	$a5='';
	$a6='';
	$a7='';
	$a8='';
	$a9='';
	?>

<html>
<head>
	<title></title>
	<style type="text/css">
		.e{
			background-color: red;
			height: 30px;
			width: 50px;
		}
		.f{
			background-color: green;
			height: 50px;
			width: 30px;
		}
		.container-row{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: baseline;
		}
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 2%;
			font-weight: bolder;
			font-family: sans-serif;
		

		}
		label{
			display: flex;
			flex-direction: row;
			justify-content: center;
			
			padding: 5px;
		}
		form{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: baseline;

		}
		header{
			display: flex;
			flex-direction: row;
						justify-content: center;

			padding: 2%;
			font-weight: bolder;
			font-size: 25px;
			height: 100vpx;
			


		}
		.container{
			display: flex;
			flex-direction:column;
			justify-content: center;
			
			
			padding: 2%;
			
			width: 30%;
			background-color:;
			font-size: 20px;
			border: 2px;
			border-color: black;
		}
		input{
			height: 40px;
			width: 40px;
			padding: 10px;
		}
	</style>
	</head>
<body>
	
	<div class="container">

	<header > Screen </header>
	<form  action="" method="post"> 
	<div class="container-row">
		<label>A</label>
		<?php

		$a="select * from a where booking_id=".$id."";
		 $b=mysqli_query($db,$a);
              while ($row=mysqli_fetch_array($b)) {
            $a1=$row[1];
            $a2=$row[2];
            $a3=$row[3];
             $a4=$row[4];
              $a5=$row[5];
               $a6=$row[6];
                $a7=$row[7];
                 $a8=$row[8];
                  $a9=$row[9];
        }
        
        	?>
        	<input type="checkbox" name="check_list[]" class="<?php $a1; ?>" value="a1" <?php if($a1=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a1=='f') echo "return false";  ?>"   >
		<input type="checkbox" name="check_list[]" class="<?php $a2; ?>" value="a2"  <?php if($a2=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a2=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a3; ?>" value="a3" <?php if($a3=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a3=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a4; ?>" value="a4" <?php if($a4=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a4=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a5; ?>" value="a5" <?php if($a5=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a5=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a6; ?>" value="a6" <?php if($a6=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a6=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a7; ?>" value="a7" <?php if($a7=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a7=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a8; ?>" value="a8" <?php if($a8=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a8=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a9; ?>" value="a9" <?php if($a9=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a9=='f') echo "return false";  ?>">
		
	
		</div>

<div class="container-row">
	<label>B</label>
	<?php
		$a="select * from b where booking_id=".$id."";
		 $b=mysqli_query($db,$a);
              while ($row=mysqli_fetch_array($b)) {
            $a1=$row[1];
            $a2=$row[2];
            $a3=$row[3];
            $a4=$row[4];
              $a5=$row[5];
               $a6=$row[6];
                $a7=$row[7];
                 $a8=$row[8];
                  $a9=$row[9];
        }?>
		<input type="checkbox" name="check_list[]" class="<?php $a1; ?>" value="b1" <?php if($a1=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a1=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a2; ?>" value="b2" <?php if($a2=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a2=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a3; ?>" value="b3" <?php if($a3=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a3=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a4; ?>" value="b4" <?php if($a4=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a4=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a5; ?>" value="b5" <?php if($a5=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a5=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a6; ?>" value="b6" <?php if($a6=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a6=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a7; ?>" value="b7" <?php if($a7=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a7=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a8; ?>" value="b8" <?php if($a8=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a8=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a9; ?>" value="b9" <?php if($a9=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a9=='f') echo "return false";  ?>">
		
</div>
<div class="container-row">
	<label>C</label>
	<?php
		$a="select * from c where booking_id=".$id."";
		 $b=mysqli_query($db,$a);
              while ($row=mysqli_fetch_array($b)) {
            $a1=$row[1];
            $a2=$row[2];
            $a3=$row[3];
            $a4=$row[4];
              $a5=$row[5];
               $a6=$row[6];
                $a7=$row[7];
                 $a8=$row[8];
                  $a9=$row[9];
        }?>
		<input type="checkbox" name="check_list[]" class="<?php $a1; ?>" value="c1" <?php if($a1=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a1=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a2; ?>" value="c2" <?php if($a2=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a2=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a3; ?>" value="c3" <?php if($a3=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a3=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a4; ?>" value="c4" <?php if($a4=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a4=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a5; ?>" value="c5" <?php if($a5=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a5=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a6; ?>" value="c6" <?php if($a6=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a6=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a7; ?>" value="c7" <?php if($a7=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a7=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a8; ?>" value="c8" <?php if($a8=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a8=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a9; ?>" value="c9" <?php if($a9=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a9=='f') echo "return false";  ?>">
		
</div>

<br>
<br>
<br>
<div class="container-row">
	<label>D</label>
	<?php
		$a="select * from d where booking_id=".$id."";
		 $b=mysqli_query($db,$a);
              while ($row=mysqli_fetch_array($b)) {
            $a1=$row[1];
            $a2=$row[2];
            $a3=$row[3];
            $a4=$row[4];
              $a5=$row[5];
               $a6=$row[6];
                $a7=$row[7];
                 $a8=$row[8];
                  $a9=$row[9];
        }?>
		<input type="checkbox" name="check_list[]" class="<?php $a1; ?>" value="d1" <?php if($a1=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a1=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a2; ?>" value="d2" <?php if($a2=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a2=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a3; ?>" value="d3" <?php if($a3=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a3=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a4; ?>" value="d4" <?php if($a4=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a4=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a5; ?>" value="d5" <?php if($a5=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a5=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a6; ?>" value="d6" <?php if($a6=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a6=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a7; ?>" value="d7" <?php if($a7=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a7=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a8; ?>" value="d8" <?php if($a8=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a8=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a9; ?>" value="d9" <?php if($a9=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a9=='f') echo "return false";  ?>">
		
</div>
<div class="container-row">
	<label>E</label>
	<?php
		$a="select * from e where booking_id=".$id."";
		 $b=mysqli_query($db,$a);
              while ($row=mysqli_fetch_array($b)) {
            $a1=$row[1];
            $a2=$row[2];
            $a3=$row[3];
            $a4=$row[4];
              $a5=$row[5];
               $a6=$row[6];
                $a7=$row[7];
                 $a8=$row[8];
                  $a9=$row[9];
        }?>
		<input type="checkbox" name="check_list[]" class="<?php $a1; ?>" value="e1" <?php if($a1=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a1=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a2; ?>" value="e2" <?php if($a2=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a2=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a3; ?>" value="e3" <?php if($a3=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a3=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a4; ?>" value="e4" <?php if($a4=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a4=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a5; ?>" value="e5" <?php if($a5=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a5=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a6; ?>" value="e6" <?php if($a6=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a6=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a7; ?>" value="e7" <?php if($a7=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a7=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a8; ?>" value="e8" <?php if($a8=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a8=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a9; ?>" value="e9" <?php if($a9=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a9=='f') echo "return false";  ?>">
		
</div>
<div class="container-row">
	<label>F</label>
	<?php
		$a="select * from f where booking_id=".$id."";
		 $b=mysqli_query($db,$a);
              while ($row=mysqli_fetch_array($b)) {
            $a1=$row[1];
            $a2=$row[2];
            $a3=$row[3];
            $a4=$row[4];
              $a5=$row[5];
               $a6=$row[6];
                $a7=$row[7];
                 $a8=$row[8];
                  $a9=$row[9];
        }?>
		<input type="checkbox" name="check_list[]" class="<?php $a1; ?>" value="f1" <?php if($a1=='f'){echo "checked";$count1=$count1+1;}?>  onclick="<?php if($a1=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a2; ?>" value="f2" <?php if($a2=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a2=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a3; ?>" value="f3" <?php if($a3=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a3=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a4; ?>" value="f4" <?php if($a4=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a4=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a5; ?>" value="f5" <?php if($a5=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a5=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a6; ?>" value="f6" <?php if($a6=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a6=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a7; ?>" value="f7" <?php if($a7=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a7=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a8; ?>" value="f8" <?php if($a8=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a8=='f') echo "return false";  ?>">
		<input type="checkbox" name="check_list[]"  class="<?php $a9; ?>" value="f9" <?php if($a9=='f'){echo "checked";$count1=$count1+1;} ?>  onclick="<?php if($a9=='f') echo "return false";  ?>">
		
</div>
<br>
<input type="submit" name="submit-btn" id="submit-btn" value="proceed" style="background-color: green;color: white;height: 50px;width: 150px; font-size: 30px; margin-left: 150px">

</form>
	</div>

		<?php
	require('connection.php');
	// echo $id;
	// echo $count1;
	// 	$count=0;
	// $f="f";
if(isset($_POST['submit-btn'])){//to run PHP script on submit
	
	$p=$_POST['check_list'];
		$z=count($p);
		echo $z;
		echo $count1;
	$_SESSION['sel']=$z;
	$_SESSION['alreadysel']=$count1;

	//print_r($_POST['check_list']);
if($z>=$count1){
	$_SESSION['sseats']=$_POST['check_list'];
	//print_r($_SESSION['sseats']);

/*$che=array();
$_SESSION['e']=array();
// Loop to store and display values of individual checked checkbox.
foreach($_POST['check_list'] as $selected){
array_push($che,$selected);
array_push($_SESSION['e'],$selected);
$a=substr($selected, -1);
$b=substr($selected,0, 1);
echo $a." ".$b."<br>";
$count++;
$query="update ".$b." set ".$selected."='".$f."' where booking_id=".$id."";
 $result=mysqli_query($db,$query);
}

$_SESSION['sche']=$che;
print_r($_SESSION['sche']);
print_r($_SESSION['e']);
*/
echo "<script>location.href='payment.php';</script>";

}
else{
	echo "not selected any seats";
  //   header("Refresh:5;URL=newbook1.php");
}

}




?>
	</body>
</html>