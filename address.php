<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address Details</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="address.css">
</head>

<body>
<div class="row mt-3 mx-3" style="margin-top:25px ;">
  <div class="col-md-3">
    <div style="margin-top: 50px; margin-left: 10px;" class="text-center">
      <i id="animationDemo" data-mdb-animation="slide-right" data-mdb-toggle="animation"
        data-mdb-animation-reset="true" data-mdb-animation-start="onScroll"
        data-mdb-animation-on-scroll="repeat" class="fa fa-3x fa-shipping-fast text-white"></i>
      <h3 class="mt-3 text-white">Welcome</h3>
      <p class="white-text">You are 30 seconds away from compleating your order!</p>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-white btn-rounded back-button">Go back</button>
    </div>


  </div>
  <div class="col-md-9 justify-content-center">
    <div class="card card-custom pb-4">
      <div class="card-body mt-0 mx-5">
        <div class="text-center mb-3 pb-2 mt-3">
          <h4 style="color: #495057 ;">Delivery Details</h4>
        </div>

        <form class="mb-0">

          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example1" class="form-control input-custom" />
                <label class="form-label" for="form9Example1">First name</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example2" class="form-control input-custom" />
                <label class="form-label" for="form9Example2">Last name</label>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example3" class="form-control input-custom" />
                <label class="form-label" for="form9Example3">City</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example4" class="form-control input-custom" />
                <label class="form-label" for="form9Example4">Zip</label>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form9Example6" class="form-control input-custom" />
                <label class="form-label" for="form9Example6">Address</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="email" id="typeEmail" class="form-control input-custom" />
                <label class="form-label" for="typeEmail">Email</label>
              </div>
            </div>
          </div>

          <div class="float-end ">
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-rounded"
              style="background-color: #0062CC ;">Place order</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>



    <!-- j query -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- owl carousel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>

</html>