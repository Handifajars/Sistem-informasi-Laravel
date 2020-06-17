<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Pengajuan PDAM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="public/dasboard/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="public/dasboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="public/dasboard/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="public/dasboard/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="public/dasboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-5/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="usertsi" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Dashboard </span><strong>Pengembangan</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <!-- Messages                        -->


                <!-- Logout    -->
                <li class="nav-item"><a href="logout" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center"><a href="pages-profile.html">
              </a>
            <div class="title">
              <h1 class="h4">Sistem Pengajuan</h1>
              <p>PDAM Team</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">MENU</span>
          <ul class="list-unstyled">
            <li class=""><a href="usertsi"> <i><img src="public/dasboard/icon/home.png"></i>Home </a></li>
              <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/form.png"></i>Pengajuan</a>
              <ul id="formsDropdown" class="collapse list-unstyled ">
                <li><a href="insertkeuangan">Form Pengajuan</a></li>
                <li><a href="forms-advanced.html">Ketentuan Pengajuan</a></li>
              </ul>
            </li>
            </li>
            <!-- <li class=""><a href="#"> <i><img src="public/dasboard/icon/accspv.png"></i>ACC Pengajuan </a></li> -->
            <!-- <li class=""><a href="#"> <i><img src="public/dasboard/icon/accspv.png"></i>Approval Pengajuan </a></li> -->
            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/history.png"></i>History Data</a>
              <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="useracctsi">Data Di acc (Diterima)</a></li>
                <li><a href="usertolaktsi">Data Ditolak</a></li>
                <li><a href="useralltsi">Semua Data Masuk</a></li>
              </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/rangking.png"></i>Ranking</a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="userranktsi">Pengurutan Nilai</a></li>
                <li><a href="charts-gauge-sparkline.html">Aturan Yang Berlaku</a></li>
              </ul>
            </li>
            <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/dasboard.png"></i>Information</a>
              <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li><a href="pages-contacts.html">Contacts</a></li>
                <li><a href="pages-invoice.html">Invoice</a></li>
              </ul>
            </li>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">TSI</h2>
            </div>
          </header>
         <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <div class="title"><span>INFORMATION<br></span>
                      <div class="progress">
                        <div  style="width: 25%; height: 4px;" ></div>
                      </div>
                    </div>
                    <div class="number"><strong></strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Pengajuan<br>Masuk</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="{{$count}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$count}}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>jumlah Pengajuan <br>Diterima</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="{{$acc}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$acc}}</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-orange"><i class="icon-check"></i></div>
                    <div class="title"><span>Jumlah Pengajuan<br>Ditolak</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="{{$reject}}" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>{{$reject}}</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                    <div class="text"><strong>{{$informasi}}</strong><br><small>Data SPV Informasi</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                    <div class="text"><strong>{{$pengembangan}}</strong><br><small>Data SPV Pengembangan</small></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                    <div class="text"><strong>{{$infrastruktur}}</strong><br><small>Data SPV Infrastruktur</small></div>
                  </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-6 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
                <div class="chart col-lg-3 col-12">
                  <!-- Bar Chart   -->
                  <!-- <div class="bar-chart has-shadow bg-white">
                    <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server Uptime</small></div>
                    <canvas id="barChartHome"></canvas>
                  </div> -->
                  <!-- Numbers-->
                  <!-- <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                    <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
                  </div> -->
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Project PDAM&copy; 2019</p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    </div>
    <!-- JavaScript files-->
    <script src="public/dasboard/vendor/jquery/jquery.min.js"></script>
    <script src="public/dasboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="public/dasboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/dasboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="public/dasboard/vendor/chart.js/Chart.min.js"></script>
    <script src="public/dasboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="public/dasboard/js/charts-home.js"></script>
    <!-- Notifications-->
    <script src="public/dasboard/vendor/messenger-hubspot/build/js/messenger.min.js">   </script>
    <script src="public/dasboard/vendor/messenger-hubspot/build/js/messenger-theme-flat.js">       </script>
    <script src="public/dasboard/js/home-premium.js"> </script>
    <!-- Main File-->
    <script src="public/dasboard/js/front.js"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:27 GMT -->
</html>