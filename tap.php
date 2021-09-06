<?php
$user_id=$_GET['id'];
$response=json_decode($_POST['tapToken'], true);
$token_id=$response["id"];
$name=$response["card"]["name"];
$card_id=$response["id"];
 
function Charge($card_id,$name)
 {
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.tap.company/v2/charges",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"amount\":".$_GET['price'].",
    \"currency\":\"KWD\",
    \"threeDSecure\":true,
    \"save_card\":false,
    \"description\":\"Test Description\",
    \"statement_descriptor\":\"Sample\",
    \"metadata\":{\"udf1\":\"test 1\",\"udf2\":\"test 2\"},
    \"reference\":{\"transaction\":\"txn_0001\",
      \"order\":\"ord_0001\"},
    \"receipt\":{\"email\":false,\"sms\":true},
    \"customer\":{\"first_name\":\"".$name."\",
      \"middle_name\":\"test\",
      \"last_name\":\"test\",
      \"email\":\"test@test.com\",
      \"phone\":
      {\"country_code\":\"965\",
        \"number\":\"50000000\"}},
        \"merchant\":{\"9982291\":\"\"},
        \"source\":{\"id\":\"".$card_id."\"},
        \"post\":{\"url\":\"http://your_website.com/post_url\"},
        \"redirect\":{\"url\":\"http://your_website.com/redirect_url\"}}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer sk_test_4CsmLhNIueUGfnBlD8JYpRyT",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
  header( 'Location: payment.php?pay=2' );

} else {
  print_r($response);
  $response1=json_decode($response, true);
  //update info of payment
  $username = "root";
  $password = "";
  $database = new PDO("mysql:host=localhost; dbname=ramakeen;",$username,$password);
  $select=$database->prepare("select * FROM elwasata where request_id=:id");
  $select->bindParam("id",$_GET['id']);
 if($select->execute()){
  if($select->rowCount()==1){
      $update = $database->prepare("UPDATE elwasata 
      SET  price=:price ,bill_number=:bill_number  where request_id=:e");
      $update->bindParam("e",$_GET['id']);
      $update->bindParam("bill_number",$response1["id"]);
      $update->bindParam("price",$_GET['price']);
      if($update->execute()){
        header( 'Location: payment.php?pay=1&&billing='.$response1["id"] );
      }
  }
  else{
    header( 'Location: payment.php?pay=2' );
   
  }}else{
    header( 'Location: payment.php?pay=2' );
  }
  //end update
}
}
 var_dump(Charge($card_id,$name));
?>
