<?php
if(isset($_POST['req'])){
  require_once "user_class.php";
  $fileName = $_FILES["file2"]["name"];
  $file3 = $_FILES["file2"]["tmp_name"];
  $req1=new App();
  $m=$req1->reservation($_POST['name'],$_POST['email'],
  $_POST['phone'],$_POST['address'],$_POST['service'],
  $_POST['message'],$_POST['subject'],$fileName,$file3,"AR");  
}
?>
<!DOCTYPE html>
<html>
<title> طلب خدمة </title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="icon" href="images/LOGO.jpg"/>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Bootstrap JS -->
  	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <nav class="navbar navbar-expand  navbar-dark" style="background-color: black; opacity: 100%;">
    <a  style="color:white;float: left; padding: 5px; " href="./Ramakeen EN/reservation.php">EN</a>
    <a  style="color:white;float: left; padding: 5px;" href="#">AR</a>
          
           
    <div class="soicon">
      <a style="color: white; padding: 3px;" class="fab fa-twitter" target="_blank" href="https://twitter.com/ramakeenlaw"></a>
      <a style="color: white; padding: 3px;" class="fab fa-youtube"  target="_blank" href="https://www.youtube.com/channel/UCPHoL6offQw7UO8AtxSm2cg"></a>
      <a style="color: white; padding: 3px;" class="fab fa-linkedin" target="_blank" href="https://www.linkedin.com/company/dr-abdulhamid-ibn-khunein-law-firm-ramakeen/about/"></a>
    </div>
    </nav>       
<!--end nav1 -->
<!-- Navbar (sit on top) -->
<div class="topnav sticky-top " id="myTopnav" >
  <div class="text-center">
   <img class="navimg" src="./images/ramakeen.png" height="80">
 <div class="navmenu">
 <a href="index.html"  >الرئيسية</a>
 <a href="about.html"  >من نحن</a>
 <a href="services.html">خدماتنا</a>
 <a href="#" style="color: rgb(206, 180, 117)!important;">طلب خدمة</a>
 <a href="request.php" >طلب وساطة</a>
 <a href="contact.php"  >اتصل بنا</a>
</div>
</div>
  <!-- Hide right-floated links on small screens and replace them with a menu icon -->
 <a href="javascript:void(0);" class="icon w3-bar-item w3-hide-large w3-hide-medium" onclick="w3_open()">
   <i class="fa fa-bars" style="font-size: 32px; color: rgb(206, 180, 117) ;"></i>
 </a>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none ; z-index: 99;" id="mySidebar">
  <a href="javascript:void(0)"  onclick="w3_close()" class=" w3-button nav-link  " style="font-size: 28px !important;font-weight: bold ;color: rgb(206, 180, 117)!important;"> <span class="menuside"> X </span> </a> <hr>
  <a href="index.html" onclick="w3_close()" class=" w3-button nav-link"   ><span class="menuside">الرئيسية</span></a><hr>
  <a href="about.html" onclick="w3_close()" class="  w3-button nav-link" > <span class="menuside">من نحن </span></a><hr>
  <a href="services.html" onclick="w3_close()" class=" w3-button nav-link"> <span class="menuside">خدماتنا </span></a> <hr>
  <a href="#" onclick="w3_close()" class=" w3-button nav-link" style="color: rgb(206, 180, 117)!important;" > <span class="menuside"> طلب خدمة </span></a> <hr>
  <a href="request.php" onclick="w3_close()" class=" w3-button nav-link"> <span class="menuside"> طلب وساطة </span></a> <hr>
  <a href="contact.php" onclick="w3_close()" class=" w3-button nav-link"> <span class="menuside"> اتصل بنا </span></a> <hr>
