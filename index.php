<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title>Share to Aware</title>
  </head>
  <style>
    #cards_landscape_wrap-2{
      text-align: center;

    }
    #cards_landscape_wrap-2 .container-fluid{
      padding-top: 80px;
      padding-bottom: 100px;
      margin-left: 200px;


      /* Chrome 10-25, Safari 5.1-6 */

    }
    #cards_landscape_wrap-2 a{
      text-decoration: none;
      outline: none;
    }
    #cards_landscape_wrap-2 .card-flyer {
      border-radius: 5px;
    }
    #cards_landscape_wrap-2 .card-flyer .image-box{
      background: #ffffff;
      overflow: hidden;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
      border-radius: 5px;
    }
    #cards_landscape_wrap-2 .card-flyer .image-box img{
      -webkit-transition:all .9s ease;
      -moz-transition:all .9s ease;
      -o-transition:all .9s ease;
      -ms-transition:all .9s ease;
      width: 100%;
      height: 200px;
    }
    #cards_landscape_wrap-2 .card-flyer:hover .image-box img{
      opacity: 0.7;
      -webkit-transform:scale(1.15);
      -moz-transform:scale(1.15);
      -ms-transform:scale(1.15);
      -o-transform:scale(1.15);
      transform:scale(1.15);
    }
    #cards_landscape_wrap-2 .card-flyer .text-box{
      text-align: center;
    }
    #cards_landscape_wrap-2 .card-flyer .text-box .text-container{
      padding: 30px 18px;
    }
    #cards_landscape_wrap-2 .card-flyer{
      background: #FFFFFF;
      margin-top: 50px;
      -webkit-transition: all 0.2s ease-in;
      -moz-transition: all 0.2s ease-in;
      -ms-transition: all 0.2s ease-in;
      -o-transition: all 0.2s ease-in;
      transition: all 0.2s ease-in;
      box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
    }
    #cards_landscape_wrap-2 .card-flyer:hover{
      background: #fff;
      box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
      -webkit-transition: all 0.2s ease-in;
      -moz-transition: all 0.2s ease-in;
      -ms-transition: all 0.2s ease-in;
      -o-transition: all 0.2s ease-in;
      transition: all 0.2s ease-in;
      margin-top: 50px;
    }
    #cards_landscape_wrap-2 .card-flyer .text-box p{
      margin-top: 10px;
      margin-bottom: 0px;
      padding-bottom: 0px;
      font-size: 14px;
      letter-spacing: 1px;
      color: #000000;
    }
    #cards_landscape_wrap-2 .card-flyer .text-box h6{
      margin-top: 0px;
      margin-bottom: 4px;
      font-size: 18px;
      font-weight: bold;
      text-transform: uppercase;
      font-family: 'Roboto Black', sans-serif;
      letter-spacing: 1px;
      color: #00acc1;
    }

  .container{
    padding-top: 20px;
  }
.navbar{
   background-color:#F94892


}
.nav-link {
            color: white;

              font-size:1.2rem;
        }

        .nav-item>a:hover {
            color:#CAF0F8;;

        }

        /*code to change background color*/
        .navbar-nav>.active>a {

            color:black;


        }
        .navbar-brand{
          color: white;

          font-size: 2.0 rem;
          font-weight: bold;
        }
        .nav-item{
            padding:0 18px;
        }
        #contact{
          background-color:#F94892
        }
        body{
            background-color:#CAF0F8;
        }
      .btn:hover {
      background-color: #00B4D8;
    }
    .btn{
      background-color:#CAF0F8;
      color:black;
    }
    *{
           font-family: cursive;
         }
         .navbar-brand:hover {
             color:#CAF0F8;

         }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Share to Aware</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="#title">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
        <a href= 'main.php' class="btn btn-outline-light" id="button">Login</a>  &nbsp &nbsp
        <a href= 'signup.php' class="btn btn-outline-light" id="button">Sign up</a> 
      </form>
    </div>
  </div>
</nav>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/1.jpg" class="d-block w-100" alt="..." width="700" height="377">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpeg" class="d-block w-100" alt="..." width="700" height="377">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="..." width="700" height="377">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<section class="colored-section" id="title">

<div id="cards_landscape_wrap-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer" style="height:20rem">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="img/hello1.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Share Your Thoughts</h6>
                                <p></p>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer" style="height:20rem">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="img/hello.jpg" alt="" />
                            </div>
                            <div class="text-container">
                                <h6>Ask an Expert</h6>
                                <p></p>

                          </div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <a href="">
                    <div class="card-flyer" style="height:20rem">
                        <div class="text-box">
                            <div class="image-box">
                                <img src="img/tim.png" alt="" />
                            </div>

                            <div class="text-container">
                                <h6>Event Conduction</h6>
                               <p></p>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
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
