<?php
include_once('connect.php');
session_start();
if(isset($_POST['submit'])){
    
    $Name=$_POST['Name'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $sql =  "SELECT * FROM member WHERE Username='$Username'";
    $result = mysqli_query($conn,$sql);
    if( $Username ==''  or $Name ==''or $Password==''){
        echo "<script>";
        echo "alert('กรอกไม่ครบนะน้อนนนน');";
        echo "window.location='register.php';"; 
        echo "</script>";}
    elseif($result->num_rows > 0){
        echo "<script>";
        echo "alert('ควายว้ายๆๆโดนแย่งชื่อว้ายๆ');";
        echo "window.location='register.php';";
        echo "</script>";}
    elseif (strlen($Password)<8) {
        echo"<script>";
        echo "alert('รหัสอย่างน้อย 8 ตัว กรอกให้ครบด้วยสัส');";
        echo "window.location='register.php';";
        echo "</script>";}
    else{ 
    $sql=" INSERT INTO member (Name, Username, Password) VALUES ('$Name', '$Username', '$Password')";
    $result=mysqli_query($conn,$sql);}
    echo "<script>";
        echo "alert('สำเร็จแล้วว>_<');";
        echo "window.location='login.php';"; 
        echo "</script>";}

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