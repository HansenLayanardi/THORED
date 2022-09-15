<?php
include("Logindata.php");
session_start();
$uname = $_SESSION['username'];
$fname = $_SESSION['firstName'];
$lname = $_SESSION['lastName'];

$cname = $_SESSION['channelName'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Channel</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="channel.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- As a heading -->
        <nav class="navbar fixed-top navbar-dark">
        <div class="container">
            <div class="col">
                <span class="thored navbar-brand">Channels</span>
            </div>
            <span class="dropdown">
                <input type="image" class="image d-flex dropdown-toggle" href="#" 
                id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" src="img\profile.jpg">
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <div class="row" href="#">
                        <div class="dropdown-item col">
                            <img class="img-drop" src="img\profile.jpg">
                        </div>
                        <div class="dropdown-item col mx-auto">
                            <div class="row"style="color:#4C3421;"><?=$uname?></div>
                            <div class="row"style="color:#98663E;"><?=$fname," ",$lname?></div>
                        </div>
                    </div>
                    <a class="dropdown-item droptext" href="#" style="color:#4C3421;">History</a>
                    <a class="dropdown-item droptext" href="#" style="color:#4C3421;">Settings</a>
                    <a class="dropdown-item droptext" href="logout.php" style="color:#4C3421;">Log Out</a>
                </div>
            </span>
        </div>
        </nav>  
    </head>
    <body>
        <div class="body-bg">
            <div class="container">
                
                <div class="search input-group d-flex justify-content-start">
                <div class="col">
                        <input type="text" class="coba" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                </div>
                <div class="">
                    <a type="button" href="create-channel.php" class="btn fabtn fa fa-plus "></a>
                </div>
                </div>
                <div class="channel-category" style="margin-top: 1%;">
                    <h3>Joined Channels</h3>
                </div>
                <div class="channel-bg">
                    <div class="joinslot row d-flex justify-content-start align-items-center" >
                        <img class="joinimage" src="img\profile.jpg" >   
                        <div class="col" >
                            <span class="jointext" style="text-align:left ;">Channel 1</span>
                        </div>
                        <div class="col" >
                            <span class="joinicon fa fa-user-times d-flex justify-content-end" style="color: #DB0000;"></span>
                        </div>
                    </div>
                </div>
                <div class="channel-category" style="margin-top: 5%;">
                    <h3>Other Channels</h3>
                </div>
                <div class="channel-bg">
                    <div class="joinslot row d-flex justify-content-start align-items-center" >
                        <img class="joinimage" src="img\profile.jpg" >   
                        <div class="col" >
                            <span class="jointext" style="text-align:left ;">Channel 1</span>
                        </div>
                        <div class="col" >
                            <span class="joinicon fa fa-user-plus d-flex justify-content-end" style="color: #8899AE;"></span>
                        </div>
                    </div>
                    <div class="joinslot row d-flex justify-content-start align-items-center">
                        <img class="joinimage" src="img\profile.jpg">   
                        <div class="col" >
                            <span class="jointext" style="text-align:left ;">Channel 1</span>
                        </div>
                        <div class="col" >
                            <span class="joinicon fa fa-user-plus d-flex justify-content-end" style="color: #8899AE;"></span>
                        </div>
                    </div>
                    <div class="joinslot row d-flex justify-content-start align-items-center" >
                        <img class="joinimage" src="img\profile.jpg">   
                        <div class="col" >
                            <span class="jointext" style="text-align:left ;">Channel 1</span>
                        </div>
                        <div class="col" >
                            <span class="joinicon fa fa-user-plus d-flex justify-content-end" style="color: #8899AE;"></span>
                        </div>
                    </div>
                    <div class="joinslot row d-flex justify-content-start align-items-center" >
                        <img class="joinimage" src="img\profile.jpg">   
                        <div class="col" >
                            <span class="jointext" style="text-align:left ;">Channel 1</span>
                        </div>
                        <div class="col" >
                            <span class="joinicon fa fa-user-plus d-flex justify-content-end" style="color: #8899AE;"></span>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-dark navbar-expand fixed-bottom">
                    <div class="container">
                        <ul class="navbar-nav nav-justified w-100">
                        <li class="nav-item">
                            <a href="index.php" class="navtext nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="navtext nav-link active">Channels</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="navtext nav-link">Schedule</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="navtext nav-link">Notification</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <script src="bootstrap\js\bootstrap.min.js"></script>
    </body>
</html>