<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<?php
class Admin{
    function __construct()
    {
        
    }
    public function dbconnect(){
        $username = "root";
        $password = "";
        $database = new PDO("mysql:host=localhost; dbname=ramakeen;",$username,$password);
        return $database;
    }  
    public function get_specific($id){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM elwasata where request_id =:u");
        $results->bindParam("u",$id);
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    
    }
    public function get_specific2($id){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM defendants where id =:u");
        $results->bindParam("u",$id);
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    
    }
    public function get_all_services(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM services1 ORDER BY `service_id` DESC");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }}
      public function get_all_file($id){
        $database=$this->dbconnect();
        $results1 = $database->prepare("SELECT * FROM service_file where id =:u");
          $results1->bindParam("u",$id);
          if($results1->execute()){
              if ($results1->rowCount() > 0) {
                  return $results1;
              } 
        }
    }
    public function get_specific1($id){
        $database=$this->dbconnect();
      $results1 = $database->prepare("SELECT * FROM elwasata_file where id =:u");
        $results1->bindParam("u",$id);
        if($results1->execute()){
            if ($results1->rowCount() > 0) {
                return $results1;
            } 
      }
    }
    function getall($u){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM registration where role=:u");
        $results->bindParam("u",$u);
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
                    
      }}
      function get_admin($id){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM registration where id=:id");
        $results->bindParam("id",$id);
        if($results->execute()){
            if($results->rowCount()==1){
                return $results;
              }
                    
      }}
      function contact(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM contact");
        if($results->execute()){
            if($results->rowCount()>0){
                return $results;
              }
      }
      }
      function get_all_rquests(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM elwasata  ORDER BY `request_id` DESC");
        if($results->execute()){
            if ($results->rowCount() > 0) {
                return $results;
            } 
      }
    }
    public function admin_no(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM registration  WHERE Role = 'admin'");
        if($results->execute()){
           
                return $results->rowCount();
          
      }
    
    }
    public function services_no(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM services1");
        if($results->execute()){
            return $results->rowCount(); 
      }
    
    }
    public function request_no(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM elwasata");
        if($results->execute()){
            return $results->rowCount();
      }
    
    }
    public function contact_no(){
        $database=$this->dbconnect();
        $results = $database->prepare("SELECT * FROM contact");
        if($results->execute()){
            return $results->rowCount();
      }
    
    }
   
   

    function logout(){
        session_unset();
        session_destroy();
        echo '<script> location.replace("../LOGIN.php"); </script>';
}
    function admin_update($id,$username,$email,$password1,$password2,$phone){
       // echo "update";
        $database=$this->dbconnect();
        $select=$database->prepare("select * FROM registration where password=:password and id=:id");
        $select->bindParam("id",$id);
        $select->bindParam("password",$password1);
       if($select->execute()){
        if($select->rowCount()==1){
            $update = $database->prepare("UPDATE registration 
            SET username=:name , email=:email , password= :pass ,mobile=:mobile ,updated_at=:updated  where id=:e");
            $update->bindParam("e",$id);
            $date=date("Y-m-d h:i:sa");
            $update->bindParam("updated",$date);
            $update->bindParam("name",$username);
            $update->bindParam("email",$email);
            $update->bindParam("pass",$password2);
            $update->bindParam("mobile",$phone);
            if($update->execute()){
                return "success";
               $user=$database->prepare("select * from registration where email=:s");
               $user->bindParam("s",$id);
               if($user->execute()){
                if($user->rowCount()==1){
                    $users = $user->fetchObject();
                    session_start();
                    $_SESSION['user1'] = $users;
                    
         }}}
        }
        else{
            return "fail";
         
        }}else{
            return "failed";
        }
       
    }
   
    

}
?> 

