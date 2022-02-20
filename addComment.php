<?php
session_start();
include "db_conn.php";
$x=$_SESSION['fname'];
          
        $comment = $_POST['comment'];
        echo $comment;
        $postid = $_POST['postid'];
       

        // $sql="SELECT postid from posts where postid='$postid'";
        // $result=mysqli_query($conn,$sql);
        // $row=mysqli_fetch_array($result);
        // $x1=json_encode($row);
        // $y1=json_decode($x1);
        // $id1= $y1->postid;
    
        // echo $id1;
        $sql1="SELECT userid from user where fname='$x'";
        $result1=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_array($result1);
        $x=json_encode($row1);
        $y=json_decode($x);
        $id= $y->userid;
            $sql = "INSERT into comments (postid ,commentid,comment,userid) values('$postid',Null,'$comment','$id')";
            if(mysqli_query($conn,$sql)){
                header("Location: home.php");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
        
          
          
?>