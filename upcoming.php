<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title>Upcoming Events</title>
  </head>
  <style>
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
  </style>
  <body>
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase">Upcoming Events</h2>
                <p class="text-white-50 mb-5">Please enter your details</p>
                <div class="form-outline form-white mb-4">
                  <input type="text" id="typename"  placeholder="Name of the Event"class="form-control form-control-lg" />
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="text" id="conductor"  placeholder="Conductor of the Event"class="form-control form-control-lg" />
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="text" id="add"  placeholder="Address"class="form-control form-control-lg" />
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="date" id="date"  placeholder="Date"class="form-control form-control-lg" />
                </div>
                <div class="form-outline form-white mb-4">
                  <input type="time" id="time"  placeholder="Time"class="form-control form-control-lg" />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="text" id="venue"  placeholder="Venue" class="form-control form-control-lg" />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="email" id="venue"  placeholder="Email" class="form-control form-control-lg" />
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="tel" id="phone"  placeholder="Phone Number"class="form-control form-control-lg" />
                </div>





                <input class="btn btn-outline-light btn-lg px-5" type="submit"  value="Submit"/>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
