
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>



<body>
<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog" style="width: 400px;">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User Login</h4>
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
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
     <button type="submit" class="btn btn-default" name="sub1" style="background-color: green;color: white;font-family: sans-serif;">Login</button>
    <?php  
          require('connection.php');
          if(isset($_POST['sub1'])){
            echo "button pressed";
              $query="select * from user ";
        $result=mysqli_query($db,$query);
        while($row=mysqli_fetch_array($result))
{
  
  $id=$row[0];
  $nam=$row[1];
  $em=$row[3];
  $pass=$row[2];
   echo $em; echo $_POST['email'];
   echo $pass; echo $_POST['pwd'];
            if($_POST['email']==$em and $_POST['pwd']==$pass){
            echo "dfbg";
              $_SESSION['userid']=$id;
              
          echo "<script>location.href='pra.php';</script>";
            }
        }
            
            
              ?>
                     <script type="text/javascript">
                     alert("wrong user or password");
                            

                    </script> 
              <?php
                         
          }
          

     ?>
  </form>
        </div>
        
      </div>
      
    </div>
  </div>
  

</body>

</html>