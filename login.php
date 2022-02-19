<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: main.php?error=Email is required");

        exit();

    }else if(empty($pass)){

        header("Location: main.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['password'] = $row['password'];

                $_SESSION['fname'] = $row['fname'];

                $_SESSION['lname'] = $row['lname'];

                $_SESSION['age'] = $row['age'];


                header("Location: home.php");

                exit();

            }else{

                header("Location: main.php?error=Incorect email or password");

                exit();

            }

        }else{
            

            header("Location: main.php?error=Incorect email or password");

            exit();

        }

    }

}else{

    header("Location: main.php");

    exit();

}