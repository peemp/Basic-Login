<?php
include_once('connect.php');
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
<?php
//include_once('connect.php');
//session_start();
//session_destroy();
//echo "<script type='text/javascript'>";
//echo "alert('log out แล้ว');";
//echo "window.location = 'login.php'; ";
//echo "</script>";
?>
<div class="container">
<form name="form-login" action="" method="POST">
Welcome to My world! <br>
<table border="1" style="width: 300px">
<tbody>
<tr>
<td width="87"> &nbsp;Username</td>
<td width="197"><?php echo $_SESSION["Username"];?>
</td>
</tr>
<tr>
<td> &nbsp;Name</td>
<td><?php echo $_SESSION["Name"];?></td>
</tr>
</tbody>
</table>
<br>
<a class="btn btn-danger" href="index.php" role="button">Back</a>
</form>
</div>


    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>

    
</body>
</html>