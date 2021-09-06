<?php
if(isset($_SESSION['test'])){
  session_unset();
  session_destroy();
}
require_once "../user_class.php";
if(isset($_POST['asmaa'])){
if((empty($_FILES["file"]["name"])& empty($_FILES["file"]["tmp_name"]))){
  $fileName1 = "";
  $file1 = "";
}else{
  $fileName1 = $_FILES["file"]["name"];
  $file1 = $_FILES["file"]["tmp_name"];
}
$req=new App();
$m=$req->request($_POST['app_status'],$_POST['app_name'],
$_POST['app_id'],$_POST['app_phone'],
$_POST['app_email'],$_POST['indiv'],
$_POST['def_name'],$_POST['def_id'],
$_POST['def_phone'],$_POST['def_email'],$_POST['type_of_request'],
$_POST['service_type'],$_POST['description'],$_POST['subject'],$fileName1,$file1,"EN");
}
?>
<!DOCTYPE html>
<html>
<title> Mediation Request </title>
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
     <!-- Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
  <body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
    <nav class="navbar navbar-expand  navbar-dark" style="background-color: black; opacity: 100%;">
      <a  style="color:white;float: left; padding: 5px; " href="#">EN</a>
      <a  style="color:white;float: left; padding: 5px;" href="../request.php">AR</a>
            
             
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
   <img class="navimg" src="../images/ramakeen.png" height="80">
 <div class="navmenu">
  <a href="contact.php"> Contact Us</a>
  <a href="#" style="color: rgb(206, 180, 117)!important;">  Mediation request</a>
  <a href="reservation.php">Service Request</a>
  <a href="services.html">Services</a>
  <a href="about.html" > About US</a>
 <a href="Ramakeen.html"   >Home</a>
</div>
</div>
  <!-- Hide right-floated links on small screens and replace them with a menu icon -->
 <a href="javascript:void(0);" class="icon w3-bar-item w3-hide-large w3-hide-medium" onclick="w3_open()">
   <i class="fa fa-bars" style="font-size: 32px; color: rgb(206, 180, 117) ;"></i>
 </a>
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none ; z-index: 99;" id="mySidebar">
 <a href="javascript:void(0)"   onclick="w3_close()" class=" w3-button nav-link  " style="font-size: 28px !important;font-weight: bold ;color: rgb(206, 180, 117)!important;"> <span class="menuside"> X </span> </a> <hr>
 <a href="Ramakeen.html" onclick="w3_close()" class=" w3-button nav-link"><span class="menuside" style="color:black">Home</span></a><hr>
 <a href="about.html" onclick="w3_close()" class="  w3-button nav-link" > <span class="menuside" style="color:black"> About US </span></a><hr>
 <a href="services.html" onclick="w3_close()" class=" w3-button nav-link"> <span class="menuside" style="color:black">Services </span></a> <hr>
 <a href="reservation.php" onclick="w3_close()" class=" w3-button nav-link"> <span class="menuside" style="color:black">Service Request </span></a> <hr>
 <a href="#" onclick="w3_close()" class=" w3-button nav-link" style="color: rgb(206, 180, 117)!important;"> <span class="menuside">  Mediation request </span></a> <hr>
 <a href="contact.php" onclick="w3_close()" class=" w3-button nav-link"> <span class="menuside" style="color:black">  Contact Us </span></a> <hr>
</nav>
 
<div class="container-fluid">
  <div class="row">
  
    <div class="col-lg-6 col-md-12">
      <h2 class="dtitle" ><span class="khat"> Mediation </span>  Service </h2> <br>
      <p class="kalama" style="text-align: left; padding-left: 3%;">
        We help you to seek reconciliation directly without resorting to the courts
        by bringing the views closer to reach an agreement satisfactory to the parties
      
      </p>
   
          </div> <!-- parag-->
        
  </div> <!--parg & img-->
