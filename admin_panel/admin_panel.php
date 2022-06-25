  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin Panel</title>
      <!-- fav icon -->
      <link rel="icon" type="image/png" href="./favicon/icons8-male-user-48.png" />
      <!-- bootsstrap cdn -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- font awesome cdn -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--box icon cdn -->
      <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
      <!-- link the external stylesheet -->
      <link rel="stylesheet" type="text/css" href="admin_panel.css">

  </head>

  <body>

      <body id="body-pd">
          <header class="header" id="header">
              <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
              <div class="navbar__right">
                  <!-- <a href="#">
                      <i class="fa fa-bell" aria-hidden="true"></i>
                  </a> -->
                  <a href="../index.php">
                      <i class="fa fa-sign-out" aria-hidden="true"></i>
                  </a>
                  <a href="#">
                      <img width="30" src="assets/avatar.svg" alt="" />
                      <!-- <i class="fa fa-user-circle-o" aria-hidden="true"></i> -->
                  </a>
              </div>

          </header>
          <div class="l-navbar" id="nav-bar">
              <nav class="nav">
                  <div> <a href="#" class="nav_logo"><i class="fa fa-user"></i><span class="nav_logo-name">Admin Panel</span> </a>
                      <div class="nav_list"> <a href="./admin_panel.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                          <a href="./user_table.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users Table</span> </a>
                          <a href="./user_message.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span></a>
                          <a href="./user_order_details.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Users Order</span></a>
                          <!-- <a href="#" class="nav_link">
                              <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>  -->
                      </div>

              </nav>
          </div>


          <div class="top-text">
              <div class="icon"><i class="fa fa-dashboard"></i></div>
              <div class="text">Dashboard</div>
          </div>
          <!--Container Main start-->
          <div class="container-fluid h-100 d-none d-lg-block">

              <div class="row align-middle ">
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./slider_1/slider1.php">
                          <div class="card gr-1">
                              <div class="txt">
                                  <h1>Slider 1 </br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-gear"></i>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="col-md-6 col-lg-4 column">
                      <a href="./brands/brand.php">
                          <div class="card gr-2">
                              <div class="txt">
                                  <h1>Brands </br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-wrench"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./slider_2/slider2.php">
                          <div class="card gr-3">
                              <div class="txt">
                                  <h1>Slider 2 </br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-empire"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./categories/categories.php">
                          <div class="card gr-4">
                              <div class="txt">
                                  <h1>Categories</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-gears"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./products_details/product_details.php">
                          <div class="card gr-5">
                              <div class="txt">
                                  <h1>Products</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-code-fork"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./products_images/productsimages.php">
                          <div class="card gr-6">
                              <div class="txt">
                                  <h1>Products Images</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-wrench"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./shipping_charges/shipping_details.php">
                          <div class="card gr-7">
                              <div class="txt">
                                  <h1>Shipping Charges</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-gears"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./status_info/status_info.php">
                          <div class="card gr-8">
                              <div class="txt">
                                  <h1>Product Status</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-code-fork"></i>
                              </div>
                          </div>
                      </a>
                  </div>

              </div>


          </div>


          <!--Container Main end-->

          <div class="container-fluid h-100 d-lg-none">
              <div class="row align-middle-1">
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./slider_1/slider1.php">
                          <div class="card gr-1">
                              <div class="txt">
                                  <h1>Slider 1 </br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-gear"></i>
                              </div>
                          </div>
                      </a>
                  </div>

                  <div class="col-md-6 col-lg-4 column">
                      <a href="./brands/brand.php">
                          <div class="card gr-2">
                              <div class="txt">
                                  <h1>Brands </br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-wrench"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./slider_2/slider2.php">
                          <div class="card gr-3">
                              <div class="txt">
                                  <h1>Slider 2 </br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-empire"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./categories/categories.php">
                          <div class="card gr-4">
                              <div class="txt">
                                  <h1>Categories</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-gears"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./products_details/product_details.php">
                          <div class="card gr-5">
                              <div class="txt">
                                  <h1>Products</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-code-fork"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./products_images/productsimages.php">
                          <div class="card gr-6">
                              <div class="txt">
                                  <h1>Products Images</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-wrench"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./shipping_charges/shipping_details.php">
                          <div class="card gr-7">
                              <div class="txt">
                                  <h1>Shipping Charges</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-gears"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 column">
                      <a href="./status_info/status_info.php">
                          <div class="card gr-8">
                              <div class="txt">
                                  <h1>Product Status</br>
                                      Management</h1>
                              </div>
                              <div class="ico-card">
                                  <i class="fa fa-code-fork"></i>
                              </div>
                          </div>
                      </a>
                  </div>
                  <footer class="bg-light text-center text-lg-start" style="margin-top:10px;">
                      <!-- Copyright -->
                      <div id="text" style="background-color:ghostwhite;">
                          © 2022 Copyright:
                          <a class="text1" href="../index.php">Vogue X Maniac</a>
                      </div>
                  </footer>


              </div>

          </div>






          <!-- j query -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
          <script src="admin_panel.js"></script>


          <!-- Copyright -->

          <footer class="bg-light text-center text-lg-start d-none d-lg-block" style="margin-top:100px;">
              <!-- Copyright -->
              <div class="text-center p-3" style="background-color:ghostwhite;">
                  © 2022 Copyright:
                  <a class="text1" href="/index.php">Vogue X Maniac</a>
              </div>
          </footer>

      </body>

  </html>