</nav>


 

    <!-- Table Reservation Form -->
        <div class="container" data-aos="fade-up">
            <div class="row" >
    			<div class="col-md-8 offset-md-2 text-center">
          <?php
               if(!empty($m)){
                if($m=="fail"){
                  echo '<div ><div class="alert alert-success"  style="max-width: 600px;"  role="alert"><h4 style="text-align:center;"> لم يتم عمل الطلب بنجاح حاول مرة اخري  </h4> </div></div>';
                  }else{
                    echo '<div ><div class="alert alert-success"  style="max-width: 600px;"  role="alert"><h4 style="text-align:center;">تم عمل الطلب بنجاح </h4> </div></div>';
                  }
                }
                ?>
    				<h2 style=" font-weight: 600; letter-spacing: .5px;" > طلب الخدمة   </h2>
    			</div>
    		</div> <br> <br>
      
            <form action="" method="post" enctype="multipart/form-data" role="form">
              <div class="form-row" style="direction: rtl;">
                <div class="col-lg-6 col-md-6 form-group">
                  <input dir="rtl" type="text" name="name" class="form-control" id="name" placeholder= "الاسم">
              </div>
              <div class="col-lg-6 col-md-6 form-group">
                <input dir="rtl" type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني">
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input dir="rtl" type="text" name="address" class="form-control" id="address" placeholder= "العنوان">
          </div>
       
                <div class="col-lg-6 col-md-6 form-group">
                  <input dir="rtl" type="text" class="form-control" name="phone" id="phone" placeholder="رقم التواصل">
              </div>
               
              <div class="input-group mb-3">
                <div class="input-group-prepend" >
                  <label class="input-group-text talbbtn" for="inputGroupSelect01" 
                  style="font-size: 14px;
                  color: white;
                  font-family:'Cairo', sans-serif;
                  background-color: rgb(206, 180, 117); " > طلب الخدمة </label>
                </div>

                <select class="custom-select" name="service" id="inputGroupSelect01" >
                  <option disabled selected hidden>اختر .. </option>
                  <option value="استشارة قانونية">استشارة قانونية</option>
                  <option value="مرافعة">مرافعة</option>
                  <option value="صياغة عقود أو مراجعتها أو تسجيلها">صياغة عقود أو مراجعتها أو تسجيلها </option>
                  <option value="وساطة أو تحكيم">وساطة أو تحكيم </option>
                  <option value="توثيق">توثيق</option>
                  <option value="اخرى">اخرى</option>
                </select>
              </div>
  

                </div> 
       
          <div class="custom-file" >
            <input type="file" name="file2[]" class="custom-file-input" id="customFile" multiple  >
            <label class="custom-file-label text-center" for="customFile"  style="font-size: 18px;" > ارفاق مستندات </label>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" name="message" placeholder="وصف المستندات المرفقة" id="exampleFormControlTextarea1" rows="2"></textarea>
          </div>  
          
          <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" name="subject" placeholder="ملخص الطلب" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>   
          <br>
          
          <button class="btn btn-rounded btn-lg btn-block" name="req" style="background-color: rgb(206, 180, 117);  font-size: 22px; color: white;" type="submit"  > إرسال </button>
        </button>
            </form>
        </div>
       <!-- End Table Reservation Form -->
 <!--footer -->
 <footer class="text-center" style="  background-color: #363636; display: block;">
  <div class="container">

<div class="row text-center" dir="rtl">
  <img class="col-md-6" src="./images/foo-logo.png" /> 
  <!--Google map-->
 <div class="col-md-6" id="map-container-google" >
  <iframe class="column2" style=" border:#BDAA59 4px solid; width: 85%; "
 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.0310160411095!2d46.60729228499916!3d24.760125684101332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee3244dccee43%3A0x82aa17f7875ef325!2z2YXZg9iq2Kgg2K8uINi52KjYr9in2YTYrdmF2YrYryDYqNmGINix2KfYtNivINio2YYg2K7ZhtmK2YYgLi4g4oCO2LHYp9mF2YPZitmGIC4uICgg2KfYs9iq2LTYp9ix2KfYqiAtINmF2K3Yp9mF2KfYqSAtINiq2YjYq9mK2YIgLSDYqtit2YPZitmFICkgUkFNQUtFRU4uLiBDb25zdWx0aW5nIC0gbGF3IC0gUmVnaXN0cmF0aW9uIC0gQWRqdWRpY2F0aW9u!5e0!3m2!1sar!2ssa!4v1626262390535!5m2!1sar!2ssa" 
allowfullscreen="" loading="lazy"></iframe>
  </div>


</div>
<div style="padding-top: 2%;" > 
<!-- Section: Social media -->


<!-- youtube -->
<a   class="btn btn-outline" style="color: #BDAA59; background-color: white; border-radius: 9px;" target="_blank" href="https://www.youtube.com/channel/UCPHoL6offQw7UO8AtxSm2cg" role="button"
><i class="fab fa-youtube fa-lg"></i> 
</a>
  <!-- Twitter -->
  <a  class="btn btn-outline" style="color: #BDAA59; background-color: white; border-radius: 9px;" target="_blank" href="https://twitter.com/ramakeenlaw" role="button"
  ><i class="fab fa-twitter fa-lg"></i> 
</a>
 <!-- linkedin -->
 <a  class="btn btn-outline" style="color: #BDAA59; background-color: white; border-radius: 9px;" target="_blank" href="https://www.linkedin.com/company/dr-abdulhamid-ibn-khunein-law-firm-ramakeen/about/" role="button"  
 ><i class="fa fa-linkedin fa-lg"></i>
 </a> 
 <!-- Section: Social media -->
  <!-- Copyright -->
  <div class="text-center" style="color: white; padding-top: 2%; ">
    © 2021 All Rights are Reserved for Ramakeen Developed by
    <a class="text-white" href="https://we-work.pro/">we-work.pro</a>
    </div>
  <!-- Copyright -->
</div>

</div>  
<!--container end-->  


</footer> 
   
 <script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }
  
  
  // Toggle between showing and hiding the sidebar when clicking the menu icon
  var mySidebar = document.getElementById("mySidebar");
  
  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
    } else {
      mySidebar.style.display = 'block';
    }
  }
  
  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }
  </script>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
