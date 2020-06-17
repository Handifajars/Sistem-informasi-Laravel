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
                <!-- Navbar Brand --><a href="userkeuangan" class="navbar-brand d-none d-sm-inline-block">
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
            <li class=""><a href="userkeuangan"> <i><img src="public/dasboard/icon/home.png"></i>Home </a></li>
            <!-- <li class=""><a href="#"> <i><img src="public/dasboard/icon/accspv.png"></i>ACC Pengajuan </a></li> -->
            <!-- <li class=""><a href="#"> <i><img src="public/dasboard/icon/accspv.png"></i>Approval Pengajuan </a></li> -->
            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/history.png"></i>History Data</a>
              <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="useracckeuangan">Data Di acc (Diterima)</a></li>
                <li><a href="usertolakkeuangan">Data Ditolak</a></li>
                <li><a href="userallkeuangan">Semua Data Masuk</a></li>
              </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/rangking.png"></i>Ranking</a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="userrankkeuangan">Pengurutan Nilai</a></li>
                <li><a href="charts-gauge-sparkline.html">Aturan Yang Berlaku</a></li>
              </ul>
            </li>
            <li><a href="#formsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/form.png"></i>Pengajuan</a>
              <ul id="formsDropdown" class="collapse list-unstyled ">
                <li><a href="insertkeuangan">Form Pengajuan</a></li>
                <li><a href="forms-advanced.html">Ketentuan Pengajuan</a></li>
              </ul>
            </li>
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
              <h2 class="no-margin-bottom">Form</h2>
            </div>
          </header>
          <form></form>
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">All form elements</h3>
                    </div>
                    <div class="card-body">
                      <form action="{{ url('/input') }}"  method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis kebutuhan</label>
                          <div class="col-sm-9">
                              <select name="pengajuan[1]" id="pengajuan" class="form-control mb-3">
                              <option value="permintaan data">permintaan data</option>
                              <option value="penambahan fiture">penambahan fiture</option>
                              <option value="laporan kerusakan">laporan kerusakan</option>
                              <option value="permintaan aplikasi baru">permintaan aplikasi baru</option>
                              <option value="perubahan fiture">perubahan fiture</option>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">keterangan lanjut</label>
                          <div class="col-sm-9">
                            <input type="text" name="keterangan" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">fungsi dari kebutuhan</label>
                          <div class="col-sm-9">
                            <input type="text" name="fungsikebutuhan" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">divisi</label>
                          <div class="col-sm-9">
                            <input type="text" disabled="text" name="divisi"  class="form-control" value="keuangan">
                            <input type="text" hidden="text" name="divisi"  class="form-control" value="keuangan">
                          </div>
                        </div>
                        <div class="line"></div>
                        <!-- <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Select</label>
                          <div class="col-sm-9">
                            <select name="account" class="form-control mb-3">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                            </select>
                          </div>
                           </div> -->
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
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