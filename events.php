<?php
session_start();
include "db_conn.php";
$x=$_SESSION['fname'];
          
        $name = $_POST['name'];
        $venue = $_POST['venue'];
        $host = $_POST['host'];
        $address = $_POST['address'];
        $about = $_POST['about'];
        $time = $_POST['time'];
        $date = $_POST['date'];
        $email= $_POST['email'];
        $phone = $_POST['phone'];
        echo $post;
    
            $sql = "INSERT into events (name,eventid,conductor,address,about,date,time,venue,email,phone) values('$name',Null,'$host','$address','$about','$date','$time','$venue','$email','$phone')";
            if(mysqli_query($conn,$sql)){
                header("Location: home.php");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
        
          
          
?>