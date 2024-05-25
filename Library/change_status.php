<?php
include 'database_connection.php';
$texttd="";

if(isset($_REQUEST['user_id']) && isset($_REQUEST['status']))
{
$a = $_REQUEST['user_id'];
$b = $_REQUEST['status'];


$res = mysqli_query($mysqli,"UPDATE `user` SET `paidormanager`='".$b."' WHERE id=".$a.";");
$texttd="Status Changed Successfully";

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Status</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

    <style>

    </style>



</head>

<body style="background-color: #FFFFE0; text-align: center;">

    <!--Navbar-->



    <!--Content-->
    <form mehtod="post" action="">
    <div style="border-color: white; border: 2px 2px 2x 2px; text-align: center">
        <br><br><br><br>
        <!--Content-->
        <div style="border-color: white; border: 2px 2px 2x 2px; text-align: center">

            <h1 style="color: #5C4033;">Change Status</h1>
            <br>
            <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
                <input style="text-align: center;" class="form-control" placeholder="User ID" size="7" type="number"
                    id="fn" max="9999999" name="user_id">
            </div>
            <br>
            

            </div>
            

            <br><div style='text-align: center;' class='d-flex justify-content-center div-to-align'><select style='text-align: center' class='form-select text-center' aria-label='Default select example' name="status">
            <option selected value='Paid'>Paid</option>
            <option value='Not Paid'>Not Paid</option>
            <option value='Management'>Management</option>

            </select>
            </div>
    
            <br>
            <br>





            <button type="submit" class="btn "
                style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; ">Update</button>
            <br><br>
            <p style="color: green; font-size: 150%;"><?php  echo $texttd; $texttd="";  ?></p>
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