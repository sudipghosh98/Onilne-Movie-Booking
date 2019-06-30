
<!DOCTYPE html>
<html>
<head>
	<title></title>
<!--	<link rel="stylesheet" type="text/css" href="style.css">-->
	<style type="text/css">
		
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 2%;
			font-weight: bolder;
			font-family: sans-serif;
		

		}
		header{
			display: flex;
			flex-direction: row;
			justify-content: center;
			align-items: flex-start;
			padding: 2%;
			font-weight: bolder;
			font-size: 23px;
			height: 100vpx;
			


		}
		.container{
			
			display: flex;
			flex-direction:column;
			justify-content: center;
			
		
			
			
			background-color:;
			font-size: 20px;
			border: 2px;
			border-color: black;
		}
		
		label{
			display: flex;
			justify-content: flex-start;
			align-items: center;
			font-size: 20px;
			font-weight: bolder;
			margin-top: 5px;
			margin-bottom: 3px;
			margin-left: 3px;

		}
		input{
			display: flex;
			padding: 5px;
			top-margin: 5px;
		}

		#submit-btn{
		display: flex;
			margin-top: 5px;
			padding: 4px;
			font-weight: bold;
			font-size: 22px;
			color: white;
			background-color: green;
			cursor: pointer;
			border-radius: 2px;
			border: none;

		}
	</style>
</head>
<body>

	<div class="container">
<header>Enter Details</header>
<form method="post" action="">
	<label> Name</label><input type="text" name="name" placeholder="Enter Name"><br>
	<label> Email</label><input type="email" name="email" placeholder="Enter Email"><br>
	<label> Registration no.</label><input type="number" name="reg" placeholder="e.g.11604480"><br>
	<label> Class</label><input type="text" name="class" placeholder="K1617"><br>
	<label> Mobile Number</label><input type="number" name="num" placeholder="Enter Number"><br><!--gdushvduhvduhdfh-->
	<input type="submit" name="submit-btn" id="submit-btn">
</form>
</div>
</body>
</html>