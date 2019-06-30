<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
	<title> Admin panel</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/style.min.css" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#dash").show();
			$("#update").hide();
			$("#movie").hide();
			$("#theatre").hide();
			$("#user").hide();
			$("#book").hide();

			$("#dash1").click(function() {
				$("#dash").show();
				$("#update").hide();
				$("#movie").hide();
				$("#theatre").hide();
				$("#user").hide();
				$("#book").hide();

			});

			$("#movie1").click(function() {
				$("#dash").hide();
				$("#update").hide();
				$("#movie").show();
				$("#theatre").hide();
				$("#user").hide();
				$("#book").hide();
			});

			$("#theatre1").click(function() {
				$("#dash").hide();
				$("#update").hide();
				$("#movie").hide();
				$("#theatre").show();
				$("#user").hide();
				$("#book").hide();
			});

			$("#user1").click(function() {
				$("#dash").hide();
				$("#update").hide();
				$("#movie").hide();
				$("#theatre").hide();
				$("#user").show();
				$("#book").hide();
			});

			$("#update1").click(function() {
				$("#dash").hide();
				$("#update").show();
				$("#movie").hide();
				$("#theatre").hide();
				$("#user").hide();
				$("#book").hide();
			});
			$("#book1").click(function() {
				$("#dash").hide();
				$("#update").hide();
				$("#movie").hide();
				$("#theatre").hide();
				$("#user").hide();
				$("#book").show();
			});

		});
	</script>

</head>

<body>

	<!--Main Navigation-->
	<header>

		<!-- Navbar -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
			<div class="container-fluid">

				<!-- Brand -->
				<a class="navbar-brand waves-effect" href="#">
					<strong class="blue-text">MovieX</strong>
				</a>

				<!-- Collapse -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Links -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<!-- Left -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right -->
					<ul class="navbar-nav nav-flex-icons">
						<li class="nav-item">
							<a href="index1.php" class="nav-link border border-light rounded waves-effect">
								Logout
							</a>
						</li>
					</ul>

				</div>

			</div>
		</nav>

		<div class="sidebar-fixed position-fixed">

			<a class="logo-wrapper waves-effect">
				<h1>MovieX</h1>
			</a>

			<div class="list-group list-group-flush">
				<a id="dash1" href="#" class="list-group-item list-group-item-action waves-effect">
					<i class="fas fa-chart-pie mr-3"></i>Dashboard</a>
				<a id="movie1" href="#" class="list-group-item list-group-item-action waves-effect">
					<i class="fas fa-film mr-3"></i>Movies</a>
				<a id="theatre1" href="#" class="list-group-item list-group-item-action waves-effect">
					<i class="fas fa-warehouse mr-3"></i>Theatres</a>
				<a id="user1" href="#" class="list-group-item list-group-item-action waves-effect">
					<i class="fas fa-user mr-3"></i>Users</a>
				<a id="book1" href="#" class="list-group-item list-group-item-action waves-effect">
					<i class="fas fa-money-bill-alt mr-3"></i>See Bookings</a>
				<a id="update1" href="#" class="list-group-item list-group-item-action waves-effect">
					<i class="fas fa-user mr-3"></i>Update Password</a>
			</div>

		</div>

	</header>
	<main class="pt-5 mx-lg-5">
		<div class="container-fluid mt-5">

			<div id="display_board">
				<div id="dash">
					<div class="flex-container">
						<?php
						require("connection.php");
						$content = " ";
						$query = "select * from film ";
						$result = mysqli_query($db, $query);
						while ($row = mysqli_fetch_array($result)) {

							$id = $row[0];
							$name = $row[1];
							$poster = $row[2];
							$trailer = $row[3];

							$content .= '<div class="col-md-4 mt-5">
							<div class="card card-cascade wider">
							<div class="view view-cascade overlay">
								<img  class="card-img-top" src="' . $row[2] . '" alt="Card image cap" height="200px" width="400px">
								<a href="#!">
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
						
							<div class="card-body card-body-cascade text-center">
						
								<h4 class="card-title"><strong>' . $row[1] . '</strong></h4>
						
								<button type="button" value="' . $row[0] . '" name="but-name" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Watch Trailer</button>
								<button class="btn btn-info btn-sm" value="' . $row[0] . '" name="but-name" style="float:right;">Details</button>
							</div>
						</div></div>';
						}

						$content .= '<div style="clear:both"></div>
  </div>';

						?>

						<div class="container">
							<div class="row">
								<?php echo $content; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="movie">
				<?php include('movie_list.php'); ?>

			</div>
			<div id="theatre">
				<?php include('movie_theater.php'); ?>

			</div>
			<div id="user">
				<?php include('user_detail.php'); ?>

			</div>
			<div id="book">
				<?php include('booking_detail.php'); ?>

			</div>
			<div id="update">

				<?php include('update.php'); ?>
			</div>
		</div>


		</div>
	</main>
	<footer class="page-footer font-small special-color-dark pt-4 mt-5">

    <!-- Footer Elements -->
    <div class="container">

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#"> MovieX</a>
    </div>
    <!-- Copyright -->

  </footer>


	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>