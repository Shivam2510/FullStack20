<?php 
session_start();
$email = $_SESSION['email'];

include 'userdata.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Student</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">Library management system</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-left">
                    <li role="presentation"><a href="allbook.php">Books</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="login.html">Logout</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="stuprofile.php">View Profile</a></li>
                </ul>
               
            </div>
        </div>
    </nav>

<ul class="list-group">
  <li class="list-group-item">Registration No: <?php echo $regno; ?></li>
  <li class="list-group-item">Name: <?php echo $name; ?></li>
  <li class="list-group-item">Gender: <?php echo $gender; ?></li>
  <li class="list-group-item">Profession : <?php echo $prof; ?></li>
  <li class="list-group-item">Mobile: <?php echo $mobile; ?></li>
</ul>
<button type="button" class="btn btn-danger" onclick="window.location.href='updatestuprofile.php';">Update Details</button>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>