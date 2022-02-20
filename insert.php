<?php
session_start();
include "db_conn.php";
$x=$_SESSION['fname'];
          
        $post = $_POST['posts'];
        echo $post;
    
        $sql1="SELECT userid from user where fname='$x'";
        $result1=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_array($result1);
        $x=json_encode($row1);
        $y=json_decode($x);
        $id= $y->userid;
            $sql = "INSERT into posts (userid ,post,upvotes,downvotes) values('$id','$post',0,0)";
            if(mysqli_query($conn,$sql)){
                
                // echo "<h3>data stored in a database successfully." 
                //     . " Please browse your localhost php my admin" 
                //     . " to view the updated data</h3>"; 
                //echo $sql1;
                header("Location: home.php");
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
        
          
          
?>