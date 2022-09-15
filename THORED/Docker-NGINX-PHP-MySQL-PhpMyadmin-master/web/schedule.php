<?php
include("create-channeldata.php");
session_start();
$uname = $_SESSION['username'];
$fname = $_SESSION['firstName'];
$lname = $_SESSION['lastName'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Schedule</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="schedule.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- As a heading -->
        <nav class="navbar fixed-top navbar-dark">
        <div class="container">
            <div class="col">
                <span class="thored navbar-brand">Schedule</span>
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
                    <a class="dropdown-item droptext" href="profile.php" style="color:#4C3421;">Edit Profile</a>
                    <a class="dropdown-item droptext" href="history.php" style="color:#4C3421;">History</a>
                    <a class="dropdown-item droptext" href="settings.php" style="color:#4C3421;">Settings</a>
                    <a class="dropdown-item droptext" href="logout.php" style="color:#4C3421;">Log Out</a>
                </div>
            </span>
        </div>
        </nav>  
    </head>
    <body>
        <div class="body-bg">
            <div class="container">
            <form class="form-horizontal" method="POST" action="">
                <div class="schedule-bg">
                    <div class="schedule-list row d-flex justify-content-start align-items-stretch" >
                        <div class="col" >
                            <button type="button" class="btn-close pull-right" aria-label="Close"></button>
                        </div>
                        <div class="row" >
                            <div class="col">
                                <h6 class="float-start">Lores Discussion</h6>
                                <br>
                                <label class="float-start">channel name</label>

                            </div>
                            <div class="col">
                                <label class="float-end">05/11/21</label>
                                <br>
                                <label class="float-end">14:00</label>           
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </form>
                
                <nav class="navbar navbar-dark navbar-expand fixed-bottom">
                    <div class="container">
                        <ul class="navbar-nav nav-justified w-100">
                        <li class="nav-item">
                            <a href="index.php" class="navtext nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="channel.php" class="navtext nav-link">Channels</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="navtext nav-link active">Schedule</a>
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