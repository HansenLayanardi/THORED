<?php
session_start();
$uname = $_SESSION['username'];
$fname = $_SESSION['firstName'];
$lname = $_SESSION['lastName'];
?>
<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="index.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <!-- As a heading -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <span class="mb-0">THORED</span>
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
                    <a class="dropdown-item droptext" href="profile.php" style="color:#4C3421;">Profile</a>
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
        <div class="slides">
            <div id="carouselDark" class="container carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active flex-column  " data-bs-interval="10000">
                <img src="img\slide.jpg" class="carousel-image d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item flex-column" data-bs-interval="2000">
                <img src="img\slide.jpg" class="carousel-image d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item flex-column">
                <img src="img\slide.jpg" class="carousel-image d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
            </div>
            <div class="recommendation container">
                <h2>Recommendations</h2>
            </div>
            <div class="container kartu">
            <div class="row g-0">
            <div class="col">
                <div class="card mx-auto" >
                <img src="img\potrait.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Channel 1</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto" >
                <img src="img\potrait.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Channel 2</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto" >
                <img src="img\potrait.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Channel 3</p>
                    </div>
                </div>
            </div>
            </div>
            </div>
        <div class="recommendation container">
            <h2>Calendar</h2>
        </div>

        <div class="container">
            <div class="calendar mx-auto">
            <h2 class="bulan mx-auto">November</h2>
            <table class="kalender mx-auto">
            <thead>
                <tr>
                <td>Mo</td>
                <td>Tu</td>
                <td>We</td>
                <td>Th</td>
                <td>Fr</td>
                <td>Sa</td>
                <td>Su</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="prev-month">26</td>
                <td class="prev-month">27</td>
                <td class="prev-month">28</td>
                <td class="prev-month">29</td>
                <td class="prev-month">30</td>
                <td class="prev-month">31</td>
                <td>1</td>
                </tr>
                <tr>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                </tr>
                <tr>
                <td>9</td>
                <td class="event">10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
                </tr>
                <tr>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td class="event">21</td>
                <td>22</td>
                </tr>
                <tr>
                <td class="current-day event">23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                </tr>
                <tr>
                <td>30</td>
                <td class="next-month">1</td>
                <td class="next-month">2</td>
                <td class="next-month">3</td>
                <td class="next-month">4</td>
                <td class="next-month">5</td>
                <td class="next-month">6</td>
                </tr>
            </tbody>
            </table>
        </div> <!-- end calendar -->
        </div>

        <nav class="navbar navbar-dark navbar-expand fixed-bottom">
            <div class="container">
                <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="#" class="navtext nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="channel.php" class="navtext nav-link">Channels</a>
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
        
        <script src="bootstrap\js\bootstrap.min.js"></script>
    </body>
    <!-- Footer -->
    <footer>
    <div class="ft-bg">
        <div class="cnt container">
            <div class="row">
                <div class="col">
                    <h2 class="title-contact">CONTACT US</h2>
                    <h4 class="contact-us bi-telephone">   0812345678910</h4>
                    <h4 class="contact-us bi-envelope">   togetherweread@gmail.com</h4>
                    <h4 class="contact-us bi-building">   Baker Street 3 New York, NY 10016</h4>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <h4 class="sosmed bi-facebook" ></h4>
                        </div>
                        <div class="col">
                            <h4 class="sosmed bi-instagram" ></h4>
                        </div>
                        <div class="col">
                            <h4 class="sosmed bi-twitter" ></h4>
                        </div>
                        
                    </div>
                    <div class="copyright row">
                        <span class="copyrightfont">copyright@2021</span>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </footer>
    <!-- Footer -->
</html>