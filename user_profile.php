<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fav icon -->
    <link rel="icon" type="image/png" href="./favicon/vogue_x_maniac_png_K8m_icon.ico" />
    <!-- bootsstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!-- link the external stylesheet -->
    <link rel="stylesheet" type="text/css" href="./address.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>A well-known quote, contained in a blockquote element.</p>
                    iv class="form-body d-none d-sm-block">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <h3 class="text-center">Address Details</h3>
                                    <p class="text-center">Fill in the data below.</p>
                                    <form class="requires-validation" novalidate method="POST" action="./bill.php">

                                        <div class="col col-md-12">
                                            <input class="form-control" type="text" name="fullname" placeholder="Full Name" required>
                                            <div class="invalid-feedback">Username field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                            <div class="invalid-feedback">Email field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="street" placeholder="Address" required>
                                            <div class="invalid-feedback">Address field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="landmark" placeholder="Landmark" required>
                                            <div class="invalid-feedback">Landmark field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="city" placeholder="City" required>
                                            <div class="invalid-feedback">City field cannot be blank!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="number" name="pincode" placeholder="Pincode" required>
                                            <div class="invalid-feedback">Pincode field cannot be blank!</div>
                                        </div>


                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button class="btn btn-outline-success" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
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