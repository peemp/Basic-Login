<?php

include_once('connect.php');

$Name=$_POST['Name'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$sql = "SELECT * FROM member WHERE Username='$Username'";
$result = mysqli_query($conn,$sql);
if($Name==''or $UserN=='' or $Password==''){
    echo"<script>alert('กรอกข้อมูลใหม่โว้ยมึงกรอกไม่ครบ');window.location='register.php';</script>";
}
elseif($result->num_rows > 0){
    echo"<script>alert('ควายว้ายๆๆโดนแย่งชื่อว้ายๆ');window.location='register.php';</script>";
}
elseif (strlen($Password)<8) {
    echo"<script>alert('รหัสอย่างน้อย 8 ตัว กรอกให้ครบด้วยสัส');window.location='register.php';</script>";
}
else{
    $sql="INSERT INTO member (Name, Username ,Password )  VALUES ('$Name', '$Username', '$Password') " ; 
    $result=mysqli_query($conn,$sql);
    gotopage('login.php');
}?>