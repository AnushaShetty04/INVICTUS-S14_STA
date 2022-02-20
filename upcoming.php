<?php 

session_start();
include "db_conn.php";
$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Share to Aware</title>
  <style>
     input[type=text], select {
     width:100%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 7px;
     font-family: font-family: cursive;
     box-sizing: border-box;
    }

   input[type=submit] {
     /* width: 50%; */
     background-color: #F94892;
     color: white;
     padding: 14px 20px;
     margin: 8px 0;
     border: none;
     border-radius: 4px;
     cursor: pointer;
     font-family: cursive;
    }

    input[type=submit]:hover {
      background-color: #00B4D8;
    }
    .navbar{
        background-color:#F94892;
    }
    body{
       background-color: #CAF0F8
    }
    *{
        font-family: cursive;
    }
    /* .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    
    }
    /* .card:hover {
      /* box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      opacity: 1; */ */
      .card:hover{
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
   }
   #but{
     background-color: #CAF0F8;
     color:black;
   }
   #posts{
     padding:12px 50px;
     margin: 8px 0;
   } */
   .btn:hover {
      background-color:#CAF0F8;
    }
    .btn{
      background-color:#F94892;
      color:white;
    }
    #contact{
          background-color:#F94892
        }

    .card:hover{
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
  }
  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Share to Aware</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" href="home.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="expertList.php">Ask a expert</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="upcoming.php">Upcoming events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="FAQ.php">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="mypost.php">Your posts</a>
        </li>
      </ul>
      <a href= 'logout.php' class="btn btn-outline-light" id="but">Logout</a> 
    </div>
  </div>
</nav>
<br><br>
<a href= 'addEvent.php' class="btn btn-info d-grid gap-2 col-2 mx-auto" id="button">Add a new event</a> 
<br><br>
  <div class="container">
	<div class="row row-cols-1 row-cols-md-3 g-4">
	<?php
			foreach ($result as $row){        
        echo '
        <div class="card" style="width: 18rem;">
        <div class="card-body col">
          <h5 class="card-text text-danger">'.$row['name'].'</h5>
          <p class="card-text">'."Event organiser:"." ".$row['conductor'].'</p>
          <p class="card-text">'."Organization address:"." ".$row['address'].'</p>
          <h5 class="fw-bold">About</h5>
          <hr>
          <p class="card-text">'.$row['about'].'</p> 
          <p class="card-text">'."Date:"." ".$row['date'].'</p>    
          <p class="card-text">'."Time:"." ".$row['time'].'</p>
          <p class="card-text">'."Contact:"." ".$row['phone'].'</p>
          <p class="card-text">'.$row['email'].'</p>
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group" role="group" aria-label="First group">
          <button class="btn me-1" >Register for this event</button>
          </div>
        </div>
        </div>
      </div> &nbsp &nbsp'."\r";

			}
		?>
	</div>
  <br><br>
 
</div>
</section>
<footer class="text-center text-white" id='contact'>
  <div class="container pt-4">
    <section class="mb-4">
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"><i class="fas fa-envelope"></i></a>
    </section>
  </div>
  <div class="text-center text-dark p-3" >
    © 2021 Copyright:
    <a class="text-dark" href="#">Share to Aware</a>
  </div>
</footer>
  </body>
</html>