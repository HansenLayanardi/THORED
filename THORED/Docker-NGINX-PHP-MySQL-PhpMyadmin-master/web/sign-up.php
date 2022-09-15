<?php
include("config.php");

// initializing variables
$errors = array(); 

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $uname = mysqli_real_escape_string($conn, $_POST['username']);
  $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
  $birthdate = mysqli_real_escape_string($conn, $_POST['birthDate']);
  $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
  $pword = mysqli_real_escape_string($conn, $_POST['password']);

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM thoredUser WHERE username='$uname' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $uname) {
      array_push($errors, "Username already exists");
      $unamewarning = "Username is already in use";
      $invalidUserState = true;
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
      $emailwarning = "E-mail is already in use";
      $invalidEmailState = true;
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$query = "INSERT INTO thoredUser (email, username, firstName, lastName, birthDate, occupation, password) 
  			  VALUES('$email', '$uname', '$firstname', '$lastname', '$birthdate', '$occupation', '$pword')";
  	mysqli_query($conn, $query);
  	header('location: login.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Introduction</title>
        <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome\font-awesome-4.7.0\css\font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="sign-up.css" rel="stylesheet">
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
                        <h4>Let's get started</h4>
                    </div>
                    <div class="col ">
                        <form class="form-horizontal" method="post" action="">
                            <div class="isi col">
                                <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
                            </div>
                            <div class="container d-flex justify-content-center align-items-center mb-2 mt-2" style="color:red"><?=$emailwarning?></div>
                            <div class="isi col">
                                <input type="username" class="form-control" name="username" value="" placeholder="Username" required>
                            </div>
                            <div class="container d-flex justify-content-center align-items-center mb-2 mt-2" style="color:red"><?=$unamewarning?></div>
                            <div class="isi col">
                                <input type="firstname" class="form-control" name="firstName" value="" placeholder="First Name" required>
                            </div>
                            <div class="isi col">
                                <input type="lastname" class="form-control" name="lastName" value="" placeholder="Last Name" required>
                            </div>
                            <div class="isi col">
                                    <input type="date" class="form-control" name="birthDate" value="" placeholder="yyyy-mm-dd" required>
                            </div>
                            <div class="isi col">
                                <input type="occupation" class="form-control" name="occupation" value="" placeholder="Occupation" required>
                            </div>
                            <div class="isi col">
                                <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Password" required>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="isi col form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    I agree to the THORED's <a href="#" class="signup">Terms of Service & Privacy Policy</a>
                                </label>
                            </div>
                            <div class="divbtn isi col">
                                <input class="btn "id="submit-btn" type="submit" name="submit" value="Sign-Up" />  
                                <div class="login">
                                    <a>Already have an account?</a>
                                    <a href="login.php" class="signup">Log in here!</a>
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