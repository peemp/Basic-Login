<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<?php
//include_once('connect.php');
//if(isset($_POST['submit'])){
    
    //if( '$_POST[Username]' ==''  or '$_POST[Name]' ==''or '$_POST[Password]'==''){
       // echo "<script>";
        // echo "alert('กรอกไม่ครบนะน้อนนนน');";
        // echo "window.location='register.php';"; 
        // echo "</script>";
   //}
        //else{ 
    //$sql=" INSERT INTO member (Name, Username, Password)
    //VALUES ('$_POST[Name]', '$_POST[Username]', '$_POST[Password]')";
   // $result=mysqli_query($conn,$sql);}
    
//}

    //include_once('connect.php');
    
   //if(isset($_POST['submit'])){

    //if($_POST[Name] =='' or $_POST[Username] =='' or $_POST[Password] =='')
    //{
        //echo"<script>";
        //echo"alert('กรอกข้อมูลให้ครบด้วยน้าา');";
        //echo"window.location='register.php';";
        //echo"</script>";
    //
    //else{
      // if(isset($_POST['submit'])){
  //$sql=INSERT INTO `member`(`ID`, `Name`, `Username`, `Password`) VALUES ([value-1],[value-2],[value-3],[value-4]);//"INSERT INTO member('Name', 'Username', 'Password') VALUES ('$_POST[Name]','$_POST[Username]','$_POST[Password]');";
    //$result = mysqli_query($conn,$sql);}
   // }
//}
    


?>
<div class="container">
<form name="form-register" action="check-register.php" method="POST">
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="Name">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>

    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>

    
</body>
</html>