</div>

      <!-- Table Reservation Form -->
      <div class="container" data-aos="fade-up">
        <div class="row" >
        </div> 
        <form  method="POST" enctype="multipart/form-data">
          <div class="form-row">
            <div class="col-md-8 offset-md-2 text-center">
              <h3 style=" text-shadow: 1px 1px #bdaa59;" > 
                Data of the applicant <br>
                <span style="font-size: 20px ;font-family: 'Courier New', Courier, monospace;"> ( claimant )</span>
              </h3>
            </div> <br> <br> <br>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01"
                style="font-size: 14px;
                color: white;
                font-family:'Cairo', sans-serif;
                background-color: rgb(206, 180, 117); " >Status of the applicant</label>
              </div>
              <select class="custom-select" name="app_status" id="inputGroupSelect01">
                <option disabled selected hidden>Choose...</option>
                <option value="On his own behalf">On his own behalf </option>
                <option value="Agent">Agent</option>
                <optgroup 
                style="color: red; font-family: 'Courier New', Courier, monospace;"
                  label=" * Please attach the documents below! "
                ></optgroup>
                <option value="Guardian">Guardian</option>
                <optgroup 
                style="color: red; font-family: 'Courier New', Courier, monospace;"
                  label=" * Please attach the documents below! "
                ></optgroup>
              </select>
            </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input dir="ltr" type="text" class="form-control" name="app_name" id="email" placeholder="Name ">
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <input dir="ltr" type="email" class="form-control" name="app_email" id="email" placeholder=" E-Mail">
        </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input dir="ltr" type="text" class="form-control"  name="app_id" id="phone" placeholder="ID number">
          </div>    
             <div class="col-lg-6 col-md-6 form-group">
                <input dir="ltr" type="text" class="form-control"  name="app_phone" id="phone" placeholder="phone number ">
            </div>
          
              </div><br>
          <div class="col-md-8 offset-md-2 text-center">
            <h3 style=" text-shadow: 1px 1px #bdaa59;" >
               Other party's statements <br>
               <span style="font-size: 20px ;font-family: 'Courier New', Courier, monospace;"> ( Defendant )</span>
              </h3>
          </div> <br> 

          <div class="form-group d-flex justify-content-center " dir="rtl">
            <div
              class="pt-2 pb-2 pr-4 pl-4 ml-3"
              style="background-color: rgb(206, 180, 117); border-radius: 10px"
            >
            <label for="male" class="radtext mr-2">Companies</label>
            <input type="radio" id="male" name="indiv" value="Companies" />
            </div>
            <div
              class="pt-2 pb-2 pr-4 pl-4 mr-3"
              style="background-color: rgb(206, 180, 117); border-radius: 10px"
            >
            <label for="male" class="radtext mr-2">Personal</label>
           <input type="radio" id="male" name="indiv" value="Personal" />
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-lg-6 col-md-6 form-group">
              <input dir="ltr" type="text" class="form-control"  name="def_name" id="email" placeholder="Name ">
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <input dir="ltr" type="email" class="form-control"  name="def_email" id="email" placeholder=" E-Mail">
        </div>
            <div class="col-lg-6 col-md-6 form-group">
              <input dir="ltr" type="text" class="form-control"  name="def_id" id="phone" placeholder="ID number">
          </div>
            
             <div class="col-lg-6 col-md-6 form-group">
                <input dir="ltr" type="text" class="form-control" name="def_phone" id="phone" placeholder="phone number ">
            </div>

            <!--add person-->
            
            <button type="button" 
            style="border-radius: solid  #000 5px; background-color: white;  font-size: 22px; color:  rgb(206, 180, 117);;"
                class="btn btn-rounded btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Are there other people?  
            </button> 

                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01"
                        style="font-size: 14px;
                        color: white;
                        font-family:'Cairo', sans-serif;
                        background-color: rgb(206, 180, 117); " >Request Type and classification </label>
                      </div>
                      <select class="custom-select" name="type_of_request" id="inputGroupSelect01">
                        <option disabled selected hidden>Choose...</option>
                        <optgroup label="Commercial and financial">
                          <option value="brokerage" > brokerage  </option>
                          <option value="Contracting">Contracting </option>
                          <option value="controversy"> controversy </option>
                          <option value="Attorney fee disputes"> Attorney fee disputes</option>
                          <option value="indemnity"> indemnity  </option>
                          <option value="Online shop"> Online shop </option>
                          <option value="Trade mark"> Trade mark </option>
                          <option value="Transportation and shipping services "> Transportation and shipping services  </option>
                          <option value="Sale"> Sale  </option>
                          <option value="debt"> debt </option>
                          <option value="Claims"> Claims  </option>
                          <option value="draft"> draft  </option>
                          <option value="contracts"> contracts  </option>
                          <option value="Services"> Services   </option>
                          <option value="Services fees"> Services fees </option>
                          <option value="Intellectual  property rights"> Intellectual  property rights </option>
                        </optgroup>

                        <optgroup label="real estate">
                          <option value="Eviction"> Eviction </option>
                          <option value="Rent"> Rent  </option>
                          <option value="Property Defect"> Property Defect   </option>
                          <option value="Association of owners"> Association of owners  </option>
                        </optgroup>
  
                        <optgroup label="Traffic">
                          <option value="collisions"> collisions   </option>
                          <option value="Insurance"> Insurance  </option>
                        </optgroup>
  
                        <optgroup label="Personal Status">
                          <option value="Alimony"> 	Alimony   </option>
                          <option value="Marriage disapproval"> Marriage disapproval  </option>
                          <option value="heritage"> heritage  </option>
                          <option value="bequest"> bequest   </option>
                          <option value="Family matters"> Family matters  </option>
                        </optgroup>
  
                        <optgroup label="criminal">
                          <option value="Cyber crime"> 	Cyber crime   </option>
                          <option value="Blackmail"> 	Blackmail   </option>
                          <option value="Domestic violence"> Domestic violence  </option> 
                        </optgroup>
  
                        <optgroup label="Labor">
                          <option value="Job contact">Job contact </option>
                          <option value="Dues">	Dues   </option>
                          <option value="Plaint"> Plaint  </option> 
                        </optgroup>
  
                        <optgroup label="Other">
                          <option value="Other">Other </option>             
                        </optgroup>
                      </select>
                    </div>

                    <div class="input-group mb-3" >
                      <div class="input-group-prepend">
                        <label
                          class="input-group-text"
                          for="inputGroupSelect01"
                          style="
                            font-size: 14px;
                            color: white;
                            font-family: 'Cairo', sans-serif;
                            background-color: rgb(206, 180, 117);
                          "
                          >Service Type
                        </label>
                      </div>
                      <select class="custom-select form-control" name="service_type" id="basic">
                        <option disabled selected hidden>Choose...</option>
                        <option value="Initial Notification Broker">Initial Notification Broker</option>
                        <optgroup
                          label="Sending an initial notification to the defendant of the plaintiff's desire to conciliate and to start the legal and formal claim procedures">
                         </optgroup>
                        <option value="Applicant With Legal Advice">
                          Applicant With Legal Advice
                        </option>
                        <optgroup
                          label="Examining the documents subject to mediation, providing simple legal advice, and notifying the other party of the request "
                        ></optgroup>
                      </select>
                    </div>      
          </div> 

          <div class="custom-file">
            <input type="file" class="custom-file-input" name="file[]" id="customFile" multiple>
            <label class="custom-file-label text-left" for="customFile"  > Choose file</label>
          </div>
          <br><br>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" name="description" placeholder="Description of the attached documents" id="exampleFormControlTextarea1" rows="2"></textarea>
          </div>  

          <div class="form-group">
            <label for="exampleFormControlTextarea1"></label>
            <textarea class="form-control" placeholder="subject" name="subject" id="exampleFormControlTextarea1" rows="4"></textarea>
          </div>   
          <br>
          <button class="btn btn-rounded btn-lg btn-block" style="background-color: rgb(206, 180, 117);  font-size: 22px; color: white;" type="submit"  name="asmaa"  > SEND </button>
            </form>
        </div>
   <!-- End Table Reservation Form -->
   <script>
  $(document).ready(function () {
    $('.btn-primary').click(function (e) {
      e.preventDefault();
      var name = $('#Name1').val();
      var email = $('#Email1').val();
      var phone = $('#Phone1').val();
      var id = $('#Id1').val();
      $.ajax
        ({
          type: "POST",
          url: "../form_submit.php",
          data: { "name": name, "email": email, "phone": phone ,"id" :id ,"url" :"EN"},
          success: function (data) {
            $('.result').html(data);
            $('#contactform')[0].reset();
          }
        });
    });
  });
