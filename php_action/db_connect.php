<?php 	

$localhost = "localhost";
$username = "dbusername";
$password = "dbpassword";
$dbname = "sms";
$store_url = "http://localhost/sms/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
