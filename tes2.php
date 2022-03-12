<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title>PosHub</title>

  <!-- Tambahan -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">

  


  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">

  <style>
      body {
    background-color: #eee
}

.main {
    display: flex;
    justify-content: center;
    height: 100vh;
    align-items: center;
    background-color: #f6f6f6
}

.one {
    width: 270px;
    background-color: #000;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.pic1 {
    position: relative;
    right: 22px;
    top: 23px
}

.pic2 {
    position: relative;
    left: 25px;
    top: 17px
}

.pic3 {
    position: relative;
    right: 13px;
    bottom: 18px
}

.pic4 {
    position: relative;
    left: 14px;
    bottom: 21px
}

.project {
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    color: #fd4040
}

.quote {
    text-align: center;
    font-size: 12px;
    font-weight: 400;
    color: #fff
}

.two {
    width: 270px;
    background-color: #fff;
    justify-content: center;
    align-items: center;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

.star {
    font-size: 20px !important;
    color: #b1b4b7
}

.dot {
    font-size: 20px !important;
    color: #b1b4b7
}

.round {
    border-radius: 50%;
    background-color: #eee;
    width: 33px;
    height: 33px;
    margin-bottom: -10px;
    align-items: center;
    justify-content: center
}

.name {
    font-size: 22px;
    color: #464e56;
    font-weight: 600;
    text-align: left
}

.quote2 {
    font-size: 12px;
    font-weight: 500;
    color: #868e94;
    text-align: left
}

.img1 {
    position: relative;
    left: 20px;
    z-index: 28;
    border: 0.5px solid #6ebde4;
    border-radius: 50%;
    background-color: #bcd8e6
}

.img2 {
    position: relative;
    left: 10px;
    z-index: 29;
    border: 0.5px solid #6ebde4;
    border-radius: 50%;
    background-color: #bcd8e6
}

.img3 {
    z-index: 30;
    border: 0.5px solid #6ebde4;
    border-radius: 50%;
    background-color: #bcd8e6
}

.task {
    color: #727475
}

.date {
    color: #727475
}

.imgfix {
    align-content: center;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
    top: 2px
}
  </style>

</head>


<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span> Pos Hub!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Asep !</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</span></a>
                 
                </li>
                <li><a><i class="fa fa-edit"></i>PosHub Board<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form_validation.html">Dashboard</a></li>
                    <li><a href="form.html">Roadmap</a></li>
                    <li><a href="form_advanced.html">Board PosHub</a></li>
                  </ul>
                </li>
               
                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                    <li><a href="fixed_footer.html">Fixed Footer</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="e_commerce.html">Video Conference</a></li>
                    <li><a href="projects.html">Leader Board</a></li>
                    <li><a href="project_detail.html">Chatting</a></li>
                    <li><a href="contacts.html">Performance Member</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                  data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">John Doe
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="javascript:;">
                    <span class="badge bg-red pull-right">50%</span>
                    <span>Settings</span>
                  </a>
                  <a class="dropdown-item" href="javascript:;">Help</a>
                  <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown"
                  aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
        
<!-- page content -->
  <div class="right_col" role="main">
    <h3>Boards</h3>
        <div class="col-md-4">
            <div class="two">
                <div class="px-3 pb-4">
                    <div><img src="https://img.icons8.com/bubbles/50/000000/blond-short-hair-lady-with-blue-glasses.png" width="15" class="pic1" /><img src="https://img.icons8.com/bubbles/50/000000/girl-with-chemical-test-tube.png" width="22" class="pic2" /></div>
                    <div><img src="https://img.icons8.com/bubbles/100/000000/girl-with-glasses-art-palette.png" width="65" /></div>
                    <div><img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-gem.png" width="16" class="pic3" /><img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="16" class="pic4" /></div>
                    <div>
                        <h2 class="project"><a href="new_project.html">Add new project +</a></h2>
                    </div>
                    <div>
                        <p class="quote2"><center>Still not enough? Click on a tile to add a new project.</p></center>

                    </div>
                </div>
            </div>
            <div class="pt-2">
                <div class="two">
                    <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i class="mdi mdi-dots-horizontal dot"></i></div>
                    <div class="px-3">
                        <div class="round"><img src="https://img.icons8.com/emoji/48/000000/hedgehog-emoji.png" width="23" class="imgfix" /></div>
                    </div>
                    <div class="px-3 pt-3">
                        <h3 class="name">Project Bansos</h3>
                        <p class="quote2">These cuties will need a new place where thay can live with their owner.</p>
                    </div>
                    <div class="d-flex justify-content-start px-3 align-items-center"> <i class="mdi mdi-view-comfy task"></i> <span class="quote2 pl-2">Category: Bisnis Inovation</span> </div>
                    <div class="d-flex justify-content-between px-3 align-items-center pb-3">
                        <div class="d-flex justify-content-start align-items-center"> <i class="mdi mdi-calendar-clock date"></i> <span class="quote2 pl-2">Date: 01.10.2022</span> </div>
                        <div class="d-flex justify-content-end"> <img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-musical-notes.png" width="20" class="img1" /> <img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="20" class="img2" /> <img src="https://img.icons8.com/bubbles/50/000000/short-hair-girl-question-mark.png" width="20" class="img3" /> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="">
                <div class="two">
                    <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i class="mdi mdi-dots-horizontal dot"></i></div>
                    <div class="px-3">
                        <div class="round"><img src="https://img.icons8.com/bubbles/100/000000/girl-with-glasses-art-palette.png" width="23" /></div>
                    </div>
                    <div class="px-3 pt-3">
                        <h3 class="name"><a href="detail_project.html">Super App Wahana</a></h3>
                        <p class="quote2">Within the exercise, we design aroom in a scandinavian style.</p>
                    </div>
                    <div class="d-flex justify-content-start px-3 align-items-center"> <i class="mdi mdi-view-comfy task"></i> <span class="quote2 pl-2">Category: DevOps</span> </div>
                    <div class="d-flex justify-content-between px-3 align-items-center pb-3">
                        <div class="d-flex justify-content-start align-items-center"> <i class="mdi mdi-calendar-clock date"></i> <span class="quote2 pl-2">Date: 01.07.2020</span> </div>
                        <div class="d-flex justify-content-end"> <img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-musical-notes.png" width="20" class="img1" /> <img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="20" class="img2" /> <img src="https://img.icons8.com/bubbles/50/000000/short-hair-girl-question-mark.png" width="20" class="img3" /> </div>
                    </div>
                </div>
            </div>
            <div class="pt-2">
                <div class="two">
                    <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i class="mdi mdi-dots-horizontal dot"></i></div>
                    <div class="px-3">
                        <div class="round"><img src="https://img.icons8.com/cute-clipart/64/000000/doctor-male.png" width="23" class="imgfix" /></div>
                    </div>
                    <div class="px-3 pt-3">
                        <h3 class="name">Super App Pospay</h3>
                        <p class="quote2">Needs a new office, let's do something nice!</p>
                    </div>
                    <div class="d-flex justify-content-start px-3 align-items-center"> <i class="mdi mdi-view-comfy task"></i> <span class="quote2 pl-2">Categoty: Product Manager</span> </div>
                    <div class="d-flex justify-content-between px-3 align-items-center pb-3">
                        <div class="d-flex justify-content-start align-items-center"> <i class="mdi mdi-calendar-clock date"></i> <span class="quote2 pl-2">Date: 01.12.2022</span> </div>
                        <div class="d-flex justify-content-end"> <img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-musical-notes.png" width="20" class="img1" /> <img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="20" class="img2" /> <img src="https://img.icons8.com/bubbles/50/000000/short-hair-girl-question-mark.png" width="20" class="img3" /> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="">
                <div class="two">
                    <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i class="mdi mdi-dots-horizontal dot"></i></div>
                    <div class="px-3">
                        <div class="round"><img src="https://img.icons8.com/cotton/64/000000/football-ball.png" width="23" class="imgfix" /></div>
                    </div>
                    <div class="px-3 pt-3">
                        <h3 class="name">Digital Kredit Pensiun</h3>
                        <p class="quote2">Wonderful news! Let's arrange the hosts and guest's dressing rooms!</p>
                    </div>
                    <div class="d-flex justify-content-start px-3 align-items-center"> <i class="mdi mdi-view-comfy task"></i> <span class="quote2 pl-2">Category: Binis Inovation </span> </div>
                    <div class="d-flex justify-content-between px-3 align-items-center pb-3">
                        <div class="d-flex justify-content-start align-items-center"> <i class="mdi mdi-calendar-clock date"></i> <span class="quote2 pl-2">Date: 01.08.2020</span> </div>
                        <div class="d-flex justify-content-end"> <img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-musical-notes.png" width="20" class="img1" /> <img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="20" class="img2" /> <img src="https://img.icons8.com/bubbles/50/000000/short-hair-girl-question-mark.png" width="20" class="img3" /> </div>
                    </div>
                </div>
            </div>
            <div class="pt-2">
                <div class="two">
                    <div class="d-flex justify-content-end px-3 pt-1"><i class="mdi mdi-star-outline pr-1 star"></i><i class="mdi mdi-dots-horizontal dot"></i></div>
                    <div class="px-3">
                        <div class="round"><img src="https://img.icons8.com/plasticine/100/000000/santas-hat.png" width="23" class="imgfix" /></div>
                    </div>
                    <div class="px-3 pt-3">
                        <h3 class="name">Apps Mapping Data Bansos </h3>
                        <p class="quote2">Apps is coming! will we try to prepare something for this occasion?</p>
                    </div>
                    <div class="d-flex justify-content-start px-3 align-items-center"> <i class="mdi mdi-view-comfy task"></i> <span class="quote2 pl-2">Category: DevOps</span> </div>
                    <div class="d-flex justify-content-between px-3 align-items-center pb-3">
                        <div class="d-flex justify-content-start align-items-center"> <i class="mdi mdi-calendar-clock date"></i> <span class="quote2 pl-2">Date: 20.12.2022</span> </div>
                        <div class="d-flex justify-content-end"> <img src="https://img.icons8.com/bubbles/50/000000/short-curly-hair-girl-musical-notes.png" width="20" class="img1" /> <img src="https://img.icons8.com/bubbles/50/000000/girl-and-playing-card.png" width="20" class="img2" /> <img src="https://img.icons8.com/bubbles/50/000000/short-hair-girl-question-mark.png" width="20" class="img3" /> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- /page content -->
       </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="../vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="../vendors/Flot/jquery.flot.js"></script>
  <script src="../vendors/Flot/jquery.flot.pie.js"></script>
  <script src="../vendors/Flot/jquery.flot.time.js"></script>
  <script src="../vendors/Flot/jquery.flot.stack.js"></script>
  <script src="../vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="../vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="../vendors/moment/min/moment.min.js"></script>
  <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

  <!-- Tambahan -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>