</script>

 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog">
                  <div class="modal-content">
                  <div class="result" style="text-align:center;"></div>
                    <div >
                      <h5  id="exampleModalLabel" style="text-align:center;color:gold;padding-top:15px;;text-decoration: underline;">ADD Defendant</h5>
                    </div>
                    <div class="modal-body">
                      <form method="POST" id="contactform" >
                      
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label" >Name :</label>
                          <input type="text" name="def_name1" class="form-control" id="Name1" required>
                        </div>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Phone Number :</label>
                          <input type="text" name="def_phone1" class="form-control" id="Phone1" required>
                        </div>
                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label">Email :</label>
                          <input type="text" name="def_email1"  class="form-control" id="Email1" required>
                        </div>
                        <div class="mb-3">
                          <label for="message-text" class="col-form-label">ID Number :</label>
                          <input type="text" name="def_id1"  class="form-control" id="Id1" required>
                        </div>
                        <div class="modal-footer">
                      <button  type="submit" class="btn btn-primary">Save</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                      </form>

                    </div>
                  
                  </div>
                </div>
              </div>    
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

<script>
  $(document).ready(function () {

    $('#basic').selectpicker({
      liveSearch: true
    }).on('loaded.bs.select', function(e){
      
      // console.log('bs.select loaded event');
      
      // save the element
      var $el = $(this);
      
      // console.log( $el.data('selectpicker') );
      
      // the list items with the options
      var $lis = $el.data('selectpicker').$lis;
      
       $lis.each(function(i) {
         
        // get the title from the option
        var tooltip_title = $el.find('option').eq(i).attr('title');
     
         $(this).tooltip({
           'title': tooltip_title,
           'placement': 'top'
        });
        
     });
     
    });
    
  });
</script>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>
