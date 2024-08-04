<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "operation";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
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

    $sql= "update models SET name='$name',dob='$dob',email='$email',mobile='$mobile',qualification='$qualification', graduation='$graduation', passout='$passout', percentage='$percentage',adderss='$adderss',state='$state',strict='$strict', district='$district', country='$country', pincode='$pincode', user_name='$user_name', password='$password' WHERE id='$id'";
    if ($conn->query($sql)==TRUE){
        header("Location:ferch.php");
        exit();
    }else{
        echo "error record update:" .$conn->error;
    }    
    }

    $conn->close();
?>

  