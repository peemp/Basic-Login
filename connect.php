<?php
    $conn = new mysqli('localhost','root','','login');

    if($conn ->connect_errno){
        die("ไม่ได้ ไปทำมาใหม่". $conn ->connect_error);
    }

?>