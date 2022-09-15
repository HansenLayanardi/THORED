<?php
    include_once 'includes/connect.php';
?>

<!DOCTYPE html>

<head>
    <title></title>
</head>

<body>
    <?php
        $sql = "SELECT * FROM test;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['userID'];
            }
        }
    ?>
</body>


</html>
