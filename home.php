<?php 

session_start();
include "db_conn.php";

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

$sql1="SELECT comment from comments where postid='$'"


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
    .card:hover{
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
   }
    .btn{
      background-color:#F94892;
      color:black;
    }
    #contact{
          background-color:#F94892
    }
    a:link {
      color:black;
    text-decoration: none;
   }
   .modal-body{
    max-height: calc(100vh - 200px);
    overflow-y: auto;
  }
    
  </style>
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comments</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="addComment.php" method="post">
          <div class="mb-3">
            <label for="comment" class="col-form-label">Add your comment</label>
            <input type="text" class="form-control" id="comment" name="comment">
          </div> 
          <input type="hidden" class="form-control" name="postid" id="postid"/> 
          <p>Comments</p>
          <div id="body"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" type="submit">Add</button>
      </div>
        </form>
    </div>
  </div>
</div>

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
<div class="container">
<div class="row">
<div class="col-10">
  <form action="insert.php" method="post">
    <input type="text"  name="posts" placeholder="Share your thoughts..">  
    </div>
<div class="col-2">
    <input type="submit" value="Share">
</div>
  </form>
</div>
</div>
<script>
    
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
    var recipient = button.getAttribute('data-bs-postid')
    var comment = button.getAttribute('data-bs-comment')
    var modalTitle = exampleModal.querySelector('.modal-title')
    var modalBodyInput = exampleModal.querySelector('.modal-body input#postid')

  modalTitle.textContent = 'Add comment'
  modalBodyInput.value = recipient
  //document.getElementById("body").innerHTML=comment
})
</script>
<br><br>
  <div class="container">
	<div class="row row-cols-1 row-cols-md-3 g-4">
	<?php
      $likes=1;
			foreach ($result as $row){ 
        $y=$row['userid'];
        $sql1="Select fname,lname from user where userid='$y'";
        $result1 = mysqli_query($conn, $sql1);
        $row1=mysqli_fetch_array($result1);
        $x=json_encode($row1);
        $y=json_decode($x);
        $fname= $y->fname;
        $lname= $y->lname;
        $postid=$row['postid'];

        // $sql="SELECT comment from comments where postid='$postid'";
        // $res = mysqli_query($conn, $sql);
        // $row2=mysqli_fetch_array($res);
        // $x1=json_encode($row2);
        // $y1=json_decode($x1);
        // $comment= $y1->comment;
        
        echo '
        <div class="card" style="width: 18rem;">
        <div class="card-body col">
        <a href="displayComments.php">
          <h6 class="card-title">'.$fname. " " . $lname.'</h6>
        </a>
          <p class="card-text">'.$row['post'].'</p>
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group me-2" role="group" aria-label="First group">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-postid='.$postid.'>Comment</button>
          </div>
          <div class="btn-group me-2" role="group" aria-label="Second group">
          <button class="like btn me-1" id="demo">'.$row['upvotes'].'&nbsp<i class="fa fa-thumbs-up"></i></button>
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
          <button class="unlike btn"  >'.$row['downvotes'].'&nbsp<i class="fa fa-thumbs-down"></i></button>
          </div>
        </div>
        </div>
      </div> &nbsp &nbsp'."\r";


			}
		?>
	</div>
  <br><br>
 
</div>
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