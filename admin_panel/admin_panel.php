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
              <div class="navbar__right">
                  <a href="#">
                      <i class="fa fa-search" aria-hidden="true"></i>
                  </a>
                  <a href="#">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </a>
                  <a href="#">
                      <img width="30" src="assets/avatar.svg" alt="" />
                  </a>
              </div>
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
          <div class="main__cards">
              <div class="card">
                  <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"></i>
                  <div class="card_inner">
                      <p class="text-primary-p">Number of Subscribers</p>
                      <span class="font-bold text-title">578</span>
                  </div>
              </div>

              <div class="card">
                  <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
                  <div class="card_inner">
                      <p class="text-primary-p">Times of Watching</p>
                      <span class="font-bold text-title">2467</span>
                  </div>
              </div>

              <div class="card">
                  <i class="fa fa-video-camera fa-2x text-yellow" aria-hidden="true"></i>
                  <div class="card_inner">
                      <p class="text-primary-p">Number of Videos</p>
                      <span class="font-bold text-title">340</span>
                  </div>
              </div>

              <div class="card">
                  <i class="fa fa-thumbs-up fa-2x text-green" aria-hidden="true"></i>
                  <div class="card_inner">
                      <p class="text-primary-p">Number of Likes</p>
                      <span class="font-bold text-title">645</span>
                  </div>
              </div>
          </div>
          <!-- MAIN CARDS ENDS HERE -->

          <!-- CHARTS STARTS HERE -->
          <div class="charts">
              <div class="charts__left">
                  <div class="charts__left__title">
                      <div>
                          <h1>Daily Reports</h1>
                          <p>Cupertino, California, USA</p>
                      </div>
                      <i class="fa fa-usd" aria-hidden="true"></i>
                  </div>
                  <div id="apex1"></div>
              </div>

              <div class="charts__right">
                  <div class="charts__right__title">
                      <div>
                          <h1>Stats Reports</h1>
                          <p>Cupertino, California, USA</p>
                      </div>
                      <i class="fa fa-usd" aria-hidden="true"></i>
                  </div>

                  <div class="charts__right__cards">
                      <div class="card1">
                          <h1>Income</h1>
                          <p>$75,300</p>
                      </div>

                      <div class="card2">
                          <h1>Sales</h1>
                          <p>$124,200</p>
                      </div>

                      <div class="card3">
                          <h1>Users</h1>
                          <p>3900</p>
                      </div>

                      <div class="card4">
                          <h1>Orders</h1>
                          <p>1881</p>
                      </div>
                  </div>
              </div>
          </div>
          <!-- CHARTS ENDS HERE -->
          </div>
          </main>








          <!-- j query -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
          <script src="admin_panel.js"></script>

      </body>

  </html>