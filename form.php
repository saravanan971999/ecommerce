<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration form </title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html>














<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regisation form</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="wrapper">
<form action="insert.php" method="post"> -->
<!-- <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>
</body>
</html> -->

















      <!-- starting
      <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
</div>
      ending 
        <h1  style="font-weight: 700; color: black;">Resigation Form</h1>
         <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" style="width:60%" class="form-control" id="name" placeholder=" Enter your Name " name="name">
          </div>
          <div class="form-group">
                <label for="DOB">DOB:</label>
                <input type="date"style="width:60%" class="form-control" id="dob" placeholder=" enter  Date of birth" name="dob">
            </div>    
              <div class="form-group">
                      <label for=" email">email:</label>
                      <input type="email"style="width:60%" class="form-control" id="email" placeholder="sara@gmail.com" name="email">
                    </div>
                    <div class="form-group">
                      <label for="mobile"> mobile no:</label>
                      <input type="mobile"style="width:60%" class="form-control" id="mobile " placeholder="enter mobile " name="mobile">
                    </div>
                    <div class="form-group">
                      <label for="qualification">qualification:</label>
                      <input type="text" style="width:60%"class="form-control" id="qualification" placeholder="enter education " name="qualification">
                    </div>
                    <div class="form-group">
                      <label for="graduation status">Graduation status:</label>
                      <input type="text" style="width:60%"class="form-control" id="Graduation status " placeholder="graduation status" name="graduation">
                    </div>
                    <div class="form-group">
                      <label for="year of pass out">Year of pass out:</label>
                      <input type="text"style="width:60%" class="form-control" id="passout " placeholder=" pass out Year  " name="passout">
                    </div>
                    <div class="form-group">
                      <label for="percentage">Percentage:</label>
                      <input type="text" style="width:60%"class="form-control" id="percentage " placeholder=" percentage  " name="percentage">
                    </div>      
                    <div class="form-group">
                      <label for="adderss">adderss:</label>
                      <input type="text" style="width:60%"class="form-control" id="adderss " placeholder="  enter your adderss  " name="adderss">
                    </div>
                    <div class="form-group">
                      <label for="state">status:</label>
                      <input type="text"style="width:60%" class="form-control" id="state " placeholder="state" name=" state">
                    </div>
                    <div class="form-group">
                      <label for="district">district:</label>
                      <input type="text"style="width:60%" class="form-control" id="district " placeholder="district" name=" district">
                    </div>
                    <div class="form-group">
                      <label for="country">country:</label>
                      <input type="text"style="width:60%" class="form-control" id="country" placeholder="country" name=" country">
                    </div>
                    <div class="form-group">
                      <label for="pincode">pincode:</label>
                      <input type="number"style="width:60%" class="form-control" id="pincode" placeholder="pincode" name="pincode">
                    </div>
                    <div class="form-group">
                      <label for="username">Username:</label>
                      <input type="username"style="width:60%" class="form-control" id="username" placeholder="username" name=" user_name">
                    </div>
                    <div class="form-group">
                      <label for="password">password:</label>
                      <input type="password"style="width:60%" class="form-control" id="password" placeholder=" enter your password " name="password">
                    </div>
    
            <div class="checkbox">
              <label class="text-info"><input type="checkbox" name="remember" >Remember me </label>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
      </form> -->

    
     
