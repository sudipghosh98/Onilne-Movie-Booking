<?php
session_start();
//  echo $_SESSION['userid'];
	require('connection.php'); 
    //$count=$_SESSION['scount'];
  $userid=$_SESSION['userid'];

	$a=$_SESSION['stime'];
	$b=$_SESSION['sfilm'];
	$c=$_SESSION['sdate'];
  $bid=$_SESSION['sid'];
  $tid=$_SESSION['tid'];
  
	//echo count($_SESSION['sche']);
	// print_r($_SESSION['sseats']);
  $select=$_SESSION['sel'];
  $already=$_SESSION['alreadysel'];
	// echo $select;
  // echo $already;
  //  echo $userid;
  // echo $bid;
 $seats=$select-$already;
$pr=$seats*150;
$alotted_seat=" ";
$empty='';
$query='';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<fieldset >
<legend align="center" ><h2>CARD DETAILS</h2></legend>


<body bgcolor="#003333" bgproperties="blur" text="#FFFFFF" style="font-style:italic">
<form name="form321" method="post" action="">
<center>
<div class="card_details">
<table  align="center" cellpadding="10px" cellspacing="10px" style="font:'Lucida Sans Unicode', 'Lucida Grande', sans-serif">

        <tr>
          <td> CARD NUMBER </td>
          <td> <input type="number" name="card_number" maxlength="16" placeholder="ENTER CARD NUMBER" minlength="16" /> </td>
        </tr>
		
        <tr>
          <td> ACCOUNT HOLDER NAME </td>
          <td> <input type="text" name="a_h_nm" placeholder="ENTER YOUR NAME"/> </td>
        </tr>
	
        <tr>
          <td> CARD TYPE </td>
          <td> :<select name="cardtype" id="c0" >
                <option value="visa">visa</option>
				<option value="maestro">maestro</option>
				<option value="Rupay">Rupay</option>

				</select> </td>
        </tr>
		
        <tr>
          <td> EXPIRY DATE </td>
          <td> <select name="expd"  >
                <option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
				</select> 
                 <select name="expm"  >
                <option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
				</select> </td>
        </tr>
       
        <tr>
          <td> CVV NUMBER </td>
          <td><input type="number" name="cvv" max="999" min="000" /></td>
        </tr>
      
		<tr>
        <td> PIN NUMBER </td>
        <td> <input type="number" name="pno" min="0000" max="9999"/></td>
        </tr>
        
        
        <tr>
          <td> AMOUNT</td>
          <td> <input type="number" name="bln" value="<?php echo $pr; ?>" readonly/> </td>
        </tr>
		
           
            </table>
     
        <input type="submit" name="insert" value="PAY"/>
          </div> 
 </center> 
</form>


<center>

</fieldset>
</div>
</center>
<?php

if(isset($_POST['insert'])){
// print_r($_SESSION['sseats']);
if($_POST['card_number']==1234567890123456 && $_POST['cardtype']=="visa" && $_POST['pno']==1234 and $_POST['cvv']==123 and $_POST['expd']=="08" and $_POST['expm']=="2020"){
$f='f';
if($bid==0){
  // echo "hi";
$query="insert into booking (User_id,date,time,film,theatre_id) values(".$userid.",'".$c."','".$a."',".$b.",".$tid.")";
$result=mysqli_query($db,$query);
if($result){
  // echo "booking inserted";
}
else{
  // echo "problem1";
}
// echo "hi";
$query="select * from booking";
 $result=mysqli_query($db,$query); //it helps to collect the data record wise one by one
    while($row=mysqli_fetch_array($result))//these loops help to bring one by one record in row wise
{
  $bid=$row[0];
  }
   $_SESSION['sid']=$bid;
 $query="insert into a (booking_id) values(".$bid.")";
 $result=mysqli_query($db,$query);
 if($result){
  //  echo "booking inserted";
 }
 else{
  // echo "problem2";
}
  $query="insert into b (booking_id) values(".$bid.")";
  $result=mysqli_query($db,$query);
 if($result){
  //  echo "booking inserted";
 }
 else{
  // echo "problem1";
}
  $query="insert into c (booking_id) values(".$bid.")";
  $result=mysqli_query($db,$query);
 if($result){
  //  echo "booking inserted";
 }
 else{
  // echo "problem1";
}
  $query="insert into d (booking_id) values(".$bid.")";
  $result=mysqli_query($db,$query);
 if($result){
  //  echo "booking inserted";
 }
 else{
  // echo "problem1";
}
  $query="insert into e (booking_id) values(".$bid.")";
  $result=mysqli_query($db,$query);
 if($result){
  //  echo "booking inserted";
 }
 else{
  // echo "problem1";
}
  $query="insert into f (booking_id) values(".$bid.")";
  $result=mysqli_query($db,$query);
 if($result){
  //  echo "booking inserted";
 }
 else{
  // echo "problem1";
}

      foreach($_SESSION['sseats'] as $selected){
        $alotted_seat=$alotted_seat.",".$selected;
        // echo $alotted_seat;
$a1=substr($selected, -1);
$b1=substr($selected,0, 1);
// echo $a1." ".$b1."<br>";
//$count++;
$query="update ".$b1." set ".$selected."='".$f."' where booking_id=".$bid."";
 $result=mysqli_query($db,$query);
 if($result){
  // echo "sucess";
 }
 else{
  // echo "problem1";
}
}

$_SESSION['alotted_seat']=$_SESSION['sseats'];
}
else{
      foreach($_SESSION['sseats'] as $selected){
$a1=substr($selected, -1);
$b1=substr($selected,0, 1);
// echo $bid;
// echo $a1." ".$b1."<br>";
//$count++;
$query1="select ".$selected." from ".$b1." where booking_id=".$bid."";
 $result1=mysqli_query($db,$query1);
 while ($row=mysqli_fetch_array($result1)) {
            // echo $row[0];
            $empty=$row[0];
          }
          if($empty=='e'){
            $alotted_seat=$alotted_seat.",".$selected;
            // echo $alotted_seat;
$query="update ".$b1." set ".$selected."='".$f."' where booking_id=".$bid."";
 $result=mysqli_query($db,$query);
 if($result){
  // echo "sucess15";
 }
}
}

$_SESSION['alotted_seat']=$alotted_seat;
}


$query="insert into receipt (user_id,No_of_Seats,Seats,Date) values(".$userid.",".$seats.",'".$alotted_seat."','".$c."')";
 $result=mysqli_query($db,$query);
 if($result){
  // echo "sucess12";
 }

header("Refresh:2;URL=index.php");


}
else{
  echo "<script>payment details incorrect Please Try Again</script>";
}

}

?>
</body>
</html>