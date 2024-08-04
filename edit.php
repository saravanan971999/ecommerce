<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "operation";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  
    $sql="SELECT * FROM models WHERE id='$id'";
        $result = $conn->query($sql);
    
    if ($result->num_rows > 0){
        $row= $result->fetch_assoc(); 
        $name = $row['name'];
        $dob= $row['dob'];
        $email= $row['email'];
        $mobile= $row['mobile'];
        $qualification = $row['qualification'];
        $graduation= $row['graduation'];
        $passout= $row['passout'];
        $percentage= $row['percentage'];
        $adderss= $row['adderss'];
        $state= $row['state'];
        $district= $row['district'];
        $country= $row['country'];
        $pincode= $row['pincode'];
        $user_name= $row['user_name'];
        $password= $row['password'];
    }else{
    echo "0 result";
     }
    }     
    $conn->close();
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit user</title>
</head>
<body>
    <h2>Data Edit details</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>"><br>
        <labal for="name">Name;</labal>
        <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $name;?>"><br>
        <label for="dob">Date Of Birth;</labal>
        <input type="date" name="dob" placeholder="Enter Your Date of Birth" value="<?php echo $dob;?>"><br>
        <labal for="email">Email;</label>
        <input type="text" name="email" placeholder="saravanan@gmail.com"  value="<?php echo $email;?>"><br>
        <label for="mobile">mobile;</label>
        <input type="mobile" name="mobile" placeholder="Enter Mobile No" value="<?php echo $mobile;?>"><br>
        <label for="qualification">qualification;</label>
        <input type="text" name="qualification" placeholder="Enter Qualification" value="<?php echo $qualification;?>"><br>
        <label for="graduation">Graduation;</label>
        <input type="text" name="graduation" placeholder="Enter Graduation" value="<?php echo $graduation;?>"><br>
        <label for="passout">passout</label>
        <input type="text" name="passout" placeholder="Enter passout" value="<?php echo $passout;?>">><br>
        <label for="percentage">percentage;</label>
        <input type="text" name="percentage" placeholder="Enter percentage" value="<?php echo $percentage;?>"> <br>
        <label for="adderss">adderss</label>
        <input type="text" name="adderss" placeholder="Enter adderss" value="<?php echo $adderss;?>"><br>
        <label for="state">state;</label>
        <input type="text" name="state" placeholder="Enter your status" value="<?php echo $state;?>"> <br>
        <label for="district">district;</label>
        <input type="text" name="district" placeholder="Enter Your District"  value="<?php echo $district;?>"><br>
        <label for="country">country;</label>
        <input type="text" name="country" placeholder="Enter Your Country" value="<?php echo $country;?>"><br>
        <label for="pincode">pincode</label>
        <input type="text" name="pincode" placeholder="Enter Your Pincode" value="<?php echo $pincode;?>"><br>
        <label for="user_name">user_name;</label>
        <input type="text" name="user_name" placeholder="Enter Your username" value="<?php echo $user_name;?>"> <br>
        <label for="password">password;</label>
        <input type="password" name="password" placeholder="Enter your password"  value="<?php echo $password;?>"><br>
        <input type="Submit" value="update">
    </form>
    
</body>
</html>