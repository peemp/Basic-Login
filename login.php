<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoveView</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<?php
    //include_once('connect.php');
    
   // if(isset($_POST['submit']))
    //{
        //$Username = $_POST['Username'];
        //$Password = $conn ->real_escape_string($_POST['Password']);
        //$sql="SELECT * FROM member where Username='$Username' and Password='$Password'";
        //$result = mysqli_query($conn,$sql);
       // if (mysqli_num_rows($result)>0){
            //$rs = mysqli_fetch_array($result);
           // echo 'สวัสดีครับ/ค่ะ';
        //}
       // else{
            //echo 'พยายามเข้านะ';
        //}
        //print_r($sql);
        //die(); 
    //}
    

?>
<div class="container">
<form name="form-login" action="check-login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
  </div>
  <button type="submit" class="btn btn-success" name="submit">Login</button>
  <a href="register.php"><button type="button" class="btn btn-warning btn-sm" name="submit">Register</button></a>
</form>
</div>

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>

    
</body>
</html>