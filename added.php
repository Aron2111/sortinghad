<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>added</title>
</head>
<body>
    <div class="content">

    
    <?php
    $first_name =  $_REQUEST['Firstname'];
    $age = $_REQUEST['Age'];
    $gender =  $_REQUEST['Gender'];
    $name = $_REQUEST['Name'];

    include "conn.php";

    $sql="INSERT INTO persoon VALUES('$first_name','$name','$gender','$age','0','0','0','0')";
    $result = mysqli_query($conn, $sql);


    if(mysqli_query($conn, $sql)){
        echo "<h2>Profile added to databse!!</h2>";
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
            . mysqli_error($conn);
    }
    $conn -> close();
    ?>
    <a class="button" href="selection.php">Put people in houses</a>
    </div>
</body>
</html>
