

<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>ACC pengajuan</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fishing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="public/dasboard/baru/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/dasboard/baru/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="public/dasboard/baru/css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<link href="public/dasboard/baru/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="public/dasboard/baru/csstable/table-general.css" type="text/css" />
<!-- font-awesome-icons -->
<link href="public/dasboard/baru/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->

<style>
  * {
    color: black;
  }
</style>

</head>
<body>
<!-- banner -->
<div class="banner_top" id="home">
  <div data-vide-bg ="public/dasboard/baru/video/po">
    <div class="center-container">
      <div class="w3_agile_header">
            <div class="w3_agileits_logo">
                <h1><a href="#">TSI <span>Pengembangan</span></a></h1>
              </div>
              <div class="w3_menu">
              <div class="agileits_w3layouts_banner_info">
        
                <form action="#" method="post"> 
                  <input disabled="" type="search" name="search" placeholder="Cek Box untuk Opsi Lanjutan" required="">
                  <input disabled="" type="submit" value="">
                </form>
              </div>
                <div class="mobile-nav-button">
                  <div class="mobile-nav-button__line"></div>
                  <div class="mobile-nav-button__line"></div>
                  <div class="mobile-nav-button__line"></div>
                </div>
       
                <nav class="mobile-menu">
                  <ul>
                    <li><a href="#" class="" >kosong</a></li>
                    <li><a href="#" class="" >kososng</a></li>
                    <li><a href="#" class="" >kosong</a></li>
                    <li><a href="#services" class="" >Kosong</a></li>
                    <li><a href="#gallery" class="" >Kosong</a></li>
                    <li><a href="logout" class="" >Exit</a></li>
                  </ul>
                </nav>
             
            </div>

          <div class="clearfix"></div>
          </div>
        <!-- banner-text -->
        <div class="slider">
            <div class="callbacks_container">
              <ul class="rslides callbacks callbacks1" id="slider4">
                <li>
                  <div class="agileits-banner-info">
     
<h2 align="center">List Data Pengajuan</h2>
<table class="general" border="5" bordercolor="black" align="center">
  <tr class="head">
    <th>Nama Kebutuhan</th><th>Asal Devisi</th><th>Ket Lanjutan</th><th>Fungsi Kebutuhan</th><th>waktu</th><th>point</th>
  </tr>
    @foreach($data as $masuk)
    <form action="{{ url('hasil').'/'.$masuk->waktu}}" method="POST">
      {{ csrf_field() }}
    <tr>
        <td>{{$masuk->nama_kebutuhan}}</td>
        <td>{{$masuk->asal_devisi}}</td>
        <td>{{$masuk->ket_lanjutan}}</td>
        <td>{{$masuk->fungsi_kebutuhan}}</td>
        <td>{{$masuk->waktu}}</td>
        <td>{{$masuk->point}}</td>
    </tr>
  </form>
    @endforeach
</table>
                    </div>  
                </li>
              </ul>
            </div>
        </div>
      
      <!--banner Slider starts Here-->
      <div class="w3_agileits_social_media ">

      </div>
      </div>
   </div>
     </div>






  <!-- js -->
<script type="text/javascript" src="public/dasboard/baru/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- menu -->
<script>
  $(document).ready(function () {
    $('.mobile-nav-button').on('click', function() {
    $( ".mobile-nav-button .mobile-nav-button_line:nth-of-type(1)" ).toggleClass( "mobile-nav-button_line--1");
    $( ".mobile-nav-button .mobile-nav-button_line:nth-of-type(2)" ).toggleClass( "mobile-nav-button_line--2");  
    $( ".mobile-nav-button .mobile-nav-button_line:nth-of-type(3)" ).toggleClass( "mobile-nav-button_line--3");  
    
    $('.mobile-menu').toggleClass('mobile-menu--open');
    return false;
  }); 
  });
</script>
<!-- //menu -->
<script src="public/dasboard/baru/js/jquery.vide.min.js"></script>
<!-- for bootstrap working -->
<script src="public/dasboard/baru/js/responsiveslides.min.js"></script>
      <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 4
              $("#slider4").responsiveSlides({
              auto: true,
              pager:false,
              nav:true,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
              });
          
            });
      </script>

<!-- start-smoth-scrolling -->
<script src="public/dasboard/baru/js/jqBootstrapValidation.js"></script>
<script src="public/dasboard/baru/js/contact_me.js"></script>


<!--tabs-->
<script src="public/dasboard/baru/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="public/dasboard/baru/js/move-top.js"></script>
<script type="text/javascript" src="public/dasboard/baru/js/easing.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){   
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>


<!-- here stars scrolling icon -->
  <script type="text/javascript">
    $(document).ready(function() {
      /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
        };
      */
                
      $().UItoTop({ easingType: 'easeOutQuart' });
                
      });
  </script>
<!-- //here ends scrolling icon -->

<script type="text/javascript" src="public/dasboard/baru/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>



</body>
</html>