<?php
 include_once('connect.php');
 session_start();
 if(isset($_POST['submit']))
 {
     //echo $_POST['Username'];
     //echo $_POST['Password'];
     $sql="SELECT * FROM member where Username='$_POST[Username]' and Password='$_POST[Password]'";
     $result = mysqli_query($conn,$sql);
     if (mysqli_num_rows($result)>0){
         //$rs = mysqli_fetch_array($result);
         $rs = $result ->fetch_assoc();
         $_SESSION["ID"] = $rs["ID"];
         $_SESSION["Username"] = $rs["Username"];
         $_SESSION["Name"] = $rs["Name"];
         $_SESSION["Password"] = $rs["Password"];
         //echo $_SESSION["Username"].$_SESSION["Name"].$_SESSION["Password"];
         echo "<script>";
        echo "alert('สำเร็จแล้วว>_<');";
        echo "window.location='index.php';"; 
        echo "</script>";
    
         //gotopage('login.php');


         //echo '<script>
         //alert ("สวัสดีครับ/ค่ะ");
         //echo "window.location = 'login.php'; ";
         //echo "</script>";
     }
     else {
        echo "<script>";
        echo "alert('ม่ายถูกไอสัส!!!');";
        echo "window.location='login.php';"; 
        echo "</script>";
    
         //echo "<script>";
         //echo 'ม่ายถูกก พยายามเข้านะ';
        // echo "</script>";
     }
     //print_r($sql);
     //die(); 
 }
 
?>