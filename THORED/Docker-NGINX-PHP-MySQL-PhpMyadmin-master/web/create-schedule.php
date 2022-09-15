<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Schedule</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <link href="create-schedule.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

        <!---Nav Bar-->
        <nav class="navbar fixed-top navbar-dark">
        <div class="container">
            <div class="back">
                <button href="#" class="btn fan fa fa-angle-left"></button>
            </div>
            <div class="col">
                <span class="thored navbar-brand">Create Schedule</span>
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
            <div class = "container">
            <form class="form-horizontal" method="POST" action="">
                <div class="schedule-list row d-flex justify-content-start" >
                <input type="date" class="schedule-attribute-input form-control" name="birthDate" value="" placeholder="yyyy-mm-dd" required>
                    <input type="text" class="schedule-attribute-input form-control" name="schedule-title" value="" placeholder="Schedule Title" required>
                    <textarea type="text" class="schedule-rules form-control" id="ai" placeholder="Description" rows="4"></textarea>
                    <input type="time" class="schedule-attribute-input form-control" name="schedule-time" value="" placeholder="Time" required>
                    <input type="text" class="schedule-attribute-input form-control" name="schedule-platform" value="" placeholder="URL Platform" required>
                    <input class="btn-create" id="submit-btn" type="submit" name="submit" value="Create Schedule!">
                </div>
                
            </form>

                <nav class="navbar navbar-dark navbar-expand fixed-bottom">
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
                </nav>
            </div>
        </div>
        <script src="bootstrap\js\bootstrap.min.js"></script>
    </body>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
    
</html>