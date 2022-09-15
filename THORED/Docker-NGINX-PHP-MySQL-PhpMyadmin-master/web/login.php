<?php
include("Logindata.php");
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="login.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
        <!---Nav Bar-->
        <nav class="navbar fixed-top navbar-dark">
            <div class="container justify-content-center">
                <h1>THORED</h1>
            </div>
        </nav>  
    </head>
    <body>
        <div class="body-bg">
            <div class="pad">
                <div class="container d-flex justify-content-center align-items-center">
                <div class="row">
                    <div class="text isi">  
                        <h4>Welcome Back</h4>
                    </div>
                    <div class="col ">
                        <form class="form-horizontal" method="POST" action="#">
                            <div class="isi col">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="bg-white form-control icon-border">
                                            <i class="fa fa-user mb-1 mt-1" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <input type="username" class="form-control" name="uname" value="" placeholder="Username" required>
                                </div>   
                            </div>
                            <div class="isi col">
                                <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="divbtn isi col">
                                <input class="btn "id="submit-btn" type="submit" name="submit" value="Log-in" />
                                <div class="container d-flex justify-content-center align-items-center mb-2 mt-2" style="color:red"><?=$failMessage?></div>
                                <div class="container d-flex justify-content-center align-items-center mb-2 mt-2">
                                    Don't have an account ?
                                    <a href="sign-up.php" class="lButton"> Sign-Up</a>
                                </div>  
                                <div class="container d-flex justify-content-center align-items-center mb-2 mt-2">
                                    <a href="forgotPassword.html" class="lButton">Forget your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
    <script>
            $(".toggle-password").click(function() {

                $(this).toggleClass("fa-eye fa-eye-slash");
                var input = $($(this).attr("toggle"));
                if (input.attr("type") == "password") {
                input.attr("type", "text");
                } else {
                input.attr("type", "password");
                }
            });

    </script>
</html>