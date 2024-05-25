<?php
include 'database_connection.php';
$texttd="";

if(isset($_REQUEST['username']))
{
$a = $_REQUEST['username'];
$b = $_REQUEST['password'];

$res = mysqli_query($mysqli,"select paidormanager from user where id='$a'and password='$b'");
$result=mysqli_fetch_assoc($res);





if($result!="")
{
  $result=implode("",$result);
  
  if($result=="Management"){
	  header("Location:management_home.php?id=$a");
  }else{
    header("Location:user_home.php?id=$a");

  }
  
}else
{
 
  $texttd= "Invalid Credentials";
}
}  

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

  <style>

  </style>



</head>

<body style="background-color: #FFFFE0; text-align: center;">

  <!--Navbar-->
  <nav class="navbar navbar-expand-lg " style="background-color:#5C4033;">
  <div class="container-fluid" style="background-color:#5C4033;">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color:#FFFFE0">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" style="color:#FFFFE0">Login</a>
        </li>
       
      </ul>
      <span class="navbar-text">
      
      </span>
    </div>
  </div>
</nav>
 



  <!--Content-->
  <div style="border-color: white; border: 2px 2px 2x 2px; ">
    <br><br><br><br>

    <h1 style="color: #5C4033;">Login</h1>
    <form action="" method="post">

    <br><br>
    <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
      <input style="text-align: center;" class="form-control" placeholder="User Id" size="7" type="text" id="fn"
        maxlength="7" name="username">
    </div>
    <br>

    <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
      <input style="text-align: center;" class="form-control" placeholder="Password" size="10" type="password" id="sn"
        maxlength="10" name="password">
    </div>
  </div>
  <br>
  <button type="submit" class="btn " style="color: #FFFFE0; background-color:#5C4033;">Login</button>
  <br><br>
</form>

  <p style="color:red; font-size:150%;"><?php echo $texttd; $texttd="";?></p>
  <br><br><br><br><br><br><br><br>


  <!--Footer-->

  <div>
    <img src="assets/imgs/favicon.png" alt="" height="30px" width="30px">
    <p>Copyright © 2022 - All Rights Reserved <br>
      Created By Arav Jain | Phone: 9953100018 Email: arav04jain@gmail.com<br>


    </p>
    <img src="assets/imgs/icon_of_developer.jpg" alt="" height="75px" width="75px" style="border-radius: 100px;">
    <br><br>

  </div>
  <br><br>




  <!--Java Script-->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap1.js"></script>
  <script src="assets/js/bootstrap2.js"></script>

</body>

</html>