<?php
include 'database_connection.php';
$texttd="";
if(isset($_REQUEST['1']) && isset($_REQUEST['2']) && isset($_REQUEST['3']) && isset($_REQUEST['4']) && isset($_REQUEST['5']) && isset($_REQUEST['6']))
{





$res = mysqli_query($mysqli,"select book_id from book ORDER BY book_id DESC LIMIT 1");
$result=implode(mysqli_fetch_assoc($res));
$idfa= intval($result+1);

$ress = mysqli_query($mysqli,"Insert into book (`book_id`, `name`, `author`, `genre`, `publisher`, `available`, `section`, `price`) VALUES ('".$idfa."','".$_REQUEST["1"]."','".$_REQUEST["2"]."','".$_REQUEST["3"]."','".$_REQUEST["4"]."','Available','".$_REQUEST["5"]."','".$_REQUEST["6"]."')");

$texttd="Book Successfully Added";





}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

    <style>

    </style>



</head>

<body style="background-color: #FFFFE0; text-align: center;">

    <!--Navbar-->



    <!--Content-->
    <div style="border-color: white; border: 2px 2px 2x 2px; ">
        <br><br><br><br>
        <h1 style="color: #5C4033;">Add Book</h1>
        <br>
        <form action="" method="post">
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Name" size="25" type="text" id="fn"
                maxlength="100" name="1">
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Author" size="25" type="text" id="fn"
                maxlength="100" name="2">
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Genre" size="25" type="text" id="fn"
                maxlength="100" name="3">
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Publisher" size="25" type="text"
                id="fn" maxlength="100" name="4">
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Section" size="25" type="text" id="fn"
                maxlength="3" name="5">
        </div>
        <br>
        <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
            <input style="text-align: center;" class="form-control" placeholder="Price" size="25" type="number" id="fn"
                max="9999999" name="6">
        </div>

        <br>



    </div>

    <button type="submit" class="btn " style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; ">Add
        Book</button>
        </form><br><br>
        <p style="color:green; font-size:150%;"><?php echo $texttd; $texttd="";?></p>

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