<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
class App{
    function __construct()
    {
       
    }
    public function dbconnect(){
        $username = "root";
        $password = "";
        $database = new PDO("mysql:host=localhost; dbname=ramakeen;",$username,$password);
        return $database;
    }  
   
  

function contact($name,$email,$phone,$messeges){
    $database=$this->dbconnect();
    $contact = $database->prepare("INSERT INTO 
    contact(name, email, phone,observation)VALUES(:name,:email,:phone,:messeges)");
    $contact->bindParam("name",$name);
    $contact->bindParam("email",$email);
    $contact->bindParam("phone",$phone);
    $contact->bindParam("messeges",$messeges);
    if($contact->execute()){
     return "success";
    }else{
       return "fail";
    }
}




function request($app_status,$app_name,
$app_id,$app_phone,
$app_email,$indiv,
$def_name,$def_id,
$def_phone,$def_email,$type_of_request,
$service_type,$description,$subject,$fileName1,$file1,$uri){
$database=$this->dbconnect();
            $addUser = $database->prepare("INSERT INTO 
            elwasata(applicant_status,applicant_name,applicant_email,applicant_phone,applicant_ID,
            defendent_name,defendent_email,defendent_phone,defendent_ID,type,request_classification,
            service_type,description,subject,created_at)
            VALUES(:applicant_status,:applicant_name,:applicant_email,:applicant_phone,:applicant_ID,
            :defendent_name,:defendent_email,:defendent_phone,:defendent_ID,:type,:request_classification,
            :service_type,:description,:subject,:created_at)");
            require_once "form_submit.php";
            $addUser->bindParam("applicant_status",$app_status);
            $addUser->bindParam("applicant_name",$app_name);
            $addUser->bindParam("applicant_email",$app_email);
            $addUser->bindParam("applicant_phone",$app_phone);
            $addUser->bindParam("applicant_ID",$app_id);
            $addUser->bindParam("defendent_name",$def_name);
            $addUser->bindParam("defendent_email",$def_email);
            $addUser->bindParam("defendent_phone",$def_phone);
            $addUser->bindParam("defendent_ID",$def_id);
            $addUser->bindParam("type",$indiv);
            $addUser->bindParam("request_classification",$type_of_request);
            $addUser->bindParam("service_type",$service_type);
            $addUser->bindParam("description",$description);
            $addUser->bindParam("subject",$subject);
            $date=date("Y-m-d h:i:sa");
            $addUser->bindParam("created_at",$date);
            if($addUser->execute()){
                $results = $database->prepare("SELECT * FROM elwasata where applicant_name=:u and defendent_name=:u1");
                    $results->bindParam("u",$app_name);
                    $results->bindParam("u1",$def_name);
                    if($results->execute()){
                        if ($results->rowCount()>0) {
                            foreach($results as $r){
                            $id=$r['request_id'];
                            $ser=$r['service_type'];
                        }
                            //save file in server storge
                            foreach($fileName1 as $index=>$file){
                                if($uri=="EN"){
                                    move_uploaded_file($file1[$index],"../dashboard/upload/".$fileName1[$index]);
                                }else{
                            move_uploaded_file($file1[$index],"./dashboard/upload/".$fileName1[$index]);
                        }
                            $position = "upload/".$fileName1[$index];
                            $uploadFile = $database->prepare("INSERT INTO elwasata_file(id,name,position) VALUES(:id,:name,:position)");
                            $uploadFile->bindParam("name",$fileName1[$index]);
                            $uploadFile->bindParam("position",$position);
                            $uploadFile->bindParam("id",$id);
                            $uploadFile->execute();
                            }
                            if(isset($_SESSION['test'])){
                                $i=0;
                                foreach($_SESSION['test'] as $s){
                                if($_SESSION['test'][$i][0]!=[]){
                                $def = $database->prepare("INSERT INTO defendants(id,def_name,def_email,def_ID,def_phone) VALUES(:id,:def_name,:def_email,:def_ID,:def_phone)");
                                $def->bindParam("def_name",$_SESSION['test'][$i][0]);
                                $def->bindParam("def_email",$_SESSION['test'][$i][1]);
                                $def->bindParam("def_ID",$_SESSION['test'][$i][2]);
                                $def->bindParam("def_phone",$_SESSION['test'][$i][3]);
                                $def->bindParam("id",$id);
                                $def->execute();
                                $i++;
                            }}
                            session_destroy();
                        }
                        header("Location:payment.php?id=".$id."&ser=".$ser);     
            }else{
                return "fail";
               
            }
              } 
              header("Location:payment.php?id=".$id."&ser=".$ser);
            }   

}

function reservation($name,$email,
$phone,$address,$service_type,
$description,$subject,$fileName,$file3,$uri){
    $database=$this->dbconnect();
    $addUser = $database->prepare("INSERT INTO 
    services1(name,email,phone,address,service_type,description,subject,created_at)
    VALUES(:name,:email,:phone,:address,:service_type,:description,:subject,:created_at)");
    $addUser->bindParam("name",$name);
    $addUser->bindParam("email",$email);
    $addUser->bindParam("phone",$phone);
    $addUser->bindParam("address",$address);
    $addUser->bindParam("service_type",$service_type);
    $addUser->bindParam("subject",$subject);
    $addUser->bindParam("description",$description);
    $date=date("Y-m-d h:i:sa");
    $addUser->bindParam("created_at",$date);  
    if($addUser->execute()){
        $results = $database->prepare("SELECT * FROM services1 where name=:n and email=:e and description=:d");
            $results->bindParam("n",$name);
            $results->bindParam("e",$email);
            $results->bindParam("d",$description);
            if($results->execute()){
                if ($results->rowCount()>0) {
                    foreach($results as $r){
                    $id=$r['service_id'];
                }
                    //save file in server storge
                    foreach($fileName as $index=>$file){
                    $position = "service/".$fileName[$index];
                    if($uri=="EN"){
                    move_uploaded_file($file3[$index],"../dashboard/service/".$fileName[$index]);
                    }else{
                    move_uploaded_file($file3[$index],"./dashboard/service/".$fileName[$index]);
                    }
                    $uploadFile = $database->prepare("INSERT INTO service_file(id,name,position) VALUES(:id,:name,:position)");
                    $uploadFile->bindParam("name",$fileName[$index]);
                    $uploadFile->bindParam("position",$position);
                    $uploadFile->bindParam("id",$id);
                    if($uploadFile->execute()){
                    }
                }
                return "success";
    }else{
        return "fail";

    }}
}}
    
    
}//end class