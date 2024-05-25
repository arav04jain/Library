<?php
include 'database_connection.php';
$id1=$_GET['id'];









?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

    <style>
        h3{
            text-align: left;
        }
     
        details > summary{
            background-color: #5C4033;
            cursor: pointer;
            color: #FFFFE0;
            font-size: 175%;
            text-align: left;
        
            
        }
        table, td, tr{
        
            text-align:center;

        }
        
        

    
    </style>



</head>

<body style="background-color: #FFFFE0; text-align: center;">





    <!--Content-->


    <br>
    <h1 style="color: #5C4033; font-size: 400%;">Management</h1>
    <h2 style="color: #5C4033; font-size: 200%;">Welcome, <?php  
    $res = mysqli_query($mysqli,"select first_name from user where id=".$id1);
    $result=mysqli_fetch_assoc($res);
    $ress = mysqli_query($mysqli,"select last_name from user where id=".$id1);
    $results=mysqli_fetch_assoc($ress);
    $fr=implode("",$result)." ".implode("",$results);
    echo $fr;
    
    ?></h2>
    <img src="assets/imgs/favicon.png" alt="" height="50px" width="50px">
    <br><br>
    <details>
        <br>
        <summary>Details</summary>
        <h3 style="color: #5C4033; font-size: 150%;">ID:<?php  
  
   
    $fr=" ".$id1;
    echo $fr;
    
    ?></h3>
        <h3 style="color: #5C4033; font-size: 150%;">E-Mail: <?php  
    $res = mysqli_query($mysqli,"select email from user where id=".$id1);
    $result=mysqli_fetch_assoc($res);
    
    $fr=" ".implode("",$result);
    echo $fr;
    
    ?></h3>
        <h3 style="color: #5C4033; font-size: 150%;">Phone: <?php  
    $res = mysqli_query($mysqli,"select phone from user where id=".$id1);
    $result=mysqli_fetch_assoc($res);
    
    $fr=" ".implode("",$result);
    echo $fr;
    
    ?></h3>
        <h3 style="color: #5C4033; font-size: 150%;">Password:<?php  
    $res = mysqli_query($mysqli,"select password from user where id=".$id1);
    $result=mysqli_fetch_assoc($res);
    
    $fr=" ".implode("",$result);
    echo $fr;
    
    ?></h3>
        <h3 style="color: #5C4033; font-size: 150%;">Address:
        <?php  
    $res = mysqli_query($mysqli,"select address from user where id=".$id1);
    $result=mysqli_fetch_assoc($res);
    
    $fr=" ".implode("",$result);
    echo $fr;
    
    ?></h3>
     
        
        <br>
    </details>
    <br>


    
    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">

        <table>
        <tr>
        <td><a class="btn btn" href="add_book.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%; "><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16" >
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Add Book</a><br></td>
        <td>
        <a class="btn btn" href="add_user_data.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Add User
            Data</a><br></td>
            <td>
        <a class="btn btn" href="delete_book.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Delete Book</a><br>
</td>
</tr>
<tr>
       
        <td>
        <a class="btn btn" href="issue_book.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Issue Book</a><br></td><td>
        <a class="btn btn" href="search_book.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Search Book</a><br></td><td>
        <a class="btn btn" href="change_status.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Change Status</a><br></td></tr><tr><td>
        <a class="btn btn" href="search_user.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Search User</a><br></td><td>
        <a class="btn btn" href="return_book.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Return Book</a><br></td><td>
        <a class="btn btn" href="borrowed_books.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Borrowed Books</a><br></td></tr>
            
            
            <br>
            <tr>
            <td></td>

            <td><a class="btn" href="update_user_data_user.php" role="button" target="_blank"
            style="color: #FFFFE0; background-color: #5C4033; font-size: 150%; border-radius: 10%; text-align:center;"><svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                viewBox="0 0 16 16">
                <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
            </svg> Update Data</a><br></td>
            <td></td>
    </tr>
        </table>
    


    </div>

    <br><br>

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

    <script src="assets/js/bootstrap1.js"></script>
    <script src="assets/js/bootstrap2.js"></script>

</body>

</html>