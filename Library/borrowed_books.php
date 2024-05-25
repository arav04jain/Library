
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Borrowed Books</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon.png">

    <style>
        table, th, td{
          border: 2px solid #5C4033;
          border-style: double;
          text-align: center;
      
        
     }
     th{
        background-color: #5C4033;
        color: #FFFFE0;
        border-color: #FFFFE0;
     }

    </style>



</head>

<body style="background-color: #FFFFE0; text-align: center;">
    <!--Navbar-->





    <!--Content-->


    <br>
    <h1 style="color: #5C4033; text-align: center;">Search Borrowed Books</h1>


    <br>

    <br>
    <form  action="" method="post">

    <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
        <select class="form-select" aria-label="Default select example" style="text-align: center;" id="opt" name="para">
            <option value="0">Book ID</option>
            <option value="1">User ID</option>
            
           
            



        </select>
    </div>
    <br><br>


    


    <button type="button" class="btn" style="color: #FFFFE0; background-color: #5C4033; font-size: 100%; "
        onclick="giveinputshowna()">Give Value</button>
    <br>
    <br>
    <div style="text-align: center;" class="d-flex justify-content-center div-to-align">
        
        <p id="resultshown" ></p>
    </div>
   

    <br>


    


    <button type="submit" class="btn " style="color: #FFFFE0; background-color: #5C4033; font-size: 100%; "
        onclick="">Search</button>
    <br>
    </form>



    <br>
    <table style="width: 100%;">
        <tr>
            <th>Book ID</th>
            <th>Book Name</th>
            <th>User ID</th>
            <th>User Name</th>
            <th>User Phone</th>
            <th>User E-Mail</th>
            <th>Date Issued</th>
            </tr>
            
            
        <?php
            include "database_connection.php";
            $num="";
            if(isset($_REQUEST['para']) && isset($_REQUEST['inputss'])){
         
              
             
                
                if($_REQUEST['para']=="0"){
                    $a=($_REQUEST['inputss']);
                   
               
                    
                    $res = mysqli_query($mysqli,"select book_id from borrow where book_id = ".$a);
            
                    $result=mysqli_fetch_assoc($res);
            
                    if($result!=""){
                       
                    
                        echo "<tr>";


                        $res = mysqli_query($mysqli,"select book_id from borrow where book_id=".$a);
                        $result=implode(mysqli_fetch_assoc($res));
                        $bid=$result;
                        echo '<td>'.$result.'</td>';


                        $res = mysqli_query($mysqli,"select name from book where book_id=".$bid);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select user_id from borrow where book_id=".$a);
                        $result=implode(mysqli_fetch_assoc($res));
                        $uid=$result;
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select first_name from user where id=".$uid);
                        $result=implode(mysqli_fetch_assoc($res));
                        $ress = mysqli_query($mysqli,"select last_name from user where id=".$uid);
                        $results=implode(mysqli_fetch_assoc($ress));
                        echo '<td>'.$result." ".$results.'</td>';

                        $res = mysqli_query($mysqli,"select phone from user where id=".$uid);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select email from user where id=".$uid);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select date from borrow where book_id=".$a);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                       


                        
                        echo "</tr>";

                        
            
                    }else{
                        echo "<tr><td colspan='7'>No Record</td></tr>";
                        }
                 
                    
                   
            
                    
            
            
                }else{
                    $a=($_REQUEST['inputss']);
             
                    $res = mysqli_query($mysqli,"select user_id from borrow where user_id = ".$a);
            
                    $result=mysqli_fetch_assoc($res);
                    $num=mysqli_num_rows($res);
                    if($result!=""){
                       
                        for($x=0;$x<$num;$x++){
                       

                        $u="select book_id from borrow where user_id=".$a." limit ".$x.",1;";
                        
                        $ressss = mysqli_query($mysqli,$u);
                        $b=mysqli_fetch_assoc($ressss);
                     
            
                        $b=implode("",$b);

                       
                        
                        echo "<tr>";


                        $res = mysqli_query($mysqli,"select book_id from borrow where book_id=".$b);
                        $result=implode("",mysqli_fetch_assoc($res));
                        $bid=$result;
                        echo '<td>'.$result.'</td>';


                        $res = mysqli_query($mysqli,"select name from book where book_id=".$bid);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select user_id from borrow where book_id=".$b);
                        $result=implode(mysqli_fetch_assoc($res));
                        $uid=$result;
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select first_name from user where id=".$uid);
                        $result=implode(mysqli_fetch_assoc($res));
                        $ress = mysqli_query($mysqli,"select last_name from user where id=".$uid);
                        $results=implode(mysqli_fetch_assoc($ress));
                        echo '<td>'.$result." ".$results.'</td>';

                        $res = mysqli_query($mysqli,"select phone from user where id=".$uid);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select email from user where id=".$uid);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                        $res = mysqli_query($mysqli,"select date from borrow where book_id=".$b);
                        $result=implode(mysqli_fetch_assoc($res));
                        echo '<td>'.$result.'</td>';

                       


                        
                        echo "</tr>";
                   
                      
                            
                        }
                        

            
                }else{
                    echo "<tr><td colspan='7'>No Record</td></tr>";
                    }
            
            
                
            }}
            ?>
            
       

        
        
    </table>

    





    <!--Footer-->
    <br><br><br><br><br>
    <div style="text-align: center;">
        <img src="assets/imgs/favicon.png" alt="" height="30px" width="30px">
        <p>Copyright © 2022 - All Rights Reserved <br>
            Created By Arav Jain | Phone: 9953100018 Email: arav04jain@gmail.com<br>


        </p>
        <img src="assets/imgs/icon_of_developer.jpg" alt="" height="75px" width="75px" style="border-radius: 100px;">
        <br><br>

    </div>
    <br><br>
    </div>


    <!--Java Script-->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap1.js"></script>
    <script src="assets/js/bootstrap2.js"></script>

</body>

</html>