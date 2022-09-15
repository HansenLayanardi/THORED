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
        <title>Create Channel</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="create-channel.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- As a heading -->
        <nav class="navbar fixed-top navbar-dark">
        <div class="container">
            <div class="back">
                <button href="#" class="btn fan fa fa-angle-left"></button>
            </div>
            <div class="col">
                <span class="thored navbar-brand">Create Channels</span>
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
                <div class="isi col" style="margin-top: 1%;">
                    <input type="name" class="channel-name-input form-control" name="cname" value="" placeholder="Channel Name" required>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <div class="channel-avatar col-3">
                        <img class="image-channel d-flex" src="img\profile.jpg">
                    </div>
                    <div class="others-attribute col-9">
                        <input type="text" class="channel-attribute-input form-control" name="discussion" value="" placeholder="Discussion Description" required>
                        <input type="text" class="channel-attribute-input form-control" name="book" value="" placeholder="Book to be discussed" required>
                        <div class="wrapper">
                            <select name="genre" id="genre" class="genre-option form-control" placeholder="Choose Genre" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                                <option value="" disabled selected>Choose Genre</option>
                                <option value="Action">Action</option>
                                <option value="Adventure">Adventure</option>
                                <option value="Comedy">Comedy</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Historical">Historical</option>
                                <option value="Horror">Horror</option>
                                <option value="Mystery">Mystery</option>
                                <option value="Psychological">Psychological</option>
                                <option value="Romance">Romance</option>
                                <option value="Sci fi">Sci fi</option>
                                <option value="Slice of life">Slice of life</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="for-rules">
                            <textarea type="text" class="channel-rules form-control" name="rules" id="ai" placeholder="Rules" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <input class="btn-create" id="submit-btn" type="submit" name="submit" value="Create">
            </form>
                
                <nav class="navbar navbar-dark navbar-expand fixed-bottom">
                    <div class="container">
                        <ul class="navbar-nav nav-justified w-100">
                        <li class="nav-item">
                            <a href="index.php" class="navtext nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="channel.php" class="navtext nav-link active">Channels</a>
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