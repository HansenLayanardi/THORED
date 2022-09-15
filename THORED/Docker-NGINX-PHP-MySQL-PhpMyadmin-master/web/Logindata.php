<?php
include("config.php");

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
      
      $sql = "SELECT * FROM thoredUser WHERE username = '$myusername' AND password = '$mypassword' ";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $firstname = $row['firstName'];
      $lastname = $row['lastName'];
      $birthdate = $row['birthDate'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        $_SESSION['username'] = $myusername;
        $_SESSION['firstName'] = $firstname;
        $_SESSION['lastName'] = $lastname;
        $_SESSION['birthDate'] = $birthdate;
         header('location:index.php');
      }else {
        $failMessage = "Username or password is incorrect";
      }
   }
?>