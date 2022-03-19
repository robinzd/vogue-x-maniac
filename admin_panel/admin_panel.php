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
              <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
          </header>
          <div class="l-navbar" id="nav-bar">
              <nav class="nav">
                  <div> <a href="#" class="nav_logo"><i class="fa fa-user"></i><span class="nav_logo-name">Admin Panel</span> </a>
                      <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                          <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i>
                              <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link">
                              <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>
                      </div>
                  </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
              </nav>
          </div>
          <!--Container Main start-->

          <h4>Main Components</h4>
          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <a href="./slider_1/slider1.php"><div class="card-counter primary">
                          <i class="fa fa-code-fork"></i>
                          <span class="count-name">Slider 1</span>
                      </div></a>
                  </div>

                  <div class="col-md-3">
                  <a href="./slider_2/slider2.php"><div class="card-counter danger">
                          <i class="fa fa-fork"></i>
                          <span class="count-name">Slider 2</span>
                      </div></a>
                  </div>

                  <div class="col-md-3">
                      <div class="card-counter success">
                          <i class="fa fa-database"></i>
                          <span class="count-name">Data</span>
                      </div>
                  </div>

                  <div class="col-md-3">
                      <div class="card-counter info">
                          <i class="fa fa-users"></i>
                          <span class="count-name">Users</span>
                      </div>
                  </div>
              </div>
          </div>


          <!--Container Main end-->





          <!-- j query -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
          <script src="admin_panel.js"></script>

      </body>

  </html>