<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Settings</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="settings.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- As a heading -->
        <nav class="navbar fixed-top navbar-dark">
        <div class="container">
            <div class="back">
                <button href="#" class="btn fan fa fa-angle-left"></button>
            </div>
            <div class="col">
                <span class="thored navbar-brand"></span>
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
                <div class="settings-bg">
                    <div class="list-group">
                        <div class="row">
                            <h1 class="display-7"><strong>Settings</strong></h1>
                            <div class="setbtn">
                                <button type="button" class="list-group-item list-group-item-action">Application Settings</button>
                                <button type="button" class="list-group-item list-group-item-action">Account</button>
                                <button type="button" class="list-group-item list-group-item-action">Notifications</button>
                                <button type="button" class="list-group-item list-group-item-action">Language</button>
                                <button type="button" class="list-group-item list-group-item-action">Theme</button>
                                <button type="button" class="list-group-item list-group-item-action">Privacy and data</button>
                                <button type="button" class="list-group-item list-group-item-action">Security</button>
                                <button type="button" class="list-group-item list-group-item-action">Others</button>
                            </div>
                        </div>
                    </div>              
                </div>
            </div>
        </div>
        <script src="bootstrap\js\bootstrap.min.js"></script>
    </body>
</html>