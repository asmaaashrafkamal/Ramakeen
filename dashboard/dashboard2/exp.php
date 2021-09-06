<?php
    if(isset($_GET["data"]) )
    {
        $data = $_GET["data"];
        session_start();
        require_once 'admin_class.php';
        $show1=new Admin();
        $show1=$show1->get_specific($data);
        $show2=new Admin();
        $show2=$show2->get_specific1($data);
        $show3=new Admin();
        $show3=$show3->get_specific2($data);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DETAILS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
  <link href="../../assets/css/slider.css" rel="stylesheet" />
<style>
 .head{
  text-decoration-line: underline ;
  font-family: 'Cairo';
 }
 .row{
    font-family: 'Cairo';
  }
.btn10{
    background-color: rgb(255,204,0);
    width: 100;
    height: 50;
    border: none;
    font-size: 18;
    text-align: center;
}
.sidebar-wrapper.ps{
  font-family: 'Cairo';

}
</style>
</head>

<body class="rtl menu-on-right white-content">
  <div class="wrapper ">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="sidebar-wrapper" style="background-color: black;width:260px;">
         <h2 style="text-align: center;padding-top: 10px;color:white;"> صفحة الادمن</h2>
        <div class="logo">
        </div>
        <ul class="nav">
          <li>
            <a href="home.php">
              <i style="color:gold;" class="tim-icons icon-chart-pie-36"></i>
              <p >لوحة التحكم</p>
            </a>
          </li>
          <li>
            <a href="adminprofile.php">
              <i style="color:gold;"  class="tim-icons icon-badge"></i>
              <p >الصفحة الشخصية </p>
            </a>
          </li>
          <li>
            <a href="editprofile.php">
              <i style="color:gold;" class="tim-icons icon-pin"></i>
              <p >تعديل بياناتي</p>
            </a>
          </li>
          <li>
            <a href="services.php">
              <i style="color:gold;" class="tim-icons icon-bullet-list-67"></i>
              <p >طلبات الخدمة</p>
            </a>
          </li>
          <li>
            <a href="contact.php">
              <i style="color:gold;" class="tim-icons icon-email-85"></i>
              <p >اتصل بينا</p>
            </a>
          </li> 
          <li>
            <a href="elwasata.php">
              <i style="color:gold;" class="tim-icons icon-single-copy-04"></i>
              <p > طلبات الوساطة</p>
            </a>
          </li>
          
        
  
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent   ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span> -->
          </button>
          <div class="collapse navbar-collapse" id="navigation">
          
          </div>
        </div>
      </nav>
     
      <!-- End Navbar -->
      <div class="content" style=" padding: 80px 28% 30px 30px;">
      <?php
      $i=0;
      echo'<div class="row">';
      foreach($show1 as $r){
      if(($i % 2) == 0){
       echo "</div>";
       echo'<div class="row" > ';
      }
      echo ' <div class="col-lg-6 text-right" >
      <div class="card card-chart" >
        <div class="card-header ">
          <h3 class="card-title" style="text-align:center;"> تفاصيل الطلب</h3>
        </div>
        <div class="card-body " style="text-align: center;">
        </div> <div class="row"   >
        <div class="col-md-12 " >
          <div class="form-group" style="padding: 0px 15px 0px 0px;">
          <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> نوع الطلب  :</label>
          <p  style=" font-weight: 1000;font-size: 20px;">'.$r['type'].'</p>         
            <br>
          </div>
        </div>
        </div>
      <div class="row" >
      <div class="col-md-12 text-right">
        <div class="form-group" style="padding: 0px 15px 0px 0px;">
          <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">اسم طالب الخدمة  :</label>
          <p  style=" font-weight: 600;font-size: 20px;">'.$r["applicant_name"].'</p>
          <br>
        </div>
      </div>
     
    </div>
    <div class="row">
    <div class="col-md-12 text-right">
      <div class="form-group" style="padding: 0px 15px 0px 0px;">
      <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> الايميل لطالب الخدمة  :</label>
      <p  style=" font-weight: 600;font-size: 20px;">'.$r["applicant_email"].'</p>         
        <br>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="col-md-12 text-right">
    <div class="form-group" style="padding: 0px 15px 0px 0px;">
    <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> الرقم القومي لطالب الخدمة  :</label>
    <p  style=" font-weight: 600;font-size: 20px;">'.$r["applicant_ID"].'</p>         
      <br>
    </div>
  </div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> رقم الجوال لطالب الخدمة  :</label>
  <p  style=" font-weight: 600;font-size: 20px;">'.$r["applicant_phone"].'</p>         
    <br>
  </div>
</div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> اسم المدعي عليه  :</label>
  <p  style=" font-weight: 1000;font-size: 20px;">'.$r["defendent_name"].'</p>         
    <br>
  </div>
</div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> إيميل المدعي عليه  :</label>
  <p  style=" font-weight: 1000;font-size: 20px;">'.$r["defendent_email"].'</p>         
    <br>
  </div>
</div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> الرقم القومي للمدعي عليه  :</label>
  <p  style=" font-weight: 1000;font-size: 20px;">'.$r["defendent_ID"].'</p>         
    <br>
  </div>
</div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> رقم الجوال للمدعي عليه  :</label>
  <p  style=" font-weight: 600;font-size: 20px;">'.$r["defendent_phone"].'</p>         
    <br>
  </div>
</div>
</div> ';
if($show3 !=null){
$l=0;
foreach($show3 as $s){
echo'
<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 30px;text-decoration:underline;color:gold">  اسم المدعي عليه '.($l+1).' </label>
    <br>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> اسم المدعي عليه  :</label>
  <p  style=" font-weight: 1000;font-size: 20px;">'.$s["def_name"].'</p>         
    <br>
  </div>
</div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> إيميل المدعي عليه  :</label>
  <p  style=" font-weight: 1000;font-size: 20px;">'.$s["def_email"].'</p>         
    <br>
  </div>
</div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> الرقم القومي للمدعي عليه  :</label>
  <p  style=" font-weight: 1000;font-size: 20px;">'.$s["def_ID"].'</p>         
    <br>
  </div>
</div>
</div> <div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> رقم الجوال للمدعي عليه  :</label>
  <p  style=" font-weight: 600;font-size: 20px;">'.$s["def_phone"].'</p>         
    <br>
  </div>
</div>
</div> ';
$l++;
}}
if($show2 !=null){
$e=0;
foreach($show2 as $s){
echo'

<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">  المستند  '.($e+1).':</label>
  <p class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"><a href="../'. $s["position"] . '" download>"'.$s["name"].'"</a></p>         
  <br>
  </div>
</div>
</div>';
$e++;
}}
echo'
<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">  وصف الموضوع  :</label>
  <p class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">'.$r["description"].'</a></p>         
    <br>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> وصف  مختصر للطلب :</label>
  <p class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">'.$r["subject"].'</a></p>         
    <br>
  </div>
</div>
</div>';
if($r["bill_number"]!=null){
  echo'
<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> رقم فاتوره الدفع    :</label>
  <p class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">'.$r["bill_number"].'</a></p>         
    <br>
  </div>
</div>
</div>';
}else{
  echo'
  <div class="row">
  <div class="col-md-12 text-right">
    <div class="form-group" style="padding: 0px 15px 0px 0px;">
    <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> رقم فاتوره الدفع    :</label>
    <p class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">لم يتم الدفع</a></p>         
      <br>
    </div>
  </div>
  </div>'; 
}
if($r["price"]!=null){
  echo'
<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
   <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> المبلغ المدفوع    :</label>
  <p class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">'.$r["price"].'</a></p>';        
   echo' <br>
  </div>
</div>
</div>';
  }
echo'
<div class="row">
<div class="col-md-12 text-right">
  <div class="form-group" style="padding: 0px 15px 0px 0px;">
  <label class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;"> تم عمل الطلب في  :</label>
  <p class="bmd-label-floating" style=" font-weight: 1000;font-size: 20px;">'.$r["created_at"].'</p>         
    <br>
  </div>
</div>
</div>
</div>
        </div>
      </div>
    ';
    $i++;
      }
      ?>
      
         
         
        </div>
     
      </div>
      
      </div>
    </div>
    <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
          <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu" >
          <li class="header-title"> Sidebar Background</li>
          <li class="adjustments-line">
            <a href="javascript:void(0)" class="switch-trigger background-color">
              <div class="badge-colors text-center">
                <span class="badge filter badge-primary active" data-color="primary"></span>
                <span class="badge filter badge-blue" data-color="blue"></span>
                <span class="badge filter badge-green" data-color="green"></span>
              </div>
              <div class="clearfix"></div>
            </a>
          </li>
          <li class="adjustments-line text-center color-change">
            <span class="color-label">LIGHT MODE</span>
            <span class="badge light-badge mr-2"></span>
            <span class="badge dark-badge ml-2"></span>
            <span class="color-label">DARK MODE</span>
          </li>
          <li class="button-container">
            <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
            <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
              Documentation
            </a>
          </li>
          <li class="header-title">Thank you for 95 shares!</li>
          <li class="button-container text-center">
            <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
            <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
            <br>
            <br>
            <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
          </li>
        </ul>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../../assets/js/core/jquery.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>
    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');
          $navbar = $('.navbar');

          $full_page = $('.full-page');
          $sidebar_responsive = $('body > .navbar-collapse');
          sidebar_mini_active = true;
          white_color = false;
          window_width = $(window).width();
          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .background-color span').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($navbar.length != 0) {
              $navbar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
            var $btn = $(this);

            if (sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              sidebar_mini_active = false;
              blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
            } else {
              $('body').addClass('sidebar-mini');
              sidebar_mini_active = true;
              blackDashboard.showSidebarMessage('Sidebar mini activated...');
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);
          });

          $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
            var $btn = $(this);

            if (white_color == true) {

              $('body').addClass('change-background');
              setTimeout(function() {
                $('body').removeClass('change-background');
                $('body').removeClass('white-content');
              }, 900);
              white_color = false;
            } else {

              $('body').addClass('change-background');
              setTimeout(function() {
                $('body').removeClass('change-background');
                $('body').addClass('white-content');
              }, 900);

              white_color = true;
            }


          });

          $('.light-badge').click(function() {
            $('body').addClass('white-content');
          });

          $('.dark-badge').click(function() {
            $('body').removeClass('white-content');
          });
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js


        demo.initDashboardPageCharts();

      });
    </script>
</body>

</html>