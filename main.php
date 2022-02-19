<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
</head>
<style>
    #card{
        background-color: #F94892;
        border-radius: 4px;
    }
    button[type=submit] {
     /* width: 50%; */
     background-color: #F94892;
     color: white;
     /* padding: 14px 20px; */
     margin: 8px 0;
     border: none;
     border-radius: 4px;
     cursor: pointer;
     font-family: cursive;
    }

    button[type=submit]:hover {
      background-color: #00B4D8;
    }
    </style>
<body style="background-color:#CAF0F8;font-family: cursive;">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <div class="display-6 text-center fw-bold text-success">Login</div> -->
    <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-lg-4 col-md-6 col-sm-6 shadow p-3 mb-5 " id="card">
            <div class="card shadow">
              <div class="card-title text-center border-bottom">
                <h2 class="p-3">Login</h2>
              </div>
              <div class="card-body">
                <form action="login.php" method="post">
                <?php if (isset($_GET['error'])) { ?>

                <p class="error"><?php echo $_GET['error']; ?></p>

                <?php } ?>
                  <div class="mb-4">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="text" class="form-control border border-dark" name="email" />
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control border-dark" name="password" />
                  </div>
                  <div class="d-grid gap-2 col-4 mx-auto mb-4">
                    <button type="submit" class="btn btn-info border border-dark" id=>Login</button>
                  </div>
                  <div class="col-9 mx-auto">Are you an expert? <a href="expert_login.php">Login as expert</a></div>
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
</body>
</html>