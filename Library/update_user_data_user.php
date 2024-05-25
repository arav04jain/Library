<?php
include 'database_connection.php';
$texttd="";
if(isset($_REQUEST['id']) && isset($_REQUEST['password']) && isset($_REQUEST['change_parameter'])){
    $a = $_REQUEST['id'];
$b = $_REQUEST['password'];

$res = mysqli_query($mysqli,"select email from user where id='$a'and password='$b'");
$result=mysqli_fetch_assoc($res);
    if($result!=""){
        if($_REQUEST['change_parameter']=="0"){
            if(isset($_REQUEST['val1'])){
                $res = mysqli_query($mysqli,"UPDATE `user` SET `password`='".$_REQUEST['val1']."' WHERE id=".$a);

    
            }
        }
        if($_REQUEST['change_parameter']=="1"){
            if(isset($_REQUEST['val2'])){
                $res = mysqli_query($mysqli,"UPDATE `user` SET `first_name`='".$_REQUEST['val2']."' WHERE id=".$a);

    
            }
        }
        if($_REQUEST['change_parameter']=="2"){
            if(isset($_REQUEST['val3'])){
                $res = mysqli_query($mysqli,"UPDATE `user` SET `last_name`='".$_REQUEST['val3']."' WHERE id=".$a);

    
            }
        }
        if($_REQUEST['change_parameter']=="3"){
            if(isset($_REQUEST['val4'])){
                $res = mysqli_query($mysqli,"UPDATE `user` SET `phone`='".$_REQUEST['val4']."' WHERE id=".$a);

    
            }
        }
        if($_REQUEST['change_parameter']=="4"){
            if(isset($_REQUEST['val5'])){
                $res = mysqli_query($mysqli,"UPDATE `user` SET `email`='".$_REQUEST['val5']."' WHERE id=".$a);

    
            }
        }
        if($_REQUEST['change_parameter']=="5"){
            if(isset($_REQUEST['val6'])){
                $res = mysqli_query($mysqli,"UPDATE `user` SET `address`='".$_REQUEST['val6']."' WHERE id=".$a);

    
            }
        }
        $texttd="Data Successfully Updated";

    }

    else{
    $texttd="Invalid Credentials";
    
}


}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Data</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

    <style>

    </style>



</head>

<body style="background-color: #FFFFE0; text-align: center;">

    <!--Navbar-->



    <!--Content-->
    <form method="post" action="">
    <div style="border-color: white; border: 2px 2px 2x 2px; text-align: center">
        <br><br><br><br>
        <!--Content-->
        <div style="border-color: white; border: 2px 2px 2x 2px; text-align: center">

            <h1 style="color: #5C4033;">Update User Data</h1>
            <br>
            <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
                <input style="text-align: center;" class="form-control" placeholder="User ID" size="7" type="number"
                    id="fn" max="9999999" name="id">
            </div>
            <br>
            <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
                <input style="text-align: center;" class="form-control" placeholder="Password" size="20" type="password"
                    id="fn" maxlength="10" name="password">
            </div>
            <br>
            <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
                <select style="text-align: center;" class="form-select text-center" aria-label="Default select example"
                    id="opt" name="change_parameter">
                    <option selected value="0">Change Password</option>
                    <option value="1">Change First Name</option>
                    <option value="2">Change Last Name</option>
                    <option value="3">Change Phone</option>
                    <option value="4">Change E-Mail</option>
                    <option value="5">Change Address</option>
           



                </select>
</div>
            <br>

            <button type="button" class="btn" style="color: #FFFFE0; background-color: #5C4033; font-size: 100%; "
                onclick="giveopt()">Give
                Options</button>
            <br><br>
            <div style='text-align: center;' class='d-flex justify-content-center div-to-align'>
            <p id="resultshown" style="text-align:center;" name="value"></p>
</div>
            <br>
            <br>





            <button type="submit" class="btn "
                style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; ">Update</button>
            

                <br><br>
                <p style="color:green; font-size:150%"><?php echo $texttd; $texttd="";?></p>
</form>
            <!--Footer-->
            <br><br><br><br><br>
            <div>
                <img src="assets/imgs/favicon.png" alt="" height="30px" width="30px">
                <p>Copyright © 2022 - All Rights Reserved <br>
                    Created By Arav Jain | Phone: 9953100018 Email: arav04jain@gmail.com<br>


                </p>
                <img src="assets/imgs/icon_of_developer.jpg" alt="" height="75px" width="75px"
                    style="border-radius: 100px;">
                <br><br>

            </div>
            <br><br>





            <!--Java Script-->

            <script src="assets/js/main.js"></script>
            <script src="assets/js/bootstrap1.js"></script>
            <script src="assets/js/bootstrap2.js"></script>

</body>

</html>