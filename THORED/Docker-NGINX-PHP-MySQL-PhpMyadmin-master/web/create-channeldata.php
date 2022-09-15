<?php
include("config.php");

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

      $mychannel = mysqli_real_escape_string($conn,$_POST['cname']);
      $mydescription = mysqli_real_escape_string($conn,$_POST['discussion']);
      $mybook = mysqli_real_escape_string($conn,$_POST['book']);
      $mygenre = mysqli_real_escape_string($conn,$_POST['genre']);
      $myrules = mysqli_real_escape_string($conn,$_POST['rules']);
      $uname = $_SESSION['username'];

      $sql2 = "SELECT userID FROM thoredUser WHERE username = '$uname'";
      $result2 = $conn->query($sql2);
      $id = mysqli_fetch_assoc($result2);
      
      $userid = $id['userID'];

      $sql = "INSERT INTO channelList (userID, channelName, channelDesc, book, genre, rules) VALUES ($userid, '$mychannel', '$mydescription', '$mybook', '$mygenre', '$myrules')";
      
      $result = $conn->query($sql);



      $sql3 = "SELECT MAX(channelID) FROM channelList";
      $result3 = $conn->query($sql3);
      $chanid = mysqli_fetch_assoc($result3);

      $valueCID = $chanid['MAX(channelID)'];

      $sql4 = "INSERT INTO channel_member (channelID, userID, status) VALUES ($valueCID, $userid, 'Host')";

      $result4 = $conn->query($sql4);
   }
?>