<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="public/dasboard/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="public/dasboard/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="public/dasboard//css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- DataTables CSS-->
    <link rel="stylesheet" href="public/dasboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="public/dasboard/vendor/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="public/dasboard//css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="public/dasboard//css/custom.css">
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
                <!-- Navbar Brand --><a href="spvpengembangan" class="navbar-brand d-none d-sm-inline-block">
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
            <li class=""><a href="spvpengembangan"> <i><img src="public/dasboard/icon/home.png"></i>Home </a></li>
            <li class=""><a href="spvnilaipengembangan"> <i><img src="public/dasboard/icon/accspv.png"></i>ACC Pengajuan </a></li>
            <!-- <li class=""><a href="nilai"> <i><img src="public/dasboard/icon/accspv.png"></i>Approval Pengajuan </a></li> -->
            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/history.png"></i>History Data</a>
              <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="spvaccpengembangan">Data Di acc (Diterima)</a></li>
                <li><a href="spvtolakpengembangan">Data Ditolak</a></li>
                <li><a href="spvallpengembangan">Semua Data Masuk</a></li>
              </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/rangking.png"></i>Ranking</a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="spvrankpengembangan">Pengurutan Nilai</a></li>
                <li><a href="charts-gauge-sparkline.html">Aturan Yang Berlaku</a></li>
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
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Table</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Data Table</li>
            </ul>
          </div>
          <section>
            <div class="container-fluid">
              <div class="card">
                <div class="card-header">
                  <h4>Data Table</h4>
                </div>
                <!-- <div class="card-body"> -->
                  <div class="row">
                   
                  </div>
                  <div class="table-responsive">
                    <table border="1" id="" style="width: 100%;" class="table">
                      <thead>
                        <tr class="head">
                        <th>Nama Kebutuhan</th><th>Asal Devisi</th><th>Ket Lanjutan</th><th>Fungsi Kebutuhan</th><th>Waktu</th><th>spv</th><th>point</th><th></th></tr>
                        </thead>
                        @foreach($data as $masuk)
                        <form action="{{ url('hasilpengembangan').'/'.$masuk->waktu}}" method="POST">
                          {{ csrf_field() }}
                          <tr>
                            <td>{{$masuk->kebutuhan}}</td>
                            <td>{{$masuk->divisi}}</td>
                            <td>{{$masuk->keterangan}}</td>
                            <td>{{$masuk->fungsikebutuhan}}</td>
                            <td>{{$masuk->waktu}}</td>
                            <td>{{$masuk->spv}}</td>
                            <td>{{$masuk->point}}</td>
                            <th><button type="submit">nilai!</button></th>
                          </tr>
                        </form>
                      @endforeach
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Version 1.4.5</p>
                </div>
              </div>
            </div>
          </footer>
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
    <!-- Data Tables-->
    <script src="public/dasboard/vendor/datatables.net/js/jquery.dataTables.js"></script>
    <script src="public/dasboard/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="public/dasboard/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/dasboard/vendor/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="public/dasboard/js/tables-datatable.js"></script>
    <!-- Main File-->
    <script src="public/dasboard/js/front.js"></script>
  </body>

<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:43 GMT -->
</html>