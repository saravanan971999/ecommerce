<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "operation";

$conn = new mysqli($servername, $username, $password, $dbname);
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST['name'];
  $dob=$_POST['dob'];
  $email=$_POST['email'];
  $mobile =$_POST['mobile'];
  $qualification=$_POST['qualification'];
  $graduation=$_POST['graduation'];
  $passout=$_POST['passout'];
  $percentage=$_POST['percentage'];
  $adderss=$_POST['adderss'];
  $state=$_POST['state'];
  $district=$_POST['district'];
  $country=$_POST['country'];
  $pincode=$_POST ['pincode'];
  $user_name=$_POST['user_name'];
  $password=$_POST['password'];

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO `models`( name, dob, email, mobile, qualification, graduation, passout, percentage, adderss, state, district, country, pincode, user_name, password)
 VALUES ('$name', '$dob', '$email', '$mobile', '$qualification', '$graduation', '$passout', '$percentage', '$adderss', '$state', '$district', '$country', '$pincode', '$user_name', '$password')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
