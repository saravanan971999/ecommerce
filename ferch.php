<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "operation";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="index.php" class="text-danger">ADD USER DATA</a></button>
    
    <table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">dob</th>
      <th scope="col">mobile no</th>
      <th scope="col">qualification</th>
      <th scope="col">graduation</th>
      <th scope="col">passout</th>
      <th scope="col">percentage</th>
      <th scope="col">adderss</th>
      <th scope="col">state</th>
      <th scope="col">district</th>
      <th scope="col">country</th>
      <th scope="col">pincode</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col type="button" class="btn btn-danger">update</th>

  
      

    </tr>
  </thead>
  <tbody>
    
    <?php  
    $sql="SELECT * FROM  `models`";
    $result = $conn->query($sql);
    if($result){
      while ($row=mysqli_fetch_assoc($result)) {
        $name=$row['name'];
        $dob=$row['dob'];
        $email=$row['email'];
        $mobile =$row['mobile'];
        $qualification=$row['qualification'];
        $graduation=$row['graduation'];
        $passout=$row['passout'];
        $percentage=$row['percentage'];
        $adderss=$row['adderss'];
        $state=$row['state'];
        $district=$row['district'];
        $country=$row['country'];
        $pincode=$row ['pincode'];
        $user_name=$row['user_name'];
        $password=$row['password'];
        echo '
        <tr>
        <td>'.$name.'</td>
        <td>'.$dob.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$qualification.'</td>
        <td>'.$graduation.'</td>
        <td>'.$passout.'</td>
        <td>'.$percentage.'</td>
        <td>'.$adderss.'</td>
        <td>'.$state.'</td>
        <td>'.$district.'</td>
        <td>'.$country.'</td>
        <td>'.$pincode.'</td>
        <td>'.$user_name.'</td>
        <td>'.$password.'</td>
        <td><a href="edit.php"?id=". $row["id"] . "'>Update</a></td>

     
       
        </tr>';
        }
    }
    ?>


</tbody>
</table>
</body>
</html>