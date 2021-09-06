
<?php
//insert into database
$l=[];
session_start();
if(!empty($_POST)) {
 if($_POST['name']!="" && $_POST['email']!="" ){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $id = $_POST['id'];
array_push($l,$name,$email,$phone,$id);
$uri =$_POST['url'];
if($uri=="EN"){
    echo '<div style="padding:3%;"><div class="alert alert-success"  style="max-width: 600px;"  role="alert"><h4 style="text-align:center;">Successfully Saved </h4> </div></div>';
}
elseif($uri=="AR"){
 echo '<div style="padding:3%;"><div class="alert alert-success"  style="max-width: 600px;"  role="alert"><h4 style="text-align:center;">تم حفظ البيانات </h4> </div></div>';
}

 if($l!=[]){
$_SESSION['test'][]=$l;
 }
}}
?>