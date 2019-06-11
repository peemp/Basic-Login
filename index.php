<?php session_start(); ?>
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
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
    <a class="navbar-brand" href="#"><b>Navbar</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        </ul>
        
        
        
        <ul class="navbar-nav ml-auto">
        <?php if(isset($_SESSION['ID'])){?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ก็มาดิไอสัส! <?php echo $_SESSION['Name'];?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="information.php">Information</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="check-logout.php">Logout</a>
            </div>
        </li>
        <?php } else { ?>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login&Register</a>
        </li>
        <?php } ?>
        </ul>
    </div>
    </nav>

    <img src="https://media1.tenor.com/images/b95d4c5cdd81bf7a9b3f949855a0c920/tenor.gif" alt="" width="480" height="270">
    <iframe width="750" height="500" src="https://www.youtube.com/embed/aKVsa2G3KT0?playlist=aKVsa2G3KT0&loop=1?autoplay=1" ></iframe>
    <img src="https://media.tenor.com/images/07f0a353088cfc18e15b59a2aa013b54/tenor.gif" alt="" width="220" height="277">

    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>

    
</body>
</html>