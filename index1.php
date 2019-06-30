<?php
session_start();
// if(!isset($_SESSION['check'])){
//   $_SESSION['check']=0;
//   //echo "hello";
// }
$_SESSION['check'] = 0;
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <title>Movie Tickets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
</head>

<body>
  <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index1.php">Your Ticket</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index1.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Admin Login</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> Profile </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal2">Sign Up</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal1">Login In</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>


  <div class="container-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/endgame1.jpg" alt="First slide" height="550px">
        </div>
        <?php
        require("connection.php");
        $a = "select * from film";
        $result = mysqli_query($db, $a);
        while ($row = mysqli_fetch_array($result)) {

            $id = $row[0];
            $film_name = $row[1];
            $poster = $row[2];
            echo '<div class="carousel-item">
        <img class="d-block w-100" src="' . $poster . '"
          alt="Second slide" height="550px">
      </div>';
          }
        ?>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <form method="post" action="movie_detail.php">
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
    <a href="'.$row[3].'" target="_blank">
    <button type="button" value="' . $row[0] . '" name="but-name" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Watch Trailer</button></a>
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


  </form>

  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">User Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
            </div>
            <button type="submit" class="btn btn-default" name="sub1" style="background-color: green;color: white;font-family: sans-serif;">Login</button>
            <?php
            require('connection.php');
            if (isset($_POST['sub1'])) {
              echo "button pressed";
              $pass1 = 0;
              $query = "select * from user ";
              $result = mysqli_query($db, $query);
              while ($row = mysqli_fetch_array($result)) {

                $id = $row[0];
                $nam = $row[1];

                $pass = $row[2];
                $em = $row[3];
                //  echo $em; echo $_POST['email'];
                // echo $pass; echo $_POST['pwd'];
                if ($_POST['email'] == $em and $_POST['pwd'] == $pass) {
                  echo "dfbg";
                  $_SESSION['userid'] = $id;
                  $_SESSION["name"] = $nam;
                  $_SESSION["check"] = 1;
                  $pass1 = 1;
                  echo "<script>location.href='index.php';</script>";
                }
              }
              if ($_SESSION["check"] == 1) {

                ?>
                <script type="text/javascript">
                  alert("wrong user or password");
                </script>
              <?php
            }
          }


          ?>
          </form>
        </div>



      </div>
    </div>
  </div>


  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Admin Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
            <button type="submit" class="btn btn-default" name="sub1" style="background-color: green;color: white;font-family: sans-serif;">Login</button>
            <?php
            require('connection.php');
            if (isset($_POST['sub1'])) {
              echo "button pressed";
              $query = "select * from  admin";
              $result = mysqli_query($db, $query);

              $pass = 0;
              while ($row = mysqli_fetch_array($result)) {

                $em = $row[0];

                $id = $row[1];

                echo $em;

                if ($_POST['email'] == $em and $_POST['pwd'] == $id) {
                  echo "dfbg";
                  $pass = 1;
                  $_SESSION['semail'] = $em;
                  echo "<script>location.href='admin.php';</script>";
                }
              }
              echo $pass;
              if ($pass == 0) {
                echo "sandip";
                ?>
                <script>
                  alert("wrong user or 1236password")
                </script>
                <?php
                echo "alert";
              }
            }


            ?>
          </form>
        </div>



      </div>
    </div>
  </div>


  <div class="modal" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">User Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <form action="index1.php" method="post">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Names" name="name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
            </div>
            <div class="form-group">
              <label for="mob">Mobile No.:</label>
              <input type="number" class="form-control" id="mob" placeholder="Enter Mobile No." name="mob" min="5000000000" max="9999999999">
            </div>
            <div class="form-group">
              <label for="add">Address:</label>
              <input type="text" class="form-control" id="add" placeholder="Enter Address" name="add">
            </div>
            <div class="form-group">
              <label for="pin">Pin Code:</label>
              <input type="number" class="form-control" id="pin" placeholder="Enter Pincode" name="pin" min="100000" max="999999">
            </div>
            <button type="submit" class="btn btn-default" name="sub3" style="background-color: green;color: white;font-family: sans-serif;">Sign Up</button>
            <?php
            require('connection.php');
            if (isset($_POST['sub3'])) {
              $na = $_POST['name'];
              $mail = $_POST['email'];
              $pwd = $_POST['pwd'];
              $mob = $_POST['mob'];
              $add = $_POST['add'];
              $pin = $_POST['pin'];
              echo $na . " " . $mail . " " . $pwd . " " . $mob . " " . $pin . " " . $add;
              $insert = "insert into user (User_Name, Password, Email, Mobile_No, Address, Pincode) values('" . $na . "','" . $mail . "','" . $pwd . "'," . $mob . ",'" . $add . "'," . $pin . ")";

              $check = mysqli_query($db, $insert);
              if ($check) {
                echo "<script>alert('Sucessfully Sign up')</script>";
              } else {
                //  echo "<script>alert('Something went Wrong')</script>";
                echo mysqli_error($db);
              }
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>

<footer class="page-footer font-small special-color-dark pt-4 mt-5">

    <div class="container">

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

    </div>

    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#"> MovieX</a>
    </div>

  </footer>


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/mdb.min.js"></script>
</body>

</html>