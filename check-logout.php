<?php
include_once('connect.php');
session_start();
session_destroy();
echo "<script type='text/javascript'>";
echo "alert('logoutแล้ว บ้ายบายยย');";
echo "window.location = 'index.php'; ";
echo "</script>";
$sql = "SELECT * FROM member WHERE Username = '".$_SESSION['UserID']."' ";
$result = mysql_query($conn,$sql);
$rs = mysql_fetch_array($result);

?>