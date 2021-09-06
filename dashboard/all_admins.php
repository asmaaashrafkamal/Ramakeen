<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location:LOGIN.php',true);
}
require_once 'admin_class.php';
$showusers2=new Admin();
$show2=$showusers2->contact();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="rtl menu-on-right white-content">
  <div class="wrapper ">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="sidebar-wrapper">
         <h3 style="text-align: center;padding-top: 20px;"> صفحة الادمن</h3>
        <div class="logo">
        </div>
        <ul class="nav">
          <li>
            <a href="home.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p >لوحة التحكم</p>
            </a>
          </li>
          <li>
            <a href="adminprofile.php">
              <i class="tim-icons icon-badge"></i>
              <p>الصفحة الشخصية </p>
            </a>
          </li>
          <li>
            <a href="editprofile.php">
              <i class="tim-icons icon-pin"></i>
              <p >تعديل بياناتي</p>
            </a>
          </li>
          <li>
            <a href="addnewadmin.php">
              <i class="tim-icons icon-simple-add"></i>
              <p >اضافة ادمن جديد</p>
            </a>
          </li>
          <li>
          <li>
            <a href="show_all_admins.php">
              <i class="tim-icons icon-single-02"></i>
              <p >عرض كافة المسؤولين</p>
            </a>
          </li>
          <li>
            <a href="contact.php">
              <i class="tim-icons icon-email-85"></i>
              <p >اتصل بنا</p>
            </a>
          </li>  
          <li>
          <li>
            <a href="services.php">
              <i class="tim-icons icon-bullet-list-67"></i>
              <p >طلبات الخدمة</p>
            </a>
          </li>  
          <li>
            <a href="elwasata.php">
              <i class="tim-icons icon-single-copy-04"></i>
              <p > طلبات الوساطة</p>
            </a>
          </li>
          <li>
          <form method="get"><div style="padding-left: 15%;"><button type="submit" style="text-align:center;" class="btn btn-danger" value=<?php echo $_SESSION['user']->id ?> name="logout">logout</button></form>
          </div>
        </li>
        
        <?php
                 if(isset($_GET['logout'])){
                   require_once 'admin_class.php';
                   $logout=new Admin();
                   $logout->logout();
                 }

        ?>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
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
      <div class="content" style=" padding: 80px 30% 30px 30px;">
      
      
        <div class="row" >
            <div class="col-lg-12 text-right">
                <div class="card card-chart">
                  <div class="card-header ">
                    <h3 class="card-title" style="text-align: center;"> اتصل بنا</h3>
                  </div>
               
                  <div class="card-body">
                <div class="table-responsive" style="overflow: auto;">
                  <table class="table tablesorter " id="">
                  <thead class=" text-primary" >
                      <th style=" font-weight: 1000;font-size: 20px;">الاسم</th><th style=" font-weight: 1000;font-size: 20px;">الإيميل</th><th style=" font-weight: 1000;font-size: 20px;">الهاتف</th><th style=" font-weight: 1000;font-size: 20px;">الملاحظات</th>
                        </thead>
                        <tbody>
                          <?php
                        foreach( $show2 as $r){
                         echo '<tr><td>'.$r["name"].'</td><td>'.$r["email"].'</td><td>'.$r["phone"].'</td><td>'.$r["observation"].'</td></tr>';   
                                            
                      }
                      ?>
                      </tbody>
                  </table>
                  </div>
            
              </div>
        </div>
      </div>
      
      </div>
    </div>
 
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0" type="text/javascript"></script>
    <!-- Black Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
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