<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ PAGE</title>
    <style>
      body{
        font-family: cursive;

            background-color:#CAF0F8;

    }
    .faq-heading{

        text-align: center;
        color:#F94892;
          margin-top:20px

    }
    .container{
      margin-top:50px
    }
    .navbar{
        background-color:#F94892;
    }
    #contact{
          background-color:#F94892
    }
.btn:hover {
      background-color:
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
<br>
  <h1 class="faq-heading">FAQ'S</h1>
  <div class="container">
  <div class="accordion" id="accordionExample">
<div class="accordion-item">
<h2 class="accordion-header" id="headingOne">
<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  Should you use sanitary products that are more absorbent and change them less frequently?
</button>
</h2>
<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
<div class="accordion-body">
  <p>Always choose sanitary products with an absorbency level that’s appropriate for your menstrual flow. Changing these products less frequently than once in four to eight hours (four hours for pads and four to eight hours for tampons) may lead to bacterial growth and infections.</p>
</div>
</div>
</div>

<div class="accordion-item">
<h2 class="accordion-header" id="headingTwo">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  Can you bathe while on your period?
</button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
<div class="accordion-body">
  <p>Yes, people who are menstruating can safely take baths. Normally, running water is perfectly fine. But if you have any reproductive health problems, it’s a good idea to consult a health care provider before soaking in the tub. If you do choose to take a bath while on your period, follow these steps for the safest experience:
  <ul>
    <li>
      Ensure the bathtub is clean, as your immune system is more susceptible to infection during menstruation.
      </li>
      <li>
        Use warm water — not hot. Hot water may provoke heavier bleeding.
        </li>
        <li>
          Wash your genitals before sitting in the tub (for example, rinse off under the shower).
          </li>
  </ul></p>
</div>
</div>
</div>
<div class="accordion-item">
<h2 class="accordion-header" id="headingThree">
<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
  If you use a pad for the night and sleep for about eight hours, should you get up every four hours to change it?
</button>
</h2>
<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
<div class="accordion-body">
  <p>When you’re active during the day, your menstrual flow is normally heavier, so the pad absorbs more blood, sweat, and sebum. This creates a breeding ground for bacteria, which is why you shouldn’t wear one pad for more than four hours.
When you are asleep, your bodily functions slow down, and the bleeding intensity decreases, so you can safely wear a pad overnight. However, don’t use tampons for more than eight hours. They’re associated with a risk of toxic shock syndrome, a severe infection.</p>
</div>
</div>
</div>


</div>
</div>
<!-- </section>
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
</footer> -->
</body>
</html>
