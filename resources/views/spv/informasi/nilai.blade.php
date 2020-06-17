<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.bootstrapious.com/admin-premium/1-4-5/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Aug 2019 13:36:04 GMT -->
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 600px;
  margin: auto;
}
</style>
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
                <!-- Navbar Brand --><a href="spvinformasi" class="navbar-brand d-none d-sm-inline-block">
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
            <li class=""><a href="spvinformasi"> <i><img src="public/dasboard/icon/home.png"></i>Home </a></li>
            <li class=""><a href="spvnilaiinformasi"> <i><img src="public/dasboard/icon/accspv.png"></i>ACC Pengajuan </a></li>
            <!-- <li class=""><a href="nilai"> <i><img src="public/dasboard/icon/accspv.png"></i>Approval Pengajuan </a></li> -->
            <li><a href="#tablesDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/history.png"></i>History Data</a>
              <ul id="tablesDropdown" class="collapse list-unstyled ">
                <li><a href="spvaccinformasi">Data Di acc (Diterima)</a></li>
                <li><a href="spvtolakinformasi">Data Ditolak</a></li>
                <li><a href="spvallinformasi">Semua Data Masuk</a></li>
              </ul>
            </li>
            <li><a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse"> <i><img src="public/dasboard/icon/rangking.png"></i>Rangking</a>
              <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li><a href="spvrankinformasi">Pengurutan Nilai</a></li>
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
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">SPV INFORMASI</h2>
            </div>
          </header>

<div class="table" style="width: 100%;" border="1">
    @foreach($data as $masuk)
  <form action="{{ url('yoiinformasi').'/'.$masuk->waktu}}" method="POST">
    {{ csrf_field()  }}
  
    <label for="subject" >Kententuan Penilaian</label>
    <textarea disabled id="subject" name="subject" 
    placeholder="Sebagai Berikut

    1
    2
    3
    4
    5" 
    
    style="height:125px"></textarea>
  
  <label for="country">Permintaan Direksi</label>
    <select id="gie" name="gie[1]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">4 point</option>
      <option value="5">5 point</option>
    </select>
    
    <label for="country">Security</label>
    <select id="gie" name="gie[2]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">4 point</option>
      <option value="5">5 point</option>
     </select>

    <label >Pendanaan</label>
    <select id="c" name="gie[3]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">4 point</option>
      <option value="5">5 point</option>
     </select>

    <label for="country">Pelayanan</label>
    <select id="d" name="gie[4]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">4 point</option>
      <option value="5">5 point</option>
     </select>

    <label for="country">Tambahan</label>
    <select id="e" name="gie[5]">
      <option value="1">1 point</option>
      <option value="2">2 point</option>
      <option value="3">3 point</option>
      <option value="4">4 point</option>
      <option value="5">5 point</option>
     </select>

     <button type="submit">Proses!</button>
  </form>
  @endforeach
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