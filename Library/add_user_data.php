<?php
include 'database_connection.php';

if(isset($_REQUEST['1']) && isset($_REQUEST['2']) && isset($_REQUEST['3']) && isset($_REQUEST['4']) && isset($_REQUEST['5']) && isset($_REQUEST['6']) && isset($_REQUEST['7']))
{


    
$res = mysqli_query($mysqli,"select id from user ORDER BY id DESC LIMIT 1");
$result=implode(mysqli_fetch_assoc($res));
$idfa= intval($result+1);

$ress = mysqli_query($mysqli,"Insert Into user(`id`, `password`, `first_name`, `last_name`, `phone`, `email`, `address`, `paidormanager`) VALUES ('".$idfa."','".$_REQUEST['6']."','".$_REQUEST['1']."','".$_REQUEST['2']."','".$_REQUEST['3']."','".$_REQUEST['4']."','".$_REQUEST['5']."','".$_REQUEST['7']."')");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

    <style>

    </style>



</head>

<body style="background-color: #FFFFE0; text-align: center;">

    <!--Navbar-->



    <!--Content-->
    <form action="" method="post">
    <div style="border-color: white; border: 2px 2px 2x 2px; text-align: center">
        <br><br><br><br>
        <h1 style="color: #5C4033;">Add User</h1>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="First Name" size="25" type="text" name="1"
                id="fn" maxlength="100">
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Last Name" size="25" type="text"
                id="fn" maxlength="100" name=2>
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Phone Number" size="25" type="text"
                id="fn" maxlength="13" name=3>
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Email" size="25" type="text" id="fn"
                maxlength="100" name=4>
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Address" size="25" type="text" id="fn"
                maxlength="500" name=5>
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Password" size="25" type="password"
                id="fn" maxlength="10" name=6>
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
        
            <select style="text-align: center;" class="form-select text-center" aria-label="Default select example" name="7" id="7">
                <option selected value="Paid">Paid</option>
                <option value="Not Paid">Not Paid</option>
                <option value="Management">Management</option>

            </select>
        </div>
        
        <br>
        <br>



    </div>

    <button type="submit" class="btn " style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; ">Add
        User</button>
</form>

    <!--Footer-->
    <br><br><br><br><br>
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

    <script src="assets/js/bootstrap1.js"></script>
    <script src="assets/js/bootstrap2.js"></script>

</body>

</html>